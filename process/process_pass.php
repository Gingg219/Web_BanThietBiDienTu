<?php 
$pass = $_POST['password'];
$new_pass = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];
if($new_pass!=$confirm_password){
    header('location:password_control.php?error=Change password failed');
    exit;
}
session_start();
$id=$_SESSION['id'];

require 'admin/control.php';
$sql = "select * from customers
where id = '$id' and password = '$pass'";
$result = mysqli_query($conn,$sql);
$number_rows= mysqli_num_rows($result);
if($number_rows == 1){
	$sql = "update customers set
    password = '$new_pass' where id = '$id'";
    mysqli_query($conn,$sql);
    header('location:password_control.php?success=Change password successfully');
    exit;
}

header('location:/password_control.php?error=Change password failed');