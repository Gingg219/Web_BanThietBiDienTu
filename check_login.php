<?php 
session_start();
if(!isset($_SESSION['name'])){
	header('location:login_register.php?success=Bạn phải đăng nhập trước :D');
}