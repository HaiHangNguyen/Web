<?php
if (isset($_POST['submit'])) {
    require_once ("../Model/Database/Connection.php");

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    $rePass = trim($_POST['re_password']);

    $result = new \Web\Model\Database\Connection();
    if($result->getRow("SELECT username FROM User WHERE username ='$name'")) {
        echo "<script>";
        echo "alert('Tên người dùng đã tồn tại, vui lòng chọn tên khác');";
        echo "window.location.assign('signup.php');";
        echo "</script>";
        exit;
    }
    if($result->getRow("SELECT email FROM User WHERE email ='$email'")) {
        echo "<script>";
        echo "alert('Email này đã được sử dụng, vui lòng chọn email khác');";
        echo "window.location.assign('signup.php');";
        echo "</script>";
        exit;
    }
    if($pass != $rePass) {
        echo "<script>";
        echo "alert('Mật khẩu nhập lại bị sai, vui lòng kiểm tra lại');";
        echo "window.location.assign('signup.php');";
        echo "</script>";
        exit;
    }
    $addUser = $result->query("INSERT INTO User (username, pass, email) VALUES ('$name', '$pass', '$email')");

    if($addUser) {
        echo "<script>";
        echo "alert('Đăng kí thành công, vui lòng đăng nhập lại');";
        echo "window.location.assign('signin.php');";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Đăng kí thất bại, vui lòng đăng kí lại');";
        echo "window.location.assign('signup.php');";
        echo "</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->s
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div method="POST" id="signup-form" class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" method="post" action="signup.php">
                <span class="login100-form-title p-b-45">
                    CREATE ACCOUNT
                </span>
                <div class="form-group validate-input" >
                    <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" required=""/>
                </div>
                <div class="form-group validate-input" >
                    <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required=""/>
                </div>
                <div class="form-group validate-input" >
                    <input type="password" class="form-input" name="password" id="password" placeholder="Password" required=""/>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group validate-input" >
                    <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password" required=""/>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required=""/>
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service"><u>Terms of service</u></a></label>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                </div>

            </form>
        </div>
    </div>
</div>


<div id="signup"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/signup.js"></script>

</body>
</html>
