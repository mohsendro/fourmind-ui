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
                            <div class="swiper-slide main-slide" data-hash="one" data-bullet="خانه">
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
                                    <div class="form-heading">
                                        <h2 class="title">فرم ثبت نام در کارگاه تفکر انتقادی</h2>
                                        <span class="notic">
                                            <svg width="20" height="20" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2.5C6.49 2.5 2 6.99 2 12.5C2 18.01 6.49 22.5 12 22.5C17.51 22.5 22 18.01 22 12.5C22 6.99 17.51 2.5 12 2.5ZM11.25 8.5C11.25 8.09 11.59 7.75 12 7.75C12.41 7.75 12.75 8.09 12.75 8.5V13.5C12.75 13.91 12.41 14.25 12 14.25C11.59 14.25 11.25 13.91 11.25 13.5V8.5ZM12.92 16.88C12.87 17.01 12.8 17.11 12.71 17.21C12.61 17.3 12.5 17.37 12.38 17.42C12.26 17.47 12.13 17.5 12 17.5C11.87 17.5 11.74 17.47 11.62 17.42C11.5 17.37 11.39 17.3 11.29 17.21C11.2 17.11 11.13 17.01 11.08 16.88C11.03 16.76 11 16.63 11 16.5C11 16.37 11.03 16.24 11.08 16.12C11.13 16 11.2 15.89 11.29 15.79C11.39 15.7 11.5 15.63 11.62 15.58C11.86 15.48 12.14 15.48 12.38 15.58C12.5 15.63 12.61 15.7 12.71 15.79C12.8 15.89 12.87 16 12.92 16.12C12.97 16.24 13 16.37 13 16.5C13 16.63 12.97 16.76 12.92 16.88Z" fill="#FF5858"/>
                                            </svg>
                                            جواب دادن به این سوالات اجباری نیست اما پاسخ دادن به اون‌ها تاثیر بسیار زیادی روی طراحی هدفمند مباحث کارگاه برای مخاطبین و جنس دغدغه اونها داره. 
                                        </span>
                                    </div>
                                    <form method="get" class="fourmind-form form-step-one">
                                        <div class="row">
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <input type="hidden" name="course-id" id="course-id" class="form-control course-id">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 column">
                                                <div class="form-group">
                                                    <div class="danger-message full-name-message">
                                                        <svg width="15" height="15" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M18.1333 13.7667L12.8 4.16675C12.0833 2.87508 11.0916 2.16675 9.99998 2.16675C8.90831 2.16675 7.91665 2.87508 7.19998 4.16675L1.86665 13.7667C1.19165 14.9917 1.11665 16.1667 1.65831 17.0917C2.19998 18.0167 3.26665 18.5251 4.66665 18.5251H15.3333C16.7333 18.5251 17.8 18.0167 18.3416 17.0917C18.8833 16.1667 18.8083 14.9834 18.1333 13.7667ZM9.37498 8.00008C9.37498 7.65841 9.65831 7.37508 9.99998 7.37508C10.3416 7.37508 10.625 7.65841 10.625 8.00008V12.1667C10.625 12.5084 10.3416 12.7917 9.99998 12.7917C9.65831 12.7917 9.37498 12.5084 9.37498 12.1667V8.00008ZM10.5916 15.2584C10.55 15.2917 10.5083 15.3251 10.4666 15.3584C10.4166 15.3917 10.3666 15.4167 10.3166 15.4334C10.2666 15.4584 10.2166 15.4751 10.1583 15.4834C10.1083 15.4917 10.05 15.5001 9.99998 15.5001C9.94998 15.5001 9.89165 15.4917 9.83331 15.4834C9.78331 15.4751 9.73331 15.4584 9.68331 15.4334C9.63331 15.4167 9.58331 15.3917 9.53331 15.3584C9.49165 15.3251 9.44998 15.2917 9.40831 15.2584C9.25831 15.1001 9.16665 14.8834 9.16665 14.6667C9.16665 14.4501 9.25831 14.2334 9.40831 14.0751C9.44998 14.0417 9.49165 14.0084 9.53331 13.9751C9.58331 13.9417 9.63331 13.9167 9.68331 13.9001C9.73331 13.8751 9.78331 13.8584 9.83331 13.8501C9.94165 13.8251 10.0583 13.8251 10.1583 13.8501C10.2166 13.8584 10.2666 13.8751 10.3166 13.9001C10.3666 13.9167 10.4166 13.9417 10.4666 13.9751C10.5083 14.0084 10.55 14.0417 10.5916 14.0751C10.7416 14.2334 10.8333 14.4501 10.8333 14.6667C10.8333 14.8834 10.7416 15.1001 10.5916 15.2584Z" fill="#FF5858"/>
                                                        </svg>
                                                        <span>پر کردن این فیلد الزامی است!</span>
                                                    </div>
                                                    <label for="full-name">نام و نام خانوادگی<span class="star">*</span></label>
                                                    <input type="text" name="full-name" id="full-name" class="form-control full-name" require>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 column">
                                                <div class="form-group">
                                                    <div class="danger-message job-message">
                                                        <svg width="15" height="15" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M18.1333 13.7667L12.8 4.16675C12.0833 2.87508 11.0916 2.16675 9.99998 2.16675C8.90831 2.16675 7.91665 2.87508 7.19998 4.16675L1.86665 13.7667C1.19165 14.9917 1.11665 16.1667 1.65831 17.0917C2.19998 18.0167 3.26665 18.5251 4.66665 18.5251H15.3333C16.7333 18.5251 17.8 18.0167 18.3416 17.0917C18.8833 16.1667 18.8083 14.9834 18.1333 13.7667ZM9.37498 8.00008C9.37498 7.65841 9.65831 7.37508 9.99998 7.37508C10.3416 7.37508 10.625 7.65841 10.625 8.00008V12.1667C10.625 12.5084 10.3416 12.7917 9.99998 12.7917C9.65831 12.7917 9.37498 12.5084 9.37498 12.1667V8.00008ZM10.5916 15.2584C10.55 15.2917 10.5083 15.3251 10.4666 15.3584C10.4166 15.3917 10.3666 15.4167 10.3166 15.4334C10.2666 15.4584 10.2166 15.4751 10.1583 15.4834C10.1083 15.4917 10.05 15.5001 9.99998 15.5001C9.94998 15.5001 9.89165 15.4917 9.83331 15.4834C9.78331 15.4751 9.73331 15.4584 9.68331 15.4334C9.63331 15.4167 9.58331 15.3917 9.53331 15.3584C9.49165 15.3251 9.44998 15.2917 9.40831 15.2584C9.25831 15.1001 9.16665 14.8834 9.16665 14.6667C9.16665 14.4501 9.25831 14.2334 9.40831 14.0751C9.44998 14.0417 9.49165 14.0084 9.53331 13.9751C9.58331 13.9417 9.63331 13.9167 9.68331 13.9001C9.73331 13.8751 9.78331 13.8584 9.83331 13.8501C9.94165 13.8251 10.0583 13.8251 10.1583 13.8501C10.2166 13.8584 10.2666 13.8751 10.3166 13.9001C10.3666 13.9167 10.4166 13.9417 10.4666 13.9751C10.5083 14.0084 10.55 14.0417 10.5916 14.0751C10.7416 14.2334 10.8333 14.4501 10.8333 14.6667C10.8333 14.8834 10.7416 15.1001 10.5916 15.2584Z" fill="#FF5858"/>
                                                        </svg>
                                                        <span>پر کردن این فیلد الزامی است!</span>
                                                    </div>
                                                    <label for="job">شغل<span class="star">*</span></label>
                                                    <input type="text" name="job" id="job" class="form-control job" require>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 column">
                                                <div class="form-group">
                                                    <div class="danger-message field-message">
                                                        <svg width="15" height="15" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M18.1333 13.7667L12.8 4.16675C12.0833 2.87508 11.0916 2.16675 9.99998 2.16675C8.90831 2.16675 7.91665 2.87508 7.19998 4.16675L1.86665 13.7667C1.19165 14.9917 1.11665 16.1667 1.65831 17.0917C2.19998 18.0167 3.26665 18.5251 4.66665 18.5251H15.3333C16.7333 18.5251 17.8 18.0167 18.3416 17.0917C18.8833 16.1667 18.8083 14.9834 18.1333 13.7667ZM9.37498 8.00008C9.37498 7.65841 9.65831 7.37508 9.99998 7.37508C10.3416 7.37508 10.625 7.65841 10.625 8.00008V12.1667C10.625 12.5084 10.3416 12.7917 9.99998 12.7917C9.65831 12.7917 9.37498 12.5084 9.37498 12.1667V8.00008ZM10.5916 15.2584C10.55 15.2917 10.5083 15.3251 10.4666 15.3584C10.4166 15.3917 10.3666 15.4167 10.3166 15.4334C10.2666 15.4584 10.2166 15.4751 10.1583 15.4834C10.1083 15.4917 10.05 15.5001 9.99998 15.5001C9.94998 15.5001 9.89165 15.4917 9.83331 15.4834C9.78331 15.4751 9.73331 15.4584 9.68331 15.4334C9.63331 15.4167 9.58331 15.3917 9.53331 15.3584C9.49165 15.3251 9.44998 15.2917 9.40831 15.2584C9.25831 15.1001 9.16665 14.8834 9.16665 14.6667C9.16665 14.4501 9.25831 14.2334 9.40831 14.0751C9.44998 14.0417 9.49165 14.0084 9.53331 13.9751C9.58331 13.9417 9.63331 13.9167 9.68331 13.9001C9.73331 13.8751 9.78331 13.8584 9.83331 13.8501C9.94165 13.8251 10.0583 13.8251 10.1583 13.8501C10.2166 13.8584 10.2666 13.8751 10.3166 13.9001C10.3666 13.9167 10.4166 13.9417 10.4666 13.9751C10.5083 14.0084 10.55 14.0417 10.5916 14.0751C10.7416 14.2334 10.8333 14.4501 10.8333 14.6667C10.8333 14.8834 10.7416 15.1001 10.5916 15.2584Z" fill="#FF5858"/>
                                                        </svg>
                                                        <span>پر کردن این فیلد الزامی است!</span>
                                                    </div>
                                                    <label for="field">رشته مورد علاقه<span class="star">*</span></label>
                                                    <input type="text" name="field" id="field" class="form-control field" require>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 column">
                                                <div class="form-group">
                                                    <div class="danger-message tel-message">
                                                        <svg width="15" height="15" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M18.1333 13.7667L12.8 4.16675C12.0833 2.87508 11.0916 2.16675 9.99998 2.16675C8.90831 2.16675 7.91665 2.87508 7.19998 4.16675L1.86665 13.7667C1.19165 14.9917 1.11665 16.1667 1.65831 17.0917C2.19998 18.0167 3.26665 18.5251 4.66665 18.5251H15.3333C16.7333 18.5251 17.8 18.0167 18.3416 17.0917C18.8833 16.1667 18.8083 14.9834 18.1333 13.7667ZM9.37498 8.00008C9.37498 7.65841 9.65831 7.37508 9.99998 7.37508C10.3416 7.37508 10.625 7.65841 10.625 8.00008V12.1667C10.625 12.5084 10.3416 12.7917 9.99998 12.7917C9.65831 12.7917 9.37498 12.5084 9.37498 12.1667V8.00008ZM10.5916 15.2584C10.55 15.2917 10.5083 15.3251 10.4666 15.3584C10.4166 15.3917 10.3666 15.4167 10.3166 15.4334C10.2666 15.4584 10.2166 15.4751 10.1583 15.4834C10.1083 15.4917 10.05 15.5001 9.99998 15.5001C9.94998 15.5001 9.89165 15.4917 9.83331 15.4834C9.78331 15.4751 9.73331 15.4584 9.68331 15.4334C9.63331 15.4167 9.58331 15.3917 9.53331 15.3584C9.49165 15.3251 9.44998 15.2917 9.40831 15.2584C9.25831 15.1001 9.16665 14.8834 9.16665 14.6667C9.16665 14.4501 9.25831 14.2334 9.40831 14.0751C9.44998 14.0417 9.49165 14.0084 9.53331 13.9751C9.58331 13.9417 9.63331 13.9167 9.68331 13.9001C9.73331 13.8751 9.78331 13.8584 9.83331 13.8501C9.94165 13.8251 10.0583 13.8251 10.1583 13.8501C10.2166 13.8584 10.2666 13.8751 10.3166 13.9001C10.3666 13.9167 10.4166 13.9417 10.4666 13.9751C10.5083 14.0084 10.55 14.0417 10.5916 14.0751C10.7416 14.2334 10.8333 14.4501 10.8333 14.6667C10.8333 14.8834 10.7416 15.1001 10.5916 15.2584Z" fill="#FF5858"/>
                                                        </svg>
                                                        <span>پر کردن این فیلد با فرمت *********09 الزامی است!</span>
                                                    </div>
                                                    <label for="tel">تلفن تماس<span class="star">*</span></label>
                                                    <input type="text" name="tel" id="tel" class="form-control tel" require>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 column">
                                                <div class="form-group">
                                                    <div class="danger-message email-message">
                                                        <svg width="15" height="15" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M18.1333 13.7667L12.8 4.16675C12.0833 2.87508 11.0916 2.16675 9.99998 2.16675C8.90831 2.16675 7.91665 2.87508 7.19998 4.16675L1.86665 13.7667C1.19165 14.9917 1.11665 16.1667 1.65831 17.0917C2.19998 18.0167 3.26665 18.5251 4.66665 18.5251H15.3333C16.7333 18.5251 17.8 18.0167 18.3416 17.0917C18.8833 16.1667 18.8083 14.9834 18.1333 13.7667ZM9.37498 8.00008C9.37498 7.65841 9.65831 7.37508 9.99998 7.37508C10.3416 7.37508 10.625 7.65841 10.625 8.00008V12.1667C10.625 12.5084 10.3416 12.7917 9.99998 12.7917C9.65831 12.7917 9.37498 12.5084 9.37498 12.1667V8.00008ZM10.5916 15.2584C10.55 15.2917 10.5083 15.3251 10.4666 15.3584C10.4166 15.3917 10.3666 15.4167 10.3166 15.4334C10.2666 15.4584 10.2166 15.4751 10.1583 15.4834C10.1083 15.4917 10.05 15.5001 9.99998 15.5001C9.94998 15.5001 9.89165 15.4917 9.83331 15.4834C9.78331 15.4751 9.73331 15.4584 9.68331 15.4334C9.63331 15.4167 9.58331 15.3917 9.53331 15.3584C9.49165 15.3251 9.44998 15.2917 9.40831 15.2584C9.25831 15.1001 9.16665 14.8834 9.16665 14.6667C9.16665 14.4501 9.25831 14.2334 9.40831 14.0751C9.44998 14.0417 9.49165 14.0084 9.53331 13.9751C9.58331 13.9417 9.63331 13.9167 9.68331 13.9001C9.73331 13.8751 9.78331 13.8584 9.83331 13.8501C9.94165 13.8251 10.0583 13.8251 10.1583 13.8501C10.2166 13.8584 10.2666 13.8751 10.3166 13.9001C10.3666 13.9167 10.4166 13.9417 10.4666 13.9751C10.5083 14.0084 10.55 14.0417 10.5916 14.0751C10.7416 14.2334 10.8333 14.4501 10.8333 14.6667C10.8333 14.8834 10.7416 15.1001 10.5916 15.2584Z" fill="#FF5858"/>
                                                        </svg>
                                                        <span>پر کردن این فیلد با فرمت com.***@*** الزامی است!</span>
                                                    </div>
                                                    <label for="email">ایمیل<span class="star">*</span></label>
                                                    <input type="text" name="email" id="email" class="form-control email" require>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 column">
                                                <div class="form-group form-group-radio">
                                                    <legend>انتخاب تاریخ کارگاه<span class="star">*</span></legend>
                                                    <div class="form-check">
                                                        <input type="radio" name="date" id="date1" class="form-check-input date" value="option1" checked>
                                                        <label for="date1">1 مهر 1402</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" name="date" id="date2" class="form-check-input date" value="option2">
                                                        <label for="date2">2 مهر 1402</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </form>
                                    <div class="form-btn">
                                        <button class="btn btn-prev">
                                            <svg width="15" height="15" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.66003 20.4201L16.18 13.9001C16.95 13.1301 16.95 11.8701 16.18 11.1001L9.66003 4.58008" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            مرحله قبل
                                        </button>
                                        <button class="btn btn-next">
                                            مرحله بعد
                                            <svg width="15" height="15" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.2501 20.4201L8.73009 13.9001C7.96009 13.1301 7.96009 11.8701 8.73009 11.1001L15.2501 4.58008" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide main-slide" data-hash="four" data-bullet="فرم سوالات">
                                <div class="main-container form-container">
                                    <div class="form-heading">
                                        <h2 class="title">فرم ثبت نام در کارگاه تفکر انتقادی</h2>
                                        <span class="notic">
                                            <svg width="20" height="20" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2.5C6.49 2.5 2 6.99 2 12.5C2 18.01 6.49 22.5 12 22.5C17.51 22.5 22 18.01 22 12.5C22 6.99 17.51 2.5 12 2.5ZM11.25 8.5C11.25 8.09 11.59 7.75 12 7.75C12.41 7.75 12.75 8.09 12.75 8.5V13.5C12.75 13.91 12.41 14.25 12 14.25C11.59 14.25 11.25 13.91 11.25 13.5V8.5ZM12.92 16.88C12.87 17.01 12.8 17.11 12.71 17.21C12.61 17.3 12.5 17.37 12.38 17.42C12.26 17.47 12.13 17.5 12 17.5C11.87 17.5 11.74 17.47 11.62 17.42C11.5 17.37 11.39 17.3 11.29 17.21C11.2 17.11 11.13 17.01 11.08 16.88C11.03 16.76 11 16.63 11 16.5C11 16.37 11.03 16.24 11.08 16.12C11.13 16 11.2 15.89 11.29 15.79C11.39 15.7 11.5 15.63 11.62 15.58C11.86 15.48 12.14 15.48 12.38 15.58C12.5 15.63 12.61 15.7 12.71 15.79C12.8 15.89 12.87 16 12.92 16.12C12.97 16.24 13 16.37 13 16.5C13 16.63 12.97 16.76 12.92 16.88Z" fill="#FF5858"/>
                                            </svg>
                                            جواب دادن به این سوالات اجباری نیست اما پاسخ دادن به اون‌ها تاثیر بسیار زیادی روی طراحی هدفمند مباحث کارگاه برای مخاطبین و جنس دغدغه اونها داره. 
                                        </span>
                                    </div>
                                    <form method="get" class="fourmind-form form-step-two">
                                        <div class="row">
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <label for="textarea1">در مورد چه چیزهایی سال‌ها خیلی اشتباه فکر می‌کردی؟</label>
                                                    <textarea name="textarea1" id="textarea1" class="form-control textarea textarea1" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <label for="textarea2">چطور میتونی متوجه بشی که افکارت کارآمد یا ناکارآمد هستند؟</label>
                                                    <textarea name="textarea2" id="textarea2" class="form-control textarea textarea2" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <label for="textarea3">چه زمان‌ها و در جه موقعیت‌هایی تونستی به اشتباهاتت پی ببری؟</label>
                                                    <textarea name="textarea3" id="textarea3" class="form-control textarea textarea3" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>  
                                    </form>
                                    <div class="form-btn">
                                        <button class="btn btn-prev">
                                            <svg width="15" height="15" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.66003 20.4201L16.18 13.9001C16.95 13.1301 16.95 11.8701 16.18 11.1001L9.66003 4.58008" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            مرحله قبل
                                        </button>
                                        <button class="btn btn-next">
                                            مرحله بعد
                                            <svg width="15" height="15" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.2501 20.4201L8.73009 13.9001C7.96009 13.1301 7.96009 11.8701 8.73009 11.1001L15.2501 4.58008" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide main-slide" data-hash="five" data-bullet="فرم سوالات">
                                <div class="main-container form-container">
                                    <div class="form-heading">
                                        <h2 class="title">فرم ثبت نام در کارگاه تفکر تیم محور</h2>
                                        <span class="notic">
                                            <svg width="20" height="20" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2.5C6.49 2.5 2 6.99 2 12.5C2 18.01 6.49 22.5 12 22.5C17.51 22.5 22 18.01 22 12.5C22 6.99 17.51 2.5 12 2.5ZM11.25 8.5C11.25 8.09 11.59 7.75 12 7.75C12.41 7.75 12.75 8.09 12.75 8.5V13.5C12.75 13.91 12.41 14.25 12 14.25C11.59 14.25 11.25 13.91 11.25 13.5V8.5ZM12.92 16.88C12.87 17.01 12.8 17.11 12.71 17.21C12.61 17.3 12.5 17.37 12.38 17.42C12.26 17.47 12.13 17.5 12 17.5C11.87 17.5 11.74 17.47 11.62 17.42C11.5 17.37 11.39 17.3 11.29 17.21C11.2 17.11 11.13 17.01 11.08 16.88C11.03 16.76 11 16.63 11 16.5C11 16.37 11.03 16.24 11.08 16.12C11.13 16 11.2 15.89 11.29 15.79C11.39 15.7 11.5 15.63 11.62 15.58C11.86 15.48 12.14 15.48 12.38 15.58C12.5 15.63 12.61 15.7 12.71 15.79C12.8 15.89 12.87 16 12.92 16.12C12.97 16.24 13 16.37 13 16.5C13 16.63 12.97 16.76 12.92 16.88Z" fill="#FF5858"/>
                                            </svg>
                                            جواب دادن به این سوالات اجباری نیست اما پاسخ دادن به اون‌ها تاثیر بسیار زیادی روی طراحی هدفمند مباحث کارگاه برای مخاطبین و جنس دغدغه اونها داره. 
                                        </span>
                                    </div>
                                    <form method="get" class="fourmind-form form-step-three">
                                        <div class="row">
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <label for="textarea4">چه خاطره‌ای یادت میاد که روی تیم‌ورک بودنت تاثیر منفی گذاشته؟</label>
                                                    <textarea name="textarea4" id="textarea4" class="form-control textarea textarea4" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <label for="textarea5">یک تجربه شخصی از تیم‌ورک رو برامون بنویس</label>
                                                    <textarea name="textarea5" id="textarea5" class="form-control textarea textarea5" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <label for="textarea6">به نظرت چرا در ایران در کار تیمی ضعیف هستیم؟</label>
                                                    <textarea name="textarea6" id="textarea6" class="form-control textarea textarea6" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>  
                                    </form>
                                    <div class="form-btn">
                                        <button class="btn btn-prev">
                                            <svg width="15" height="15" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.66003 20.4201L16.18 13.9001C16.95 13.1301 16.95 11.8701 16.18 11.1001L9.66003 4.58008" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            مرحله قبل
                                        </button>
                                        <button class="btn btn-next">
                                            مرحله بعد
                                            <svg width="15" height="15" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.2501 20.4201L8.73009 13.9001C7.96009 13.1301 7.96009 11.8701 8.73009 11.1001L15.2501 4.58008" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide main-slide" data-hash="six" data-bullet="فرم سوالات">
                                <div class="main-container form-container">
                                    <div class="form-heading">
                                        <h2 class="title">فرم ثبت نام در کارگاه نگرش پایدار، اقتصاد متقابل و خلق ارزش</h2>
                                        <span class="notic">
                                            <svg width="20" height="20" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2.5C6.49 2.5 2 6.99 2 12.5C2 18.01 6.49 22.5 12 22.5C17.51 22.5 22 18.01 22 12.5C22 6.99 17.51 2.5 12 2.5ZM11.25 8.5C11.25 8.09 11.59 7.75 12 7.75C12.41 7.75 12.75 8.09 12.75 8.5V13.5C12.75 13.91 12.41 14.25 12 14.25C11.59 14.25 11.25 13.91 11.25 13.5V8.5ZM12.92 16.88C12.87 17.01 12.8 17.11 12.71 17.21C12.61 17.3 12.5 17.37 12.38 17.42C12.26 17.47 12.13 17.5 12 17.5C11.87 17.5 11.74 17.47 11.62 17.42C11.5 17.37 11.39 17.3 11.29 17.21C11.2 17.11 11.13 17.01 11.08 16.88C11.03 16.76 11 16.63 11 16.5C11 16.37 11.03 16.24 11.08 16.12C11.13 16 11.2 15.89 11.29 15.79C11.39 15.7 11.5 15.63 11.62 15.58C11.86 15.48 12.14 15.48 12.38 15.58C12.5 15.63 12.61 15.7 12.71 15.79C12.8 15.89 12.87 16 12.92 16.12C12.97 16.24 13 16.37 13 16.5C13 16.63 12.97 16.76 12.92 16.88Z" fill="#FF5858"/>
                                            </svg>
                                            جواب دادن به این سوالات اجباری نیست اما پاسخ دادن به اون‌ها تاثیر بسیار زیادی روی طراحی هدفمند مباحث کارگاه برای مخاطبین و جنس دغدغه اونها داره. 
                                        </span>
                                    </div>
                                    <form method="get" class="fourmind-form form-step-four">
                                        <div class="row">
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <label for="textarea7">یک رابطه پایدار از دید تو چگونه است؟</label>
                                                    <textarea name="textarea7" id="textarea7" class="form-control textarea textarea7" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <legend>از ارزش‌هایی که در زیر آمده ۶ ارزش رو که برات از همه مهم‌ترن انتخاب کن</legend>
                                                    <div class="btn-group btn-group-narrow" role="group" aria-label="Basic checkbox toggle button group">
                                                        <input type="checkbox" name="btncheck1" id="btncheck1" class="btn-check btncheck1" /><label class="btn btn-default" for="btncheck1">نوع دوستی</label>
                                                        <input type="checkbox" name="btncheck2" id="btncheck2" class="btn-check btncheck2" /><label class="btn btn-default" for="btncheck2">توانمندی</label>
                                                        <input type="checkbox" name="btncheck3" id="btncheck3" class="btn-check btncheck3" /><label class="btn btn-default" for="btncheck3">مسئولیت</label>
                                                        <input type="checkbox" name="btncheck4" id="btncheck4" class="btn-check btncheck4" /><label class="btn btn-default" for="btncheck4">نوآوری</label>
                                                        <input type="checkbox" name="btncheck5" id="btncheck5" class="btn-check btncheck5" /><label class="btn btn-default" for="btncheck5">پذیرش</label>
                                                        <input type="checkbox" name="btncheck6" id="btncheck6" class="btn-check btncheck6" /><label class="btn btn-default" for="btncheck6">تطبیق‌پذیری</label>
                                                        <input type="checkbox" name="btncheck7" id="btncheck7" class="btn-check btncheck7" /><label class="btn btn-default" for="btncheck7">موفقیت</label>
                                                        <input type="checkbox" name="btncheck8" id="btncheck8" class="btn-check btncheck8" /><label class="btn btn-default" for="btncheck8">یک‌پارچگی</label>
                                                        <input type="checkbox" name="btncheck9" id="btncheck9" class="btn-check btncheck9" /><label class="btn btn-default" for="btncheck9">اکتشاف</label>
                                                        <input type="checkbox" name="btncheck10" id="btncheck10" class="btn-check btncheck10" /><label class="btn btn-default" for="btncheck10">پذیرفته شدن</label>
                                                        <input type="checkbox" name="btncheck11" id="btncheck11" class="btn-check btncheck11" /><label class="btn btn-default" for="btncheck11">کرامت</label>
                                                        <input type="checkbox" name="btncheck12" id="btncheck12" class="btn-check btncheck12" /><label class="btn btn-default" for="btncheck12">اصالت</label>
                                                        <input type="checkbox" name="btncheck13" id="btncheck13" class="btn-check btncheck13" /><label class="btn btn-default" for="btncheck13">قناعت</label>
                                                        <input type="checkbox" name="btncheck14" id="btncheck14" class="btn-check btncheck14" /><label class="btn btn-default" for="btncheck14">اعتبار</label>
                                                        <input type="checkbox" name="btncheck15" id="btncheck15" class="btn-check btncheck15" /><label class="btn btn-default" for="btncheck15">دقت</label>
                                                        <input type="checkbox" name="btncheck16" id="btncheck16" class="btn-check btncheck16" /><label class="btn btn-default" for="btncheck16">مشارکت</label>
                                                        <input type="checkbox" name="btncheck17" id="btncheck17" class="btn-check btncheck17" /><label class="btn btn-default" for="btncheck17">صداقت</label>
                                                        <input type="checkbox" name="btncheck18" id="btncheck18" class="btn-check btncheck18" /><label class="btn btn-default" for="btncheck18">نظم</label>
                                                        <input type="checkbox" name="btncheck19" id="btncheck19" class="btn-check btncheck19" /><label class="btn btn-default" for="btncheck19">امید</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <legend>از ارزش‌هایی که در زیر آمده ۳ ارزش رو که برات از همه مهم‌ترن انتخاب کن</legend>
                                                    <div class="btn-group btn-group-narrow" role="group" aria-label="Basic checkbox toggle button group">
                                                        <input type="checkbox" name="btncheck20" id="btncheck20" class="btn-check btncheck20" /><label class="btn btn-default" for="btncheck20">مسئولیت</label>
                                                        <input type="checkbox" name="btncheck21" id="btncheck21" class="btn-check btncheck21" /><label class="btn btn-default" for="btncheck21">نوآوری</label>
                                                        <input type="checkbox" name="btncheck22" id="btncheck22" class="btn-check btncheck22" /><label class="btn btn-default" for="btncheck22">توانمندی</label>
                                                        <input type="checkbox" name="btncheck23" id="btncheck23" class="btn-check btncheck23" /><label class="btn btn-default" for="btncheck23">دقت</label>
                                                        <input type="checkbox" name="btncheck24" id="btncheck24" class="btn-check btncheck24" /><label class="btn btn-default" for="btncheck24">نظم</label>
                                                        <input type="checkbox" name="btncheck25" id="btncheck25" class="btn-check btncheck25" /><label class="btn btn-default" for="btncheck25">موفقیت</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </form>
                                    <div class="form-btn">
                                        <button class="btn btn-prev">
                                            <svg width="15" height="15" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.66003 20.4201L16.18 13.9001C16.95 13.1301 16.95 11.8701 16.18 11.1001L9.66003 4.58008" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            مرحله قبل
                                        </button>
                                        <button class="btn btn-next">
                                            مرحله بعد
                                            <svg width="15" height="15" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.2501 20.4201L8.73009 13.9001C7.96009 13.1301 7.96009 11.8701 8.73009 11.1001L15.2501 4.58008" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide main-slide" data-hash="seven" data-bullet="فرم سوالات">
                                <div class="main-container form-container">
                                    <div class="form-heading">
                                        <h2 class="title">فرم ثبت نام در کارگاه نگرش پروژه محور و مدیریت رویداد</h2>
                                        <span class="notic">
                                            <svg width="20" height="20" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2.5C6.49 2.5 2 6.99 2 12.5C2 18.01 6.49 22.5 12 22.5C17.51 22.5 22 18.01 22 12.5C22 6.99 17.51 2.5 12 2.5ZM11.25 8.5C11.25 8.09 11.59 7.75 12 7.75C12.41 7.75 12.75 8.09 12.75 8.5V13.5C12.75 13.91 12.41 14.25 12 14.25C11.59 14.25 11.25 13.91 11.25 13.5V8.5ZM12.92 16.88C12.87 17.01 12.8 17.11 12.71 17.21C12.61 17.3 12.5 17.37 12.38 17.42C12.26 17.47 12.13 17.5 12 17.5C11.87 17.5 11.74 17.47 11.62 17.42C11.5 17.37 11.39 17.3 11.29 17.21C11.2 17.11 11.13 17.01 11.08 16.88C11.03 16.76 11 16.63 11 16.5C11 16.37 11.03 16.24 11.08 16.12C11.13 16 11.2 15.89 11.29 15.79C11.39 15.7 11.5 15.63 11.62 15.58C11.86 15.48 12.14 15.48 12.38 15.58C12.5 15.63 12.61 15.7 12.71 15.79C12.8 15.89 12.87 16 12.92 16.12C12.97 16.24 13 16.37 13 16.5C13 16.63 12.97 16.76 12.92 16.88Z" fill="#FF5858"/>
                                            </svg>
                                            جواب دادن به این سوالات اجباری نیست اما پاسخ دادن به اون‌ها تاثیر بسیار زیادی روی طراحی هدفمند مباحث کارگاه برای مخاطبین و جنس دغدغه اونها داره. 
                                        </span>
                                    </div>
                                    <form method="get" class="fourmind-form form-step-five">
                                        <div class="row">
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <label for="textarea8">چرا به مدیریت پروژه‌های برگزاری رویداد علاقه داری؟‌</label>
                                                    <textarea name="textarea8" id="textarea8" class="form-control textarea textarea8" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <label for="textarea9">مواجهه با استرس و اضطراب را در خود چگونه ارزیابی می‌کنی؟</label>
                                                    <textarea name="textarea9" id="textarea9" class="form-control textarea textarea9" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 column">
                                                <div class="form-group">
                                                    <label for="textarea10">اثر دومینو یا ویژگی دومینو از دید تو چیست؟</label>
                                                    <textarea name="textarea10" id="textarea10" class="form-control textarea textarea10" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>  
                                    </form>
                                    <div class="form-btn">
                                        <button class="btn btn-prev">
                                            <svg width="15" height="15" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.66003 20.4201L16.18 13.9001C16.95 13.1301 16.95 11.8701 16.18 11.1001L9.66003 4.58008" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            مرحله قبل
                                        </button>
                                        <button class="btn btn-next">
                                            مرحله بعد
                                            <svg width="15" height="15" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.2501 20.4201L8.73009 13.9001C7.96009 13.1301 7.96009 11.8701 8.73009 11.1001L15.2501 4.58008" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>









                            <div class="swiper-slide main-slide" data-hash="message" data-bullet="هزینه">
                                <div class="main-container form-container">
                                    
                                </div>
                            </div>
                            <div class="swiper-slide main-slide" data-hash="message" data-bullet="تایید نهایی">
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