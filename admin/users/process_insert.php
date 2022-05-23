<?php
require '../control.php';
$name=$_POST['name'];
$phone_number=$_POST['phone'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$date=$_POST['date'];
$email=$_POST['email'];
$password=$_POST['password'];
$level=$_POST['level'];
$result=(new data())->create_user($name,$phone_number,$gender,$address,$date,$email,$password,$level);

header('location:index.php');