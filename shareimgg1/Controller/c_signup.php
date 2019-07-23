<?php
session_start();
include '../Model/user.php';

$m_user = new user();
$succsess = $m_user->dangki($_POST['usn-signup'], $_POST['pass-signup'], $_POST['email']);
if($succsess) {
    header("Location:../View/login.php");
}