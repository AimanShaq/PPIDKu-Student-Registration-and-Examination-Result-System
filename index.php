<?php
    include 'dbconnect.php';
?>

<!DOCTYPE html>
<html>

<head>
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
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
    .card:hover {
        box-shadow: 0 4px 2px -2px rgba(0,0,0,.2);
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 40%;
    }

    @font-face {
        font-family: Dosis;
        src: url(assets/fonts/Dosis-regular.otf);
    }
    .cropped{
        object-fit: cover;
        object-position: 0px -300px;
        filter: grayscale(30%);
        opacity: 90%;
    }
    .vl {
        border-left: 6px solid grey;
        height: 500px;
        position: absolute;
        left: 50%;
        margin-left: -3px;
        top: 0;
    }
    a{
    color:#e7e7e7;
    }
    a:hover{
        color:white;
    }
    .fa-bars
    {
        color:white;
    }
    .container {
        padding: 10px 5px;
    }
    .slideanim {visibility:hidden;}
    .slide {
        /* The name of the animation */
        animation-name: slide;
        -webkit-animation-name: slide;
        /* The duration of the animation */
        animation-duration: 1s;
        -webkit-animation-duration: 1s;
        /* Make the element visible */
        visibility: visible;
    }

    /* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
    @keyframes slide {
        0% {
            opacity: 0;
            transform: translateY(70%);
        }
        100% {
            opacity: 1;
            transform: translateY(0%);
        }
    }
    @-webkit-keyframes slide {
        0% {
            opacity: 0;
            -webkit-transform: translateY(70%);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateY(0%);
        }
    }
    /* Responsive columns */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 10px;
        }
    }

    
    </style>
    <title>Portal Rasmi PPIDKu</title>
</head>

<body >
    <!--div class="container-fluid" style="padding:2px"-->
    <img class="" style="width:100%" src="assets/img/banner3.jpg">
    <nav class="navbar navbar-expand-md sticky-top navigation-clean main-navigation" style="margin:0;align-content:center; background-image: linear-gradient(90deg,red,blue)">
        <div class="container-fluid"><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="fas fa-bars"></span></button>
            <div class="collapse navbar-collapse text-md font-weight-bold text-primary text-uppercase mb-1" id="navcol-1" style="font-size:14px;">
                <ul class="nav navbar-nav flex-shrink-0 mx-auto" style="margin:-0;padding:0;">
                    <li class="nav-item" role="presentation"><a class="nav-link text-uppercase" href="index.php"><strong>LAMAN UTAMA</strong></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="semakanibubapa.php"><strong>e-Keputusan</strong></a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="font-family:AGENCY FB;"><strong>PANDUAN PENGGUNA</strong></a>
                        <div class="dropdown-menu dropdown-content" role="menu">
                            <a class="dropdown-item text-uppercase" role="presentation" 
                            href="manualibubapa.php" style="font-family:AGENCY FB;font-size:12px;"><strong>Ibu Bapa</strong></a>
                            <a class="dropdown-item" role="presentation" href="manualsekolah.php" style="font-family:AGENCY FB;font-size:12px;"><strong>Sekolah</strong></a>
                            <a class="dropdown-item" role="presentation" href="manualppidku.php" style="font-family:AGENCY FB;font-size:12px;"><strong>PPID</strong></a>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="11info1.php"><strong>TENTANG KAMI</strong></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-uppercase" href="#contactus" ><strong>HUBUNGI KAMI</strong></a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="font-family:AGENCY FB;"><strong>log masuk</strong></a>
                        <div class="dropdown-menu dropdown-content" role="menu">
                            <a class="dropdown-item text-uppercase" role="presentation" 
                            href="adminlogin.php" style="font-family:AGENCY FB;font-size:12px;"><strong>PPIDKu</strong></a>
                            <a class="dropdown-item" role="presentation" href="tclogin.php" style="font-family:AGENCY FB;font-size:12px;"><strong>Sekolah</strong></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!--/div-->

</body>


