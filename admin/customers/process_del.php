<?php
require '../control.php';
$id=$_GET['del'];
$result=(new data())->del_cus($id);
if($result)
header('location:index.php?success=Delete successful');
