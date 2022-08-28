<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="/assets/img/Wstore.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="login_container">
        <div id="login_form">
            <div class="login">
                <form action="process_signin.php" method="POST">
                    <input type="text" name="email" placeholder="Email" class="login_input">
                    <input type="password" name="pass" placeholder="Password" class="login_input">
                    <button type="submit">LOGIN</button>
                    <a href="#" style="color: white ;">Forgot password ?</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>