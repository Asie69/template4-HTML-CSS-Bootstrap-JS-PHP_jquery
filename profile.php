<?php include('header.php');
require('connection.php');
$id_user = $_SESSION['id'];
if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
    $q_select_user = "SELECT * FROM users where id='$id_user'";
} else {
    $q_select_user = "SELECT * FROM users";
}
$res_user = mysqli_query($conn, $q_select_user);
?>
<div class="container my-5">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="table-responsive">
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام کاربری</th>
                            <th>پروفایل</th>
                            <th>ایمیل</th>
                            <th>شماره موبایل</th>
                            <th>تاریخ ثبت‌نام</th>
                            <th>تغییر حساب کاربری</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($item = mysqli_fetch_assoc($res_user)) : ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['username'] ?></td>
                                <td>
                                    <img src="<?= $item['image_profile'] ?>" width="100px" height="100px" class="rounded-circle">
                                </td>
                                <td><?= $item['email'] ?></td>
                                <td><?= $item['phoneNumber'] ?></td>
                                <td class="reg-date-user"><?= $item['reg_date'] ?></td>
                                <td>
                                    <button class="btn btn-danger" onclick="removeUser(<?= $item['id'] ?>,event)">حذف</button>
                                    <a class="btn btn-success" href="edit-user.php?id=<?= $item['id'] ?>">ادیت</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
mysqli_close($conn);
include('footer.php'); ?>