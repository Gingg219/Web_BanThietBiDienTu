<?php
require '../control.php';
$id=$_GET['id'];
$sql="update orders set status='2' WHERE id ='$id'";
mysqli_query($conn,$sql);
header('location:index.php?success=Cancel successful');