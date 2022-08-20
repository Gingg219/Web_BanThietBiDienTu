<?php
require ('../control.php');
$time=$_GET['time'];
$result=(new data())->statistical_orders($time);

echo $result;
// header('location:index.php');