<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fourmind Academy | آکادمی فورمایند</title>
  <link rel="icon" type="image/x-icon" href="assets/img/android-chrome-192x192.png">

  <!-- bootstrap-v5 Css -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap-reboot.rtl.min.css">
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.rtl.min.css">
  <!-- <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap-utilities.rtl.min.css"> -->

  <!-- Swiper Css -->
  <link rel="stylesheet" href="assets/vendor/swiper/css/swiper-bundle.min.css">

  <!-- Diplomat Css -->
  <!-- <link rel="stylesheet" href="assets/css/global.css"> -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- <link rel="stylesheet" href="assets/css/responsive.css"> -->
</head>
<body class="body">

    <!-- Fourmind Start -->
    <section id="fourmind" class="container-fluid fourmind">
        <div class="container">
            <div class="row">
                <div class="col-12 column">
                    <!-- Slider main container -->
                    <div class="swiper fourmindSwiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <!-- Slides -->
                            <div class="swiper-slide main-slide" data-bullet="خانه">
                                <div class="main-container">
                                    <h2 class="primary-desc">
                                        مهمترین تصمیمات زندگیِ شخصی و کاریِ تو، ربطی به چیزهایی که میدونی نداره. ربط به نحوه ی فکر کردنت داره. اینکه در لحظه چطور کنترل افکار و احساساتت رو داری انتخاب های آگاهانه ی تو رو مشخص میکنه.
                                    </h2>
                                    <h1 class="primary-slogan">
                                        آکادمی فورمایند روی ذهنیت تو و ابزارهایی که برای شفاف‌اندیشی و تصمیم‌گیری در اختیار داری کار می‌کنه.
                                    </h1>
                                    <button class="btn btn-start">
                                        <svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M30.0333 20.55L27.9999 18.5167C27.5166 18.1 27.2333 17.4833 27.2166 16.8C27.1833 16.05 27.4833 15.3 28.0333 14.75L30.0333 12.75C31.7666 11.0167 32.4166 9.35 31.8666 8.03334C31.3333 6.73334 29.6833 6.01667 27.2499 6.01667H9.83325V4.58334C9.83325 3.9 9.26659 3.33334 8.58325 3.33334C7.89992 3.33334 7.33325 3.9 7.33325 4.58334V35.4167C7.33325 36.1 7.89992 36.6667 8.58325 36.6667C9.26659 36.6667 9.83325 36.1 9.83325 35.4167V27.2833H27.2499C29.6499 27.2833 31.2666 26.55 31.8166 25.2333C32.3666 23.9167 31.7333 22.2667 30.0333 20.55Z" fill="white"/>
                                        </svg>
                                        شروع کن!
                                    </button>
                                </div>
                            </div>
                            <div class="swiper-slide main-slide" data-hash="two" data-bullet="کارگاه‌ها">
                                <div class="main-container">
                                    <!-- Slider inside container -->
                                    <div class="swiper cardSwiper">
                                        <div class="swiper-wrapper">
                                            <?php
                                                for( $i = 0; $i < 10 ; $i++ ) { 
                                                    include dirname(__FILE__) . '/components/card.php';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide main-slide" data-hash="three" data-bullet="فرم تماس">
                                <div class="main-container form-container">
                                    <div class="form-heading">فرم ثبت نام در کارگاه تفکر انتقادی</div>
                                    <form method="get" class="fourmind-form form-step-one">
                                        <input type="text" name="course-id" id="course-id" class="course-id" value="" require>
                                        <input type="text" name="full-name" id="full-name" class="full-name" value="" require>
                                        <input type="text" name="job" id="job" class="job" value="" require>

                                        <!-- <input type="submit" value="ارسال"> -->
                                    </form>
                                    <div class="form-btn">
                                        <button class="btn btn-prev">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.66003 20.4201L16.18 13.9001C16.95 13.1301 16.95 11.8701 16.18 11.1001L9.66003 4.58008" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            مرحله قبل
                                        </button>
                                        <button class="btn btn-next">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.2501 20.4201L8.73009 13.9001C7.96009 13.1301 7.96009 11.8701 8.73009 11.1001L15.2501 4.58008" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            مرحله بعد
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide main-slide" data-bullet="فرم سوالات">
                                <div class="main-container form-container">

                                </div>
                            
                            </div>
                            <div class="swiper-slide main-slide" data-bullet="هزینه">
                                <div class="main-container form-container">

                                </div>
                            
                            </div>
                            <div class="swiper-slide main-slide" data-hash="success" data-bullet="تایید نهایی">
                                <div class="main-container form-container">

                                </div>
                            
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
















                    <a href="/" class="logo-desktop">
                        <img src="assets/img/logo.png" alt="Fourmind Academy" width="auto" height="auto">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Fourmind End -->

    <!-- Test Start -->
    <!-- <section id="test" class="container-fluid test">
    <div class="container">
        <div class="row">
        <div class="col-12 column">
        </div>
        </div>
    </div>
    </section> -->
    <!-- Test End -->


  <!-- bootstrap-v5 Js -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="assets/vendor/bootstrap/js/popper.min.js"></script> -->
  <!-- <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> -->

  <!-- Swiper Js -->
  <script src="assets/vendor/swiper/js/swiper-bundle.min.js"></script> 

  <!-- Fourmind Js -->
  <script src="assets/js/script.js"></script>

</body>
</html>