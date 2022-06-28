<?php 
    include 'headermanage.php'; 
    include 'dbconnect.php';

    // retrieve data in table teacher
    $sql = "SELECT * FROM tb_class 
    WHERE classSchool='$schidassign'";

    $result = mysqli_query($con,$sql);


?>

<title>Senarai Kelas</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-gradient-primary">
            <div class="row">
              <div class="col-lg" style="padding:10px 10px">
                  <h6 class="m-0 font-weight-bold" style="color:white">Kemaskini Butiran Kelas</h6>
              </div>
              <div class=" col-lg-5"  style="padding:0px -20px" align="right">
                <a class="btn btn-info bg-gradient-info" href="managekelasadd.php"><i class="fa fa-user-plus"></i> Tambah Kelas</a>
              </div>
            </div>
        </div>
        <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>Bil</th>
        <th>No Bilik</th>
        <th>Nama Kelas</th>
        <th>Kod Bilik</th>
        <th>Nama Guru</th>
        <th>Warna Kelas</th>
        <th>Masa</th>
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
            echo "<td>".$row['classNo']."</td>";
            echo "<td>".$row['className']."</td>";
            echo "<td>".$row['classCode']."</td>";
            echo "<td>".$row['classTeacher']."</td>";
            echo "<td> <div style='width:30px;height:30px;background:".$row['classColor']."'></div></td>";
            echo "<td>".$row['classTime']."</td>";
            echo "<td>";
                echo "<a href='managekelasupd.php?id=".$row['classID']."' class='btn btn-warning bg-gradient-warning'><i class='fa fa-edit'></i> Kemaskini</a>&nbsp";
                echo "<a href='' data-toggle='modal' data-target='#studID".$row['classID']."' class='btn btn-danger bg-gradient-danger'><i class='fa fa-trash-alt'></i> Padam</a>&nbsp";
            echo "</td>";?>
            
            <?php echo '<div id="studID'.$row['classID'].'" class="modal fade" role="dialog">' ?>
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Padam Data Murid</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                <p style="color:grey">Adakah anda pasti mahu padam data kelas:<br><?php echo '<span style="color:red">'.$row['className'].'</span>,<br> Bagi Guru: <span style="color:red">'.$row['classTeacher'] ?></span><br> Daripada sekolah anda?</p>
                                <p style="color:darkgrey; font-size: 12px">Data yang akan dipadam: Data kelas, masa, guru</p>
                              </div>
                              <div class="modal-footer">
                                <?php echo "<a href='managekelasdel.php?id=".$row['classID']."' class='btn btn-danger'><i class='fa fa-trash-alt'></i> Padam</a>"; ?>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                              </div>
                            </div>

                          </div>
                        </div>

            </tr>
            <?php
            $count++;
        }
    ?>
    </tbody>
  </table></div>
</div>
</div>
</div>



<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScri;pt-->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="assets/js/demo/datatables-demo.js"></script>