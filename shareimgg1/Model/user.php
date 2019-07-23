<?php

include 'dbmodel.php';

class user extends dbmodel {
    private $user_usn;
    private $user_pw;

    function dangnhap($usn, $pw) {
        $sql = "select * from members where username='$usn' and Pass='$pw';";
        $result = mysqli_query($this->connect(), $sql);
        $row = mysqli_num_rows($result);
        if ($row==1) {
            $this->user_usn = $row['username'];
            $this->user_pw = $row['Pass'];
            return true;
        } else {
            return false;
        }
    }

    function dangki($usn, $pw, $email) {
        $sql = "insert into members(username, Pass, email) values('$usn','$pw','$email');";
        $result = mysqli_query($this->connect(), $sql);
        if($result) {
            return true;
        } else {
            return false;
        }
    }


}