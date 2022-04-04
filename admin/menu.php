<div id="overall">
        <div id="container">
        <div>
            <?php
                    if(isset($_GET['error'])){
            ?>
                <span style="color: red; font-size: 20px;"><?php echo $_GET['error'] ?></span>
            <?php } ?>
            <?php
                    if(isset($_GET['success'])){
            ?>
                <span style="color: green; font-size: 20px;"><?php echo $_GET['success'] ?></span>
            <?php } ?>
            </div>
            <div id="logo">
                <a href="#">
                    <img src="icons/logoo.png" alt="">
                </a>
            </div>
            <div id="search">
                <div>
                    <form>
                        <input type="search" placeholder="Search" name="search" value="<?php if(isset($_GET['search']))
                            echo $_GET['search'] ; ?>">
                    </form>
                </div>
                <div>
                    <a href="">
                        <img src="icons/search.png" alt="">
                    </a>
                </div>
            </div>
            <div id="logout">
                <a href="">
                    <img src="icons/logout.png"  alt="">
                </a>
            </div>
        </div>
        <div id="overall">
            <div id="left">
                <div id="menu">
                    <ul>
                        <li>
                            <a href="index.php">Dashboard</a>
                        </li>
                        <hr>
                        <li>
                            <a href="../products">Product</a>
                        </li>
                        <hr>
                        <li>
                            <a href="../producer">Producer</a>
                        </li>
                        <hr>
                        <li>
                            <a href="list_customer.php">Customer</a>
                        </li>
                        <hr>
                        <li>
                            <a href="#">Profile</a>
                        </li>
                    </ul>
                </div>
            
            </div>
       

            

