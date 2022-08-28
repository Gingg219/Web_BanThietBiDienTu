<?php 
session_start();
$customer_id = $_SESSION['id'];

require_once'admin/control.php';
$id_order=$_GET['id'];

$sql="SELECT * from orders where id='$id_order'";
$result = mysqli_query($conn,$sql);
$each=mysqli_fetch_array($result);

    $name_receiver    =  $each['receiver_name'];
    $phone_receiver   =  $each['receiver_phone'];
    $address_receiver =  $each['receiver_address'];
    $total_price      =  $each['total_current'];
    $status = 0;
$sql = "insert into orders(id_customer, receiver_name, receiver_phone, receiver_address, total_current, status)
values ('$customer_id', '$name_receiver', '$phone_receiver', '$address_receiver', '$total_price', '$status')";
mysqli_query($conn,$sql);

$sql = "select max(id) from orders where id_customer = '$customer_id'";
$result = mysqli_query($conn,$sql);
$order_id = mysqli_fetch_array($result)['max(id)'];

$sql="SELECT * from order_product where id_order='$id_order'";
$result = mysqli_query($conn,$sql);
foreach($result as $each){
	$quantity = $each['quantity'];
	$product_id = $each['id_product'];
	$sql = "insert into order_product(id_order, id_product, quantity)
	values('$order_id', '$product_id', '$quantity')";
	mysqli_query($conn,$sql);
}
mysqli_close($conn);

header('location:order_info.php?success=Đặt lại hàng thành công.');