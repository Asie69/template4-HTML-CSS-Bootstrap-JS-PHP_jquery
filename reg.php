<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = valid($_POST['username']);
    $email = valid($_POST['email']);
    $phoneNumber = valid($_POST['phonenumber']);
    $password = valid($_POST['password']);
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);

    $dir = "uploads/";
    $target_file = $dir . basename($_FILES["profile"]["name"]);
    $isUpload = true;
    $type_file = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $checkImg = getimagesize($_FILES["profile"]["tmp_name"]);

    if ($type_file != 'jpg' && $type_file != 'jpeg' && $type_file != 'png' && $type_file != 'svg') {
        header('Location:register.php?err=نوع فایل اشتباه است.');
        $isUpload = false;
    }
    if (!$checkImg) {
        header('Location:register.php?err=فایل عکس نیست.');
        $isUpload = false;
    }
    if (file_exists($target_file)) {
        header('Location:register.php?err=فایل تکراری است.');
        $isUpload = false;
    }
    if ($_FILES['profile']['size'] > 500000) {
        header('Location:register.php?err=حجم فایل زیاد است.');
        $isUpload = false;
    }
    if ($isUpload) {
        if (move_uploaded_file($_FILES['profile']['tmp_name'], $target_file)) {
            require('connection.php');
            $q_insert_user = "INSERT INTO users(`username`,`email`,`phoneNumber`,`password`,`image_profile`,`role`) 
            VALUES('$username','$email','$phoneNumber','$pass_hash','$target_file','user')";
            if (mysqli_query($conn, $q_insert_user)) {
                header('Location:register.php?isRegister=true');
            } else {
                header('Location:register.php?isRegister=false');
            }
        } else {
            echo 'فایل آپلود نشد';
        }
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
