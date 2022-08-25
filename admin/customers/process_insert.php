<?php
require '../control.php';
$name=$_POST['name'];
$phone_number=$_POST['phone'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$date=$_POST['date'];
$email=$_POST['email'];
$password=$_POST['password'];
$result=(new data())->create_cus($name,$phone_number,$gender,$address,$date,$email,$password);
header('location:index.php?success=Add successful');