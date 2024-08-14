<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Web Analisis Sentimen</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('template/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="../template/temp/assets/img/logo.png" />
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
      </div>
    </div>
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <div class="img-profile" style="width: 45%; margin: auto;">
            <img src="../template/temp/assets/img/profile.png" alt="Image" class="img-fluid" style="width: 100%;">
          </div>
        <div class="nama-profile">
          @if(Auth::user()->role == 'user')
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1" > Welcome back, Unit Perusahaan</h4>
                @endif
                @if(Auth::user()->role == 'admin')
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1" > Syifana Maharani</h4>
                @endif
        </div>
          
        </li>
        @if(Auth::user()->role == 'admin' || Auth::user()->role == 'pengelola'|| Auth::user()->role == 'sekretaris'|| Auth::user()->role == 'user')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Profile</span>
        </a>
    </li>
@endif
@if(Auth::user()->role == 'admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('reviews.index') }}">
            <i class="mdi mdi-cloud-upload menu-icon"></i>
            <span class="menu-title">Data</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/sentimen') }}">
            <i class="mdi mdi-star menu-icon"></i>
            <span class="menu-title">Sentimen</span>
        </a>
    </li>
    @endif
    @if(Auth::user()->role == 'admin' || Auth::user()->role == 'pengelola'|| Auth::user()->role == 'sekretaris'|| Auth::user()->role == 'user')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('grafik') }}">
            <i class="mdi mdi-chart-bar menu-icon"></i>
            <span class="menu-title">Hasil Analisis</span>
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('sentimen.top-words') }}">
          <i class="mdi mdi-cloud menu-icon"></i>
          <span class="menu-title">Word Cloud</span>
      </a>
  </li>
    <div class="logout-wrapper">
        <li class="nav-item1">
            <a class="nav-link" href="{{ route('logout') }}">
                <i class="mdi mdi-exit-to-app menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </div>
@endif
        
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
         <div class="judul">
          <h1>ANALISIS SENTIMEN DINAS PARIWISATA DIY</h1>
         </div>
            <div class="img-topbar">
              <img src="../template/temp/assets/img/logo.png" alt="Image" class="img-fluid right-align" >
          
            </div>
            
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
                  <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">

                      @yield('content')
                      </div>
                    </div>
                  </div>
                          </div>
                        </div>

          <!-- row end -->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('template/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('template/js/jquery.cookie.js') }}" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('template/js/off-canvas.js') }}"></script>
  <script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('template/js/template.js') }}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{ asset('template/js/jquery.cookie.js') }}" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{ asset('template/js/dashboard.js') }}"></script>

  <!-- Add these lines in your layout or the Blade template -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
  <!-- End custom js for this page-->
  @yield('scripts')
</body>

</html>
