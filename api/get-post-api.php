<?php
require('../connection.php');
$q_select_post="SELECT * FROM posts";
$res=mysqli_query($conn,$q_select_post);
$result = array();
while ($res_post=mysqli_fetch_assoc($res)) {
    $result[] = $res_post;
}
mysqli_close($conn);
echo json_encode($result);