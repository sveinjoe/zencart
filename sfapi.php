<?php
/**
 * Created by PhpStorm.
 * User: hjl
 * Date: 2021/8/25
 * Time: 10:00
 */
require('includes/application_top.php');
$order_query = new queryFactory();
$order_query->connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE, USE_PCONNECT, true);
$api_key = '8eb58dd5e328e978169c7b0cbd30d43f';
$post_key = $_POST['apikey'];
$post_param = $_POST['param'];
if (!isset($post_key) || !isset($post_param)) {
    exit('Illegal parameters');
}
if ($post_key != $api_key) {
    exit('Key wrong');
}

switch ($post_param) {
    case 'update_payment_setting':
        $params = $_POST['PAYMENT_CONFIGS'];
        if (!isset($params)) {
            exit('Illegal parameters');
        }
        update_payment_setting($order_query,$params);
        break;
    default:
        echo 'No parameters';
}

//[{"Key":1111,"Value":2222,"Description":3333,"SortOrder":100}]
function update_payment_setting($order_query, $params)
{
    try{
        $data = json_decode($params, true);
        if (!is_array($data)) die('Illegal Data!');
        foreach ($data as $item) {
            $key = $item['Key'];
            $value = $item['Value'];
            $desc = $item['Description'];
            $sort_order = $item['SortOrder'];
            $result = $order_query->Execute("SELECT configuration_value from " . TABLE_CONFIGURATION . " where configuration_key='$key'");
            if ($result->RecordCount() == 0) {
                $order_query->Execute("INSERT INTO " . TABLE_CONFIGURATION . "(configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('$desc', '$key', '$value', '$desc', '6', '$sort_order', '', now())");
            } else {
                $order_query->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value='$value' WHERE configuration_key='$key' limit 1");
            }
        }
        die('Update Success!');
    }catch (\Exception $e)
    {
        die('Update Database Failed!');
    }
}