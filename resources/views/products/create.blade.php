<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Create product data</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <span class="d-none d-lg-block">Product Data Library</span>
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
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <span class="d-none d-md-block dropdown-toggle ps-2">Sakshi</span>
            <img src="{{ asset('assets/img/icon user.png') }}" alt="Profile" class="rounded-circle">  
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
      <h1>Create Product</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Product data Library</a></li>
          <li class="breadcrumb-item">list of products</li>
          <li class="breadcrumb-item active">Create product</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Create new Product data</h5>

              <!-- General Form Elements -->
              <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="product_name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Brand</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="brand">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="category">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Type</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="product_type">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Product Image</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="product_image">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="description"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Model year</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="model_year">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Product code</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="product_code">
                  </div>
                </div>
              
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Selling price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="selling_price">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Calculation price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="calculation_price">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Maintainance Frequency</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="frequency">
                  </div>
                 </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Maintenance Sheet</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="maintenance_sheet">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Installation Sheet</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="installation_sheet">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Brand logo</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="brand_log">
                  </div>
                </div>
                
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Expected life span</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="life_span">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Environmental score</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="env_score">
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Energy neutral</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="energy_neutral" id="energy_neutral" value="yes">
                      <label class="form-check-label" for="gridRadios1">
                     yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="energy_neutral" id="energy_neutral" value="no">
                      <label class="form-check-label" for="gridRadios2">
                       No
                      </label>
                    </div>
                    
                  </div>
                </fieldset>
               
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Returnable</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="returnable" id="returnable" value="yes">
                      <label class="form-check-label" for="gridRadios1">
                     yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="returnable" id="returnable" value="no">
                      <label class="form-check-label" for="gridRadios2">
                       No
                      </label>
                    </div>
                    
                  </div>
                </fieldset>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Movable</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="movable" id="movable" value="yes">
                      <label class="form-check-label" for="gridRadios1">
                     yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="movable" id="movable" value="no">
                      <label class="form-check-label" for="gridRadios2">
                       No
                      </label>
                    </div>
                    
                  </div>
                </fieldset>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Compatible</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="compatible" id="compatible" value="yes">
                      <label class="form-check-label" for="gridRadios1">
                     yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="compatible" id="compatible" value="no">
                      <label class="form-check-label" for="gridRadios2">
                       No
                      </label>
                    </div>
                  </div>
                </fieldset>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Demountable</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="demountable" id="demountable" value="yes">
                      <label class="form-check-label" for="gridRadios1">
                     yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="demountable" id="demountable" value="no">
                      <label class="form-check-label" for="gridRadios2">
                       No
                      </label>
                    </div>
                    
                  </div>
                </fieldset>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Pace-Layering</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="pace_layering" id="pace_layering" value="yes">
                      <label class="form-check-label" for="gridRadios1">
                     yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="pace_layering" id="pace_layering" value="no">
                      <label class="form-check-label" for="gridRadios2">
                       No
                      </label>
                    </div>
                    
                  </div>
                </fieldset>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Recycle Content</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="recycled_content" id="recycled_content" value="yes">
                      <label class="form-check-label" for="gridRadios1">
                     yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="recycled_content" id="recycled_content" value="no">
                      <label class="form-check-label" for="gridRadios2">
                       No
                      </label>
                    </div>
                    
                  </div>
                </fieldset>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">BioBased</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="biobased" id="biobased" value="yes">
                      <label class="form-check-label" for="gridRadios1">
                     yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="biobased" id="biobased" value="no">
                      <label class="form-check-label" for="gridRadios2">
                       No
                      </label>
                    </div>
                    
                  </div>
                </fieldset>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Extendable life</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="extendable_life" id="extendable_life" value="yes">
                      <label class="form-check-label" for="gridRadios1">
                     yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="extendable_life" id="extendable_life" value="no">
                      <label class="form-check-label" for="gridRadios2">
                       No
                      </label>
                    </div>
                  </div>
                  <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Manufacturer</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="manufacturer">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Website Brand</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="website_brand">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Bearing capacity</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="bearing_capacity">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">U-value</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="u-value">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Sound insulation</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="sound_insulation">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Fire resistance</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="fire_resistance">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Lenght-X max</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="length_x">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Height-Y max</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="height_y">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Weight-Z max</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="width_z">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Construction method</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="construction_method">
                      <option selected>Select method</option>
                      <option value="1">Assembly</option>
                      <option value="2">Skeleton</option>
                      <option value="3">3D volumetric (unit)</option>
                       <option value="4">Cast in place (formwork)</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Building System</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="building_system">
                      <option selected>Select Sytem</option>
                      <option value="1">OBase building and fit-outne</option>
                      <option value="2">Load-bearing exterior walls</option>
                      <option value="3">Non load-bearing partition walls</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Construction type</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="construction_type">
                      <option selected>Open this select menu</option>
                      <option value="1">Timber</option>
                      <option value="2">CLT</option>
                      <option value="3">Concrete</option>
                      <option value="3">Steel</option>
                      <option value="3">Aluminum</option>
                      <option value="3">Hybrid</option>
                      <option value="3">other</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Interior finish</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="interior_finish">
                      <option selected>Open this select menu</option>
                      <option value="1">Aluminium</option>
                      <option value="2">Concrete</option>
                      <option value="3">Synthetic</option>
                      <option value="4">Steel</option>
                      <option value="5">Stone</option>
                      <option value="6">other</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Exterior Cladding</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="exterior_cladding">
                      <option selected>Open this select menu</option>
                      <option value="1">Aluminium</option>
                      <option value="2">Concrete</option>
                      <option value="3">Synthetic</option>
                      <option value="4">Steel</option>
                      <option value="5">Stone</option>
                      <option value="6">other</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Color</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="color">
                      <option selected>Open this select menu</option>
                      <option value="1">White</option>
                      <option value="2">Yellow</option>
                      <option value="3">Orange</option>
                      <option value="4">Pink</option>
                      <option value="5">Red</option>
                      <option value="6">Voilet</option>
                      <option value="7">Turquoise</option>
                      <option value="8">Green</option>
                      <option value="9">Brown</option>
                      <option value="10">Gray</option>
                      <option value="11">Black</option>
                      <option value="12">Mixed colours</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Designed by</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="designed_by">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">All possible configuration</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="configuration">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Specification text</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="specification_text">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">3D object</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="td_object">
                  </div>
                </div>  
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Data</button>
                  </div>
                </div>
                </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
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