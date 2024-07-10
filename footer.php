<!--footer-start-->
<footer class="container-fluid border-top mt-5" id="footerInclude">
    <div class="row mt-4">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
            <p class="text-white text-center">.COPYRIGHT © 2022 EDU MEETING CO., LTD. ALL RIGHTS RESERVED</p>
            <p class="text-white text-center">DESIGN: <span class="main-color1">Asie Davari</span></p>
        </div>
    </div>
</footer>
<!--footer-end-->

<!--offcanvas-start-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="myoffcanvas" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">منو</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pe-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">خانه</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="meetings.php">جلسات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">ثبت نام</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    صفحات
                </a>
                <ul class="dropdown-menu bg-white d-none">
                    <li><a class="dropdown-item text-black" href="#">جلسات آینده</a></li>
                    <li><a class="dropdown-item text-black" href="#">جزئیات جلسات</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link">دوره‌ها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">تماس با ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo isset($_SESSION['username']) ? 'profile.php' : 'login.php'; ?>">
                    <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'ورود'; ?>
                </a>
            </li>
            <?php if (isset($_SESSION['username'])) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">خروج</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<!--offcanvas-end-->
<script src="./assets/js/jquery-3.7.1.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/jalali-moment.browser.js"></script>
<script src="./assets/js/main.js"></script>

</body>

</html>