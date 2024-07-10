<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = valid($_POST['username']);
    $password = valid($_POST['password']);

    require('connection.php');
    $q_select_user = "SELECT * FROM users where username='$username'";
    $res = mysqli_query($conn, $q_select_user);
    if (mysqli_num_rows($res) > 0) {
        $data_user = mysqli_fetch_assoc($res);
        if (password_verify($password, $data_user['password'])) {
            $_SESSION['username'] = $data_user['username'];
            $_SESSION['role'] = $data_user['role'];
            $_SESSION['id'] = $data_user['id'];
            header('Location:index.php');
        } else {
            header('Location:login.php?err=پسورد اشتباه است.');
        }
    } else {
        header('Location:login.php?err=نام کاربری وجود ندارد.');
    }
}
mysqli_close($conn);
function valid($val)
{
    $val = trim($val);
    $val = htmlspecialchars($val);
    $val = stripslashes($val);
    return $val;
}