<div class="col-sm" style="background-image:url('assets/img/abstracbanner.png'),linear-gradient(grey,white); background-size: 230px,200px;">
    <div style="" class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" align="center" role="listbox" style="height:384px; width:90%; margin-left: 5%">
            <div class="carousel-item active"><img class="w-100 d-block cropped" style="object-fit: ; position: absolute;object-position: 0% -100px;" src="assets/img/gambar1.jpg" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block cropped" style="object-fit: cover;position: absolute;object-position: 0% -100px;" src="assets/img/gambar2.jpg" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" style="object-fit: cover;position: absolute;object-position: 0% -100px; filter: grayscale(30%); opacity: 90%;" src="assets/img/gambar4.jpg" alt="Slide Image"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
        </ol>
    </div>
</div>

    <div class="highlight-phone" style="background-image:url('assets/img/abstracbanner.png'),linear-gradient(white,grey); background-size: 230px,200px;">
        <div class="container-fluid" align="center">
            <div class="row slideanim" >
                <div class="col-lg" style="background-color:pink; margin-bottom:20px; ">&nbsp
                <!-- <div class="col-md-4">  -->
                    <div class="intro">
                            <img src="assets/img/computer.png" style="width:100px;height:100px;float:left;">
                            <?php

                                $sqlnews1="SELECT * FROM tb_news
                                         WHERE newsID='1'";
                                $resultnews1 = mysqli_query($con,$sqlnews1);
                                $rownews1 = mysqli_fetch_array($resultnews1);

                                echo "<h2 style='font-family:Agency FB; color:#213159; font-size: 35px;'>".$rownews1['newsTitle']."</h2>";
                                echo "<p style='color:#f04b4c; font-size:20px; font-family:Dosis'>".$rownews1['newsDesc']."</p>";
                                echo "<p style='color:#213159; font-size: 25px; font-family:Dosis'>Tarikh penting</p>";
                                echo "<ul >";
                                echo "<li style='font-family: Dosis'>Semakan secara atas talian:&nbsp".$rownews1['newsDatebk']."</li>";
                                echo "<li style='font-family: Dosis'>Hari Terbuka Sekolah Agama:&nbsp".$rownews1['newsDatetp']."</li>";
                                echo "</ul>";
                                echo "<p style='font-size: 15px; font-family: Calibri'>".$rownews1['newsAction']."</p>";
                                echo "<a class='btn btn-primary' role='button' href='semakanibubapa.php'>SEMAK</a>"

                            ?>
   
                            
                    </div><br><br>
                <!-- </div>   -->
            </div>

            <div class="col-lg" style="background-color:lightblue;margin-bottom:20px;  ">&nbsp
                <!-- <div class="row">&nbsp -->
                    <!-- <div class="col-md-5">  -->
                        <div class="intro">
                        <img class="thumbnail" src="assets/img/ragister2.png" style="width:100px ;height:100px;float:left;">
                            <?php

                                $sqlnews2="SELECT * FROM tb_news
                                            WHERE newsID='2'";
                                $resultnews2 = mysqli_query($con,$sqlnews2);
                                $rownews2 = mysqli_fetch_array($resultnews2);

                                echo "<h2 style='font-family:Agency FB; color:#213159; font-size: 35px;'>".$rownews2['newsTitle']."</h2>"; 
                                echo "<p style='color:#f04b4c; font-size:20px; font-family:Dosis;' align='center'>".$rownews2['newsDesc']."</p>";
                                echo "<p style='color:#213159; font-size: 25px; font-family:Dosis'>Tarikh penting</p>";
                                echo "<ul >";
                                echo "<li style='font-family: Dosis'>Pendaftaran Darjah 1 secara atas talian dibuka:&nbsp ".$rownews2['newsDatebk']."</li>";
                                echo "<li style='font-family: Dosis'>Pendaftaran dan permohonan lambat:&nbsp".$rownews2['newsDatetp']."</li>";
                                echo "</ul>";
                                echo "<p style='font-size: 15px; font-family: Calibri'>".$rownews2['newsAction']."</p>";
                                
                                                            ?>
                        </div>
                
            </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-image:url('assets/img/abstracbanner.png'), linear-gradient(grey,white);background-size: 230px,200px;">
