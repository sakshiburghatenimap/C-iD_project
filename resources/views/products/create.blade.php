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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Sakshi</h6>
              <span>Developer</span>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="/myprofile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="/login">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
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

          
            <div class="card-body">
              <h5 class="card-title">Create new Product data</h5>

              <!-- General Form Elements -->
              <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="row mb-0">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="product_name" name="product_name">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">Must Contain min 5 char</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Brand</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="brand" name="brand">
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-6">
                    <select class="form-select" aria-label="Default select example" id="category" name="category">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Type</label>
                  <div class="col-sm-6">
                    <select class="form-select" aria-label="Default select example" id="product_type" name="product_type">
                      <option selected>Open this select menu</option>
                      <option value="1">0* elements for volumes (siting)</option>
                      <option value="2">00 Rooms (indoor and outdoor areas)</option>
                      <option value="3">1* elements for foundation</option>
                      <option value="4">11 Groundwork (soil)</option>
                      <option value="5">13 Floors on foundation (slabs on grade)</option>
                      <option value="6">16 Foundation structures and footing, retaining walls (frost walls)</option>
                      <option value="7">17 Pile foundations</option>
                      <option value="8">"2* composite elements / components (++ = including 4* and 3*)</option>
                      <option value="9">21++ Exterior walls (facades)</option>
                      <option value="10">22++ Interior walls (interior walls)</option>
                      <option value="11">23++ Floors (intermediate floors, gallery floors, balconies and landings)</option>
                      <option value="12">24++ Stairs and ramps</option>
                      <option value="13">27++ Roofs (sloping and flat roofs)</option>
                      <option value="14">28 Main supporting structures, columns and beams (structure)</option>
                      <option value="15">3* partial elements (+ = including 4*)</option>
                      <option value="16">31+ Exterior wall openings</option>
                      <option value="17">31.1+ Outer wall openings with passage</option>
                      <option value="18">31.2+ Exterior windows</option>
                      <option value="19">31.4+ Curtain wall (facade framework)</option>
                      <option value="20">32+ Interior wall openings</option>
                      <option value="21">32.1+ Inner wall openings with passage</option>
                      <option value="22">32.2+ Interior windows</option>
                      <option value="23">32.3+ Interior doors</option>
                      <option value="24">32.4+ Modular walls (partition walls)</option>
                      <option value="25">33+ Floor openings (stair hatch)</option>
                      <option value="26">34+ Handrails (stairs, landing)</option>
                      <option value="27">35+ Suspended ceilings (suspended ceilings)</option>
                      <option value="28">37+ Roof openings (roof windows)</option>
                      <option value="29">38+ Balustrades (horizontal parapet)</option>
                      <option value="30">4* elements for finishing or cladding</option>
                      <option value="31">41 Exterior wall finishes (exterior wall cladding)</option>
                      <option value="32">42 Interior wall finishes (facing walls)</option>
                      <option value="33">43 Floor finishes (top surface)</option>
                      <option value="34">44 Stair and ramp finishes (top finish)</option>
                      <option value="35">45 Ceiling finishes</option>
                      <option value="36">47 Roof finishes (roof cladding)</option>
                      <option value="37">5* elements for plumbing installations</option>
                      <option value="38">51 heating (heat generation)</option>
                      <option value="39">52 drain (collection)</option>
                      <option value="40">53 supply (water)</option>
                      <option value="41">54 gases</option>
                      <option value="42">55 cooling (cold generation)</option>
                      <option value="43">56 heat distribution (output)</option>
                      <option value="44">57 air treatment (ventilation)</option>
                      <option value="45">58 climate control</option>
                      <option value="46">6* elements for electrical installations</option>
                      <option value="47">61 central electrotechnical facilities (installation)</option>
                      <option value="48">62 power current (wiring)</option>
                      <option value="49">63 lighting</option>
                      <option value="50">64 communication</option>
                      <option value="51">65 security</option>
                      <option value="52">66 transport (elevator)</option>
                      <option value="53">68 automation (domotics, AI, etc.)</option>
                      <option value="54">7* elements for fixed inventory or rooms</option>
                      <option value="55">71 circulation (passageway, traffic, etc.)</option> 
                      <option value="56">72 use (living room, bedroom, office, etc.)</option>
                      <option value="57">73 food (kitchen)</option>
                      <option value="58">74 hygiene and care (sanitary, bathroom, toilet, etc.)</option>
                      <option value="59">75 cleaning and maintenance (cleaning, laundry room, technical room, etc.)</option>
                      <option value="60">76 storage (storage room, attic, garage, etc.)</option>
                      <option value="61">8* elements for movable inventory or furniture</option>
                      <option value="62">81 circulation (ladder)</option>
                      <option value="63">82 use (seat, bed, desk, etc.)</option>
                      <option value="64">83 food (dining table)</option>
                      <option value="65">84 hygiëne en verzorging (hangtoilet, douche, …)</option>
                      <option value="66">85 cleaning and maintenance (washing machine)</option>
                      <option value="67">86 storage and screening (rack)</option>
                      <option value="68">9* elements for grounds (exterior)</option>
                      <option value="69">91 ground (surfaces)</option>
                      <option value="70">92 structures (pergolas)</option>
                      <option value="71">93 enclosure (fences)</option>
                      <option value="72">94 finish (decking)</option>
                      <option value="73">95 plumbing equipment (sewers, rainwater well, etc.)</option>
                      <option value="74">96 electrical equipment (solar panel, windmill, etc.)</option>
                      <option value="75">97 outdoor furnishing (garden furniture, bicycle shed, etc.)</option>
                    
                    </select>
                  </div>
                </div>
                <div class="row mb-0">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Product Image</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="file" id="product_image" name="product_image">
                  </div>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="description" name="description">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">Must Contain 30 char</label>
                </div>
                <div class="row mb-0">
                  <label for="inputDate" class="col-sm-2 col-form-label">Model year</label>
                  <div class="col-sm-6">
                    <input type="date" class="form-control" id="model_year" name="model_year">
                  </div>
                </div>
                <div class="row mb-0">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Product code</label>
                  <div class="col-sm-6">
                    <input type="number" class="form-control" id="product_code" name="product_code">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">Valid code 3 digit</label>
                </div>
              
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Selling price</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="selling_price" name="selling_price">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">Valid price must contain numbers</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Calculation price</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="calculation_price" name="calculation_price">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">Valid price must contain numbers</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Maintainance Frequency</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="frequency" name="frequency">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">Frequency of maintainance</label>
                 </div>
                <div class="row mb-0">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Maintenance Sheet</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="file" id="maintenance_sheet" name="maintenance_sheet">
                  </div>
                </div>
                <div class="row mb-0">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Installation Sheet</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="file" id="installation_sheet" name="installation_sheet">
                  </div>
                </div>
                <div class="row mb-0">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Brand logo</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="file" id="brand_log" name="brand_log">
                  </div>
                </div>
                <div class="row mb-0">
                  <label for="inputText" class="col-sm-2 col-form-label">Expected life span</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="life_span" name="life_span">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">Life cycle </label>
                </div>
                <div class="row mb-0">
                  <label for="inputText" class="col-sm-2 col-form-label">Environmental score</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="env_score"  name="env_score">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">valid score must be in number</label>
                </div>
                <fieldset class="row mb-0">
                  <legend class="col-form-label col-sm-2 pt-0">Energy neutral</legend>
                  <div class="col-sm-6">
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
               
                <fieldset class="row mb-0">
                  <legend class="col-form-label col-sm-2 pt-0">Returnable</legend>
                  <div class="col-sm-6">
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
                <fieldset class="row mb-0">
                  <legend class="col-form-label col-sm-2 pt-0">Movable</legend>
                  <div class="col-sm-6">
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
                <fieldset class="row mb-0">
                  <legend class="col-form-label col-sm-2 pt-0">Compatible</legend>
                  <div class="col-sm-6">
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
                <fieldset class="row mb-0">
                  <legend class="col-form-label col-sm-2 pt-0">Demountable</legend>
                  <div class="col-sm-6">
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
                <fieldset class="row mb-0">
                  <legend class="col-form-label col-sm-2 pt-0">Pace-Layering</legend>
                  <div class="col-sm-6">
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
                <fieldset class="row mb-0">
                  <legend class="col-form-label col-sm-2 pt-0">Recycle Content</legend>
                  <div class="col-sm-6">
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
                <fieldset class="row mb-0">
                  <legend class="col-form-label col-sm-2 pt-0">BioBased</legend>
                  <div class="col-sm-6">
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
                <fieldset class="row mb-0">
                  <legend class="col-form-label col-sm-2 pt-0">Extendable life</legend>
                  <div class="col-sm-6">
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
                  <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Manufacturer</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control"  id="manufacturer" name="manufacturer">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">Name of manufacturer</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Website Brand</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="website_brand" name="website_brand">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">valid brand Website</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Bearing capacity</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="bearing_capacity" name="bearing_capacity">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">valid answer</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">U-value</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="u-value" name="u-value">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">valid U-value of product</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Sound insulation</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="sound_insulation" name="sound_insulation">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">valid answer</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Fire resistance</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="fire_resistance" name="fire_resistance">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">valid answer</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Lenght-X max</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="length_x" name="length_x">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">lenght in mm</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Height-Y max</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="height_y" name="height_y">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label"> Height in mm</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Weight-Z max</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="width_z" name="width_z">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label"> Weigth in mm</label>
                </div>
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Construction method</label>
                  <div class="col-sm-6">
                    <select class="form-select" aria-label="Default select example" id="construction_method" name="construction_method">
                      <option selected>Select method</option>
                      <option value="1">Assembly</option>
                      <option value="2">Skeleton</option>
                      <option value="3">3D volumetric (unit)</option>
                       <option value="4">Cast in place (formwork)</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Building System</label>
                  <div class="col-sm-6">
                    <select class="form-select" aria-label="Default select example" id="building_system" name="building_system">
                      <option selected>Select Sytem</option>
                      <option value="1">OBase building and fit-outne</option>
                      <option value="2">Load-bearing exterior walls</option>
                      <option value="3">Non load-bearing partition walls</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Construction type</label>
                  <div class="col-sm-6">
                    <select class="form-select" aria-label="Default select example" id="construction_type" name="construction_type">
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
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Interior finish</label>
                  <div class="col-sm-6">
                    <select class="form-select" aria-label="Default select example" id="interior_finish" name="interior_finish">
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
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Exterior Cladding</label>
                  <div class="col-sm-6">
                    <select class="form-select" aria-label="Default select example" id="exterior_cladding" name="exterior_cladding">
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
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Color</label>
                  <div class="col-sm-6">
                    <select class="form-select" aria-label="Default select example" id="color" name="color">
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
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Designed by</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="designed_by" name="designed_by">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label"> Name of designer </label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">All possible configuration</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="configuration" name="configuration">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label"> valid configuration </label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Specification text</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control"  id="specification_text" name="specification_text">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label"> Some descriptive text </label>
                </div>
                <div class="row mb-0">
                  <label for="inputNumber" class="col-sm-2 col-form-label">3D object</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="file" id="td_object" name="td_object">
                  </div>
                </div>  
                <div class="row mb-0">
                  <div class="col-sm-8" align="right">
                    <button type="submit"  class="btn btn-outline-primary">Save</button>
                  </div>
                </div>
                </form>
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