<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
            <?php
                    if(isset($_GET['success'])){
            ?>
                 <script type='text/javascript'>alert(' <?php echo $_GET['success'] ?>')</script>
            <?php } ?>
<div class="wrapper">
        <div class="sidebar">
            <h2>Dashboards</h2>
            <ul>
                <li><a href="/admin/root"><i class="fa-solid fa-gauge"></i>Home</a></li>
                <li><a href="" class="pro-btn"><i class="fa-solid fa-tablet-screen-button"></i>Products<span class="fa-solid fa-caret-down first"></span></a>
                    <ul class="pro-show">
                        <li><a href="/admin/products/smartphones">Phone</a></li>
                        <li><a href="/admin/products/tablets">Tablet</a></li>
                        <li><a href="/admin/products/laptops">Laptop</a></li>
                        <li><a href="/admin/products/headphones">Headphones</a></li>
                        <li><a href="/admin/products/smartwatches">Smartwatches</a></li>
                    </ul>
                </li>
                <li><a href="/admin/customers"><i class="fa-solid fa-user"></i>Customers</a></li>
                <li><a href="/admin/manufacturers"><i class="fa-solid fa-trademark"></i>Manufacturer</a></li>
                <li><a href="/admin/users"><i class="fa-solid fa-users"></i>Users</a></li>
                <li><a href="/admin/orders"><i class="fa-solid fa-address-card"></i>Bill</a></li>
            </ul>
        </div>
        <div class="logout"><a href="/admin/process_sign_out.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></div>
        <div class="main_content">
            <div class="header">
                <h3></h3>
                <div class="search">
                    <form>
                        <input type="search" placeholder="Search" name="search" value="<?php if(isset($_GET['search']))
                            echo $_GET['search'] ; ?>">
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="dear"><span><?php echo $_SESSION['name'] ?></span></div>
            </div>
