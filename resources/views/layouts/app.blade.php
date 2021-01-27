<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>اعمدة الشموخ</title>
    <!-- Stylesheets & Fonts -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <!-- Plugins Stylesheets -->
    <link rel="stylesheet" href="assets/css/loader/loaders.css">
    <link rel="stylesheet" href="assets/css/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/aos/aos.css">
    <link rel="stylesheet" href="assets/css/swiper/swiper.css">
    <link rel="stylesheet" href="assets/css/lightgallery.min.css">
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

</head>

<body>

        <main >
            @yield('content')
        </main>
        <footer>
            <!-- Widgets End -->
            <!-- Foot Note Start -->
            <div class="foot-note">
              <div class="container">
                <div
                  class="footer-content text-center text-lg-left d-lg-flex justify-content-between align-items-center"
                >
                  <p class="mb-0" data-aos="fade-right" data-aos-offset="0">
                    &copy; 2021 All Rights Reserved. Design by
                    <a
                      href="https://www.instagram.com/startt__up/"
                      target="_blank"
                      class="fh5-link"
                      >start up</a
                    >.
                  </p>

                  <nav class="d-flex aic">
                    <ul class="nav sociaal d-md-flex">
                      <li>
                        <a href="https://www.facebook.com/fh5co" target="_blank"
                          ><i class="fa fa-facebook"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <!-- Foot Note End -->
          </footer>
   <!--jQuery-->
   <script src="assets/js/jquery-3.3.1.js"></script>
   <!--Plugins-->
   <script src="assets/js/bootstrap.bundle.js"></script>
   <script src="assets/js/loaders.css.js"></script>
   <script src="assets/js/aos.js"></script>
   <script src="assets/js/swiper.min.js"></script>
   <script src="assets/js/lightgallery-all.min.js"></script>
   <!--Template Script-->
   <script src="assets/js/main.js"></script>
          @yield('script')
 </body>
</html>
