<?php 

$email = $_POST['email'];
$pass = $_POST['pass'];
// if(isset($_POST['remember'])){
// 	$remember = true;
// } else {
// 	$remember = false;
// }

require 'admin/control.php';
$sql = "select * from customers
where email = '$email' and password = '$pass'";
$result = mysqli_query($conn,$sql);
$number_rows= mysqli_num_rows($result);

if($number_rows == 1){
	session_start();
    $each= mysqli_fetch_array($result);
    $_SESSION['id'] = $each['id'];
    $_SESSION['name'] = $each['name'];
    header('location:index.php');
    exit;
}
header('location:login_register.php?error=Login failed');
// if($number_rows == 1){
// 	echo "Đăng nhập thành công";
// 	session_start();
// 	$each = mysqli_fetch_array($result);
// 	$id = $each['id'];
// 	$_SESSION['id'] = $id;
// 	$_SESSION['name'] = $each['name'];
// 	if($remember){
// 		$token = uniqid('user_',true);
// 		$sql = "update customers
// 		set 
// 		token = '$token'
// 		where
// 		id = '$id'
// 		";
// 		mysqli_query($connect,$sql);
// 		setcookie('remember', $token, time() + 60*60*24*30);
// 	}
// } else{
// 	echo "Đăng nhập sai rồi";
// }