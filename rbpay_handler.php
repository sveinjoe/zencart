<?php 
require('includes/application_top.php');
if ( isset($_POST["orders_code"]) && $_POST["orders_code"]!="" )
{
	$orders_temp = trim($_POST["orders_code"]);
	$orders_status=trim($_POST["orders_status"]);
	if($orders_status=="failture")
	{
		$orders_status_id=MODULE_PAYMENT_RBPAY_ORDER_FAIL_STATUS_ID;
	}
	elseif($orders_status=="success")
	{
		$orders_status_id=MODULE_PAYMENT_RBPAY_ORDER_SUCCESS_STATUS_ID;
	}
	else
	{
		$orders_status_id=MODULE_PAYMENT_RBPAY_ORDER_STATUS_ID;
	}
		$sql_data_array = array (
				'orders_id' => $orders_temp,
				'orders_status_id' => $orders_status_id,
				'date_added' => 'now()',
				'customer_notified' => '1',
				'comments' => "" 
		);
	
		zen_db_perform ( TABLE_ORDERS_STATUS_HISTORY, $sql_data_array );
				// �޸Ķ�����״̬��
		$sql = "UPDATE " . TABLE_ORDERS . " SET orders_status = ". (int) $sql_data_array['orders_status_id']." " . " WHERE orders_id = '" . $orders_temp ."'";
		$db->Execute ( $sql );
		if($orders_status=="success")
		{
			$order_id = $orders_temp;
			require(DIR_WS_CLASSES . 'order.php');
			$order = new order( $order_id );
			require(DIR_WS_CLASSES . 'order_total.php');
			$order_total_modules = new order_total;
			$order_totals = $order_total_modules->process();
		
			//$order->send_order_email($order_id, 2);
			$_SESSION ['cart']->reset(true);
		}
		
	
}