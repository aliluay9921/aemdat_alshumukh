@extends('layouts.app')

@section('content')
 <!-- Loader Start -->
 <div class="css-loader">
    <div class="loader-inner line-scale d-flex align-items-center justify-content-center"></div>
</div>
<!-- Loader End -->
<!-- Header Start -->
<header class="position-absolute w-100">
    <div class="container">
        <div class="top-header d-none d-sm-flex justify-content-between align-items-center">
            <div class="contact">
                <a href="tel:+1234567890" class="tel"><i class="fa fa-phone" aria-hidden="true"></i>+1234567890</a>
                <a href="mailto:info@yourmail.com"><i class="fa fa-envelope"
                        aria-hidden="true"></i>info@yourmail.com</a>
            </div>
            <nav class="d-flex aic">

                <ul class="nav sociaal d-none d-md-flex">
                    <li><a href="https://www.facebook.com/fh5co" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </nav>
        </div>
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Multipurpose"></a>
            <div class="group d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>


            </div>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="home.html">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">عن الشركة</a></li>
                    <li class="nav-item"><a class="nav-link" href="#content-slider">المشاريع المنجزة</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">تواصل معنا</a></li>
                    @auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin') }}"> الادارة </a></li>

                    @endauth

                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Header End -->
<!-- Hero Start -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-12 offset-md-1 col-md-11">
                <div class="swiper-container hero-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-content-ar d-flex align-items-center">
                            <div class="single-slide">
                                <h1 data-aos="fade-right" data-aos-delay="200">شركة أعمدة الشموخ<br>
                                </h1>
                                <p data-aos="fade-right" data-aos-delay="600">للمقاولات العامة المحدودة.
                                </p>
                                <a data-aos="fade-right" data-aos-delay="900" href="#"
                                    class="btn btn-primary">07812157137</a>
                                <a data-aos="fade-right" data-aos-delay="900" href="#"
                                    class="btn btn-primary">07812157137</a>
                            </div>
                        </div>
                        <div class="swiper-slide slide-content d-flex align-items-center">
                            <div class="single-slide">
                                <h1 data-aos="fade-right" data-aos-delay="200">AEMDAT ALSHUMUKH<br>
                                </h1>
                                <p data-aos="fade-right" data-aos-delay="600">For General Contracting Ltd.
                                </p>
                                <a data-aos="fade-right" data-aos-delay="900" href="#"
                                    class="btn btn-primary">07812157137</a>
                                <a data-aos="fade-right" data-aos-delay="900" href="#"
                                    class="btn btn-primary">07812157137</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Add Control -->
        <span class="arr-left"><i class="fa fa-angle-left"></i></span>
        <span class="arr-right"><i class="fa fa-angle-right"></i></span>
    </div>
    <div class="texture"></div>
    <div class="diag-bg"></div>
</section>
<!-- Hero End -->
<!-- Call To Action Start -->
<section id="about" class="cta" data-aos="fade-up" data-aos-delay="0">
    <div class="container">
        <div class="cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left">
            <div class="content" data-aos="fade-right" data-aos-delay="200">
                <h2>عن الشركة</h2>
                <p>تأسست الشركة في عام 2010. ومنذ ذلك الحين نفذت الشركة العديد من المشاريع السكنية والتجارية. وضعت
                    الشركة معايير عالية واحترافية في تنفيذ جميع المشاريع لتتجاوز توقعات العملاء مما جعل الشركة تكتسب
                    سمعة طيبة في صناعة البناء بالإضافة إلى احترام العملاء القيمين وخاصة الوزارة</p>
            </div>
            <!-- <div class="subscribe-btn" data-aos="fade-left" data-aos-delay="400" data-aos-offset="0">
                <a href="#" class="btn btn-primary">للمزيد</a>
            </div> -->
        </div>
    </div>
</section>
<!-- Call To Action End -->

