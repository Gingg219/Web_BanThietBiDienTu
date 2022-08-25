<?php 

session_start();
// if(!isset($_SESSION['level']) || $_SESSION['level'] !== 1){
if(empty($_SESSION['level'])){
	header('location:../root/index.php?success=Must be logged in with an admin account');
}