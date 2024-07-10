<?php include('header.php'); ?>

<div class="container my-5 pt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto mt-5 bg-dark rounded-5 p-4">
            <?php if (isset($_GET['err'])) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $_GET['err']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>
            <?php if (isset($_GET['isRegister']) && $_GET['isRegister'] == 'true') : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    ثبت‌نام با موفقیت انجام شد.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>
            <?php if (isset($_GET['isRegister']) && $_GET['isRegister'] == 'false') : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    ثبت‌نام با مشکل مواجه شد.لطفا دوباره تلاش کنید.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <h3 class="text-center my-4 text-white">فرم ثبت‌نام</h3>
            <form action="<?php echo htmlspecialchars('reg.php'); ?>" enctype="multipart/form-data" method="POST" onsubmit="return validateForm()">
                <label class="form-label text-white" for="userName">نام کاربری</label>
                <input class="form-control" type="text" name="username" id="usernameReg" onkeyup="validateForm()">
                <p class="form-text text-danger" id="userErrorReg"></p>

                <label class="form-label text-white" for="Email">ایمیل</label>
                <input class="form-control" type="email" name="email" id="emailReg" onkeyup="validateForm()">
                <p class="form-text text-danger" id="emailErrorReg"></p>

                <label class="form-label text-white" for="phoneNumber">شماره تلفن</label>
                <input class="form-control" type="number" name="phonenumber" id="phoneNumberReg" onkeyup="validateForm()">
                <p class="form-text text-danger" id="phoneErrorReg"></p>

                <label class="form-label text-white" for="passWord">پسورد</label>
                <input class="form-control" type="password" name="password" id="passwordReg" onkeyup="validateForm()">
                <p class="form-text text-danger" id="passErrorReg"></p>

                <label class="form-label text-white">عکس پروفایل</label>
                <input class="form-control" type="file" name="profile" id="profileReg" onchange="validateForm()">
                <button class="btn btn-success my-5" type="submit" id="btn-Reg">ارسال</button>
            </form>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>