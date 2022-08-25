<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require ($root."/admin/control.php");
$id=$_GET['del'];
$result=(new data())->del_products($id);

header('location:index.php');