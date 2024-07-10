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
            <h3 class="text-center my-4 text-white">فرم ورود</h3>
            <form method="POST" action="<?php echo htmlspecialchars('log.php') ?>">
                <div class="col-mb-3">
                    <label class="form-label text-white">نام کاربری:</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="col-mb-3">
                    <label class="form-label text-white">پسورد:</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button class="btn btn-success mt-4 px-5 rounded-5" type="submit">ورود</button>
            </form>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>