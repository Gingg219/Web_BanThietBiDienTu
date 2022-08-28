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
    public function store_cus_client($id,$name,$phone_number,$gender,$address,$date,$email){
        global $conn;
        $sql="update customers
        set
        name='$name',
        phone_number='$phone_number',
        gender='$gender',
        address='$address',
        date='$date',
        email='$email'
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
    public function se_manuf_headphones(){
        global $conn;
        $sql="select * from manufacturers
        where id_category=4";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_manuf_smartwatch(){
        global $conn;
        $sql="select * from manufacturers
        where id_category=5";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_manuf_smarthome(){
        global $conn;
        $sql="select * from manufacturers
        where id_category=6";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_manuf_gadgets(){
        global $conn;
        $sql="select * from manufacturers
        where id_category=7";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_manuf_tivi(){
        global $conn;
        $sql="select * from manufacturers
        where id_category=8";
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
        $sql="SELECT products.*,(products.price-products.price_sale) as sale FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        WHERE manufacturers.id_category=1
        order by sale desc
        limit 10";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_products_tablets_index(){
        global $conn;
        $sql="SELECT products.*,(products.price-products.price_sale) as sale FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        WHERE manufacturers.id_category=2
        order by sale desc
        limit 10";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_products_laptops_index(){
        global $conn;
        $sql="SELECT products.*,(products.price-products.price_sale) as sale FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        WHERE manufacturers.id_category=3
        order by sale desc
        limit 10";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_products_headphones_index(){
        global $conn;
        $sql="SELECT products.*,(products.price-products.price_sale) as sale FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        WHERE manufacturers.id_category=4
        order by sale desc
        limit 10";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
    public function se_products_smartwatches_index(){
        global $conn;
        $sql="SELECT products.*,(products.price-products.price_sale) as sale FROM products INNER JOIN manufacturers On
        products.id_manufacturers=manufacturers.id
        WHERE manufacturers.id_category=5
        order by sale desc
        limit 10";
        $result=mysqli_query($conn,$sql);
        return $result;
        mysqli_close($conn);
    }
        // Paging&searching Client
        public function paging_mobile($skip_page,$search){
            global $conn;
            $sql="SELECT products.*,
            (products.price-products.price_sale) as sale FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=1 and manufacturers.name like '%$search%'
            order by sale desc
            limit 20 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function paging_tablet($skip_page,$search){
            global $conn;
            $sql="SELECT products.*,
            (products.price-products.price_sale) as sale FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=2 and manufacturers.name like '%$search%'
            order by sale desc
            limit 20 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function paging_headphone($skip_page,$search){
            global $conn;
            $sql="SELECT products.*,
            (products.price-products.price_sale) as sale FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=4 and manufacturers.name like '%$search%'
            order by sale desc
            limit 20 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function paging_smartwatch($skip_page,$search){
            global $conn;
            $sql="SELECT products.*,
            (products.price-products.price_sale) as sale FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=5 and manufacturers.name like '%$search%'
            order by sale desc
            limit 20 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function paging_laptop($skip_page,$search){
            global $conn;
            $sql="SELECT products.*,
            (products.price-products.price_sale) as sale
            FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=3 and manufacturers.name like '%$search%'
            order by sale desc
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
            $sql="SELECT products.*,
            (products.price-products.price_sale) as sale 
            FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE
            products.name like '%$search%' or  manufacturers.name like '%$search%'
            order by sale desc
            limit 10 offset $skip_page";
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
        public function count_paging_laptop1($search=''){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=3 and
            manufacturers.name like '%$search%'";
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
        public function count_paging_headphone($search=''){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=4 and
            products.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function search_paging_headphone($search,$skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=4 and
            products.name like '%$search%'
            limit 4 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function count_paging_smarthome($search=''){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=6 and
            products.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function search_paging_smarthome($search,$skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=6 and
            products.name like '%$search%'
            limit 4 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function count_paging_gadgets($search=''){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=7 and
            products.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function search_paging_gadgets($search,$skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=7 and
            products.name like '%$search%'
            limit 4 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function count_paging_tivi($search=''){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=8 and
            products.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function search_paging_tivi($search,$skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=8 and
            products.name like '%$search%'
            limit 4 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function count_paging_smartwatch($search=''){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=5 and
            products.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function search_paging_smartwatch($search,$skip_page){
            global $conn;
            $sql="SELECT products.* FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=5 and
            products.name like '%$search%'
            limit 4 offset $skip_page";
            $result=mysqli_query($conn,$sql);
            return($result);
            mysqli_close($conn);
        }
        public function count_paging_smartphone($search=''){
            global $conn;
            $sql="SELECT count(*) as total
            FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=1 and
            products.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function count_paging_smarthome1($search=''){
            global $conn;
            $sql="SELECT count(*) as total
            FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=6 and
            manufacturers.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function count_paging_gadgets1($search=''){
            global $conn;
            $sql="SELECT count(*) as total
            FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=7 and
            manufacturers.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function count_paging_tivi1($search=''){
            global $conn;
            $sql="SELECT count(*) as total
            FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=8 and
            manufacturers.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function count_paging_smartphone1($search=''){
            global $conn;
            $sql="SELECT count(*) as total
            FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=1 and
            manufacturers.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function count_paging_tablet1($search=''){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=2 and
            manufacturers.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function count_paging_headphone1($search=''){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=4 and
            manufacturers.name like '%$search%'";
            $run=mysqli_query($conn,$sql);
            $result=mysqli_fetch_array($run);
            $all_product=$result['total'];
            return($all_product);
            mysqli_close($conn);
        }
        public function count_paging_smartwatch1($search=''){
            global $conn;
            $sql="SELECT count(*) as total FROM products INNER JOIN manufacturers On
            products.id_manufacturers=manufacturers.id
            WHERE manufacturers.id_category=5 and
            manufacturers.name like '%$search%'";
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
        $sql="SELECT * ,
        (products.price-products.price_sale) as sale FROM products
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
    public function find_orders($id){
        global $conn;
        $sql="SELECT * FROM orders WHERE id ='$id'";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function count_order($search=''){
        global $conn;
        $sql="SELECT count(*) as total_orders from orders
        where receiver_name like '%$search%'";
        $run=mysqli_query($conn,$sql);
        $result=mysqli_fetch_array($run);
        $all_product=$result['total_orders'];
        return($all_product);
        mysqli_close($conn);;
    }
    public function search_orders($search='',$skip_page){
        global $conn;
        $sql="SELECT * from orders
        where receiver_name like '%$search%'
        limit 5 offset $skip_page";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function detail_orders($id_order){
        global $conn;
        $sql = "select 
                order_product.*,
                products.name,
                products.image,
                products.price_sale,
                products.price
                from order_product
                join products on products.id = order_product.id_product
                where id_order = '$id_order'";
        $result = mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function se_orders($id_cus){
        global $conn;
        $sql="SELECT * FROM orders WHERE id_customer ='$id_cus'
        order by order_date desc";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }

    // Statistical
    public function statistical_orders($ORDER_DATE){
        global $conn;
        $sql="SELECT COUNT(*) as total FROM ORDERS WHERE DATE(ORDER_DATE)='$ORDER_DATE'";
        $result=mysqli_query($conn,$sql);
        $each=mysqli_fetch_array($result);
        $orders=$each['total'];
        return($orders);
        mysqli_close($conn);
    }
    public function statistical_orders1($ORDER_DATE){
        global $conn;
        $sql="SELECT COUNT(*) as total
        FROM ORDERS
        WHERE
        DATE_FORMAT(order_date, '%Y-W%u')='$ORDER_DATE'";
        $result=mysqli_query($conn,$sql);
        $each=mysqli_fetch_array($result);
        $orders=$each['total'];
        return($orders);
        mysqli_close($conn);
    }
    public function statistical_orders2($ORDER_DATE){
        global $conn;
        $sql="SELECT COUNT(*) as total
        FROM ORDERS
        WHERE
        DATE_FORMAT(order_date, '%Y-%m')='$ORDER_DATE'";
        $result=mysqli_query($conn,$sql);
        $each=mysqli_fetch_array($result);
        $orders=$each['total'];
        return($orders);
        mysqli_close($conn);
    }
    public function statistical_orders3($ORDER_DATE){
        global $conn;
        $sql="SELECT COUNT(*) as total
        FROM ORDERS
        WHERE
        YEAR(order_date)='$ORDER_DATE'";
        $result=mysqli_query($conn,$sql);
        $each=mysqli_fetch_array($result);
        $orders=$each['total'];
        return($orders);
        mysqli_close($conn);
    }
    public function statistical_products1(){
        global $conn;
        $sql="SELECT
        products.price_sale, products.name,
        IFNULL(SUM(order_product.quantity), 0) AS sold
        FROM products left JOIN order_product
        ON products.id=order_product.id_product
        LEFT JOIN orders on orders.id=order_product.id_order
        WHERE orders.`status`=1 OR orders.id IS null
        GROUP BY products.id 
        ORDER BY sold DESC
        LIMIT 3 ;";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function statistical_products2(){
        global $conn;
        $sql="SELECT
        products.price_sale, products.name,
        IFNULL(SUM(order_product.quantity), 0) AS sold
        FROM products left JOIN order_product
        ON products.id=order_product.id_product
        LEFT JOIN orders on orders.id=order_product.id_order
        WHERE orders.`status`=1 OR orders.id IS null
        GROUP BY products.id 
        ORDER BY sold asc, products.id asc
        LIMIT 3 ;";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
    public function statistical_turnover(){
        global $conn;
        $sql="SELECT SUM(total_current) AS total
        FROM orders
        WHERE status='1' AND WEEK(order_date,1)=WEEK(CURDATE(),1)";
        $result=mysqli_query($conn,$sql);
        $each=mysqli_fetch_array($result)['total'];
        return($each);
        mysqli_close($conn);
    }
    public function statistical_turnover1(){
        global $conn;
        $sql="SELECT SUM(total_current) AS total
        FROM orders
        WHERE status='1' AND month(order_date)=month(CURDATE())";
        $result=mysqli_query($conn,$sql);
        $each=mysqli_fetch_array($result)['total'];
        return($each);
        mysqli_close($conn);
    }
    public function statistical_turnover2(){
        global $conn;
        $sql="SELECT SUM(total_current) AS total
        FROM orders
        WHERE status='1' AND YEAR(order_date)=YEAR(CURDATE())";
        $result=mysqli_query($conn,$sql);
        $each=mysqli_fetch_array($result)['total'];
        return($each);
        mysqli_close($conn);
    }
    public function statistical_cus(){
        global $conn;
        $sql="SELECT customers.name, SUM(total_current) AS total_paid,
        COUNT(orders.id_customer) AS total_order
        FROM customers
        LEFT JOIN orders ON customers.id=orders.id_customer
        WHERE STATUS='1'
        GROUP BY customers.id";
        $result=mysqli_query($conn,$sql);
        return($result);
        mysqli_close($conn);
    }
}