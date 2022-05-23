<?php
require_once 'connect.php';
class data{

//Customers
    public function count_cus($search=''){
        global $conn;
        $sql="SELECT count(*) as total from customers
        where name like '%$search%'";
        $run=mysqli_query($conn,$sql);
        $result=mysqli_fetch_array($run);
        $all_product=$result['total'];
        return($all_product);
        mysqli_close($conn);;
    }
    public function se_cus($search='',$skip_page){
        global $conn;
        $sql="SELECT * from customers
        where name like '%$search%'
        limit 4 offset $skip_page";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function create_cus($name,$phone_number,$gender,$address,$date,$email,$password){
        global $conn;
        $sql="insert into customers(name,phone_number,gender,address,date,email,password) values ('$name','$phone_number','$gender','$address','$date','$email','$password')";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function store_cus($id,$name,$phone_number,$gender,$address,$date,$email,$password){
        global $conn;
        $sql="update customers
        set
        name='$name',
        phone_number='$phone_number',
        gender='$gender',
        address='$address',
        date='$date',
        email='$email',
        password='$password'
        where id='$id'";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function del_cus($id){
        global $conn;
        $sql="delete from customers where id='$id'";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function find_cus($id){
        global $conn;
        $sql="select * from customers where id=$id";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
        // Paging


//Users
public function count_users($search=''){
    global $conn;
    $sql="SELECT count(*) as total from users
    where name like '%$search%'";
    $run=mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($run);
    $all_product=$result['total'];
    return($all_product);
    mysqli_close($conn);;
}
public function se_users($search='',$skip_page){
    global $conn;
    $sql="SELECT * from users
    where name like '%$search%'
    limit 4 offset $skip_page";
    $result=mysqli_query($conn,$sql);
    return($result);
    mysqli_close($conn);
}
    public function create_user($name,$phone_number,$gender,$address,$date,$email,$password,$level){
        global $conn;
        $sql="insert into users(name,phone_number,gender,address,date,email,password,level)
        values
        ('$name','$phone_number','$gender','$address','$date','$email','$password','$level')";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function store_user($id,$name,$phone_number,$gender,$address,$date,$email,$password,$level){
        global $conn;
        $sql="update users
        set
        name='$name',
        phone_number='$phone_number',
        gender='$gender',
        address='$address',
        date='$date',
        email='$email',
        password='$password',
        level='$level'
        where id='$id'";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function del_user($id){
        global $conn;
        $sql="delete from users where id='$id'";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function find_user($id){
        global $conn;
        $sql="select * from users where id=$id";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
// Manufacturers

    public function count_manuf($search=''){
        global $conn;
        $sql="SELECT count(*) as total from manufacturers
        where name like '%$search%'";
        $run=mysqli_query($conn,$sql);
        $result=mysqli_fetch_array($run);
        $all_product=$result['total'];
        return($all_product);
        mysqli_close($conn);;
    }
    public function se_manuf($search='',$skip_page){
        global $conn;
        $sql="SELECT * from manufacturers
        where name like '%$search%'
        limit 4 offset $skip_page";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function se_manuf_smartphones(){
        global $conn;
        $sql="select * from manufacturers
        where id_category=1
        order by name asc";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_manuf_tablets(){
        global $conn;
        $sql="select * from manufacturers
        where id_category=2";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_manuf_laptops(){
        global $conn;
        $sql="select * from manufacturers
        where id_category=3";
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
        mysqli_close($conn);
    }

//color
    public function se_colors(){
        global $conn;
        $sql="select * from colors";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
// Products
    public function se_products_smartphones(){
        global $conn;
        $sql="SELECT products.* FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        WHERE 
        manufacturers.id_category=1";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_products_tablet(){
        global $conn;
        $sql="SELECT products.* FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        WHERE 
        manufacturers.id_category=2";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_products_laptop(){
        global $conn;
        $sql="SELECT products.* FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        WHERE 
        manufacturers.id_category=1";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_smartphones($name){
        global $conn;
        $sql="SELECT products.* FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        WHERE 
        manufacturers.id_category=1 and
        manufacturers.name='$name'";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_laptops($name){
        global $conn;
        $sql="SELECT products.* FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        WHERE 
        manufacturers.id_category=3 and
        manufacturers.name='$name'";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_tablets($name){
        global $conn;
        $sql="SELECT products.* FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        WHERE 
        manufacturers.id_category=2 and
        manufacturers.name='$name'";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_products_smartphones_index(){
        global $conn;
        $sql="SELECT products.* FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        WHERE manufacturers.id_category=1
        limit 10";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_products_tablets_index(){
        global $conn;
        $sql="SELECT products.* FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        WHERE manufacturers.id_category=2
        limit 10";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_products_laptops_index(){
        global $conn;
        $sql="SELECT products.* FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        WHERE manufacturers.id_category=3
        limit 10";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
        // Paging&searching Client
        public function paging_mobile($skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=1
            limit 20 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function paging_tablet($skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=2
            limit 20 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function paging_laptop($skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=3
            limit 20 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function count_search_mobile($name){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=1 and
            manufacturers.name='$name'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function paging_search_mobile($name,$skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=1 and
            manufacturers.name='$name'
            limit 20 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function count_search_tablet($name){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=2 and
            manufacturers.name='$name'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function paging_search_tablet($name,$skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=2 and
            manufacturers.name='$name'
            limit 20 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function count_search_laptop($name){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=3 and
            manufacturers.name='$name'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function paging_search_laptop($name,$skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=3 and
            manufacturers.name='$name'
            limit 20 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function count_product($search=''){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE
            products.name like '%$search%' or manufacturers.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function search_product($search,$skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE
            products.name like '%$search%' or  manufacturers.name like '%$search%'
            limit 20 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        // Paging&searching Admin
        public function count_paging_laptop($search=''){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=3 and
            products.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function search_paging_laptop($search,$skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=3 and
            products.name like '%$search%'
            limit 4 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function count_paging_tablet($search=''){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=2 and
            products.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function search_paging_tablet($search,$skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=2 and
            products.name like '%$search%'
            limit 4 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function count_paging_smartphone($search=''){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=1 and
            products.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function search_paging_smartphone($search,$skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=1 and
            products.name like '%$search%'
            limit 4 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
    public function create_products($id_manuf,$id_color,$name,$description,$image,$quantity,$price,$price_sale){
        global $conn;
        $sql="insert into products(id_manufacturers,id_color,name,description,image,quantity,price,price_sale)
        values ('$id_manuf','$id_color','$name','$description','$image','$quantity','$price','$price_sale')";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function store_products($id,$id_manuf,$id_color,$name,$description,$image,$quantity,$price,$price_sale){
        global $conn;
        $sql="update products set
        id_manufacturers='$id_manuf',
        id_color='$id_color',
        name='$name',
        description='$description',
        image='$image',
        quantity='$quantity',
        price='$price',
        price_sale='$price_sale'
        where id='$id'";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function del_products($id){
        global $conn;
        $sql="delete from products where id='$id'";
        $result= mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function find_products($id){
        global $conn;
        $sql="select products.*, colors.name as name_color from products  INNER JOIN colors on
        products.id_color=colors.id
        where products.id=$id";
        $result=mysqli_query($conn,$sql);
        return ($result);
        mysqli_close($conn);
    }
    public function se_products_sale(){
        global $conn;
        $sql="SELECT products.* ,
        (products.price-products.price_sale) as sale FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        order by sale desc
        limit 10";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function delete_in_cart($id){
        unset($_SESSION['cart'][$id]);
    }
    // Order
    public function se_orders(){
        global $conn;
        $sql="SELECT * FROM orders";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
}