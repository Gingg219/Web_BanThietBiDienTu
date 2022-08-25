<?php
require '../control.php';
$id=$_GET['id'];
$sql="update orders set status='1' WHERE id ='$id'";
mysqli_query($conn,$sql);
header('location:index.php?success=Confirm successful');