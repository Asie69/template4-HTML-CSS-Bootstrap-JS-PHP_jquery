<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template 569</title>
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/all.min.css" rel="stylesheet">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="./assets/css/owl.theme.default.min.css" rel="stylesheet">
</head>

<body>
    <!--subHeader-start-->
    <section class="container-fluid" id="header-socialMed">
        <div class="container">
            <div class="row py-1">
                <div class="col-md-4 text-center text-md-end">
                    <i class="fa-brands fa-telegram text-white ps-2"></i>
                    <i class="fa-brands fa-instagram-square text-white p-2"></i>
                    <i class="fa-brands fa-twitter text-white p-2"></i>
                    <i class="fa-brands fa-facebook-f text-white p-2"></i>
                </div>
                <div class="col-md-8 d-none d-md-flex align-items-center justify-content-end">
                    <p class="text-white m-0 float-start f-12">
                        This is an educational <span class="main-color1">HTML CSS</span> template by TemplateMo website
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--subHeader-end-->
    <!--header-start-->
    <header class="container-fluid position-relative overflow-hidden" id="headerIndex">
        <div class="row">
            <div class="col-12 g-0">
                <video loop autoplay muted id="bg-video">
                    <source src="./assets/video/movie.mp4" type="video/mp4">
                </video>
                <div class="w-100 h-100 position-absolute top-0 end-0" id="header-pattern"></div>
                <section class="container-fluid position-absolute top-0 end-0 py-3" id="Nav">
                    <nav class="navbar navbar-expand-lg bg-transparent" data-bs-theme="dark">
                        <div class="container">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#myoffcanvas" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pe-0">
                                    <li class="nav-item">
                                        <a class="nav-link active text-white" aria-current="page" href="index.php">خانه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="meetings.php">جلسات</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="register.php">ثبت نام</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            صفحات
                                        </a>
                                        <ul class="dropdown-menu bg-white d-none">
                                            <li><a class="dropdown-item text-black" href="#">جلسات آینده</a></li>
                                            <li><a class="dropdown-item text-black" href="#">جزئیات جلسات</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white">دوره‌ها</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white">تماس با ما</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?php echo isset($_SESSION['username']) ? 'profile.php' : 'login.php'; ?>">
                                            <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'ورود'; ?>
                                        </a>
                                    </li>
                                    <?php if (isset($_SESSION['username'])) : ?>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="logout.php">خروج</a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <a class="navbar-brand" href="index.php">EDU MEETING</a>
                        </div>
                    </nav>
                </section>
            </div>
        </div>
        <section class="container position-relative">
            <div class="row position-absolute" id="content-header">
                <div class="col-lg-12">
                    <div>
                        <p class=" text-white f-14">لورم ایپسوم متن ساختگی</p>
                        <h1 class="text-white my-3 width-50">به دنیای آموزش خوش آمدید</h1>
                        <p class="text-white width-50 lh-lg f-14">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                            گرافیک است، چاپگرها و
                            متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                            کاربردهای متنوع با هدف بهبود</p>
                        <a class="btn btn-danger text-white mt-3 px-4 rounded-5">به ما بپیوندید!</a>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!--header-end-->
    <section id="meetingPage">
        <!-- post-start-->
        <?php
        require('connection.php');
        $id_post = $_GET['id'];
        $q_select_post = "SELECT * FROM posts where id='$id_post'";
        $res = mysqli_query($conn, $q_select_post);
        $post_data = mysqli_fetch_assoc($res);
        ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto my-3">
                    <div class="card">
                        <img src="<?= $post_data['image'] ?>" class="card-img-top object-fit-contain img-fluid" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $post_data['title'] ?></h5>
                            <p class="card-text"><?= $post_data['body'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- post-end-->

        <!--footer-start-->
        <footer class="container-fluid g-0">
            <section id="copyRight" class="container-fluid border-top mt-5">
                <div class="row mt-4">
                    <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                        <p class="text-white text-center">.COPYRIGHT © 2022 EDU MEETING CO., LTD. ALL RIGHTS RESERVED</p>
                        <p class="text-white text-center">DESIGN: <span class="main-color1">Asie Davari</span></p>
                    </div>
                </div>
            </section>
        </footer>
        <!--footer-end-->
    </section>

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
    <script src="./assets/js/main.js"></script>

</body>

</html>