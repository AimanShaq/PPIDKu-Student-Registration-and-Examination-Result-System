<?php 
    include 'headeradmin.php'; 
    include 'dbconnect.php';
    // retrieve data in table teacher
    $sql = "SELECT * FROM tb_subject";
    $result = mysqli_query($con,$sql);
    $sqlstd = "SELECT * FROM tb_standard ";
    $resultstd = mysqli_query($con,$sqlstd);
  //  var_dump($resultstd);
?>

<title>Aliran</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<div class="container-fluid">
   
          
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-gradient-primary">
              <h6 class="m-0 font-weight-bold" style="color:white">Kemaskini Aliran</h6>
            </div>
    <div class="card-body">
        <div class="table-responsive">        
          <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">  
            <thead>
              <tr>
                <th>Darjah</th>
                <th>Bilangan Subjek Diambil</th>
                <th>Tindakan</th>

              </tr>
            </thead>
            <tbody>
            <?php
                $count=1;
                $sum=0;
                while ($rowstd=mysqli_fetch_array($resultstd))
                {
                    echo "<tr>";
                    echo "<td>".$rowstd['stdID']."</td>";
                    echo "<td>";
                    echo $rowstd['stdtotal'];
                    echo "</td>";
                    echo "<td>";
                        echo "<a href='managestdupd.php?id=".$rowstd['stdID']."' class='btn btn-warning'>Kemaskini</a>&nbsp";
                    echo "</td>";
                    echo "</tr>";
                    $count++;
                }
            ?>
            </tbody>
          </table>
      </div>
  </div>
</div>
</div>

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="assets/js/demo/datatables-demo.js"></script>