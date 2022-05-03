<?php
require '../control.php';
$id=$_POST['id'];
$name=$_POST['name'];
$id_category=$_POST['id_category'];
$result=(new data())->store_manuf($id,$id_category,$name);
if($result)
header('location:index.php');