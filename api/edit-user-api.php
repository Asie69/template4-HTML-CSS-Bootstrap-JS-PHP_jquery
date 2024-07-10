<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = valid($_POST['username']);
    $email = valid($_POST['email']);
    $phoneNumber = valid($_POST['phoneNumber']);
    $user_id = $_POST['id'];
    $result = array();
    $isUpload = true;

    if (isset($_FILES['image_profile'])) {
        $dir = "../uploads/";
        $dirDB = "uploads/";
        $target_file = $dir . basename($_FILES["image_profile"]["name"]);
        $target_fileBD = $dirDB . basename($_FILES["image_profile"]["name"]);
        $type_file = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $checkImg = getimagesize($_FILES["image_profile"]["tmp_name"]);

        if ($type_file != 'jpg' && $type_file != 'jpeg' && $type_file != 'png' && $type_file != 'svg') {
            $result['status'] = 500;
            $result['msg'] = 'نوع فایل اشتباه است.';
            echo json_encode($result);
            $isUpload = false;
            die;
        }
        if (!$checkImg) {
            $result['status'] = 500;
            $result['msg'] = 'فایل عکس نیست.';
            echo json_encode($result);
            $isUpload = false;
            die;
        }
        if (file_exists($target_file)) {
            $result['status'] = 500;
            $result['msg'] = 'فایل تکراری است';
            echo json_encode($result);
            $isUpload = false;
            die;
        }
        if ($_FILES['image_profile']['size'] > 500000) {
            $result['status'] = 500;
            $result['msg'] = 'حجم فایل زیاد است.';
            echo json_encode($result);
            $isUpload = false;
            die;
        }
        if ($isUpload) {
            if (move_uploaded_file($_FILES['image_profile']['tmp_name'], $target_file)) {
                require('../connection.php');
                $q_update_user = "UPDATE users SET username='$username',email='$email',phoneNumber='$phoneNumber',image_profile='$target_fileBD' where id=$user_id";
                if (mysqli_query($conn, $q_update_user)) {
                    $result['status'] = 200;
                    $result['msg'] = 'رکورد مورد نظر تغییر کرد';
                    mysqli_close($conn);
                    echo json_encode($result);
                } else {
                    $result['status'] = 500;
                    $result['msg'] = 'خطای سروری رخ داده است.';
                    mysqli_close($conn);
                    echo json_encode($result);
                }
            } else {
                $result['status'] = 500;
                $result['msg'] = 'فایل آپلود نشد.';
                mysqli_close($conn);
                echo json_encode($result);
            }
        }
    } else {
        require('../connection.php');
        $q_update_user = "UPDATE users SET username='$username',email='$email',phoneNumber='$phoneNumber' where id=$user_id";
        if (mysqli_query($conn, $q_update_user)) {
            $result['status'] = 200;
            $result['msg'] = 'رکورد مورد نظر تغییر کرد';
            mysqli_close($conn);
            echo json_encode($result);
        } else {
            $result['status'] = 500;
            $result['msg'] = 'خطای سروری رخ داده است.';
            mysqli_close($conn);
            echo json_encode($result);
        }
    }
} else {
    $result['status'] = 500;
    $result['msg'] = 'method should be POST.';
    echo json_encode($result);
}

function valid($val)
{
    $val = trim($val);
    $val = htmlspecialchars($val);
    $val = stripslashes($val);
    return $val;
}
