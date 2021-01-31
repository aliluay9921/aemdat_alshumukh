@extends('layouts.app')

@section('content')
    <div class="css-loader">
        <div class="loader-inner line-scale d-flex align-items-center justify-content-center"></div>
    </div>
    <!-- Loader End -->
    <!-- Header Start -->
    <section>
        <header class="intro">
            <a class="navbar-brand" href="#"><img src="/assets/images/logo.PNG" alt="Multipurpose"></a>

            <div class="intro-slideshow">
                <img src="/assets/images/usa.jpg" />
                <img src="/assets/images/usa3.jpg" />
                <img src="/assets/images/usa4.jpg" />

            </div>
            <div class="intro-header">
                <h1>شركة أعمدة الشموخ</h1>
                <p>للمقاولات العامة محدودة المسؤولية</p>
            </div>
            <div class="middle">
                <a href="{{ route('index') }}" class="btnr btn1">visit</a>
            </div>
        </header>
    </section>
    <div class="maindiv">
        <div class="innerdiv">
            <h1>تاريخ الشركة</h1>

            <div class="divgroup">
                <div class="eachdiv">
                    <!-- card div 4 -->
                    <img src="/assets/images/t1.jpg" alt="Img" />
                    <h3>2021</h3>
                    <p>
                        نسعى دوماً وبخطوات ثابتة للإرتقاء بالأعمال الخرسانية في بغداد وباقي محافظات العراق ويتم الاشراف على
                        جميع الاعمال من قبل كادر هندسي مختص وبكفائة عالية
                    </p>
                </div>
                <div class="eachdiv">
                    <!-- card div 3 -->
                    <img src="/assets/images/t2.jpg" alt="Img" />
                    <h3>2016</h3>
                    <p>
                        في عام ٢٠١٦ تاسست الشركة بشكل فعلي واصبح لها اسهما ومكانتها في بغداد بالاخص قاطع الكرخ ومنذ تاسيس
                        الشركة نفذت العديد من المشاريع القطاع الخاص والقطاع الحكومي وما تزال تباشر باعمالها وتوسيعها من حيث
                        الطاقه الانتاجية من الآليات والكادر والمواقع
                    </p>
                </div>
                <div class="eachdiv">
                    <!-- card div 2 -->
                    <img src="/assets/images/bm.jpg" alt="Img" />
                    <h3>2014</h3>
                    <p>
                        في عام ٢٠١٤ دخلت الشركة والتي لا تزال بشكل مستقل في عدة مشاريع ومنها مجمع الايادي السكني ومجمع ديوان
                        الرقابة المالية و ملعب عمو بابا وعدة مشاريع فردية اخرى
                    </p>
                </div>

                <!-- divgroup contains all cards in it -->
                <div class="eachdiv">
                    <!-- card div 1 -->
                    <img src="/assets/images/g1.jpg" alt="Img" />
                    <h3>2006</h3>
                    <p>
                        كانت بداية الشركة سنة ٢٠٠٦بشكل مستقل بعدد من محافظات العراق ومن ضمنها البصرة ،النجف، كربلاء ،ديالى
                        وكانت الشركة تخدم الصالح العام ،كركوك ،صلاح الدين
                    </p>
                </div>



            </div>
            <!-- divgroup ends -->
        </div>
        <!-- innerdiv ends -->
    </div>
@endsection

@section('script')
    <script>
        const slideshowImages = document.querySelectorAll(".intro-slideshow img");

        const nextImageDelay = 5000;
        let currentImageCounter = 0; // setting a variable to keep track of the current image (slide)

        // slideshowImages[currentImageCounter].style.display = "block";
        slideshowImages[currentImageCounter].style.opacity = 1;

        setInterval(nextImage, nextImageDelay);

        function nextImage() {
            // slideshowImages[currentImageCounter].style.display = "none";
            slideshowImages[currentImageCounter].style.opacity = 0;

            currentImageCounter =
                (currentImageCounter + 1) % slideshowImages.length;

            // slideshowImages[currentImageCounter].style.display = "block";
            slideshowImages[currentImageCounter].style.opacity = 1;
        }

    </script>
@endsection
