<?php
include ('schsession.php');
if (!session_id())
{
    session_start();
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Customizable-Carousel-swipe-enabled.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="assets/css/Important-Highlighted-Event.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Customizable-Background--Overlay.css">
    <link rel="stylesheet" type="text/css" href=cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>


    <style type="text/css">
    .main-navigation {
       box-shadow: 0 4px 2px -2px rgba(0,0,0,.2);
    }
    .shadow1{
        -webkit-box-shadow: 0px 10px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 10px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 10px 5px 0px rgba(0,0,0,0.75);
    }
    .dropdown:hover .dropdown-content {
        display: block;

    }
    @font-face {
        font-family: Dosis;
        src: url(assets/fonts/Dosis-regular.otf);
    }
    th{
      color:black;
      background-color: white;
    }
    td{
      color:#404040;
      font-weight: bold;
    }
    tr:nth-child(odd) {background-color: #f2f2f2;}
    label{
      color:#404040;
      font-weight:bold;
      }


      
      @-webkit-keyframes AnimationName {
          0%{background-position:0% 4%}
          50%{background-position:100% 97%}
          100%{background-position:0% 4%}
      }
      @-moz-keyframes AnimationName {
          0%{background-position:0% 4%}
          50%{background-position:100% 97%}
          100%{background-position:0% 4%}
      }
      @keyframes AnimationName {
          0%{background-position:0% 4%}
          50%{background-position:100% 97%}
          100%{background-position:0% 4%}
    }
</style>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

  <?php
    date_default_timezone_set('Asia/Singapore');
    $tahun=date('Y');
    $tarikh=date('Y-m-d');

    $schidassign=$_SESSION['sch_id'];

    include('dbconnect.php');
    $sqlheader="SELECT * FROM tb_school WHERE schID='$schidassign'";
    $resultheader = mysqli_query($con,$sqlheader);
    $rowheader = mysqli_fetch_array($resultheader);
  ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion shadow bg-gradient-primary" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center text-gray-100" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-gray-100"><?php echo $rowheader['schID']; ?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="sekolahmanage.php">
          <i class="fas fa-fw fa-tachometer-alt text-gray-100"></i>
          <span class="text-gray-100"><strong>Butiran Sekolah</strong></span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading text-gray-100">
        Pengurusan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#pelajarcollapse" data-toggle="collapse" data-target="#collapseMurid" aria-expanded="false" aria-controls="collapseMurid">
          <i class="fas fa-fw fa-user-edit text-gray-100"></i>
          <span class="text-gray-100">Murid</span>
        </a>
        <div id="collapseMurid" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header text-gray-800">Uruskan:</h6>
            <a class="collapse-item" href="managestud.php">Kemaskini Butiran Murid</a>
            <a class="collapse-item" href="managestudadd.php">Tambah Murid</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGuru" aria-expanded="true" aria-controls="collapseGuru">
          <i class="fas fa-fw fa-chalkboard-teacher text-gray-100"></i>
          <span class="text-gray-100">Guru</span>
        </a>
        <div id="collapseGuru" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header text-gray-800">Uruskan:</h6>
            <a class="collapse-item" href="manageteacher.php">Kemaskini Guru</a>
            <a class="collapse-item" href="manageteacheradd.php">Tambah Guru</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-table text-gray-100"></i>
          <span class="text-gray-100">Kelas</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header text-gray-800">Uruskan:</h6>
            <a class="collapse-item" href="managekelas.php">Kemaskini Kelas</a>
            <a class="collapse-item" href="managekelasadd.php">Tambah Kelas</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading text-gray-100">
        Tambahan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder text-gray-100"></i>
          <span class="text-gray-100">Keputusan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header text-gray-800">Paparan:</h6>
            <a class="collapse-item" href="managepenempatan.php">Penempatan Kelas</a>
            <a class="collapse-item" href="managemarkah.php">Markah Peperiksaan</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-wrench text-gray-100"></i>
          <span class="text-gray-100">Urus Akaun</span></a>
      </li>

      <!-- Nav Item - Tables >
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="background: linear-gradient(138deg, grey,darkgrey,white);
      background-size: 700% 700%;
      -webkit-animation: AnimationName 7s ease infinite;
      -moz-animation: AnimationName 7s ease infinite;
      animation: AnimationName 7s ease infinite;" >

      <!-- Main Content -->
      <div id="content" style="background-image: url('assets/img/abstracbanner.png'); background-size:230px 200px">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-gradient-danger"> 

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>

            <!-- Nav Item - User Information-->
            <li class="nav-item dropdown no-arrow" >
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white"><b><?php echo $rowheader['schName']; ?></b></span>
                <i class="fas fa-2x fa-user-circle text-white"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-800"></i>
                  Urus akaun
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="" data-target="">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-800"></i>
                  Log keluar
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->