<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Details page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo C-iD.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  
</head>

<body>

 
  <style>
  .sidebar{
  background-image: url('/assets/img/C-iD platform background green.jpg');
  background-repeat:repeat;
  background-attachment: fixed;
  background-size: cover;
  width:150px;
  height:120%;
  }
  

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 20%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</style>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}
@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
   #rectangle{
  background-color: lightgrey;
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
}
}
</style>
<style>
p.ex1 {
  border: 1px thin black;
  outline-style: solid;
  outline-color: black;
  outline-width: thin;
  padding: top:10px ,  bottom:10px;
  width: 280px;
  height: 60px;
  
}
p.ex2 {
  border: 1px thin black;
  outline-style: solid;
  outline-color: black;
  outline-width: thin;
}
</style>
<style>
.square {
  height: 100px;
  width: 100px;
  background-color: #555;
}
</style>
<style>
  .block {
    border: 1px thin black;
    height:150px;
    width: 500px;
    outline-style: solid;
    outline-color: black;
    outline-width: thin;

  }
</style>
<style>
  .box {
    border: 2px thin black;
    height:400px;
    width:450px;
    outline-style: solid;
    outline-color: black;
    outline-width: thin;
  }
</style>
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
</br>
</br>
<div>
      <li class="nav-item">
        <img src="{{ asset('assets/img/icon my files.png') }}" alt="" width="45px" height="45px">
      </li><!-- End Forms Nav -->
      <li class="nav-item">
     <b><span>My Files</span></b>
      </li><!-- End Components Nav -->
</div>
</br>
</br>
<div>
      <li class="nav-item">
        <img src="{{ asset('assets/img/icon my c-ids.png') }}" alt="" width="45px" height="45px">
      </li><!-- End Tables Nav -->
      <li class="nav-item">
     <b><span>My C-iD's</span></b>
      </li><!-- End Components Nav -->
</div>
</br>
</br>
<div>
      <li class="nav-item">     
      <img src="{{ asset('assets/img/icon product data library.png') }}" alt="" width="45px" height="45px">
      </li><!-- End Charts Nav -->
      <li class="nav-item">
     <b><span>Product Data</span></b>
      </li><!-- End Components Nav -->
</div></br>
</br>
<div>
      <li class="nav-item">
        <img src="{{ asset('assets/img/icon more info.png') }}" alt="" width="45px" height="45px">    
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
     <b><span>More info</span></b>
      </li><!-- End Components Nav -->     
</div></br>
</br>
    </ul>
  </aside><!-- End Sidebar-->
 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="{{ asset('assets/img/logo.png') }}" alt="">
  
  </a>
  
</div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
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
        <li class="nav-item dropdown">
          
        </li><!-- End Notification Nav -->
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <span> {{ Auth::user()->name }}</span>|<span>{{ Auth::user()->user_role }}</span>
            <img src="{{ asset('assets/img/icon user.png') }}" alt="Profile" class="rounded-circle">
            <i class="bi bi-list toggle-sidebar-btn"></i>
          </a><!-- End Profile Iamge Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <hr class="dropdown-divider">
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
          </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->
  
  <main id="main" class="main">
    <div class="pagetitle">  
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><h4><u>Product Data Library</u> ></h4></li>
          <u><li><h4>{{$product->pname}}</h4></li></u>
        </ol>
      </nav>
    </div><!-- End Page Title -->
</br>
    <section class="section dashboard">
      <div class="row">
      <div class="col-lg-12" align="right">   
      <a class="btn btn-outline-primary" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-edit"></i>Edit product data</a>
      <a class="btn btn-outline-primary" href="#"><i class="fa fa-plus"></i>Attached new C-iD</a>
      <form method="post" action="{{route('products.destroy',$product->id)}}">
        @method('delete')
        @csrf
       <button type="submit" class="btn btn-outline-primary"><i class="fa fa-trash"></i>Delete product data</button>
      </form>
    </div> 
