<?php 
require_once '../admin/control.php';
// if(empty($_POST['name']) || empty($_POST['add']) || empty($_POST['email']
//     )|| empty($_POST['pass1'])|| empty($_POST['gender'])|| empty($_POST['date']) ){
//         header('location:form_insert.php?error=Must be filled in completely');
//         exit();
//     }
$name =addslashes($_POST['name']);
$email =addslashes($_POST['email']);
$password =addslashes($_POST['password_confirmation']);
$phone_number =addslashes($_POST['phone']);
$address =addslashes( $_POST['address']);
$date=addslashes($_POST['date']);
$gender=addslashes($_POST['gender']);

$sql = "select count(*) from customers
where email = '$email'";
$result = mysqli_query($conn,$sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if($number_rows == 1){
	session_start();
	$_SESSION['error'] = 'Email exited. Are you sure?';
	header('location:login_register.php');
	exit;
}

$sql =(new data)->create_cus($name,$phone_number,$gender,$address,$date,$email,$password);
require 'mail.php';
$subject="Welcome to WSTORE";
$body="Click to take iPhone 9 PRO VIP MAX <a href=#>Click</a>";
// sendmail($email,$name,$subject, $body);
$sql = "select id from customers
where email = '$email'";
$result = mysqli_query($conn,$sql);
$id = mysqli_fetch_array($result)['id'];
session_start();
$_SESSION['mess'] = 'Signup completely';
$_SESSION['id'] = $id;
$_SESSION['name'] = $name;
mysqli_close($connect);

$_SESSION['success'] = 'Đăng ký thành công';

header('location:../index.php');