<?php
require '../control.php';
$id=$_POST['id'];
$name=$_POST['name'];
$phone_number=$_POST['phone'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$date=$_POST['date'];
$email=$_POST['email'];
$password=$_POST['password'];
$result=(new data())->store_cus($id,$name,$phone_number,$gender,$address,$date,$email,$password);
header('location:index.php?success=Update successful');