<div id="carousel-2" class="carousel slide container-fluid card-body shadow " data-ride="carousel" style="background-color:white; width:95%">
<b><h2 class="text-center" style="font-family:AGENCY FB; font-weight: bold; height:26px; color:#213159">Buletin</h2></b>&nbsp
    <div class="row slideanim">
        <div class="carousel-inner" align="center">
            <div class="carousel-inner" align="center">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-lg " style="margin-bottom:20px;">
                        <div class="card shadow1" style="width:350px">
                            <?php
                                $sqlbul1="SELECT * FROM tb_buletin
                                            WHERE bulID='1'";
                                $resultbul1 = mysqli_query($con,$sqlbul1);
                                
                                $fgalimage_path = 'assets/img/';
                                while($rowbul1 = mysqli_fetch_array($resultbul1))
                                {
                                    $img_src = $rowbul1['bulImage'];
                            ?>
                            
                                <img src="<?php echo $img_src; ?>" style="height:350px;" />

                                <?php
                                    echo "<div class='container shadow1'>";
                                    echo "<p2><b>".$rowbul1['bulTitle']."</b></p2><br>";
                                    echo "<p3>".$rowbul1['bulDate']."</p3>";
                                    echo "</div>";
                                ?>

                                <?php
                                    }
                            ?>

                        </div>
                    </div>
                    <div class="col-lg" style="margin-bottom:20px;">
                        <div class="card" style="width:350px">
                            <?php
                                $sqlbul2="SELECT * FROM tb_buletin
                                            WHERE bulID='2'";
                                $resultbul2 = mysqli_query($con,$sqlbul2);
                                
                                $fgalimage_path = 'assets/img/';
                                while($rowbul2 = mysqli_fetch_array($resultbul2))
                                {
                                    $img_src = $rowbul2['bulImage'];
                            ?>
                            
                            <img src="<?php echo $img_src; ?>" style="height:350px;" />

                            <?php
                                echo "<div class='container shadow1'>";
                                echo "<p2><b>".$rowbul2['bulTitle']."</b></p2><br>";
                                echo "<p3>".$rowbul2['bulDate']."</p3>";
                                echo "</div>";
                            ?>

                            <?php
                                }
                            ?>
                        
                        </div>
                    </div>
                    <div class="col-lg" style="margin-bottom:20px;">
                        <div class="card" style="width:350px">
                        <?php
                                $sqlbul3="SELECT * FROM tb_buletin
                                            WHERE bulID='3'";
                                $resultbul3 = mysqli_query($con,$sqlbul3);
                                
                                $fgalimage_path = 'assets/img/';
                                while($rowbul3 = mysqli_fetch_array($resultbul3))
                                {
                                    $img_src = $rowbul3['bulImage'];
                            ?>
                            
                                <img src="<?php echo $img_src; ?>" style="height:350px;" />

                                <?php
                                    echo "<div class='container shadow1'>";
                                    echo "<p2><b>".$rowbul3['bulTitle']."</b></p2><br>";
                                    echo "<p3>".$rowbul3['bulDate']."</p3>";
                                    echo "</div>";
                                ?>

                                <?php
                                    }
                            ?>
                            <!-- <img src="assets/img/ppid3.jpg" style="height:350px;">
                            <div class="container shadow1">
                                <p2><b>Hati Gajah Sama Dilapah, Hati Kuman Sama Dicecah</b></p2><br>
                                <p3>22/12/2018 (Selasa)</p3> 
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row">
                    <div class="col-lg" style="margin-bottom:20px;">
                        <div class="card" style="width:350px">
                        <?php
                                $sqlbul4="SELECT * FROM tb_buletin
                                            WHERE bulID='4'";
                                $resultbul4 = mysqli_query($con,$sqlbul4);
                                
                                $fgalimage_path = 'assets/img/';
                                while($rowbul4 = mysqli_fetch_array($resultbul4))
                                {
                                    $img_src = $rowbul4['bulImage'];
                            ?>
                            
                                <img src="<?php echo $img_src; ?>" style="height:350px;" />

                                <?php
                                    echo "<div class='container shadow1'>";
                                    echo "<p2><b>".$rowbul4['bulTitle']."</b></p2><br>";
                                    echo "<p3>".$rowbul4['bulDate']."</p3>";
                                    echo "</div>";
                                ?>

                                <?php
                                    }
                            ?>
                            <!-- <img src="assets/img/ppid4.jpg" style="height:350px;">
                            <div class="container shadow1">
                                <p2><b>Gotong-Royong Perdana SAKNJ</b></p2><br>
                                <p3>22/12/2018 (Selasa)</p3> 
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg" style="margin-bottom:20px;">
                        <div class="card" style="width:350px">
                        <?php
                                $sqlbul5="SELECT * FROM tb_buletin
                                            WHERE bulID='5'";
                                $resultbul5 = mysqli_query($con,$sqlbul5);
                                
                                $fgalimage_path = 'assets/img/';
                                while($rowbul5 = mysqli_fetch_array($resultbul5))
                                {
                                    $img_src = $rowbul5['bulImage'];
                            ?>
                            
                                <img src="<?php echo $img_src; ?>" style="height:350px;" />

                                <?php
                                    echo "<div class='container shadow1'>";
                                    echo "<p2><b>".$rowbul5['bulTitle']."</b></p2><br>";
                                    echo "<p3>".$rowbul5['bulDate']."</p3>";
                                    echo "</div>";
                                ?>

                                <?php
                                    }
                            ?>
                            <!-- <img src="assets/img/ppid5.jpg" style="height:350px;">
                            <div class="container shadow1">
                                <p2><b>Sambutan Bulan Kemerdekaan Ke-57</b></p2><br>
                                <p3>22/12/2018 (Selasa)</p3> 
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg" style="margin-bottom:20px;">
                        <div class="card" style="width:350px">
                        <?php
                                $sqlbul6="SELECT * FROM tb_buletin
                                            WHERE bulID='6'";
                                $resultbul6 = mysqli_query($con,$sqlbul6);
                                
                                $fgalimage_path = 'assets/img/';
                                while($rowbul6 = mysqli_fetch_array($resultbul6))
                                {
                                    $img_src = $rowbul6['bulImage'];
                            ?>
                            
                                <img src="<?php echo $img_src; ?>" style="height:350px;" />

                                <?php
                                    echo "<div class='container shadow1'>";
                                    echo "<p2><b>".$rowbul6['bulTitle']."</b></p2><br>";
                                    echo "<p3>".$rowbul6['bulDate']."</p3>";
                                    echo "</div>";
                                ?>

                                <?php
                                    }
                            ?>
                            <!-- <img src="assets/img/ppid6.jpg" style="height:350px;">
                            <div class="container shadow1">
                                <p2><b>Solat Hajat Perdana Buat Anak-Anak SAKNJ</b></p2><br>
                                <p3>22/12/2018 (Selasa)</p3> 
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row">
                    <div class="col-lg" style="margin-bottom:20px;">
                        <div class="card" style="width:350px">
                        <?php
                                $sqlbul7="SELECT * FROM tb_buletin
                                            WHERE bulID='7'";
                                $resultbul7 = mysqli_query($con,$sqlbul7);
                                
                                $fgalimage_path = 'assets/img/';
                                while($rowbul7 = mysqli_fetch_array($resultbul7))
                                {
                                    $img_src = $rowbul7['bulImage'];
                            ?>
                            
                                <img src="<?php echo $img_src; ?>" style="height:350px;" />

                                <?php
                                    echo "<div class='container shadow1'>";
                                    echo "<p2><b>".$rowbul7['bulTitle']."</b></p2><br>";
                                    echo "<p3>".$rowbul7['bulDate']."</p3>";
                                    echo "</div>";
                                ?>

                                <?php
                                    }
                            ?>
                            <!-- <img src="assets/img/ppid7.jpg" style="height:350px;">
                            <div class="container shadow1">
                                <p2><b>Majlis Penghargaan Sempena Pertandingan Ihtifal</b></p2><br>
                                <p3>22/12/2018 (Selasa)</p3> 
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg" style="margin-bottom:20px;">
                        <div class="card" style="width:350px">
                        <?php
                                $sqlbul8="SELECT * FROM tb_buletin
                                            WHERE bulID='8'";
                                $resultbul8 = mysqli_query($con,$sqlbul8);
                                
                                $fgalimage_path = 'assets/img/';
                                while($rowbul8 = mysqli_fetch_array($resultbul8))
                                {
                                    $img_src = $rowbul8['bulImage'];
                            ?>
                            
                                <img src="<?php echo $img_src; ?>" style="height:350px;" />

                                <?php
                                    echo "<div class='container shadow1'>";
                                    echo "<p2><b>".$rowbul8['bulTitle']."</b></p2><br>";
                                    echo "<p3>".$rowbul8['bulDate']."</p3>";
                                    echo "</div>";
                                ?>

                                <?php
                                    }
                            ?>
                            <!-- <img src="assets/img/ppid8.jpg" style="height:350px;">
                            <div class="container shadow1">
                                <p2><b>Sekolah Agama Bandar Kulai 2 Juara Nasyid Pertandingan Ihtifal</b></p2><br>
                                <p3>22/12/2018 (Selasa)</p3> 
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg" style="margin-bottom:20px;">
                        <div class="card" style="width:350px">
                        <?php
                                $sqlbul9="SELECT * FROM tb_buletin
                                            WHERE bulID='9'";
                                $resultbul9 = mysqli_query($con,$sqlbul9);
                                
                                $fgalimage_path = 'assets/img/';
                                while($rowbul9 = mysqli_fetch_array($resultbul9))
                                {
                                    $img_src = $rowbul9['bulImage'];
                            ?>
                            
                                <img src="<?php echo $img_src; ?>" style="height:350px;" />

                                <?php
                                    echo "<div class='container shadow1'>";
                                    echo "<p2><b>".$rowbul9['bulTitle']."</b></p2><br>";
                                    echo "<p3>".$rowbul9['bulDate']."</p3>";
                                    echo "</div>";
                                ?>

                                <?php
                                    }
                            ?>
                            <!-- <img src="assets/img/ppid9.jpg" style="height:350px;">
                            <div class="container shadow1">
                                <p2><b>Perarakan Sempena Sambutan Bulan Kemerdekaan Ke-56</b></p2><br>
                                <p3>22/12/2018 (Selasa)</p3> 
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>






    </div>

    <br><br>
    
        <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#carousel-2" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-2" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Next</span>
    </a>
    <!-- Indicators -->
    <ul class="carousel-indicators">
    <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-2" data-slide-to="1"></li>
    <li data-target="#carousel-2" data-slide-to="2"></li>
    </ul>
