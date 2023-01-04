
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit product data</title>
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
  background-image:url("/assets/img/C-iD platform background green.jpg");
  background-repeat:repeat;
  background-attachment: fixed;
  background-size: cover;
  width:150px;
  height:100%;

  }
  </style>
 <style>
      @media only screen and (max-width:1600px) {
  /* For desktop: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
  .textbox{
      width:75%;
      height:39px; 
    }
    .body{
      width: 100%;
      padding-left:25%;
      padding-right:25%;
    }
}


      </style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
   
  </a>
  
</div><!-- End Logo -->

    <div class="search-bar">
      
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
           
          </a>
        </li><!-- End Search Icon-->
          </ul><!-- End Messages Dropdown Items -->
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span>{{ Auth::user()->name }}</span>|<span>{{ Auth::user()->user_role }}</span> 
            <img src="{{ asset('assets/img/icon user.png') }}" alt="Profile" class="rounded-circle"> 
            <i class="bi bi-list toggle-sidebar-btn"></i>
          </a><!-- End Profile Iamge Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
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
        <img src="{{ asset('assets/img/logo C-iD.png') }}" alt="" width="45px" height="45px">          
      </li><!-- End Dashboard Nav -->
      <li class="nav-item" width="45px" height="45px">
     <b><span>Dashboard</span></b>
      </li><!-- End Components Nav -->
</div>
</br></br>

<div>
      <li class="nav-item">
        <img src="{{ asset('assets/img/icon my files.png') }}" alt="" width="45px" height="45px">
      </li><!-- End Forms Nav -->
      <li class="nav-item">
     <b><span>My Files</span></b>
      </li><!-- End Components Nav -->
</div>
</br></br>

<div>
      <li class="nav-item">
        <img src="{{ asset('assets/img/icon my c-ids.png') }}" alt="" width="45px" height="45px">
      </li><!-- End Tables Nav -->
      <li class="nav-item">
     <b><span>My C-iD's</span></b>
      </li><!-- End Components Nav -->
</div>
</br></br>


<div>
      <li class="nav-item">     
      <img src="{{ asset('assets/img/icon product data library.png') }}" alt="" width="45px" height="45px">
      </li><!-- End Charts Nav -->
      <li class="nav-item">
     <b><span>Product Data</span></b>
      </li><!-- End Components Nav -->
</div></br></br>


<div>
      <li class="nav-item">
        <img src="{{ asset('assets/img/icon more info.png') }}" alt="" width="45px" height="45px">    
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
    
      <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item active"><h4><u>Product Data Library</u> ></h4></li>
          <u><li><h4>Edit product data</h4></li></u>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
         <div class="row mb-0">
                  <div class="col-sm-12" style="width:94%" align="right">
                    <button type="submit" class="btn btn-outline-primary"><i class="fa fa-check"></i>Save</button>
                  </div>
                </div>
      <div class="row">
        <div class="col-lg-12">
            <div class="card-body">
            
              <!-- General Form Elements -->
              <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="row mb-0">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="pname" name="pname" value="{{$product->pname}}">
                  </div>
                  <label for="inputNumber" class="col-md-4 col-form-label">Must Contain min 5 char</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Brand</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="brand" name="brand"  value="{{$product->brand}}">
                  </div>
                  <label for="inputNumber" class="col-md-4 col-form-label">Enter the brand name</label>
                </div>
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-6">
                    <select class="textbox" aria-label="Default select example" id="category" name="category">
                      <option selected>Open this select menu</option>
                      <option value="One">One</option>
                      <option value="Two">Two</option>
                      <option value="Three">Three</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Type</label>
                  <div class="col-sm-6">
                    <select class="textbox" aria-label="Default select example" id="type" name="type">
                      <option selected>Open this select menu</option>
                      <option value="0* elements for volumes (siting)">0* elements for volumes (siting)</option>
                      <option value="00 Rooms (indoor and outdoor areas)">00 Rooms (indoor and outdoor areas)</option>
                      <option value="1* elements for foundation">1* elements for foundation</option>
                      <option value="11 Groundwork (soil)">11 Groundwork (soil)</option>
                      <option value="13 Floors on foundation (slabs on grade)">13 Floors on foundation (slabs on grade)</option>
                      <option value="16 Foundation structures and footing, retaining walls (frost walls)">16 Foundation structures and footing, retaining walls (frost walls)</option>
                      <option value="17 Pile foundations">17 Pile foundations</option>
                      <option value="2* composite elements / components (++ = including 4* and 3*)">2* composite elements / components (++ = including 4* and 3*)</option>
                      <option value="21++ Exterior walls (facades)">21++ Exterior walls (facades)</option>
                      <option value="22++ Interior walls (interior walls)">22++ Interior walls (interior walls)</option>
                      <option value="23++ Floors (intermediate floors, gallery floors, balconies and landings)">23++ Floors (intermediate floors, gallery floors, balconies and landings)</option>
                      <option value="24++ Stairs and ramps">24++ Stairs and ramps</option>
                      <option value="27++ Roofs (sloping and flat roofs)">27++ Roofs (sloping and flat roofs)</option>
                      <option value="28 Main supporting structures, columns and beams (structure)">28 Main supporting structures, columns and beams (structure)</option>
                      <option value="3* partial elements (+ = including 4*)">3* partial elements (+ = including 4*)</option>
                      <option value="31+ Exterior wall openings">31+ Exterior wall openings</option>
                      <option value="31.1+ Outer wall openings with passage">31.1+ Outer wall openings with passage</option>
                      <option value="31.2+ Exterior windows">31.2+ Exterior windows</option>
                      <option value="31.4+ Curtain wall (facade framework)">31.4+ Curtain wall (facade framework)</option>
                      <option value="32+ Interior wall openings">32+ Interior wall openings</option>
                      <option value="32.1+ Inner wall openings with passage">32.1+ Inner wall openings with passage</option>
                      <option value="32.2+ Interior windows">32.2+ Interior windows</option>
                      <option value="32.3+ Interior doors">32.3+ Interior doors</option>
                      <option value="32.4+ Modular walls (partition walls)">32.4+ Modular walls (partition walls)</option>
                      <option value="33+ Floor openings (stair hatch)">33+ Floor openings (stair hatch)</option>
                      <option value="34+ Handrails (stairs, landing)">34+ Handrails (stairs, landing)</option>
                      <option value="35+ Suspended ceilings (suspended ceilings)">35+ Suspended ceilings (suspended ceilings)</option>
                      <option value="37+ Roof openings (roof windows)">37+ Roof openings (roof windows)</option>
                      <option value="38+ Balustrades (horizontal parapet)">38+ Balustrades (horizontal parapet)</option>
                      <option value="4* elements for finishing or cladding">4* elements for finishing or cladding</option>
                      <option value="41 Exterior wall finishes (exterior wall cladding)">41 Exterior wall finishes (exterior wall cladding)</option>
                      <option value="42 Interior wall finishes (facing walls)">42 Interior wall finishes (facing walls)</option>
                      <option value="43 Floor finishes (top surface)">43 Floor finishes (top surface)</option>
                      <option value="44 Stair and ramp finishes (top finish)">44 Stair and ramp finishes (top finish)</option>
                      <option value="45 Ceiling finishes">45 Ceiling finishes</option>
                      <option value="47 Roof finishes (roof cladding)">47 Roof finishes (roof cladding)</option>
                      <option value="5* elements for plumbing installations">5* elements for plumbing installations</option>
                      <option value="51 heating (heat generation)">51 heating (heat generation)</option>
                      <option value="52 drain (collection)">52 drain (collection)</option>
                      <option value="53 supply (water)">53 supply (water)</option>
                      <option value="54 gases">54 gases</option>
                      <option value="55 cooling (cold generation)">55 cooling (cold generation)</option>
                      <option value="56 heat distribution (output)">56 heat distribution (output)</option>
                      <option value="57 air treatment (ventilation)">57 air treatment (ventilation)</option>
                      <option value="58 climate control">58 climate control</option>
                      <option value="6* elements for electrical installations">6* elements for electrical installations</option>
                      <option value="61 central electrotechnical facilities (installation)">61 central electrotechnical facilities (installation)</option>
                      <option value="62 power current (wiring)">62 power current (wiring)</option>
                      <option value="63 lighting">63 lighting</option>
                      <option value="64 communication">64 communication</option>
                      <option value="65 security">65 security</option>
                      <option value="66 transport (elevator)">66 transport (elevator)</option>
                      <option value="68 automation (domotics, AI, etc.)">68 automation (domotics, AI, etc.)</option>
                      <option value="7* elements for fixed inventory or rooms">7* elements for fixed inventory or rooms</option>
                      <option value="71 circulation (passageway, traffic, etc.)">71 circulation (passageway, traffic, etc.)</option> 
                      <option value="72 use (living room, bedroom, office, etc.)">72 use (living room, bedroom, office, etc.)</option>
                      <option value="73 food (kitchen)">73 food (kitchen)</option>
                      <option value="74 hygiene and care (sanitary, bathroom, toilet, etc.)">74 hygiene and care (sanitary, bathroom, toilet, etc.)</option>
                      <option value="75 cleaning and maintenance (cleaning, laundry room, technical room, etc.)">75 cleaning and maintenance (cleaning, laundry room, technical room, etc.)</option>
                      <option value="76 storage (storage room, attic, garage, etc.)">76 storage (storage room, attic, garage, etc.)</option>
                      <option value="8* elements for movable inventory or furniture">8* elements for movable inventory or furniture</option>
                      <option value="81 circulation (ladder)">81 circulation (ladder)</option>
                      <option value="82 use (seat, bed, desk, etc.)">82 use (seat, bed, desk, etc.)</option>
                      <option value="83 food (dining table)">83 food (dining table)</option>
                      <option value="84 hygiëne en verzorging (hangtoilet, douche, …)">84 hygiëne en verzorging (hangtoilet, douche, …)</option>
                      <option value="85 cleaning and maintenance (washing machine)">85 cleaning and maintenance (washing machine)</option>
                      <option value="86 storage and screening (rack)">86 storage and screening (rack)</option>
                      <option value="9* elements for grounds (exterior)">9* elements for grounds (exterior)</option>
                      <option value="91 ground (surfaces)">91 ground (surfaces)</option>
                      <option value="92 structures (pergolas)">92 structures (pergolas)</option>
                      <option value="93 enclosure (fences)">93 enclosure (fences)</option>
                      <option value="94 finish (decking)">94 finish (decking)</option>
                      <option value="95 plumbing equipment (sewers, rainwater well, etc.)">95 plumbing equipment (sewers, rainwater well, etc.)</option>
                      <option value="96 electrical equipment (solar panel, windmill, etc.)">96 electrical equipment (solar panel, windmill, etc.)</option>
                      <option value="97 outdoor furnishing (garden furniture, bicycle shed, etc.)">97 outdoor furnishing (garden furniture, bicycle shed, etc.)</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-0">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Product Image</label>
                  <div class="col-sm-6">
                    <input class="textbox" type="file" id="image" name="image" multiple>
                  </div>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="description" name="description"  value="{{$product->description}}">
                  </div>
                  <label for="inputNumber" class="col-md-4 col-form-label">Must Contain 30 char</label>
                </div>
                <div class="row mb-0">
                  <label for="inputDate" class="col-sm-2 col-form-label">Model year</label>
                  <div class="col-sm-6">
                    <input type="date" class="textbox" id="year" name="year"  value="{{$product->year}}">
                  </div>
                  <label for="inputNumber" class="col-md-4 col-form-label">Enter the valid year</label>
                </div>
                <div class="row mb-0">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Product code</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="code" name="code"  value="{{$product->code}}">
                  </div>
                  <label for="inputNumber" class="col-md-4 col-form-label">Valid code 3 digit</label>
                </div>
              
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Selling price</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="sprice" name="sprice"  value="{{$product->sprice}}">
                  </div>
                  <label for="inputNumber" class="col-md-4 col-form-label">Valid price must contain numbers</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Calculation price</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="cprice" name="cprice"  value="{{$product->cprice}}">
                  </div>
                  <label for="inputNumber" class="col-md-4 col-form-label">Valid price must contain numbers</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Maintainance Frequency</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="frequency" name="frequency"  value="{{$product->frequency}}">
                  </div>
                  <label for="inputNumber" class="col-md-4 col-form-label">Frequency of maintainance</label>
                 </div>
                <div class="row mb-0">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Maintenance Sheet</label>
                  <div class="col-sm-6">
                    <input class="textbox" type="file" id="msheet" name="msheet"  value="{{$product->msheet}}">
                  </div>
                </div>
                <div class="row mb-0">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Installation Sheet</label>
                  <div class="col-sm-6">
                    <input class="textbox" type="file" id="isheet" name="isheet"  value="{{$product->isheet}}">
                  </div>
                </div>
                <div class="row mb-0">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Brand logo</label>
                  <div class="col-sm-6">
                    <input class="textbox" type="file" id="blogo" name="blogo"  value="{{$product->blogo}}">
                  </div>
                </div>
                <div class="row mb-0">
                  <label for="inputText" class="col-sm-2 col-form-label">Expected life span</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="span" name="span"  value="{{$product->span}}">
                  </div>
                  <label for="inputNumber" class="col-md-4 col-form-label">Life cycle </label>
                </div>
                <div class="row mb-0">
                  <label for="inputText" class="col-sm-2 col-form-label">Environmental score</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="score"  name="score"  value="{{$product->score}}">
                  </div>
                  <label for="inputNumber" class="col-md-4 col-form-label">valid score must be in number</label>
                </div>
                <fieldset class="row mb-0">
                  <legend class="col-form-label col-sm-2 pt-0">Energy neutral</legend>
                  <div class="col-sm-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="energyn" id="energyn" value="yes">
                      <label class="form-check-label" for="gridRadios1">
                     yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="energyn" id="energyn" value="no">
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
                      <input class="form-check-input" type="radio" name="pacel" id="pacel" value="yes">
                      <label class="form-check-label" for="gridRadios1">
                     yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="pacel" id="pacel" value="no">
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
                      <input class="form-check-input" type="radio" name="recycled" id="recycled" value="yes">
                      <label class="form-check-label" for="gridRadios1">
                     yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="recycled" id="recycled" value="no">
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
                      <input class="form-check-input" type="radio" name="extendable" id="extendable" value="yes">
                      <label class="form-check-label" for="gridRadios1">
                     yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="extendable" id="extendable" value="no">
                      <label class="form-check-label" for="gridRadios2">
                       No
                      </label>
                    </div>
                  </div>
                  <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Manufacturer</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox"  id="manufacturer" name="manufacturer"  value="{{$product->manufacturer}}">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">Name of manufacturer</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Website Brand</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="website" name="website"  value="{{$product->website}}">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">valid brand Website</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Bearing capacity</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="bearing" name="bearing"  value="{{$product->bearing}}">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">valid answer</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">U-value</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="value" name="value"  value="{{$product->value}}">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">valid U-value of product</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Sound insulation</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="soundi" name="soundi"  value="{{$product->soundi}}">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">valid answer</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Fire resistance</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="resistance" name="resistance"  value="{{$product->resistance}}">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">valid answer</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Lenght-X max</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="length" name="length"  value="{{$product->length}}">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label">lenght in mm</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Height-Y max</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="height" name="height"  value="{{$product->height}}">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label"> Height in mm</label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Weight-Z max</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="weight" name="weight"  value="{{$product->weight}}">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label"> Weigth in mm</label>
                </div>
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Construction method</label>
                  <div class="col-sm-6">
                    <select class="textbox" aria-label="Default select example" id="method" name="method">
                      <option selected>Select method</option>
                      <option value="Assembly">Assembly</option>
                      <option value="Skeleton">Skeleton</option>
                      <option value="3D volumetric (unit)">3D volumetric (unit)</option>
                       <option value="Cast in place (formwork)">Cast in place (formwork)</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Building System</label>
                  <div class="col-sm-6">
                    <select class="textbox" aria-label="Default select example" id="system" name="system">
                      <option selected>Select Sytem</option>
                      <option value="OBase building and fit-outne">OBase building and fit-outne</option>
                      <option value="Load-bearing exterior walls">Load-bearing exterior walls</option>
                      <option value="Non load-bearing partition walls">Non load-bearing partition walls</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Construction type</label>
                  <div class="col-sm-6">
                    <select class="textbox" aria-label="Default select example" id="ctype" name="ctype">
                      <option selected>Open this select menu</option>
                      <option value="Timber">Timber</option>
                      <option value="CLT">CLT</option>
                      <option value="Concrete">Concrete</option>
                      <option value="Steel">Steel</option>
                      <option value="Aluminum">Aluminum</option>
                      <option value="Hybrid">Hybrid</option>
                      <option value="other">other</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Interior finish/exterior cladding</label>
                  <div class="col-sm-6">
                    <select class="textbox" aria-label="Default select example" id="ifinish" name="ifinish">
                      <option selected>Open this select menu</option>
                      <option value="Aluminium">Aluminium</option>
                      <option value="Concrete">Concrete</option>
                      <option value="Synthetic">Synthetic</option>
                      <option value="Steel">Steel</option>
                      <option value="Stone">Stone</option>
                      <option value="other">other</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-0">
                  <label class="col-sm-2 col-form-label">Color</label>
                  <div class="col-sm-6">
                    <select class="textbox" aria-label="Default select example" id="color" name="color">
                      <option selected>Open this select menu</option>
                      <option value="White">White</option>
                      <option value="Yellow">Yellow</option>
                      <option value="Orange">Orange</option>
                      <option value="Pink">Pink</option>
                      <option value="Red">Red</option>
                      <option value="Voilet">Voilet</option>
                      <option value="Turquoise">Turquoise</option>
                      <option value="Green">Green</option>
                      <option value="Brown">Brown</option>
                      <option value="Gray">Gray</option>
                      <option value="Black">Black</option>
                      <option value="Mixed colours">Mixed colours</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Designed by</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="designed" name="designed"  value="{{$product->designed}}">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label"> Name of designer </label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">All possible configuration</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox" id="configuration" name="configuration"  value="{{$product->configuration}}">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label"> valid configuration </label>
                </div>
                <div class="row mb-0">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Specification text</label>
                  <div class="col-sm-6">
                    <input type="text" class="textbox"  id="specification" name="specification"  value="{{$product->specification}}">
                  </div>
                  <label for="inputNumber" class="col-sm-4 col-form-label"> Some descriptive text </label>
                </div>
                <div class="row mb-0">
                  <label for="inputNumber" class="col-sm-2 col-form-label">3D object</label>
                  <div class="col-sm-6">
                    <input class="textbox" type="file" id="object" name="object"  value="{{$product->object}}">
                  </div>
                </div>  
                <div class="row mb-0">
                  <div class="col-sm-12" style="width:94%" align="right">
                    <button type="submit"  class="btn btn-outline-primary"><i class="fa fa-check"></i>Save</button>
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