<!-- Pricing Start -->
<section class="pricing-table">
    <div class="container">
        <!-- <div class="title text-center">
            <h6 class="title-primary">Our prices</h6>
            <h1 class="title-blue">Price Table List</h1>
        </div> -->
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="single-pricing text-center" data-aos="fade-up" data-aos-delay="0"
                    data-aos-duration="600">

                    <h2>مهمتنا</h2>
                    <p class="desc"></p>

                    <p>تقدم الشركة أفضل الخدمات لرجال الأعمال بما يتناسب مع متطلبات مشروعهم في أشكال مختلفة من
                        الصناعية والتجارية</p>

                    <svg viewBox="0 0 170 193">
                        <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                            d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                    </svg>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-pricing text-center" data-aos="fade-up" data-aos-delay="300"
                    data-aos-duration="600">

                    <h2>رؤيتنا</h2>
                    <p class="desc"></p>

                    <p>– أن تكون واحدة من الشركات الرائدة في مجال الهندسة والخرسانة الجاهزة في العراق والمنطقة.</p>
                    <p>– امتلاك خصائص الخرسانة التي يمكن أن تلبي احتياجات ومتطلبات سوق العقارات</p>


                    <svg viewBox="0 0 170 193">
                        <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                            d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                    </svg>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-pricing text-center" data-aos="fade-up" data-aos-delay="600"
                    data-aos-duration="600">

                    <h2>فلسفتنا</h2>
                    <p class="desc"></p>

                    <p>توضح الفلسفة الكامنة وراء تاج الساحل طريقتنا في ممارسة أعمالها لإيصال رؤيتنا وآرائنا لجميع
                        عملائنا</p>

                    <svg viewBox="0 0 170 193">
                        <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                            d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing End -->


<div id="content-slider">
    <div class="wrap-slider">

        <h1 class="main-title">المشاريع المنجزة</h1>

        <!-- ===== Thumbnail ControlNav ======= -->
        <input type="radio" id="a-1" name="a">
        <input type="radio" id="a-2" name="a">
        <input type="radio" id="a-3" name="a">
        <input type="radio" id="a-4" name="a">

        <nav id="main">
            <label for="a-1" class="first"></label>
            <label for="a-2" class="first"></label>
            <label for="a-3" class="first"></label>
            <label for="a-4" class="first"></label>
        </nav>

        <!-- =================================== -->
        <nav id="control">
            <label for="a-1"></label>
            <label for="a-2"></label>
            <label for="a-3"></label>
            <label for="a-4"></label>
        </nav>
        <!-- =================================== -->

        <!-- 	IMAGE NAVIGATION pic -->

      
        <span id="b-1" class="th" tabindex="10">
            <img src="https://github.com/lime7/slider/blob/master/images/pic-1.png?raw=true" alt="" id="p-1">
            <div class="title-1">
                <h1>PAK FA T-50</h1>
                <p>Stealth multirole fighter</p>
                <a href="">عرض المزيد</a>
            </div>
        </span>

        <span id="b-2" class="th" tabindex="11">
            <img src="https://github.com/lime7/slider/blob/master/images/pic-10.png?raw=true" alt="" id="p-2">
            <div class="title-2">
                <h1>Kamov Ka-50 "Black Shark"</h1>
                <p>Attack helicopter</p>
                <a href="">عرض المزيد</a>
            </div>
        </span>

        <span id="b-3" class="th" tabindex="12">
            <img src="https://github.com/lime7/slider/blob/master/images/pic-3.png?raw=true" alt="" id="p-3">
            <div class="title-3">
                <h1>Sukhoi Su-27</h1>
                <p>Air superiority fighter</p>
                <a href="">عرض المزيد</a>
            </div>
        </span>

        <span id="b-4" class="th" tabindex="13">
            <img src="https://github.com/lime7/slider/blob/master/images/pic-4.png?raw=true" alt="" id="p-4">
            <div class="title-4">
                <h1>mil mi-28</h1>
                <p>Attack helicopter</p>
                <a href="">عرض المزيد</a>
            </div>
        </span>

        <!-- ===== IMages ======= -->

        <div class="slider">
            <div class="inset">

                <figure>
                    <figcaption class="title-1">
                        <h1>بناء</h1>
                        <p>مدرسة</p>
                        <a href="">عرض المزيد</a>
                    </figcaption>
                    <img src="https://github.com/lime7/slider/blob/master/images/1.png?raw=true" alt="" id="i-1"
                        class="f">
                </figure>

                <figure>
                    <figcaption class="title-2">
                        <h1>بناء</h1>
                        <p>مدرسة</p>
                        <a href="">عرض المزيد</a>
                    </figcaption>
                    <img src="https://github.com/lime7/slider/blob/master/images/10.png?raw=true" alt="" id="i-2"
                        class="f">
                </figure>

                <figure>
                    <figcaption class="title-3">
                        <h1>بناء</h1>
                        <p>مدرسة</p>
                        <a href="">عرض المزيد</a>
                    </figcaption>
                    <img src="https://github.com/lime7/slider/blob/master/images/3.png?raw=true" alt="" id="i-3"
                        class="f">
                </figure>

                <figure>
                    <figcaption class="title-4">
                        <h1>بناء</h1>
                        <p>مدرسة</p>
                        <a href="">عرض المزيد</a>
                    </figcaption>
                    <img src="https://github.com/lime7/slider/blob/master/images/4.png?raw=true" alt="" id="i-4"
                        class="f">
                </figure>


                <figure>
                    <figcaption class="title-5">
                        <h1>بناء</h1>
                        <p>مدرسة</p>
                        <a href="">عرض المزيد</a>
                    </figcaption>
                    <img src="https://github.com/lime7/slider/blob/master/images/1.png?raw=true" alt="" id="i-5"
                        class="f">
                </figure>
            </div>
        </div>

    </div>
