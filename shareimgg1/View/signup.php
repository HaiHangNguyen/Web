<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Account</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../View/image/icons/signup.png">
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
        <div class="container-login100" style="background-image: url('../View/image/signup-bg.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="background: #ffffffed">
                <form class="login100-form validate-form" method="post" action="../Controller/c_signup.php">
                            <span class="login100-form-title p-b-49">
                                SIGN UP
                            </span>

                    <div class="wrap-input100 validate-input m-b-1" data-validate="Username is required">
                        <input class="input101" type="text" name="usn-signup" placeholder="Username" style="color: black; padding: 34px 1px 0 40px; margin-bottom: 10px;" required>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Email is required">
                        <input class="input101" type="email" name="email" id="email" placeholder="Email" style="color: black; padding: 34px 1px 0 40px; margin-bottom: 10px;" required>
                        <span class="focus-input100" data-symbol="&#9993;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-1" data-validate="Password is required">
                        <input class="input101" type="password" name="pass-signup" placeholder="Password" style="color: black; padding: 34px 1px 0 40px; margin-bottom: 10px;" required>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-1" data-validate="Re-Password is required">
                        <input class="input101" type="password" name="repass" placeholder="Confirm Password" style="color: black; padding: 34px 1px 0 40px; margin-bottom: 10px;" required>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div style="margin-top: 10px;">
                        <p style="color: red;" id="pwerror"></p>

                    </div>

                    <div class="container-login100-form-btn" style="margin-top: 35px">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit" name="signupbtn">
                                Sign up
                            </button>
                        </div>
                    </div>

                    <div class="flex-col-c p-t-50">
                        <p>Have already an account? <a href="login.php" class="txt3" style="color: black"><u>Login here</u></a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>