</br>
</br>
        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            
            <!-- File Card -->
            <div class="col-md-5 col-lg-5 col-xl-5">
              <div class="card info-card sales-card">
              <div align="left"> 
                <img src="{{ asset('assets/img/icon my files.png') }}" width="200px" height="200px" align="center">
              </div>
            </div>
            </div><!-- End Files Card -->
            <div class="col-md-7 col-lg-5 col-xl-5" align="right">
              <h6><b>Name:{{$product->pname}}</b></h6>
              <h6><b>Type:</b>{{$product->type}}</h6>
              <h6><b>Brand:</b>{{$product->brand}}</h6>
              <h6><b>Description:</b>{{$product->description}}</h6>
           </br>
           </div>
</br>
           <div class="col-md-7 col-lg-5 col-xl-5" align="left">
            <h6><i class="fa fa-star">Model year:{{$product->year}}</h6></i>
            <h6><i class="fa fa-barcode">Product code:{{$product->code}}</h6></i>
            <h6><i class="fa fa-building">Selling price:{{$product->sprice}}</h6></i>
            <h6><i class="fa fa-calculator">Calculation price:{{$product->cprice}}</h6></i>
            <h6><i class="fa fa-calendar">Maintainance Frequency:{{$product->frequency}}</h6></i>
        </div>
         <div class="col-md-5">
         <h6 class="block">&nbsp<i class="fa fa-leaf"></i><b>&nbspSustainability values</b>
         </br>
         </br>Expected life span:{{$product->span}}</br>
         </br>Environmental score:{{$product->score}}</br>
         <img src="{{ asset('assets/img/icon sustainabillity values.png') }}" width="50px" height="50px">
         <img src="{{ asset('assets/img/icon share.png') }}" width="50px" height="50px">
         <img src="{{ asset('assets/img/icon geolocation.png') }}" width="50px" height="50px">
         <img src="{{ asset('assets/img/icon sustainabillity values.png') }}" width="50px" height="50px">
         <img src="{{ asset('assets/img/icon share.png') }}" width="50px" height="50px">
         <img src="{{ asset('assets/img/icon geolocation.png') }}" width="50px" height="50px">
         <img src="{{ asset('assets/img/icon sustainabillity values.png') }}" width="50px" height="50px">
         <img src="{{ asset('assets/img/icon share.png') }}" width="50px" height="50px">
         <img src="{{ asset('assets/img/icon geolocation.png') }}" width="50px" height="50px">
          </br>
          </h6>
         </div>
        <p class="ex1"><i class="fa fa-clipboard"></i>&nbspMaintainance sheet:</br>{{$product->msheet}}</p><br>
        <div class="col-lg-5">
          <h6 class="box">&nbsp<i class="fa fa-list"></i><b>&nbspSpecifications</b></br>
           <br>Manufacturer:{{$product->manufacturer}}
            <br>Website Brand:{{$product->website}}
            <br>Bearing Capacity(kg/m):{{$product->bearing}}
            <br>U-value(W/m2K):{{$product->value}}
            <br>Sound Insulation:{{$product->soundi}}
            <br>Fire Resistance:{{$product->resistance}}
            <br>Lenght X-max(mm):{{$product->length}}
            <br>Height Y-max(mm):{{$product->height}}
            <br>Weight Z-max(mm):{{$product->weight}}
            <br>Construction Method:{{$product->method}}
            <br>Building System:{{$product->system}}
            <br>Construction Type:{{$product->ctype}}
            <br>Interior/External cladding:{{$product->ifinish}}
           <br>Color:{{$product->color}}
            <br>Designed By:{{$product->designed}}
           <br>All possible configuration:{{$product->configuration}}
           <br>Specification text:{{$product->specification}}
            <br>3D object:{{$product->object}}
          </h6>
        </div>
        <p class="ex2"><i class="fa fa-wrench"></i>&nbsp Installation sheet:</br>{{$product->isheet}}</p>
        <div class="square"><b>Brand </br>Logo</div>
      
        </section>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>