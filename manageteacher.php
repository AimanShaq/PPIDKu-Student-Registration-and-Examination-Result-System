<?php 
    include 'headermanage.php'; 
    include 'dbconnect.php';
    mysqli_set_charset($con,"utf8");
    // retrieve data in table teacher
    $sql = "SELECT * FROM tb_teacher WHERE tchSchool='$schidassign'";

    $result = mysqli_query($con,$sql);


?>

<title>Senarai Guru</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-gradient-primary">
            <div class="row">
              <div class="col-lg" style="padding:10px 10px">
                  <h6 class="m-0 font-weight-bold" style="color:white">Kemaskini Butiran Guru</h6>
              </div>
              <div class=" col-lg-5"  style="padding:0px -20px" align="right">
                <a class="btn btn-info bg-gradient-info" href="manageteacheradd.php"><i class="fa fa-user-plus"></i> Tambah Guru</a>
              </div>
            </div>
        </div>
        <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Bil</th>
                <th>Nama Rumi</th>
                <th>Nama Jawi</th>
                <th>Kod Nama</th>
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
                    echo "<td>".$row['tchName']."</td>";
                    echo "<td>".$row['tchNameJawi']."</td>";
                    echo "<td>".$row['tchCode']."</td>";
                    echo "<td>";
                        echo "<a href='manageteacherupd.php?id=".$row['tchID']."' class='btn btn-warning bg-gradient-warning'><i class='fa fa-user-edit'></i> Kemaskini</a>&nbsp";
                        echo "<a href='' data-toggle='modal' data-target='#tchID".$row['tchID']."' class='btn btn-danger bg-gradient-danger'><i class='fa fa-trash-alt'></i> Padam</a>&nbsp";
                    echo "</td>";?>
                    <?php echo '<div id="tchID'.$row['tchID'].'" class="modal fade" role="dialog">' ?>
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Padam Data Murid</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                <p style="color:grey">Adakah anda pasti mahu padam data guru: <br><span style="color:red"><?php echo $row['tchName'] ?></span><br> daripada sekolah anda?</p>
                                <p style="color:darkgrey; font-size: 12px">Data yang akan dipadam: Data guru, data kelas yang melibarkan guru tersebut</p>
                              </div>
                              <div class="modal-footer">
                                <?php echo "<a href='manageteacherdel.php?id=".$row['tchName']."' class='btn btn-danger'><i class='fa fa-trash-alt'></i> Padam</a>"; ?>
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