<?php
require '../control.php';
$id=$_POST['id_category'];
$name=$_POST['name'];
$result=(new data())->create_manuf($id,$name);
header('location:index.php');