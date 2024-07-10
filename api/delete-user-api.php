<?php
$result = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['id'];
    require('../connection.php');
    $q_delete_user = "DELETE FROM users where id='$user_id'";
    if (mysqli_query($conn, $q_delete_user)) {
        $result['status'] = 200;
        $result['msg'] = 'رکورد مورد نظر حذف شد.';
        mysqli_close($conn);
        echo json_encode($result);
    } else {
        $result['status'] = 500;
        $result['msg'] = 'خطای سروری رخ داد. دوباره تلاش کنید.';
        mysqli_close($conn);
        echo json_encode($result);
    }
} else {
    $result['status'] = 500;
    $result['msg'] = 'Method should be POST.';
    mysqli_close($conn);
    echo json_encode($result);
}
