<?php
    session_start();
    if(isset($_SESSION['name'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhonesShop</title>
    <link rel="icon" href="./assets/img/logomain.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/reponsive.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
<?php
                    if(isset($_GET['error'])){
            ?>
                 echo "<script type='text/javascript'>alert(' <?php echo $_GET['error'] ?>');</script>";
            <?php } ?>
    <!-- Begin: Header -->
    <?php require_once 'header.php'; ?>
<!-- End: Header  -->
    
    <div class="app-container">

        <!-- <div class="modal__overlay"></div> -->

    <!-- Login form -->
    <div class="auth-form" id="login">
        <div class="auth-form__container">
            <form action="process_signing.php" method="POST" >
            <div class="auth-form__header">
                <h3 class="auth-form__heading">Đăng Nhập</h3>
                <span class="auth-form__switch-btn" id="showRegister">Đăng Ký</span>
            </div>

            <div class="auth-form__form">
                <div class="auth-form__group">
                    <input type="email" name="email" placeholder="Email..." class="auth-form__input">
                </div>
                <div class="auth-form__group">
                    <input type="password" name="pass" placeholder="Password..." class="auth-form__input">
                </div>
            </div>

            <div class="auth-form__aside">
                <div class="auth-form__help">
                    <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                    <span class="auth-form__help-separate"></span>
                    <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                </div>
            </div>

            <div class="auth-form__controls">
                <button class="btn btn--normal auth-form__control-back">
                    <a href="index.php" style="text-decoration: none;">TRỞ LẠI</a> 
                </button>
                <button type="submit" class="btn btn--primary">ĐĂNG NHẬP</button>
            </div>
            </form>
        </div>

        <div class="auth-form__socials">
            <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                <i class=" auth-form__socials-icon fab fa-facebook-square"></i>
                <span class="auth-form__socials-tittle">Kết nối với Facebook</span>
            </a>
            <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                <i class=" auth-form__socials-icon fab fa-google"></i>
                <span class="auth-form__socials-tittle">Kết nối với Google</span>
            </a>
        </div>
    </div>

    <!-- Register form -->
    <div class="auth-form" id="register" style="display: none;">
        <div class="auth-form__container">
            <form action="process_signup.php" method="POST">
            <div class="auth-form__header">
                <h3 class="auth-form__heading">Đăng Ký</h3>
                <span class="auth-form__switch-btn" id="showLogin">Đăng Nhập</span>
            </div>

            <div class="auth-form__form">
                <div class="auth-form__group">
                    <input type="text" name="name" placeholder="Name..." class="auth-form__input">
                </div>
                <div class="auth-form__group">
                    <input type="number" name="phone" placeholder="Phone number..." class="auth-form__input">
                </div>
                <div class="auth-form__group">
                    <input type="text" name="add" placeholder="Address..." class="auth-form__input">
                </div>
                <div class="auth-form__group">
                    <!-- <input type="radio" name="gender" placeholder="Gender" class="auth-form__input"> Male
                    <input type="radio" name="gender" placeholder="Gender" class="auth-form__input"> Female
                    <input type="radio" name="gender" placeholder="Gender" class="auth-form__input"> Other -->
                    <select name="gender" class="auth-form__input">
                        <option>male</option>
                        <option>female</option>
                        <option>other</option>
                    </select>
                </div>
                <div class="auth-form__group">
                    <!-- <h5 class="auth-form__heading">Birthdate</h5> -->
                    <input type="date" name="date" class="auth-form__input">
                </div>
                <div class="auth-form__group">
                    <input type="email" name="email" placeholder="Email..." class="auth-form__input">
                </div>
                <div class="auth-form__group">
                    <input type="password" name="pass1" placeholder="Password..." class="auth-form__input">
                </div>
                <div class="auth-form__group">
                    <input type="password" name="pass2" placeholder="Confirm Password..." class="auth-form__input">
                </div>
            </div>
            <div class="auth-form-aside">
                <p class="auth-form__policy-text">
                    Bằng việc đăng ký bạn đã đồng ý với CellPhoneW về
                    <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> & 
                    <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                </p>
            </div>

            <div class="auth-form__controls">
                <!-- <button class="btn btn--normal auth-form__control-back">
                     TRỞ LẠI
                </button> -->
                <button type="submit" class="btn btn--primary">ĐĂNG KÝ</button>
            </div>
        </form>
        </div>

        <div class="auth-form__socials">
            <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                <i class=" auth-form__socials-icon fab fa-facebook-square"></i>
                <span class="auth-form__socials-tittle">Kết nối với Facebook</span>
            </a>
            <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                <i class=" auth-form__socials-icon fab fa-google"></i>
                <span class="auth-form__socials-tittle">Kết nối với Google</span>
            </a>
        </div>
    </div>
    
    <script>
        const register= document.getElementById("register")
        const showRegister = document.getElementById("showRegister")
        const login = document.getElementById("login")
        const showLogin = document.getElementById("showLogin")

        if(showRegister) {
            showRegister.onclick = (e) => {
                login.style.display = "none";
                register.style.display = "block";
            }
        }
        
        if(showLogin) {
            showLogin.onclick = (e) => {
                register.style.display = "none";
                login.style.display = "block";
            }
        }
    </script>
</body>
</html>