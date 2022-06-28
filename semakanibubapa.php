
<?php include "header.php"; 
	include "dbconnect.php";
?>
    <title>Semakan</title>
    <style>
        .btn{
            opacity:0.9;
        }
        .btn:hover{
            opacity: 1;
        }
        @keyframes colorchange {
          from {color: red;}
          to {color: cyan;}
        }
        .warning{
            animation:colorchange 2s infinite alternate;
        }
    </style>
<body style="background-image:url(assets/img/background.jpg);background-size:cover;">
    <center>
    	<div class="shadow1 container-fluid card-body border-bottom-primary py-2" style="background-color:#f1f1f1;width:60%;max-width:100%;height:;background-repeat:no-repeat;background-size:cover;margin:24px 24px;">
        <form  method="post" action="semakanibubapaprocess.php">
        <div class="container-fluid " data-bs-hover-animate="flash">
            <h2 class="font-weight-bold text-uppercase" style="color:#213159; font-size:35px; font-family:'AGENCY FB'">Semakan Keputusan Peperiksaan</h2>
        </div>
        <br>
        <div class="text-md font-weight-bold text-primary text-uppercase"><p style="color:#f04b4c; font-size: 15px; padding-left: 12px" align="left">SILA MASUKKAN NOMBOR SIJIL LAHIR / KAD PENGENALAN PELAJAR <span class="warning">tanpa "-" atau "space"</span></p>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <p style="color:black; font-size: 15px; font-weight: bold; padding: 12px 12px" align="left">No SB / IC: </p>
            </div>

            <div class="col-lg form-group" style="width:100%;padding: 7px 0px">
                <input style="text-decoration: none;" class="form-control form-control-sm mx-auto" maxlength="15" type="text" name="fcmykid" onchange="process1(this)" id="fcmykid" required placeholder="Mykid / IC / Surat Beranak" style="background-position:center;width:400px;padding:8px;">
            </div>
            <div class="col-lg-2 form-group" style="padding:5px;"><button class="btn btn-primary btn-block mx-auto bg-gradient-primary" type="submit" style="padding:7px 0px;">Cari</button></div>
        </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>

            <!--input style="width: 0px; height: 0px; border:none " type="text" name="fcmykid2" id="fcmykid2">
            <input style="width: 0px; height: 0px; border:none " type="text" name="fcsb2" id="fcsb2" >
            <input style="width: 0px; height: 0px; border:none " type="text" name="fcmykid3" id="fcmykid3"-->

            <input type="text" name="fcmykid2" id="fcmykid2">
            <input type="text" name="fcsb2" id="fcsb2" >
            <input type="text" name="fcmykid3" id="fcmykid3">
            
           <script language="javascript">
             function process1(showed) {
                document.getElementById("fcmykid2").value = showed.value;
                document.getElementById("fcsb2").value = showed.value;
                document.getElementById("fcmykid3").value = showed.value;
            }
            </script>


            <script>
                $("#fcmykid2").inputmask({"mask": "999999-99-9999","placeholder":""});
                $("#fcsb2").inputmask({"mask": "aa 99999","placeholder":""});
                $("#fcmykid3").inputmask({"mask": " 999999-99-9999","placeholder":""});
            </script>

        
        <br>

        <div class="text-md font-weight-bold text-primary text-uppercase"><p style=" color:#f04b4c; font-size: 20px; padding-left: 12px" align="left">CARIAN SEKOLAH</p>
        </div>
        <div class="form-group"style="padding-left: 12px">
            <select class="form-control" id="fcsch" name="fcsch" required>
            	<?php
            		$sqlsch="SELECT * FROM tb_school";
            		$resultsch=mysqli_query($con,$sqlsch);
            		while($rowsch=mysqli_fetch_array($resultsch))
            		{
            			echo "<option value='".$rowsch['schID']."'>".$rowsch['schName']."</option>";
            		}

            	?>
            </select>
        </div>

        <br>
        <div class="text-md font-weight-bold text-primary text-uppercase"><p style=" color:#f04b4c; font-size: 20px; padding-left: 12px" align="left">PILIHAN TAHUN</p>
        </div>
        <div class="form-group" style="padding-left: 12px">
            <select class="form-control" id="fcyear" name="fcyear" required>
                <?php
                	$sqlyear="SELECT markYear FROM tb_resultstud GROUP BY markYear";
                	$resultyear=mysqli_query($con,$sqlyear);
                	
                	while($rowyear=mysqli_fetch_array($resultyear))
                	{
                		echo "<option value='".$rowyear['markYear']."'>".$rowyear['markYear']."</option>";
                	}
                ?>
            </select>
        </div>

        <br>

                        <div id="error" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" align="center">ID Tidak Dijumpai</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                <p style="color: grey;">Sila pastikan semula id yang anda telah masukkan</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>

                        <?php if (isset($_GET['false'])==1){ ?>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('#error').modal('show');
                                });
                            </script>

                        <?php } ?>
        
    </form></div></center>
<?php include "footer.php" ?>
<!-- 
                for($fcmykid=0; $fcmykid<=14; $fcmykid++)
                {
                    if ($fcmykid==7)
                    {
                        echo "-";
                    }
                    else if ($fcmykid==10)
                    {
                        echo "-";
                    }
                } -->