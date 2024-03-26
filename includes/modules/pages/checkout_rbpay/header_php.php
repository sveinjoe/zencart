<?php
/**
 * checkout_payresult header_php.php
 *
 * @package page
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 */

if (isset($_SESSION['payment_html']) && !empty($_SESSION['payment_html']))
{
    $paymentHtml = $_SESSION['payment_html'];
}
 $breadcrumb->add("Checkout Rbpay");
?>