<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

	<!--the main CSS file-->
  <title>شركة اعمدة الشموخ </title>
  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="/css/csspic.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/css/admincss.css">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>

  <link rel="stylesheet" href="dist/css/adminlte.min.css"  >
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>

        </ul>

      </nav>




       <main>
        <section class="advice">
          <h1 class="advice__title">شركة أعمدة الشموخ </h1>
          <p class="advice__description"> للمقاولات العامة المحدودة</p>
        </section>
        <section class="city-stuff">
          <ul class="skyscrappers__list">
            <li class="skyscrapper__item skyscrapper-1"></li>
            <li class="skyscrapper__item skyscrapper-2"></li>
            <li class="skyscrapper__item skyscrapper-3"></li>
            <li class="skyscrapper__item skyscrapper-4"></li>
            <li class="skyscrapper__item skyscrapper-5"></li>
          </ul>
          <ul class="tree__container">
            <li class="tree__list">
              <ul class="tree__item tree-1">
                <li class="tree__trunk"></li>
                <li class="tree__leaves"></li>
              </ul>
              <ul class="tree__item tree-2">
                <li class="tree__trunk"></li>
                <li class="tree__leaves"></li>
              </ul>
              <ul class="tree__item tree-3">
                <li class="tree__trunk"></li>
                <li class="tree__leaves"></li>
              </ul>
              <ul class="tree__item tree-4">
                <li class="tree__trunk"></li>
                <li class="tree__leaves"></li>
              </ul>
              <ul class="tree__item tree-5">
                <li class="tree__trunk"></li>
                <li class="tree__leaves"></li>
              </ul>
              <ul class="tree__item tree-6">
                <li class="tree__trunk"></li>
                <li class="tree__leaves"></li>
              </ul>
              <ul class="tree__item tree-7">
                <li class="tree__trunk"></li>
                <li class="tree__leaves"></li>
              </ul>
              <ul class="tree__item tree-8">
                <li class="tree__trunk"></li>
                <li class="tree__leaves"></li>
              </ul>
            </li>
          </ul>
          <ul class="crane__list crane-1">
            <li class="crane__item crane-cable crane-cable-1"></li>
            <li class="crane__item crane-cable crane-cable-2"></li>
            <li class="crane__item crane-cable crane-cable-3"></li>
            <li class="crane__item crane-stand"></li>
            <li class="crane__item crane-weight"></li>
            <li class="crane__item crane-cabin"></li>
            <li class="crane__item crane-arm"></li>
          </ul>
          <ul class="crane__list crane-2">
            <li class="crane__item crane-cable crane-cable-1"></li>
            <li class="crane__item crane-cable crane-cable-2"></li>
            <li class="crane__item crane-cable crane-cable-3"></li>
            <li class="crane__item crane-stand"></li>
            <li class="crane__item crane-weight"></li>
            <li class="crane__item crane-cabin"></li>
            <li class="crane__item crane-arm"></li>
          </ul>
          <ul class="crane__list crane-3">
            <li class="crane__item crane-cable crane-cable-1"></li>
            <li class="crane__item crane-cable crane-cable-2"></li>
            <li class="crane__item crane-cable crane-cable-3"></li>
            <li class="crane__item crane-stand"></li>
            <li class="crane__item crane-weight"></li>
            <li class="crane__item crane-cabin"></li>
            <li class="crane__item crane-arm"></li>
          </ul>
        </section>
      </main>


  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aemdat alshumukh</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          <a  class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ route('admin') }}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                   الصفحة الرئيسية
                    <i class="fas fa-angle-left right"></i>

                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                        الموقع الالكتروني
                    <i class="fas fa-angle-left right"></i>

                  </p>
                </a>

              </li>
          <li class="nav-item ">
            <a href="{{ route('project') }}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                المشاريع المنجزة
               </i>
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{ route('projectnot') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                مشاريع قيد الانجاز
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('add.staf') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               اضافات
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('تسجيل خروج') }}
             </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>

          </li>






        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>



  <!-- Control Sidebar -->
  <div class="content-wrapper">
     @yield('content')



  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>
</div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->

<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>

@yield('script')

</body>
</html>

