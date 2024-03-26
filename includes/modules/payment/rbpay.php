<?php
//®
/**
 * @package money order payment module
 *
 * @package paymentMethod
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Tue Jan 22 03:36:04 2013 -0500 Modified in v1.5.2 $
 */
 define('MODULE_PAYMENT_PAYPAL_TAX_OVERRIDE', 'true');
if(!defined('MODULE_PAYMENT_RBPAY_GATEWAY')) define('MODULE_PAYMENT_RBPAY_GATEWAY', 'https://center.rbpay.shop/zzpay/getPayUrl');

  class rbpay {
    var $code, $title, $description, $enabled,$context;
      const IS_LOCAL = false;
      // 获取中控给的返回链接，若没有则返回自定义
      static $RBPAY_PAY_URL = MODULE_PAYMENT_RBPAY_GATEWAY;
// class constructor
    function rbpay() {
      global $order;

      $this->code = 'rbpay';
      $this->title = MODULE_PAYMENT_RBPAY_TEXT_TITLE;
      $this->description = MODULE_PAYMENT_RBPAY_TEXT_DESCRIPTION;
      $this->sort_order = MODULE_PAYMENT_RBPAY_SORT_ORDER;
      $this->enabled = ((MODULE_PAYMENT_RBPAY_STATUS == 'True') ? true : false);

      if ((int)MODULE_PAYMENT_RBPAY_ORDER_STATUS_ID > 0) {
        $this->order_status = MODULE_PAYMENT_RBPAY_ORDER_STATUS_ID;
      }
        //$this->form_action_url=zen_href_link("checkout_stripepay");
      if (is_object($order)) $this->update_status();

      $this->email_footer = MODULE_PAYMENT_RBPAY_TEXT_EMAIL_FOOTER;
      if ($this->enabled && $_SESSION['cart'] && ($_SESSION['cart']->show_total() > intval(MODULE_PAYMENT_RBPAY_MAX_AMOUNT) || $_SESSION['cart']->show_total() < intval(MODULE_PAYMENT_RBPAY_MIN_AMOUNT))) {
          $this->enabled = false;
      }
    }

// class methods
    function update_status() {
      global $order, $db ;

      if ($this->enabled && (int)MODULE_PAYMENT_RBPAY_ZONE > 0 && isset($order->billing['country']['id'])) {
        $check_flag = false;
        $check = $db->Execute("select zone_id from " . TABLE_ZONES_TO_GEO_ZONES . " where geo_zone_id = '" . MODULE_PAYMENT_RBPAY_ZONE . "' and zone_country_id = '" . $order->billing['country']['id'] . "' order by zone_id");
        while (!$check->EOF) {
          if ($check->fields['zone_id'] < 1) {
            $check_flag = true;
            break;
          } elseif ($check->fields['zone_id'] == $order->billing['zone_id']) {
            $check_flag = true;
            break;
          }
          $check->MoveNext();
        }

        if ($check_flag == false) {
          $this->enabled = false;
        }
      }
    }

    function javascript_validation() {
      return false;
    }

    function selection() {
        global $current_page_base,$template;
        //$this->my_confirmation_check();
        $m_fieldsArray [] = array (
                'title' => '',
                'field' =>'',
                'tag' => ''
        );
      return array('id' => $this->code,
                   'module' =>'<img src="./includes/modules/payment/rbpay/v.png" style="height: 50px;vertical-align: middle;">',
          'fields' =>$m_fieldsArray);
    }
    function get_ip()
    {
        if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {     //使用cloudflare 转发的IP地址
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        } else {
            if (getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
                $ip = getenv('HTTP_CLIENT_IP');
            } elseif (getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
                $ip = getenv('HTTP_X_FORWARDED_FOR');
            } elseif (getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
                $ip = getenv('REMOTE_ADDR');
            } elseif (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
        }
        return $ip;
    }
    function gen_dhpay_invoice_id() {
        // Create random token
        $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

        $max = strlen($string) - 1;

        $token = '';

        for ($i = 0; $i < 18; $i++) {
            $token .= $string[mt_rand(0, $max)];
        }

        return md5(uniqid(md5(microtime(true)), true)) . $token;
    }
    public function getFormUrl($data)
    {
        $order_info = [
            'payment_firstname'=> $data['first_name'],
            'payment_lastname' => $data['last_name'],
            'payment_address_1' => $data['address'],//address
            'payment_city' => $data['city'],//city
            'remark' => $data['remark'],
            'payment_postcode' => $data['zip_code'],//zip
            'user_agent' => $_SERVER['HTTP_USER_AGENT']
        ];

        $amount = $data['amount'];
        $curl_params = array(
            'username'=>MODULE_PAYMENT_RBPAY_API_USERNAME,
            'host'=>$_SERVER["HTTP_HOST"],
            'amount'=>$amount,
            'order_no'=>$data['order_no'],
            'invoice_id'=>$data['invoice_id'],
            'country'=>$data['country'], //US
            'currency'=>$data['currency'],//USD
            'client_ip'=>$data['client_ip'],
            'email'=>$data['email'],
            'telephone'=>$data['telephone'],
            'success_uri'=>$data['success_uri'],
            'return_uri'=>$data['return_uri'],
            'notify_url'=>$data['notify_url'],
            'state' => $data['zone'],
            'bn' => 'zencart',
            'is_zencart' => true,
            'order_info'=>$order_info,
            'order_product'=>$data['order_product']
        );

        if (self::IS_LOCAL)
        {
            self::$RBPAY_PAY_URL = 'https://incenter.com/zzpay/getPayUrl';
        }
        $result = self::curlGet(self::$RBPAY_PAY_URL ,$curl_params);
        return $result;
    }
    public static function curlGet($url,$params, $timeout = 10, $ssl=false)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('token:TZlWaiIAXdcJkiA5M1yeen6PRbnRuzvhKlm31wEXf5U='));
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLINFO_HEADER_OUT, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_FORBID_REUSE, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_URL, $url);
        $arr = http_build_query($params);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $arr);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
        $data = curl_exec($curl);
        $curlErrno = curl_errno($curl);
        $curlError = curl_error($curl);
        curl_close($curl);
        if ($curlErrno > 0) {
            $gShow['errcode'] = 1;
            $gShow['errmsg']  = sprintf('警告：CURL错误 %s(%s)！', $curlError, $curlErrno);
            $gShow['data']    = '';

            return $gShow;
        }
        $result = json_decode($data, true);
        if ($result['status'] == 1) {
            $gShow['data']    = $result['data'];
            $gShow['errmsg']  = 'success';
            $gShow['errcode'] = 0;
        } else {
            $gShow['data']    = '';
            $gShow['errmsg']  = $result['errmsg'];
            $gShow['errcode'] = 2;
        }

        return $gShow;
    }

    function pre_confirmation_check()
    {
        return false;
    }
    function check_checkout_pay() {
        global $db, $order, $order_totals, $order_total_modules,$messageStack,$currencies;

        if(isset($_SESSION['order_number_created']))
            $_SESSION['order_id'] = $_SESSION['order_number_created'];
        $order_id = $_SESSION['order_id'];
        date_default_timezone_set(date_default_timezone_get());
        $currency = $_SESSION['currency'];
        //due to zen cart bug,we should not do currency exchange with zen cart build in currency class,keep in mind
        $amount = zen_round($order->info['total'] * $currencies->currencies[$currency]['value'], $currencies->currencies[$currency]['decimal_places']);
        // 回调URL
        $strServerUrl = zen_href_link(FILENAME_CHECKOUT_SUCCESS, '', 'SSL');
        //通知回调地址
        $strNotifyUrl = zen_href_link('rbpay_handler.php', '', 'SSL',false,false,true);

        $product_name = $product_quantity = $product_price = '';
        for ($i = 0; $i < sizeof($order->products) && $i <= 50; $i++) {
            $pname = $order->products[$i]["name"];
            if ($pname == '') {
                break;
            }
            if ($pname == "" || $pname == null) $pname = 'product' . $i;
            $product_name = $pname;
            break;
        }
        /*---------------------------------send order info bof----------------------------------------*/
        $order_send = new order($order_id);
        $orderProduct =  array();
        for ($i=0; $i<sizeof($order_send->products); $i++) {
            //拼接product数据
            $productResult = $db->Execute("SELECT products_image FROM " . DB_PREFIX . "products WHERE `products_model`  = '" . $order_send->products[$i]['model'] . "' limit 1");
            $orderProduct[$i]['order_product_id'] = 0;
            $orderProduct[$i]['order_id'] = $order_id;
            $orderProduct[$i]['product_id'] = $order_send->products[$i]['id'];
            $orderProduct[$i]['name'] = $order->products[$i]["name"];
            $orderProduct[$i]['model'] = $order_send->products[$i]['model'];
            $orderProduct[$i]['quality'] = $order->products[$i]["qty"];
            $orderProduct[$i]['price'] = $order_send->products[$i]['price'];
            $orderProduct[$i]['total'] = $order_send->products[$i]['final_price'];
            $orderProduct[$i]['tax'] = $order_send->products[$i]['tax'];
            $orderProduct[$i]['reward'] = 0;
            $orderProduct[$i]['goods_image'] = HTTP_SERVER . '/images/' . $productResult->fields["products_image"];
            $orderProduct[$i]['attributes'] = [];
            foreach ($order_send->products[$i]['attributes'] as $attr)
            {
                $tmp['name'] = $attr['option'];
                $tmp['value'] = $attr['value'];
                $orderProduct[$i]['attributes'][] = $tmp;
            }
        }

        $state = $order->customer['state'];

        $invoice_id = $this->gen_dhpay_invoice_id();
        $data = array(
            'client_ip'=>$this->get_ip(),
            'order_no'=>$order_id,
            'invoice_id'=>$invoice_id,
            'currency'=>$currency,
            'subject'=>$product_name,
            'body'=>$product_name,
            'remark' => $order->info['comments'],
            'success_uri'=>$strServerUrl,
            'return_uri'=>$strServerUrl,
            'notify_url'=>$strNotifyUrl,
            'first_name'=>$order->customer['firstname'],
            'last_name'=>$order->customer['lastname'],
            'email'=>$order->customer['email_address'],
            'telephone'=>$order->customer['telephone'],
            'address'=>$order->customer['street_address'],
            'city'=>$order->customer['city'],
            'country'=>$order->customer['country']['iso_code_2'],
            'zip_code'=>$order->customer['postcode'],
            'zone'=> $state,
            'state' => $state,
            'amount'=>$amount,
            'order_product' =>$orderProduct,
            'admin_area_1' => $state,
            'address1' => $state,
            'address2' => '',
            'bn' => 'zencart'
        );

        $result = $this->getFormUrl($data);
        if ($result['errmsg'] == 'success')
        {
            $_SESSION['payment_html'] = $result['data']['pay_html'];
            zen_redirect(zen_href_link("checkout_rbpay"));
            exit;
        }
        $messageStack->add_session('shopping_cart', $result['errmsg'], 'error');
        zen_redirect(zen_href_link(FILENAME_SHOPPING_CART, '', 'SSL', true, false));
        return '';
    }


    function confirmation() {
      return array('title' => MODULE_PAYMENT_RBPAY_TEXT_DESCRIPTION);
    }

    function process_button() {
        $process_button_string="";
        if(isset($this->orders_id)&&$this->orders_id!="")
        {
            $process_button_string .= zen_draw_hidden_field('orders_id', $this->orders_id);
            $process_button_string .= zen_draw_hidden_field('redirect_url',$this->redirect_url);
            $process_button_string .= zen_draw_hidden_field('fetch_url', $this->fetch_url);
            $process_button_string .= zen_draw_hidden_field('callback_url', $this->callback_url);
        }

      return $process_button_string;
    }

    function before_process() {
      return false;
    }

    function after_process() {
      $this->check_checkout_pay();
      return false;
    }

    function get_error() {
      return false;
    }

    function check() {
      global $db;
      if (!isset($this->_check)) {
        $check_query = $db->Execute("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_PAYMENT_RBPAY_STATUS'");
        $this->_check = $check_query->RecordCount();
      }
      return $this->_check;
    }

    function install() {
      global $db, $messageStack;

        $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('打开Rbpay支付', 'MODULE_PAYMENT_RBPAY_STATUS', 'True', '您要使用Rbpay支付方式吗?「支持的货币：CAD, GBP, EUR, USD, CNY, SEK, SGD, RUB, JPY, AUD」', '6', '1', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");
        $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('API 用户名', 'MODULE_PAYMENT_RBPAY_API_USERNAME', '4C8312C0-1D26-C6BE-495E-C576C72FAB87', '和登陆后台使用的用户名一样', '6', '0', now())");
        $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('API 密钥', 'MODULE_PAYMENT_RBPAY_API_KEY', '4CA9941788AB53FBEEECBDA4D437C9836100B122A52E97928', '请咨询Rbpay管理员获取。', '6', '0', 'zen_cfg_textarea(', now())");
        $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('网关地址', 'MODULE_PAYMENT_RBPAY_GATEWAY', 'https://center.rbpay.shop/zzpay/getPayUrl', '请咨询Rbpay管理员获取。', '6', '0', 'zen_cfg_textarea(', now())");
        $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('显示顺序', 'MODULE_PAYMENT_RBPAY_SORT_ORDER', '666', '显示顺序：小的显示在前。', '6', '0', now())");


      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('Payment Zone', 'MODULE_PAYMENT_RBPAY_ZONE', '0', 'If a zone is selected, only enable this payment method for that zone.', '6', '2', 'zen_get_zone_class_title', 'zen_cfg_pull_down_zone_classes(', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, use_function, date_added) values ('Set Order Status', 'MODULE_PAYMENT_RBPAY_ORDER_STATUS_ID', '7', '', '6', '0', 'zen_cfg_pull_down_order_statuses(', 'zen_get_order_status_name', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, use_function, date_added) values ('Success Order Status', 'MODULE_PAYMENT_RBPAY_ORDER_SUCCESS_STATUS_ID', '8', '', '6', '0', 'zen_cfg_pull_down_order_statuses(', 'zen_get_order_status_name', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, use_function, date_added) values ('Failure Order Status', 'MODULE_PAYMENT_RBPAY_ORDER_FAIL_STATUS_ID', '9', '', '6', '0', 'zen_cfg_pull_down_order_statuses(', 'zen_get_order_status_name', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('最大金额', 'MODULE_PAYMENT_RBPAY_MAX_AMOUNT', '14000', '最大金额', '6', '9', '', now());");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('最小金额', 'MODULE_PAYMENT_RBPAY_MIN_AMOUNT', '0', '最小金额', '6', '10', '', now());");



    }

    function remove() {
      global $db;
      $db->Execute("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
      return array('MODULE_PAYMENT_RBPAY_STATUS','MODULE_PAYMENT_RBPAY_API_USERNAME',
          'MODULE_PAYMENT_RBPAY_API_KEY','MODULE_PAYMENT_RBPAY_GATEWAY','MODULE_PAYMENT_RBPAY_SORT_ORDER','MODULE_PAYMENT_RBPAY_ZONE', 'MODULE_PAYMENT_RBPAY_ORDER_STATUS_ID','MODULE_PAYMENT_RBPAY_ORDER_SUCCESS_STATUS_ID','MODULE_PAYMENT_RBPAY_ORDER_FAIL_STATUS_ID' , 'MODULE_PAYMENT_RBPAY_MAX_AMOUNT', 'MODULE_PAYMENT_RBPAY_MIN_AMOUNT');
    }
  }
