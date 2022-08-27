<?php
session_start();
require 'check_login.php';
// unset($_SESSION['cart']);
$id = $_GET['id'];

if(empty($_SESSION['cart'][$id])){
	require_once '../admin/control.php';
	$result =(new data)->find_products($id);
	$each = mysqli_fetch_array($result);
	$_SESSION['cart'][$id]['name'] = $each['name'];
	$_SESSION['cart'][$id]['image'] = $each['image'];
	$_SESSION['cart'][$id]['price'] = $each['price'];
	$_SESSION['cart'][$id]['price_sale'] = $each['price_sale'];
	$_SESSION['cart'][$id]['quantity'] = 1;
} else {
	$_SESSION['cart'][$id]['quantity']++;
}

$_SESSION['success']="Thêm vào giỏ hàng thành công";

header('location:/cart.php');