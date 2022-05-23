<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require ($root."/admin/control.php");
$id=$_POST['id'];
$id_manuf=$_POST['id_manufacturers'];
$id_color=$_POST['id_color'];
$name=$_POST['name'];
$description=$_POST['des'];
$image=$_POST['image'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$price_sale=$_POST['price_sale'];
$result=(new data())->store_products($id,$id_manuf,$id_color,$name,$description,$image,$quantity,$price,$price_sale);

header('location:index.php');