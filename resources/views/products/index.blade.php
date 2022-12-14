<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Data Library</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicons -->
  <link href="assets/img/logo C-iD.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

 
  <style>
  .sidebar{
  background-image: url('assets/img/C-iD platform background green.jpg');
  background-repeat:repeat;
  background-attachment: fixed;
  background-size: cover;
  width:150px;
  height:100%;
  }
  

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 125px;
  margin: auto;
  text-align: center;
  font-family: arial;
  height:100px;
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
  width: 100%;
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
}
</style>
<style>
   .textbox{
      width:100%;
      height:39px; 
    }
  </style>

  <!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar" background image="{{ ('assets/img/C-iD platform background green.jpg') }}">
  
    <ul class="sidebar-nav" id="sidebar-nav">
<div>
      <li class="nav-item" width="55px" height="55px">  
        <img src="assets/img/logo C-iD.png" alt="" width="45px" height="45px">          
      </li><!-- End Dashboard Nav -->
      <li class="nav-item" width="45px" height="45px">
     <b><span>Dashboard</span></b>
      </li><!-- End Components Nav -->
</div>
</br></br>

<div>
      <li class="nav-item">
        <img src="assets/img/icon my files.png" alt="" width="45px" height="45px">
      </li><!-- End Forms Nav -->
      <li class="nav-item">
     <b><span>My Files</span></b>
      </li><!-- End Components Nav -->
</div>
</br></br>

<div>
      <li class="nav-item">
        <img src="assets/img/icon my c-ids.png" alt="" width="45px" height="45px">
      </li><!-- End Tables Nav -->
      <li class="nav-item">
     <b><span>My C-iD's</span></b>
      </li><!-- End Components Nav -->
</div>
</br></br>


<div>
      <li class="nav-item">     
      <img src="assets/img/icon product data library.png" alt="" width="45px" height="45px">
      </li><!-- End Charts Nav -->
      <li class="nav-item">
     <b><span>Product Data</span></b>
      </li><!-- End Components Nav -->
</div></br></br>


<div>
      <li class="nav-item">
        <img src="assets/img/icon more info.png" alt="" width="45px" height="45px">    
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
     <b><span>More info</span></b>
      </li><!-- End Components Nav -->     
</div></br>
    </ul>
  </aside><!-- End Sidebar-->
 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
   
  </a>
  
</div><!-- End Logo -->



<nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
          </ul><!-- End Messages Dropdown Items -->
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <span> {{ Auth::user()->name }}</span>|<span>{{ Auth::user()->user_role }}</span>
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
    </nav><!-- End Icons Navigation-->
   

  </header>
  <!-- End Header -->
  <main id="main" class="main">
  
    <div class="pagetitle">
    <h1><a class="breadcrumb-item"><u>Product Data Library</u></li> > </h1>
    </div><!-- End Page Title -->
    </div>
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
        </div>
        </div>  
           
        <!-- Right side columns -->
      <div class="col-lg-12" align="right">   
      <a class="btn btn-outline-primary" href="products/create"><i class="fa fa-plus"></i>Create new product data</a>
      <a class="btn btn-outline-primary" href="#"><i class="fa fa-file"></i>Import product Data</a>
      <a class="btn btn-outline-primary"><i class="fa fa-plus"></i>Create new group</a>
     </div> 
    </section>
</br>
</br>
      <div> 
      <h1><a class="#">List of Products & Groups</li></h1>
      <nav>
        <ol class="breadcrumb">
         <h6>{{$products->count()}} items</h6>
        </ol>
    </div><!-- End Page Title -->
</div>
      </nav>
  
            <!-- Sales Card -->
        <form>

          <div class="row">
        @foreach ($products as $product)
        <div style="width:20%",>
          <div class="card">
            <div>
            <a href="{{ route('products.show',$product->id) }}"><img src="{{ asset('public/product/'.$product->image)}}" width="70px" height="70px"></a>
            </div>
          </div>
          <h6 style="padding-left:38px",>Name:{{ $product -> pname }}</h6>
           <h6 style="padding-left:38px",>Type:{{ $product -> type }}</h6>
          </div>
          @endforeach
        </div>
</form>
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