</div>
<!-- end-sltder -->
<section>
    <div class="box">
        <div class="inner">
            <span>المشاريع المنجزة</span>
        </div>
        <div class="inner">
            <span>المشاريع المنجزة</span>
        </div>
    </div>
    <div class="btns-buld">
        @foreach ($projectcomplete as  $item)
        <a data-aos="fade-right" data-aos-delay="900" href="#" class="btns btn-primary">{{ $item->title }}</a>

        @endforeach

    </div>
</section>
<section>
    <div class="box">
        <div class="inner">
            <span>مشاريع قيد الانجاز</span>
        </div>
        <div class="inner">
            <span>مشاريع قيد الانجاز</span>
        </div>
    </div>
    <div class="btns-buld">
        @foreach ($projectcomplete_not as $item)
        <a data-aos="fade-right" data-aos-delay="900" href="#" class="btns btn-primary">{{ $item->title }}</a>

        @endforeach

    </div>
</section>

<!-- Testimonial and Clients Start -->
<section class="testimonial-and-clients">
    <div class="container">
        <h1>عملاءنا</h1>
        <div class="testimonials">
            <div class="swiper-container test-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center">
                        <div class="row">
                            <div class="offset-lg-1 col-lg-10">
                                <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                        src="assets/images/111.jpg" alt="Testimonial 1"></div>
                                <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                    data-aos-offset="0">الجامعة الامريكية</h5>

                                <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                                    data-aos-offset="0">هنا حجي زايد ماعرف شنو</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide text-center">
                        <div class="row">
                            <div class="offset-lg-1 col-lg-10">
                                <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                        src="assets/images/111.jpg" alt="Testimonial 1"></div>
                                <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                    data-aos-offset="0">الجامعة الامريكية</h5>

                                <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                                    data-aos-offset="0">هنا حجي زايد ماعرف شنو</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide text-center">
                        <div class="row">
                            <div class="offset-lg-1 col-lg-10">
                                <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                        src="assets/images//111.jpg" alt="Testimonial 1"></div>
                                <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                    data-aos-offset="0">الجامعة الامريكية</h5>

                                <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                                    data-aos-offset="0">هنا حجي زايد ماعرف شنو</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test-pagination"></div>
            </div>
        </div>
        <div class="clients" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
            <div class="swiper-container clients-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/images/1.jpg" alt="Client 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/2.png" alt="Client 2">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/3.jpg" alt="Client 3">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/4.png" alt="Client 4">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/11.png" alt="Client 5">
                    </div>
                </div>
                <div class="test-pagination"></div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial and Clients End -->
