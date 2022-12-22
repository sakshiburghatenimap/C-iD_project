<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Create User data</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png" rel="icon') }}">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('https://fonts.gstatic.com') }}" rel="preconnect">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>

  .sidebar{
  background-image:url("assets/img/C-iD platform background green.jpg");
  background-repeat:repeat;
  background-attachment: fixed;
  background-size: cover;
  width:150px;

  }
  
  </style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">Create User Data  </span>
  </a>
  
</div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
          </ul><!-- End Messages Dropdown Items -->
         
            <i class="bi bi-list toggle-sidebar-btn"></i>
          </a><!-- End Profile Iamge Icon -->
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" background image="{{ asset('assets/img/C-iD platform background green.jpg') }}">

  <ul class="sidebar-nav" id="sidebar-nav">
<div>
      <li class="nav-item" width="55px" height="55px">  
        <img src="{{ asset('assets/img/logo C-iD.png') }}" alt="" width="55px" height="55px">          
      </li><!-- End Dashboard Nav -->
      <li class="nav-item" width="55px" height="55px">
     <b><span>Dashboard</span></b>
      </li><!-- End Components Nav -->
</div>
</br>
<div>
      <li class="nav-item">
        <img src="{{ asset('assets/img/icon my files.png') }}" alt="" width="55px" height="55px">
      </li><!-- End Forms Nav -->
      <li class="nav-item">
     <b><span>My Files</span></b>
      </li><!-- End Components Nav -->
</div>
</br>
<div>
      <li class="nav-item">
        <img src="{{ asset('assets/img/icon my c-ids.png') }}" alt="" width="55px" height="55px">
      </li><!-- End Tables Nav -->
      <li class="nav-item">
     <b><span>My C-iD's</span></b>
      </li><!-- End Components Nav -->
</div>
</br>

<div>
      <li class="nav-item">     
      <img src="{{ asset('assets/img/icon product data library.png') }}" alt="" width="55px" height="55px">
      </li><!-- End Charts Nav -->
      <li class="nav-item">
     <b><span>Product Data</span></b>
      </li><!-- End Components Nav -->
</div></br>

<div>
      <li class="nav-item">
        <img src="{{ asset('assets/img/icon more info.png') }}" alt="" width="55px" height="55px">    
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
     <b><span>More info</span></b>
      </li><!-- End Components Nav -->     
</div></br>
    </ul>
      </li><!-- End Components Nav -->

    
    

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Create User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">User Data</a></li>
          <li class="breadcrumb-item">Registration</li>
         
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row mb-0">
                  <div class="col-sm-10" align="right">
                    <button type="submit" class="btn btn-outline-primary" i class="fa-thin fa-check">Save</button>
                  </div>
                </div>
      <div class="row">
        <div class="col-lg-12">
            <div class="card-body">
             
              <!-- General Form Elements -->
              <form action="{{ route('register.custom') }}" method="POST">
                @csrf
                <div class="row mb-0">
                  <label for="name" class="col-sm-2 col-form-label">User Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="name">
                  </div>
                  <label for="name" class="col-sm-4 col-form-label">Brand,Company or Last name of user</label>
                </div>
                 <label>User Type* :</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="user_role" id="resident" value="resident">
                      <label class="form-check-label" for="resident">
                      Resident
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="user_role" id="owner" value="owner">
                      <label class="form-check-label" for="owner">
                       Owner
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="user_role" id="manufacturer" value="manufacturer">
                      <label class="form-check-label" for="manufacturer">
                      Manufacturer
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="user_role" id="architech" value="architech">
                      <label class="form-check-label" for="architech">
                      Architech
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="user_role" id="inspector" value="inspector">
                      <label class="form-check-label" for="inspector">
                      Installer/Inspector/Contractor
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="user_role" id="agent" value="agent">
                      <label class="form-check-label" for="agent">
                      Reseller/Agent
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="user_role" id="dismantler" value="dismantler">
                      <label class="form-check-label" for="dismantler">
                      Dismantler
                      </label>
                    </div>
                  </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="email">
                  </div>
                  <label for="inputEmail" class="col-sm-4 col-form-label">Valid email address</label>
                </div>
                <div class="row mb-0">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" name="password">
                  </div>
                  <label for="password" class="col-sm-4 col-form-label">Mini 8 char 2 letter 2 number 1 capital</label>
                </div>
                <div class="row mb-0">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Phone number</label>
                  <div class="col-sm-6">
                    <input type="number" class="form-control" name="phone_number">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">Telephone or mobile number </label>
                </div>
                <div class="row mb-0">
                  <label for="country" class="col-sm-2 col-form-label">Country</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="country">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">Country of location </label>
                </div>
                <div class="row mb-0">
                  <label for="VAT_number" class="col-sm-2 col-form-label">VAT_Number</label>
                  <div class="col-sm-6">
                    <input type="number" class="form-control" name="VAT_number">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">VAT/Chamber of Commerce/registration</label>
                 </div>
                 <div class="row mb-0">
                  <label for="company_name" class="col-sm-2 col-form-label">Company Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="company_name">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">Name of comapny or organization </label>
                 </div>
                <div class="row mb-0">
                  <label for="zip_code" class="col-sm-2 col-form-label">Zip Code</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="zip_code">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">Code according to sorting centers post </label>
                </div>
                <div class="row mb-0">
                  <label for="city" class="col-sm-2 col-form-label">City</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="city">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">City or Region</label>
               </div>
                  <div class="row mb-0">
                  <label for="street_name" class="col-sm-2 col-form-label">Street Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="street_name">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">Name of the street </label>
                </div>
                <div class="row mb-0">
                  <label for="street_number" class="col-sm-2 col-form-label">Street Number</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="street_number">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label"> House number or number within the industrial zone </label>
                </div>
                <div class="row mb-0">
                  <div class="col-sm-10" align="right">
                    <button type="submit" class="btn btn-outline-primary" i class="fa-thin fa-check">Save</button>
                  </div>
                </div>
               </form>
            
         

       
    </section>

  </main><!-- End #main -->

 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('ssets/vendor/chart.js/chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>