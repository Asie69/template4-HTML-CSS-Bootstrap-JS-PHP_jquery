<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = valid($_POST['username']);
    $email = valid($_POST['email']);
    $subject = valid($_POST['subject']);
    $comment = valid($_POST['comment']);
    require('connection.php');
    $q_insert_msg = "INSERT INTO messages(`username`,`email`,`subject`,`comment`) VALUES('$username','$email','$subject','$comment')";
    if (mysqli_query($conn, $q_insert_msg)) {
        header('Location:index.php?isSend=true');
    } else {
        header('Location:index.php?isSend=false');
    }
}
mysqli_close($conn);
function valid($val)
{
    $val = htmlspecialchars($val);
    $val = trim($val);
    $val = stripslashes($val);
    return $val;
}
