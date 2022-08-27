<?php 

$email = $_POST['email'];
$pass = $_POST['password'];
// if(isset($_POST['remember'])){
// 	$remember = true;
// } else {
// 	$remember = false;
// }

require '../admin/control.php';
$sql = "select * from customers
where email = '$email' and password = '$pass'";
$result = mysqli_query($conn,$sql);
$number_rows= mysqli_num_rows($result);

if($number_rows == 1){
	session_start();
    $each= mysqli_fetch_array($result);
    $_SESSION['id'] = $each['id'];
    $_SESSION['name'] = $each['name'];
    header('location:../index.php');
    exit;
}
header('location:../login_register.php');
