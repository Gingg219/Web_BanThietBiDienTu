<?php 

$name_receiver = $_POST['name'];
$phone_receiver = $_POST['phone'];
$address_receiver = $_POST['address'];

require '../admin/control.php';
session_start();

$cart = $_SESSION['cart'];

$total_price = 0;
foreach($cart as $each){
	$total_price += $each['quantity'] * $each['price_sale'];
}
$customer_id = $_SESSION['id'];
$status = 0;

$sql = "insert into orders(id_customer, receiver_name, receiver_phone, receiver_address, total_current, status)
values ('$customer_id', '$name_receiver', '$phone_receiver', '$address_receiver', '$total_price', '$status')";
mysqli_query($conn,$sql);

$sql = "select max(id) from orders where id_customer = '$customer_id'";
$result = mysqli_query($conn,$sql);
$order_id = mysqli_fetch_array($result)['max(id)'];

foreach($cart as $product_id => $each){
	$quantity = $each['quantity'];
	$sql = "insert into order_product(id_order, id_product, quantity)
	values('$order_id', '$product_id', '$quantity')";
	mysqli_query($conn,$sql);
}
mysqli_close($conn);
unset($_SESSION['cart']);

$_SESSION['success'] = "Đặt hàng thành công";

header('location:../order_info.php');