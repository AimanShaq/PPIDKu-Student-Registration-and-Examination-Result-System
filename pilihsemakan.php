<?php
 include "ibubapasession.php";
 if(!session_id())
    {
        session_start();
    }

 include "header.php" ;
 include "dbconnect.php";

 $studdic = $_SESSION['stud_ic'];
    $sql="SELECT * FROM tb_student LEFT JOIN tb_school ON tb_student.studSchool=tb_school.schID
        WHERE studIC='$studdic'";
    $result = mysqli_query($con,$sql) or die (mysqli_error($con));
    $row = mysqli_fetch_array($result);
?>
    <title>Semakan</title>
    <style>
        .btn{
            opacity:0.9;
        }
        .btn:hover{
            opacity: 1;
        }
    </style>
<body style="background-image:url(&quot;assets/img/bglogin.jpg&quot;);background-size:cover;">
    <center>
        <br><br>
        <div class="row">
            <br><br>
            <div class="col-xl-6 col-md-6 mb-4" style="margin:auto auto ; ">
                        <div class="card border-bottom-primary shadow h-100 py-2 ">
                          <div class="card-body">
                            <div class="row  align-items-center">
                              <div class="col mr-2">
                                <div class="row">
                                    <div class="col-lg-4 " align="left"><h1 class="text-md text-primary text-uppercase mb-1 " style="color:blue; font-size:18px"><b>Nama: </b></h1>                                 
                                    </div>
                                    <div class="col-lg" align="left">
                                        <h5 class="text-md mb-1" style="color:black">
                                        <?php
                                            echo $row['studName'];
                                        ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 " align="left"><h1 class="text-md text-primary text-uppercase mb-1 " style="color:blue; font-size:18px"><b>Nama Jawi: </b></h1>                                 
                                    </div>
                                    <div class="col-lg" align="left">
                                        <h5 class="text-md mb-1" style="color:black; font-family: Jawi Uthman Taha Regular ">
                                        <?php
                                            echo $row['studNameJawi'];
                                        ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 " align="left"><h1 class="text-md text-primary text-uppercase mb-1 " style="color:blue; font-size:18px" align="left"><b>IC: </b></h1>
                                    </div>
                                    <div class="col-lg" align="left">
                                        <h5 class="text-md mb-1" style="color:black">
                                            <?php
                                                echo $row['studIC'];
                                            ?>
                                        </h5>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 " align="left"><h1 class="text-md text-primary text-uppercase mb-1 " style="color:blue; font-size:18px"><b>Sekolah: </b></h1>                                 
                                    </div>
                                    <div class="col-lg" align="left">
                                        <h5 class="text-md mb-1" style="color:black">
                                        <?php
                                            echo $row['schName'];
                                        ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 " align="left"><h1 class="text-md text-primary text-uppercase mb-1 " style="color:blue; font-size:18px"><b>Darjah: </b></h1>                                 
                                    </div>
                                    <div class="col-lg" align="left">
                                        <h5 class="text-md mb-1" style="color:black">
                                        <?php
                                            echo $row['studStd'];
                                        ?>
                                        </h5>
                                    </div>
                                </div>
                                <br>
                                <div align="center" class="col text-md font-weight-bold text-danger text-uppercase mb-1">Pilih Slip</div>
                                
                                <div class="row" style="padding:0px 0px;">
                                    <div class="col-lg-4" style="padding:10px 0px">
                                        <a class="btn btn-primary btn-block mx-auto bg-gradient-primary" 
                                        href="slipbutiranmurid.php?id=<?php echo $row['schID'] ?>" target="_blank" style="width:150px;">Slip Murid</a>
                                    </div><hr>
                                    <div class="col-lg-4" style="padding:10px 0px">
                                        <a class="btn btn-primary btn-block mx-auto bg-gradient-success" 
                                        href="slipkeputusan.php?id=<?php echo $row['schID'] ?>" target="_blank" style="width:150px;">Slip Keputusan</a>
                                    </div><hr>
                                    <div class="col-lg-4" style="padding:10px 0px">
                                        <a class="btn btn-primary btn-block mx-auto bg-gradient-info" 
                                        href="slippenempatan.php?id=<?php echo $row['schID'] ?>" target="_blank"style="width:150px;">Slip Penempatan</a>
                                    </div>
                                </div>
                                
                              </div>
                            </div>
                            <br><br>
                            
                          </div>
                        </div>
                    </div>
                </div>
                <br><br>
    </center>
<?php include "footer.php" ?>
