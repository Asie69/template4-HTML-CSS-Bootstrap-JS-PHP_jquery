<?php session_start(); ?>
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


  <!--services and meeting-start-->
  <section class="container-fluid" id="meeting-main">
    <!--services-start-->
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="owl-carousel">
              <div class="item p-5 text-center">
                <img src="assets/images/service-icon-01.png" alt="" id="icon">
                <h4 class="text-white p-3">بهترین آموزش‌ها</h4>
                <p class="text-white lh-lg">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
              </div>
              <div class="item p-5 text-center">
                <img src="assets/images/service-icon-02.png" alt="" id="icon">
                <h4 class="text-white p-3">بهترین معلمان</h4>
                <p class="text-white lh-lg">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
              </div>
              <div class="item p-5 text-center">
                <img src="assets/images/service-icon-03.png" alt="" id="icon">
                <h4 class="text-white p-3">بهترین دانشجویان</h4>
                <p class="text-white lh-lg">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
              </div>
              <div class="item p-5 text-center">
                <img src="assets/images/service-icon-02.png" alt="" id="icon">
                <h4 class="text-white p-3">جلسات آنلاین</h4>
                <p class="text-white lh-lg">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
              </div>
              <div class="item p-5 text-center">
                <img src="assets/images/service-icon-03.png" alt="" id="icon">
                <h4 class="text-white p-3">بهترین شبکه</h4>
                <p class="text-white lh-lg">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--services-end-->
    <!--meeting-start-->
    <div id="meeting" class="container">
      <div class="row justify-content-between">
        <div class="col-12 mt-lg-5 pt-lg-5 text-center border-bottom border-white">
          <h3 class="mb-5 pt-2 pt-lg-5 mt-lg-5 text-white">جلسات</h3>
        </div>
        <div class="col-lg-8 d-flex justify-content-between align-items-center flex-wrap order-2 order-lg-1">
          <div class="card mt-4 position-relative border-0 rounded-5">
            <img src="assets/images/meeting-02.jpg" class="card-img-top rounded-top-5" alt="...">
            <div class="bg-white rounded-4 position-absolute price p-2"><span class="text-black">1800000 تومان</span>
            </div>
            <div class="card-body d-flex">
              <h5 class="px-2">24 <span class="main-color2">آذر</span></h5>
              <div class="d-flex flex-column">
                <h5 class="card-title">لورم ایپسوم متن</h5>
                <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
              </div>
            </div>
          </div>
          <div class="card mt-4 position-relative border-0 rounded-5">
            <img src="assets/images/meeting-01.jpg" class="card-img-top rounded-top-5" alt="...">
            <div class="bg-white rounded-4 position-absolute price p-2"><span class="text-black">1800000 تومان</span>
            </div>
            <div class="card-body d-flex">
              <h5 class="px-2">24 <span class="main-color2">آذر</span></h5>
              <div class="d-flex flex-column">
                <h5 class="card-title">لورم ایپسوم متن</h5>
                <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
              </div>
            </div>
          </div>
          <div class="card mt-4 position-relative border-0 rounded-5">
            <img src="assets/images/meeting-04.jpg" class="card-img-top rounded-top-5" alt="...">
            <div class="bg-white rounded-4 position-absolute price p-2"><span class="text-black">1800000 تومان</span>
            </div>
            <div class="card-body d-flex">
              <h5 class="px-2">24 <span class="main-color2">آذر</span></h5>
              <div class="d-flex flex-column">
                <h5 class="card-title">لورم ایپسوم متن</h5>
                <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
              </div>
            </div>
          </div>
          <div class="card mt-4 position-relative border-0 rounded-5">
            <img src="assets/images/meeting-03.jpg" class="card-img-top rounded-top-5" alt="...">
            <div class="bg-white rounded-4 position-absolute price p-2"><span class="text-black">1800000 تومان</span>
            </div>
            <div class="card-body d-flex">
              <h5 class="px-2">24 <span class="main-color2">آذر</span></h5>
              <div class="d-flex flex-column">
                <h5 class="card-title">لورم ایپسوم متن</h5>
                <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 p-4 bg-white h-50 mt-4 rounded-5 order-1 order-lg-2">
          <h5>دسته‌بندی جلسات</h5>
          <hr class="my-4">
          <ul class="p-0">
            <li class="list-unstyled my-2">لورم ایپسوم متن ساختگی</li>
            <li class="list-unstyled">لورم ایپسوم متن ساختگی</li>
            <li class="list-unstyled my-2">لورم ایپسوم متن ساختگی</li>
            <li class="list-unstyled">لورم ایپسوم متن ساختگی</li>
            <li class="list-unstyled my-2">لورم ایپسوم متن ساختگی</li>
          </ul>
          <hr class="my-4">
          <a href="#" class="btn btn-danger rounded-5 py-2 px-5">تمام جلسات پیش‌رو</a>
        </div>
      </div>
    </div>
    <!--meeting-end-->
  </section>
  <!--services and meeting-end-->
  <!--apply-start-->
  <section id="apply-now" class="container-fluid g-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item rounded-top-5">
              <h2 class="accordion-header">
                <button class="accordion-button rounded-top-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  درباره کلاس‌های آموزش HTML
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها
                  و
                  متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                  کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و
                  آینده،
                  شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                  الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و
                  دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                  دستاوردهای
                  اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  طراحی با Bootstrap, HTML, CSS
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها
                  و
                  متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                  کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و
                  آینده،
                  شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                  الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و
                  دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                  دستاوردهای
                  اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  لطفا به دوستانتان بگویید
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها
                  و
                  متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                  کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و
                  آینده،
                  شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                  الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و
                  دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                  دستاوردهای
                  اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </div>
              </div>
            </div>
            <div class="accordion-item rounded-bottom-5">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed rounded-bottom-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  با همکاران خود به اشتراک بگذارید
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها
                  و
                  متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                  کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و
                  آینده،
                  شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                  الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و
                  دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                  دستاوردهای
                  اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" id="bachelorDegree">
          <div class="col-12 p-5">
            <h3 class="text-white">لورم ایپسوم متن ساختگی</h3>
            <p class="text-white my-4 lh-lg">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
            </p>
            <a href="#" class="btn btn-danger rounded-5 px-4 py-2 border-0">به ما بپیوندید!</a>
          </div>
          <div class="col-12 mt-4 p-5">
            <h3 class="text-white">لورم ایپسوم متن ساختگی</h3>
            <p class="text-white my-4 lh-lg">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
            </p>
            <a href="#" class="btn btn-danger rounded-5 px-4 py-2 border-0">به ما بپیوندید!</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--apply-end-->
  <!--popular course-start-->
  <section id="popularCourse">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="text-white">دوره‌های پرطرفدار ما</h3>
          <hr class="my-5 text-white">
        </div>
        <div class="owl-carousel">
          <div class="item text-center bg-white">
            <img src="./assets/images/course-01.jpg" alt="">
            <h6 class="my-4 text-center">لورم ایپسوم متن ساختگی</h6>
            <hr>
            <div class="row">
              <div class="col-6 text-start">
                <i class="fa-solid fa-star text-warning ms-3"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
              </div>
              <div class="col-6">
                <p>1800000 تومان</p>
              </div>
            </div>
          </div>
          <div class="item text-center bg-white">
            <img src="./assets/images/course-02.jpg" alt="">
            <h6 class="my-4 text-center">لورم ایپسوم متن ساختگی</h6>
            <hr class="">
            <div class="row">
              <div class="col-6 text-start">
                <i class="fa-solid fa-star text-warning ms-3"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
              </div>
              <div class="col-6">
                <p>1800000 تومان</p>
              </div>
            </div>
          </div>
          <div class="item text-center bg-white">
            <img src="./assets/images/course-03.jpg" alt="">
            <h6 class="my-4 text-center">لورم ایپسوم متن ساختگی</h6>
            <hr class="">
            <div class="row">
              <div class="col-6 text-start">
                <i class="fa-solid fa-star text-warning ms-3"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
              </div>
              <div class="col-6">
                <p>1800000 تومان</p>
              </div>
            </div>
          </div>
          <div class="item text-center bg-white">
            <img src="./assets/images/course-04.jpg" alt="">
            <h6 class="my-4 text-center">لورم ایپسوم متن ساختگی</h6>
            <hr class="">
            <div class="row">
              <div class="col-6 text-start">
                <i class="fa-solid fa-star text-warning ms-3"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
              </div>
              <div class="col-6">
                <p>1800000 تومان</p>
              </div>
            </div>
          </div>
          <div class="item text-center bg-white">
            <img src="./assets/images/course-01.jpg" alt="">
            <h6 class="my-4 text-center">لورم ایپسوم متن ساختگی</h6>
            <hr class="">
            <div class="row">
              <div class="col-6 text-start">
                <i class="fa-solid fa-star text-warning ms-3"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
              </div>
              <div class="col-6">
                <p>1800000 تومان</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--fact-start-->
  <section id="facts">
    <div class="container">
      <div class="row mt-3 justify-content-between">
        <div class="col-lg-6">
          <div class="col-12">
            <h2 class="w-75 text-white">چند واقعیت در مورد دانشگاه ما</h2>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="col-12 bg-secondary py-5 my-4 text-center rounded-5 bg-opacity-25">
                <div class="d-flex justify-content-center">
                  <h3 class="main-color1">%</h3>
                  <h3 class="main-color1" id="students"></h3>
                </div>
                <p class="text-white">دانشجویان موفق</p>
              </div>
              <div class="col-12 bg-secondary p-5 mt-4 text-center rounded-5 bg-opacity-25">
                <h3 class="main-color1" id="teachers"></h3>
                <p class="text-white">استاد</p>
              </div>
            </div>
            <div class="col-lg-6 mt-lg-5">
              <div class="col-12 bg-secondary py-5 my-4 text-center rounded-5 bg-opacity-25">
                <h3 class="main-color1" id="newStudents"></h3>
                <p class="text-white">دانشجویان جدید</p>
              </div>
              <div class="col-12 bg-secondary py-5 my-4 text-center rounded-5 bg-opacity-25">
                <h3 class="main-color1" id="awards"></h3>
                <p class="text-white">جوایز</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 d-flex justify-content-center align-items-center rounded-5">
          <a href="#" target="-blank">
            <img src="assets/images/play-icon.png">
          </a>
        </div>
      </div>
    </div>
  </section>
  <!--fact-end-->

  <!--footer-start-->
  <footer class="container-fluid" id="footerIndex">
    <div class="container mb-4">
      <div class="row justify-content-between">
        <div class="col-lg-8 bg-white rounded-5 px-5 mb-4 mb-lg-0">
          <?php
          if (isset($_GET['isSend']) && $_GET['isSend'] == 'true') : ?>
            <div class="alert alert-success mt-3" role="alert">
              ارسال نظر شما انجام شد.
            </div>
          <?php endif; ?>
          <?php
          if (isset($_GET['isSend']) && $_GET['isSend'] == 'false') : ?>
            <div class="alert alert-danger mt-3" role="alert">
              ارسال نظر شما با مشکل مواجه شد.لطفا مجددا تلاش نمایید
            </div>
          <?php endif; ?>
          <h3 class="mt-5">با ما در تماس باشید</h3>
          <hr class="my-5">
          <form class="row" method="POST" action="<?php echo htmlspecialchars('msg.php'); ?>" onsubmit="return validation()" id="form-msg">
            <div class="col-lg-3">
              <input type="text" class="form-control bg-light border-0" placeholder="نام" name="username" id="userName" onkeyup="validation()">
              <div id="userError"></div>
            </div>
            <div class="col-lg-3 my-4 my-lg-0">
              <input type="email" class="form-control bg-light border-0" placeholder="ایمیل" name="email" id="Email" onkeyup="validation()">
              <div id="emailError"></div>
            </div>
            <div class="col-lg-3">
              <input type="text" class="form-control bg-light border-0" placeholder="موضوع" name="subject" id="subject" onkeyup="validation()">
            </div>
            <div class="col-12 my-4">
              <textarea class="form-control bg-light border-0" placeholder="توضیحات" name="comment" id="comment" onkeyup="validation()"></textarea>
              <button type="submit" class="btn btn-danger mt-4 px-4 rounded-5" id="msg-btn">ارسال</button>
            </div>

          </form>
        </div>
        <div class="col-lg-3 px-3 py-5 rounded-5 bg-danger">
          <ul>
            <li class="list-unstyled text-white">شماره تماس</li>
            <li class="list-unstyled text-white">09100000000</li>
            <li class="list-unstyled text-white">
              <hr>
            </li>
            <li class="list-unstyled text-white">آدرس ایمیل</li>
            <li class="list-unstyled text-white">info@meeting.edu</li>
            <li class="list-unstyled text-white">
              <hr>
            </li>
            <li class="list-unstyled text-white">آدرس</li>
            <li class="list-unstyled text-white">ایران، مشهد، خیابان لورم، پلاک ...</li>
            <li class="list-unstyled text-white">
              <hr>
            </li>
            <li class="list-unstyled text-white">آدرس وبسایت</li>
            <li class="list-unstyled text-white">www.meeting.edu</li>
          </ul>
        </div>
      </div>
    </div>
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