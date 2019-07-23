<?php
session_start();
include '../Model/user.php';

$m_user = new user();
$succsess = $m_user->dangnhap($_POST['usn-login'], $_POST['pass-login']);
if($succsess) {
    echo "dang nhap thanh cong";
} else {
    echo "sai ten dang nhap or mat khau";
}