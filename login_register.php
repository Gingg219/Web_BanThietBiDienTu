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
    <link rel="stylesheet" href="./assets/css/validation.css">
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
    
<div class="main-form">
    <form action="" method="POST" class="form-container" id="register" style="display: none">
      <div class="form-header">
          <h3 class="form-heading">Đăng Ký</h3>
          <span class="form-switch-btn" id="showLogin">Đăng Nhập</span>
      </div>

      <div class="spacer"></div>

      <div class="form-group">
          <input id="fullname" name="fullname" type="text" placeholder=" " class="form-input">
          <label for="fullname" class="form-label">Name...</label>
          <span class="form-message"></span>
      </div>

      <div class="form-group">
          <input id="phone" name="phone" type="number" placeholder=" " class="form-input">
          <label for="phone" class="form-label">Phone number...</label>
          <span class="form-message"></span>
      </div>

      <div class="form-group gender">
              <input type="radio" name="gender" value="male" class="form-input"> <span>Male</span>
              <input type="radio" name="gender" value="female" class="form-input"><span>Female</span>
              <input type="radio" name="gender" value="other" class="form-input"><span>Other</span>
          <span class="form-message"></span>
      </div>

      <div class="form-group">
        <input id="address" name="address" placeholder=" " type="text" class="form-input">
        <label for="address" class="form-label">Address...</label>
        <span class="form-message"></span>
      </div>

      <div class="form-group">
        <input id="date" name="date" placeholder=" " type="date" class="form-input">
        <span class="form-message"></span>
      </div>

      <div class="form-group">
        <input id="email" name="email" placeholder=" " type="text" class="form-input">
        <label for="email" class="form-label">Email...</label>
        <span class="form-message"></span>
      </div>

      <div class="form-group">
        <input id="password" name="password" placeholder=" " type="password" class="form-input">
        <label for="password" class="form-label">Password...</label>
        <span class="form-message"></span>
      </div>

      <div class="form-group">
        <input id="password-confirmation" name="password-confirmation" placeholder=" " type="password" class="form-input">
        <label for="password-confirmation" class="form-label">Password confirmation...</label>
        <span class="form-message"></span>
      </div>

      <div class="form-aside">
        <p class="form-policy-text">
            Bằng việc đăng ký bạn đã đồng ý với CellPhoneW về
            <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> & 
            <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
        </p>
      </div>

      <div class="form-controls">
        <!-- <button class="btn btn--normal auth-form__control-back">
             TRỞ LẠI
        </button> -->
        <button type="submit" class="btn btn--primary">ĐĂNG KÝ</button>
    </div>
    </form>

    <form action="" method="POST" class="form-container" id="login" >
        <div class="form-header">
            <h3 class="form-heading">Đăng Nhập</h3>
            <span class="form-switch-btn" id="showRegister">Đăng Ký</span>
        </div>

      <div class="spacer"></div>

      <div class="form-group">
        <input id="email" name="email" type="text" placeholder=" " class="form-input">
        <label for="email" class="form-label">Email...</label>
        <span class="form-message"></span>
      </div>

      <div class="form-group">
        <input id="password" name="password" type="password" placeholder=" " class="form-input">
        <label for="password" class="form-label">Password...</label>
        <span class="form-message"></span>
      </div>

      <div class="form-aside">
        <div class="form-help">
            <a href="" class="form-help-link form-help-forgot">Quên mật khẩu</a>
            <span class="form-help-separate"></span>
            <a href="" class="form-help-link">Cần trợ giúp?</a>
        </div>
    </div>

    <div class="form-controls">
        <button class="btn btn--normal form-control-back">
            <a href="index.php" style="text-decoration: none;">TRỞ LẠI</a> 
        </button>
        <button type="submit" class="btn btn--primary">ĐĂNG NHẬP</button>
    </div>

    </form>

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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
        // Mong muốn của chúng ta
        Validator({
            form: '#register',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
            Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ của bạn'),
            Validator.isRequired('#phone'),
            Validator.isRequired('input[name="gender"]'),
            Validator.isRequired('#address'),
            Validator.isRequired('#date'),
            Validator.isRequired('#email'),
            Validator.isEmail('#email'),
            Validator.isRequired('#password'),
            Validator.isRequired('#password-confirmation'),
            Validator.isConfirmed('#password-confirmation', function () {
            return document.querySelector('#register #password').value;
            }, 'Mật khẩu nhập lại không chính xác')
            ],
            onSubmit: function (data) {
                // Call API
                console.log(data);
            }
        });


        Validator({
            form: '#login',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
            Validator.isEmail('#email'),
            Validator.minLength('#password', 6),
            ],
            onSubmit: function (data) {
            // Call API
            console.log(data);
            }
        });
        });
    </script>
    <script src="./Javascript/validation.js"></script>
</body>
</html>