<header class="team">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>طاقم العمل</h1>
            </div>
        </div>
    </div>
</header>

<div class="counter">
    <div class="container">
        <div class="row">
            @foreach ($stafs as $staf )
            <div class="col-12 col-lg-3">
                <div class="count-up">
                    <p class="counter-count">{{ $staf->count }}</p>
                    <h3>{{ $staf->name }}</h3>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</div>
<header class="team">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>اليات الشركة</h1>
            </div>
        </div>
    </div>
</header>

<div class="counter">
    <div class="container">
        <div class="row">
           @foreach ( $mechanisms as $item )
           <div class="col-12 col-lg-3">
            <div class="count-up">
                <p class="counter-count">{{ $item->count }}</p>
                <h3>{{ $item->name }}</h3>
            </div>
        </div>
           @endforeach






        </div>
    </div>

</div>
<section class="adreess">
    <div class="box">
        <div class="inner">
            <span>منشأة خرسانية جاهزة</span>
        </div>
        <div class="inner">
            <span>منشأة خرسانية جاهزة</span>
        </div>
    </div>
    <div class="btns-buld">
        <a data-aos="fade-right" data-aos-delay="900" href="#" class="btns btn-primary">معمل الغزالية

            السعة 140 م 3 / ساعة</a>


    </div>
</section>
<!-- Call To Action 2 Start -->
<section id="contact" class="section-bg wow fadeInUp">

    <div class="container">

        <div class="section-header">
            <h2>تواصل معنا</h2>

        </div>

        <div class="row contact-info">

            <div class="col-md-4">
                <div class="contact-address">
                    <i class="ion-ios-location-outline"></i>
                    <h3>Address</h3>
                    <address>بغداد-تقاطع العامرية</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <i class="ion-ios-telephone-outline"></i>
                    <h3>Phone Number</h3>
                    <p><a href="tel:+155895548855">+0647812157137</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-email">
                    <i class="ion-ios-email-outline"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:info@example.com">info@example.com</a></p>
                </div>
            </div>

        </div>

        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="334" height="307" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=%D8%B4%D8%B1%D9%83%D8%A9%20%D8%A7%D8%B9%D9%85%D8%AF%D8%A9%20%D8%A7%D9%84%D8%B4%D9%85%D9%88%D8%AE&t=&z=17&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                    href="https://www.whatismyip-address.com"></a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 307px;
                        width: 334px;
                    }
                </style><a href="https://www.embedgooglemap.net">google embed map</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 307px;
                        width: 334px;
                    }
                </style>
            </div>
        </div>
</section>
@endsection
@section('script')
<script>
    $('.counter-count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {

            //chnage count up speed here
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    const images = document.getElementById("images");
    const leftButton = document.getElementById("left");
    const rightButton = document.getElementById("right");

    const imagesList = document.querySelectorAll("#images img");
    let index = 0;

    const changeImage = () => {
        if (index > imagesList.length - 1) index = 0;
        else if (index < 0) index = imagesList.length - 1;
        images.style.transform = `translateX(${-index * 500}px)`;
    };

    const run = () => {
        index++;
        changeImage();
    };

    const resetInterval = () => {
        clearInterval(interval);
        interval = setInterval(run, 2000);
    };

    let interval = setInterval(run, 2000);

    rightButton.addEventListener("click", () => {
        index++;
        changeImage();
        resetInterval();
    });

    leftButton.addEventListener("click", () => {
        index--;
        changeImage();
        resetInterval();
    });
</script>
<script>
    // scorll
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        speedAsDuration: true
    });
</script>
@endsection
