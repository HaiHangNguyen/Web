<?php
 session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../View/image/icons/login1.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../View/css/reset.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../View/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../View/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../View/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../View/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../View/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../View/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../View/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../View/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../View/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('../View/image/bg-2.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="background: #ffffffed">
                <form class="login100-form validate-form" method="post" action="../Controller/c_login.php">
                        <span class="login100-form-title p-b-49">
                            LOGIN
                        </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="usn-login" placeholder="Type your username" style="color: black" required>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pass-login" placeholder="Type your password" style="color: black" required>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="text-right p-t-8 p-b-31">
                        <a href="#" class="txt0" style="color: black">
                            Forgot password?
                        </a>
                    </div>

                    <div style="margin-top: 5px">
                        <p id="pwerror"></p>

                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit" name="loginbtn">
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="flex-col-c p-t-50">
                        <a href="signup.php" class="txt2" style="color: black">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>