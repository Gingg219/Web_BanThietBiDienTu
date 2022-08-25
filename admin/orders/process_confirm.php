<?php
require '../control.php';
$id1=$_GET['id'];
$sql="update orders set status='1' WHERE id ='$id1'";
mysqli_query($conn,$sql);
$result=(new data)->detail_orders($id1);
foreach($result as $id_product){
    $id=$id_product['id_product'];

    $sql="UPDATE order_product JOIN products
    ON
    order_product.id_product=products.id
    SET products.sold=products.sold+order_product.quantity,
        products.quantity=products.quantity-order_product.quantity
    WHERE products.id=$id and order_product.id_order=$id1";
    mysqli_query($conn,$sql);
}
header('location:index.php?success=Confirm successful');