<?php include"headermanage.php";
include "importdbconnect.php";
?>
<title>Kemaskini Keputusan</title>

<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- Content Row -->

        <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        $('#file-upload').change(function() {
          var i = $(this).prev('label').clone();
          var file = $('#file-upload')[0].files[0].name;
          $(this).prev('label').text(file);
        });
        </script>



      </div>
        <!-- /.container-fluid -->

        <!-- TABLE!!! -->
         
        <div class="container-fluid">

          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-gradient-primary">
              <div class="row">
                <div class="col-lg" style="padding:10px 10px">
                  <h6 class="m-0 font-weight-bold" style="color:white">Markah Belum Dimasukkan</h6>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php

                    require 'Classes/PHPExcel/IOFactory.php';
                    require 'Classes/PHPExcel.php';

                    //Process import function
                    include('importprocess.php');
                    $sqlSelect = "SELECT * FROM tb_student LEFT JOIN tb_resultstud ON tb_student.studIC=tb_resultstud.markStud 
                    WHERE studSchool='$schidassign' AND studYear='$tahun'";
                    $sqlSelect1 = "SELECT * FROM tb_student LEFT JOIN tb_resultstud ON tb_student.studIC=tb_resultstud.markStud 
                    WHERE studSchool='$schidassign'";
                    $result = mysqli_query($conn, $sqlSelect);
                    $result1 = mysqli_query($conn, $sqlSelect1);

                    if (mysqli_num_rows($result) > 0)
                    {
                  ?>
                  <!-- -->
                  <table class="table table-bordered display" id="dataTable1" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Bil</th>
                      <th>Nombor IC</th>
                      <th>Nama</th>
                      <th>Darjah</th>
                      <th>Slip</th>
                      <th>Tindakan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Bil</th>
                      <th>Nombor IC</th>
                      <th>Nama</th>
                      <th>Darjah</th>
                      <th>Slip</th>
                      <th>Tindakan</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      $count1=1;
                      while ($row1 = mysqli_fetch_array($result1)) 
                      {
                        if(is_null($row1['markAfaal'])){
                    ?>  
                      <tr>
                        <td><?php echo $count1 ?> </td>
                        <td><?php  echo $row1['studIC']; ?></td>
                        <td><?php  echo $row1['studName']; ?></td>
                        <td><?php  echo $row1['studStd']; ?></td>
                        <?php
                          echo "<td>";
                          echo "<a href='slipkeputusandisplay.php?ic=".$row1['studIC']."' class='btn btn-info bg-gradient-info'><i class='fa fa-clipboard-list'></i> Papar Slip</a>&nbsp";
                          echo "</td>";
                          echo "<td>";
                          echo "<a href='managemarkahbaru.php?ic=".$row1['studIC']."' class='btn btn-warning bg-gradient-warning'><i class='fa fa-edit'></i>Kemaskini</a>&nbsp";
                          echo "</td>";
                        ?>
                      </tr>
                    <?php $count1++; } }//endwhile ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
                <br>
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-gradient-primary">
              <div class="row">
                <div class="col-lg" style="padding:10px 10px">
                  <h6 class="m-0 font-weight-bold" style="color:white">Markah Telah Dimasukkan</h6>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <!-- -->
                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Bil</th>
                      <th>Nombor IC</th>
                      <th>Nama</th>
                      <th>Darjah</th>
                      <th>Slip</th>
                      <th>Tindakan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Bil</th>
                      <th>Nombor IC</th>
                      <th>Nama</th>
                      <th>Darjah</th>
                      <th>Slip</th>
                      <th>Tindakan</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      $count=1;
                      while ($row = mysqli_fetch_array($result)) 
                      {
                        if(!is_null($row['markAfaal'])){
                    ?>  
                      <tr>
                        <td><?php echo $count ?> </td>
                        <td><?php  echo $row['studIC']; ?></td>
                        <td><?php  echo $row['studName']; ?></td>
                        <td><?php  echo $row['studStd']; ?></td>
                        <?php
                          echo "<td>";
                          echo "<a href='slipkeputusandisplay.php?ic=".$row['studIC']."' class='btn btn-info bg-gradient-info'><i class='fa fa-clipboard-list'></i> Papar Slip</a>&nbsp";
                          echo "</td>";
                          echo "<td>";
                          echo "<a href='managemarkahupd.php?id=".$row['markID']."' class='btn btn-warning bg-gradient-warning'><i class='fa fa-edit'></i> Kemaskini</a>&nbsp";
                          echo "<a href='' data-toggle='modal' data-target='#markStud".$row['markStud']."' class='btn btn-danger bg-gradient-danger'><i class='fa fa-trash-alt'></i> Padam</a>&nbsp";
                          echo "</td>";
                        ?>
                        <?php echo '<div id="markStud'.$row['markStud'].'" class="modal fade" role="dialog">' ?>
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Padam Data Murid</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                <p style="color:grey">Adakah anda pasti mahu padam data murid <br><span style="color:red"><?php echo $row['studName'] ?></span><br> daripada sekolah anda?</p>
                                <p style="color:darkgrey; font-size: 12px">Data yang akan dipadam: Data Keputusan Murid</p>
                              </div>
                              <div class="modal-footer">
                                <?php echo "<a href='managemarkahdel.php?id=".$row['markStud']."' class='btn btn-danger'><i class='fa fa-trash-alt'></i> Padam</a>"; ?>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                              </div>
                            </div>

                          </div>
                        </div>
                      </tr>
                    <?php $count++; } }//endwhile ?> 
                  </tbody>
                </table>
                <?php }//endif ?>
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
        
      <!-- End of Main Content --> 

      <!--?php include"footermanage.php" ?-->