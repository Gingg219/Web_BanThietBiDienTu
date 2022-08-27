<?php 
	session_start();
if(!isset($_SESSION['name'])){
	$_SESSION['warning'] = "Bạn cần đăng nhập trước";
	header('location:/login_register.php');
	exit;
}
