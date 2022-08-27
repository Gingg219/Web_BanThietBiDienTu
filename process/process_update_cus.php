<?php
require '../admin/control.php';
session_start();

$id=$_SESSION['id'];
$name=$_POST['name'];
$phone_number=$_POST['phone_number'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$date=$_POST['date'];
$email=$_POST['email'];
$result=(new data())->store_cus_client($id,$name,$phone_number,$gender,$address,$date,$email);

header('location:../user_info.php?success=Cập nhật thành công');