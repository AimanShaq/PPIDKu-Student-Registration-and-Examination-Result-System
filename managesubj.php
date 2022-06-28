<?php 
    include 'headeradmin.php'; 
    include 'dbconnect.php';
    // retrieve data in table teacher
    $sql = "SELECT * FROM tb_subject";
    $result = mysqli_query($con,$sql);
    

?>

<title>Senarai Subjek</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<div class="container-fluid">
   
          
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-gradient-primary">
              <div class="row">
                <div class="col-lg" style="padding:10px 10px">
                  <h6 class="m-0 font-weight-bold" style="color:white">Kemaskini Subjek</h6>
                </div>
                <div class=" col-lg-5"  style="padding:0px -20px" align="right">
                  <a class='btn btn-info bg-gradient-info' href="managesubjadd.php"><i class="fa fa-user-plus"></i> Tambah Subjek</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
          <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">  
            <p style="color:red"> PERINGATAN! </p><p style="color:grey;">Markah Penuh adalah bagi pelajar Darjah 4 ke atas, markah penuh bagi Darjah 1-3 di kira secara automatik </p>
            <thead>
              <tr>
                <th>Bil</th>
                <th>Nama Subjek</th>
                <th>Nama Jawi</th>
                <th>Markah Penuh</th>
                <th>Tindakan</th>

              </tr>
            </thead>
            <tbody>
            <?php
                $count=1;
                while ($row=mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>".$count."</td>";
                    echo "<td>".$row['subjName']."</td>";
                    echo "<td>".$row['subjNameJawi']."</td>";
                    echo "<td>".$row['subjFullMark']."</td>";
                    echo "<td>";
                        echo "<a href='managesubjupd.php?id=".$row['subjID']."' class='btn btn-warning'>Kemaskini</a>&nbsp";
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