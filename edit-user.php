<?php include('header.php');
require('connection.php');
$user_id = $_GET['id'];
$q_select_user = "SELECT * FROM users where id='$user_id'";
$res = mysqli_query($conn, $q_select_user);
$user_data = mysqli_fetch_assoc($res);
?>

<div class="container my-5 pt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto mt-5 bg-dark rounded-5 p-4">
            <h3 class="text-center my-4 text-white">فرم ویرایش اطلاعات کاربر</h3>
            <label class="form-label text-white" for="userName">نام کاربری</label>
            <input class="form-control" type="text" name="username" id="usernameEdit" value="<?= $user_data['username'] ?>" onkeyup="validationUserEdit()">
            <p class="form-text text-danger" id="userErrorEdit"></p>
            <label class="form-label text-white" for="Email">ایمیل</label>
            <input class="form-control" type="email" name="email" id="emailEdit" value="<?= $user_data['email'] ?>" onkeyup="validationUserEdit()">
            <p class="form-text text-danger" id="emailErrorEdit"></p>
            <label class="form-label text-white" for="phoneNumber">شماره تلفن</label>
            <input class="form-control" type="number" name="phonenumber" id="phoneNumberEdit" value="<?= $user_data['phoneNumber'] ?>" onkeyup="validationUserEdit()">
            <p class="form-text text-danger" id="phoneErrorEdit"></p>
            <label class="form-label text-white">عکس پروفایل</label>
            <img src="<?= $user_data['image_profile'] ?>" width="100" height="100" class="rounded-circle mb-3" id="previewImg">
            <input class="form-control" type="file" name="profile" id="profileEdit" onchange="previewImage()">
            <button class="btn btn-success my-5" type="button" id="btn-edit-user" onclick="editUser(<?= $user_data['id'] ?>)">ذخیره</button>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>