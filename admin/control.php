<?php
require_once 'connect.php';
class data{

// Manufacturers

    public function se_manuf(){
        global $conn;
        $sql="select * from manufacturers";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function create_manuf($id_category,$name){
        global $conn;
        $sql="insert into manufacturers(id_category, name) values ('$id_category','$name')";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function store_manuf($id,$id_category,$name){
        global $conn;
        $sql="update manufacturers
        set id_category='$id_category', name='$name' 
        where id='$id'";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function del_manuf($id){
        global $conn;
        $sql="delete from manufacturers where id='$id'";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function find_manuf($id){
        global $conn;
        $sql="select * from manufacturers where id=$id";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }

// Category

    public function se_categories(){
        global $conn;
        $sql="select * from categories";
        $result=mysqli_query($conn,$sql);
        return $result;
        // mysqli_close($conn);
    }

// Products

    public function se_products(){
        global $conn;
        $sql="select * from products";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function create_products($id_category,$name){
        global $conn;
        $sql="insert into products(id_category, name) values ('$id_category','$name')";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function store_products($id,$id_category,$name){
        global $conn;
        $sql="update products
        set id_category='$id_category', name='$name' 
        where id='$id'";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function del_products($id){
        global $conn;
        $sql="delete from products where id='$id'";
        mysqli_query($conn,$sql);
        $result=mysqli_close($conn);
        return($result);
        mysqli_close($conn);
    }
    public function find_products($id){
        global $conn;
        $sql="select * from products where id=$id";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
}