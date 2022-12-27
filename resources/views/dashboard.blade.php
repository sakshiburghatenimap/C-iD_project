<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar" background image="assets/img/C-iD platform background green.jpg">
  
    <ul class="sidebar-nav" id="sidebar-nav">
<div>
      <li class="nav-item" width="55px" height="55px">  
        <img src="assets/img/logo C-iD.png" alt="" width="55px" height="55px">          
      </li><!-- End Dashboard Nav -->
      <li class="nav-item" width="55px" height="55px">
     <b><span>Dashboard</span></b>
      </li><!-- End Components Nav -->
</div>
</br>
<div>
      <li class="nav-item">
        <img src="assets/img/icon my files.png" alt="" width="55px" height="55px">
      </li><!-- End Forms Nav -->
      <li class="nav-item">
     <b><span>My Files</span></b>
      </li><!-- End Components Nav -->
</div>
</br>
<div>
      <li class="nav-item">
        <img src="assets/img/icon my c-ids.png" alt="" width="55px" height="55px">
      </li><!-- End Tables Nav -->
      <li class="nav-item">
     <b><span>My C-iD's</span></b>
      </li><!-- End Components Nav -->
</div>
</br>

<div>
      <li class="nav-item">     
      <img src="assets/img/icon product data library.png" alt="" width="55px" height="55px">
      </li><!-- End Charts Nav -->
      <li class="nav-item">
     <b><span>Product Data</span></b>
      </li><!-- End Components Nav -->
</div></br>

<div>
      <li class="nav-item">
        <img src="assets/img/icon more info.png" alt="" width="55px" height="55px">    
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
            <span>{{ Auth::user()->name }}</span>|<span>{{ Auth::user()->user_role }}</span>
            <img src="assets/img/icon user.png" alt="Profile" class="rounded-circle">
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
         
          <li class="breadcrumb-item active">HELLO {{ Auth::user()->name }}..!</li>
        </ol>
      </nav>
      
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <!-- File Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
              <div align="left"> 
                <img src="assets/img/icon my files.png" width="20px" height="20px">
                <label><h1 class="card-title">Recent Files</h1></label>
              </div>
                <div class="filter">
                <i class="bi bi-plus" width="25px" height="25px"></i>&nbsp&nbsp
                  <a class="icon" href="#" data-bs-toggle="dropdown"><img src="assets/img/icon list view settings.png" width="20px" height="20px"></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <div class="d-flex align-items-center">
                    
                    <div class="ps-1" align="left">
                      <u><li>Name Unit</li>
                      <li>Name Building</li>
                      <li>Name Site</li>
                      <li>Name Unit</li></u>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Files Card -->

            <!-- C-iD Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
              <div align="left">
              <img src="assets/img/icon my c-ids.png" width="20px" height="20px">
                <label><h1 class="card-title">Recent C-iD's</h1></label>
              </div>
                <div class="filter">
                <i class="bi bi-plus" width="25px" height="25px"></i>&nbsp&nbsp
                  <a class="icon" href="#" data-bs-toggle="dropdown"><img src="assets/img/icon list view settings.png" width="20px" height="20px"></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    
                    <div class="ps-1" align="left">
                      <u><li>Name element(file)</li>
                      <li>Name building(file)</li>
                      <li>Name site(file)</li>
                      <li>Name element(file)</li>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End C-iD's Card -->
            <br>
            <br>
            

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
<!-- End Search Icon-->
<br>
<br>
            <!-- Product data Card -->
            
            <div class="col-xxl-4 col-md-6">

              <div class="card info-card customers-card">
              <div align="left">
              <img src="assets/img/icon product data.png" width="20px" height="20px">
                <label><h1 class="card-title">Recent Product Data</h1></label>
              </div>
                <div class="filter">
                <i class="bi bi-plus" width="25px" height="25px"></i>&nbsp&nbsp
                  <a class="icon" href="#" data-bs-toggle="dropdown"><img src="assets/img/icon list view settings.png" width="20px" height="20px"></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    
                    <div class="ps-1" align="left">
                      <u><li>Name group </li>
                         <li>Name product </li>
                         <li>Name group </li>
                         <li>Name product </li>
                      </u>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End C-iD's Card -->

            <!--Report Card -->
            <div class="col-xxl-10 col-md-12">

              <div class="card info-card revenue-card">
              <div align="left">
              <img src="assets/img/icon reports.png" width="20px" height="20px">
                <label><h1 class="card-title">Recent Report</h1></label>
              </div>
                <div class="filter">
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                  </ul>
                </div>

                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="ps-1" align="left">
                      <u><li>Name user| Name object(C-iD's)</li>
                      <li>Name user|Name object(C-iD's)</li>
                      <li>Name user|Name object(C-iD's)</li>
                      <li>Name user|Name object(C-iD's)</li>
                     </u>
                    </div>
                  </div>
                </div>

             <!-- End C-iD's Card -->
        
    </section>

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>