</div>
</div>


<div class="highlight-phone"style="background-color: transparent;">
        <div class="card-body shadow container-fluid" style="background-color: white; width:95%">
        <h2 id=contactus class="text-center" style="font-family:AGENCY FB;height:26px; color:#213159">Hubungi Kami</h2>&nbsp
        <div class="row slideanim">
            <div class="col-lg-7 mapouter"><div class="gmap_canvas"><iframe width="100%" height="80%" id="gmap_canvas" src="https://maps.google.com/maps?q=jalan%20pejabat%20kerajaan%20kulai&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.divi-discounts.com"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div>
            
            <div class="col-lg" align="left">
                <h4 class="" style="font-family:AGENCY FB;font-weight: bold; color:#f04b4c;font-size:34px">Alamat:</h4>
                <p style="font-family:Agency fb;padding:0px;font-size:30px;color:#3d6098">Pejabat Pendidikan Islam Kulai,<br>D/A Sekolah Agama Bandar Kulai 2,<br>Jalan Pejabat Kerajaan,<br>81000 Kulai, Johor.</p>
                <p style="font-size:25px;font-family:agency fb;margin:0px;color:grey">07-6637761 (Tel)<br>07-6637781 (Faks)</p>
                <br>    
                <a class="btn btn-primary" role="button" href="https://www.facebook.com/Pejabat-Pendidikan-Islam-Daerah-Kulai-108579253843216"><i class="fab fa-facebook text-gray"></i><span> Facebook</span></a>
            </div>
            
        </div>
        </div>
        <div class="map-clean"></div>
    
</div>
</div>


<script>

    $(window).scroll(function() {
        $(".slideanim").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
            $(this).addClass("slide");
        }
        });
    });
    
</script>


<?php include "footer.php" ?>

