@extends('layouts.app')

@section('content')
<div class="css-loader">
    <div
      class="loader-inner line-scale d-flex align-items-center justify-content-center"
    ></div>
  </div>
  <!-- Loader End -->
  <!-- Header Start -->
  <section>
    <header class="intro">
        <a class="navbar-brand" href="#"><img src="/assets/images/IMG_4293.PNG" alt="Multipurpose"></a>

      <div class="intro-slideshow">
        <img
          src="https://www.dropbox.com/s/h8rds5ozk0u3s2f/coder.jpg?raw=1"
        />
        <img
          src="https://www.dropbox.com/s/lf29ifrd354ngyv/coffee.jpg?raw=1"
        />
        <img
          src="https://www.dropbox.com/s/lxnf1mxej90qoae/library.jpg?raw=1"
        />
        <img src="https://www.dropbox.com/s/15gdoyzoai94j6j/path.jpg?raw=1" />
        <img
          src="https://www.dropbox.com/s/jk3ulwea2bolurw/universe.jpg?raw=1"
        />
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
        <!-- divgroup contains all cards in it -->
        <div class="eachdiv">
          <!-- card div 1 -->
          <img
            src="https://raw.githubusercontent.com/RahulSahOfficial/apnacollege02/main/images/001.jpg"
            alt="Img"
          />
          <h3>2004</h3>
          <p>
            تأسست مجموعة شركات تاج الساحل عام 2010 ومنذ ذلك الحين قد نفذت
            العديد من المشاريع السكنية والتجارية حيث وضعت معايير عالية
            واحترافية في تنفيذ جميع المشاريع لتتجاوز توقعات العملاء مما جعل
            الشركة تكتسب سمعة طيبة في صناعه البناء بالاضافه الى احترام العملاء
            القيمين .
          </p>
        </div>
        <div class="eachdiv">
          <!-- card div 2 -->
          <img
            src="https://raw.githubusercontent.com/RahulSahOfficial/apnacollege02/main/images/002.jpg"
            alt="Img"
          />
          <h3>2010</h3>
          <p>
            تأسست مجموعة شركات تاج الساحل عام 2010 ومنذ ذلك الحين قد نفذت
            العديد من المشاريع السكنية والتجارية حيث وضعت معايير عالية
            واحترافية في تنفيذ جميع المشاريع لتتجاوز توقعات العملاء مما جعل
            الشركة تكتسب سمعة طيبة في صناعه البناء بالاضافه الى احترام العملاء
            القيمين .
          </p>
        </div>
        <div class="eachdiv">
          <!-- card div 3 -->
          <img
            src="https://raw.githubusercontent.com/RahulSahOfficial/apnacollege02/main/images/003.jpg"
            alt="Img"
          />
          <h3>2004</h3>
          <p>
            تأسست مجموعة شركات تاج الساحل عام 2010 ومنذ ذلك الحين قد نفذت
            العديد من المشاريع السكنية والتجارية حيث وضعت معايير عالية
            واحترافية في تنفيذ جميع المشاريع لتتجاوز توقعات العملاء مما جعل
            الشركة تكتسب سمعة طيبة في صناعه البناء بالاضافه الى احترام العملاء
            القيمين .
          </p>
        </div>
        <div class="eachdiv">
          <!-- card div 4 -->
          <img
            src="https://raw.githubusercontent.com/RahulSahOfficial/apnacollege02/main/images/004.jpg"
            alt="Img"
          />
          <h3>2004</h3>
          <p>
            تأسست مجموعة شركات تاج الساحل عام 2010 ومنذ ذلك الحين قد نفذت
            العديد من المشاريع السكنية والتجارية حيث وضعت معايير عالية
            واحترافية في تنفيذ جميع المشاريع لتتجاوز توقعات العملاء مما جعل
            الشركة تكتسب سمعة طيبة في صناعه البناء بالاضافه الى احترام العملاء
            القيمين .
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
