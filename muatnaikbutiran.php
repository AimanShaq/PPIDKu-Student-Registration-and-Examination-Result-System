<?php include"headermanage.php";
include "importdbconnect.php";

$sqlstud="SELECT * FROM tb_student WHERE studSchool='$schidassign'";
    $resultstud = mysqli_query($con,$sqlstud);
    $rowstud = mysqli_fetch_array($resultstud);
    $data=mysqli_fetch_assoc($resultstud);

    $sqlcl="SELECT * FROM tb_class WHERE classSchool='$schidassign'";
    $resultcl = mysqli_query($con,$sqlcl);
    $rowcl = mysqli_fetch_array($resultcl);

    $sqltc="SELECT * FROM tb_teacher WHERE tchSchool='$schidassign'";
    $resulttc = mysqli_query($con,$sqltc);
    $rowtc = mysqli_fetch_array($resulttc);

?>
<title>Muat Naik Butiran</title>

<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <form action="muatnaikbutiran.php" method="post" enctype="multipart/form-data">
          <!-- Page Heading -->

          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="dropdown card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md  text-primary text-uppercase mb-1" style="font-weight: bold">Jumlah Murid</div>
                      <?php $rowcount=mysqli_num_rows($resultstud); echo '
                      <div class="h5 mb-0 font-weight-bold text-gray-800">'.$rowcount.'</div> '?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                    </div>
                    <ul class="dropdown-menu">
                      <li><a href="#">HTML</a></li>
                      <li><a href="#">CSS</a></li>
                      <li><a href="#">JavaScript</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md text-success text-uppercase mb-1" style="font-weight:bold">Jumlah Kelas</div>
                      <?php $rowcountcl=mysqli_num_rows($resultcl); echo '
                      <div class="h5 mb-0 font-weight-bold text-gray-800">'.$rowcountcl.'</div> '?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-table fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md text-success text-uppercase mb-1" style="font-weight:bold">Jumlah Guru</div>
                      <?php $rowcounttc=mysqli_num_rows($resulttc); echo '
                      <div class="h5 mb-0 font-weight-bold text-gray-800">'.$rowcounttc.'</div> '?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-school fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            
            <div class="col-xl-8 col-md-8 mb-4" style="margin:0 auto; ">
              
                <div class="card border-left-primary shadow h-100  ">
                  <div class="card-header  bg-gradient-primary">
                    <h6 class=" font-weight-bold" style="color:white">Muat Naik Keputusan dan Butiran Pelajar</h6>
                  </div>
                  <div class="card-body">

                    
                      <div class="col mr-2">
                        <div class="text-md font-weight-bold text-primary text-uppercase mb-1">Pilih file</div>
                      </div>
                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="filekeputusan" name="filekeputusan" accept=".xlsx,.xlsm,.xltx,.xls,.xlt,.xltm,.xla.,xlam">
                        <label class="custom-file-label" for="file-upload">
                          <i class="fa fa-cloud-upload"></i>Pilih File Template yang telah diubah
                        </label>
                      </div>
                      <br>
                      <div class="col mr-2">
                        <div class="text-md font-weight-bold text-danger text-uppercase mb-1">PERINGATAN:
                        </div>
                        <div class="row">
                          <div class="h6 mb-0 text-gray-900 col-lg" >
                              <h6>Pilih file Excel yang menggunakan <a href="assets/files/TEMPLATE.xlsx" download>TEMPLATE INI <i class="fa fa-download"></i>
                              </a>SAHAJA</h6>
                              <a href="manualtemplate.php" style="font-size: 12px; font-weight: bold">Panduan penggunaan template</a>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="row" style="margin: 0px">
                        <div class=" col-lg-6" style="padding:10px 10px" align="right">
                          <button class="btn btn-info btn-block bg-gradient-info " type="submit" id="submit" name="submit" style="width:100px;"><i class="fa fa-folder-plus"></i> Tambah</button>
                        </div>
                        <div class=" col-lg-6"  style="padding:10px 10px" align="left">
                          <button class="btn btn-warning btn-block bg-gradient-warning" type="button" data-toggle="modal" data-target="#myModal2" style="width:100px;"><i class="fa fa-redo-alt"></i> Ganti</button>
                        </div>
                      </div>
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="container-fluid">

          <!-- Page Heading -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-gradient-primary">
              <div class="row">
                  <div class="col-lg" style="padding:10px 10px">
                    <h6 class="m-0 font-weight-bold" style="color:white">Data Murid</h6>
                  </div>
                  <div class=" col-lg-10"  style="padding:0px -20px" align="right">
                    <button class="btn btn-danger btn-block bg-gradient-danger" type="button" data-toggle="modal" data-target="#myModal" style="width:100px;"><i class="fa fa-trash-alt"></i> Padam</button>
                  </div>
              </div>
            </div>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Padam Data Murid</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <p style="color:grey">Adakah anda pasti mahu mengganti data murid dalam sekolah anda?</p>
                    <p style="color:darkgrey; font-size: 12px">Data yang akan dipadam: Data murid, Penempatan Tahun Hadapan, Keputusan Murid</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-danger btn-block " type="submit" id="delete" name="delete" style="width:100px;"><i class="fa fa-trash-alt"></i> Padam</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                  </div>
                </div>

              </div>
            </div>

            <!-- Modal -->
            <div id="myModal2" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Ganti Data Murid</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <p style="color:grey">Adakah anda pasti mahu memadam data murid dalam sekolah anda?</p>
                    <p style="color:red; font-size: 12px">Pastikan anda telah pilih file yang ingin diganti</p>
                    <p style="color:darkgrey; font-size: 12px">Data yang akan dipadam: Data murid, Penempatan Tahun Hadapan, Keputusan Murid</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-warning btn-block " type="submit" id="replace" name="replace" style="width:100px;"><i class="fa fa-redo-alt"></i> Ganti</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                  </div>
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
                    $sqlSelect = "SELECT * FROM tb_student WHERE studSchool='$schidassign'";
                    $result = mysqli_query($conn, $sqlSelect);

                    if (mysqli_num_rows($result) > 0)
                    {
                  ?>
                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Bil</th>
                      <th>Nombor IC</th>
                      <th>Nama</th>
                      <th>Nama Jawi</th>
                      <th>Jantina</th>
                      <th>Darjah</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Bil</th>
                      <th>Nombor IC</th>
                      <th>Nama</th>
                      <th>Nama Jawi</th>
                      <th>Jantina</th>
                      <th>Darjah</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      $count=1;
                      while ($row = mysqli_fetch_array($result)) 
                      {
                    ?>  
                      <tr>
                        <td><?php echo $count; ?> </td>
                        <td><?php  echo $row['studIC']; ?></td>
                        <td><?php  echo $row['studName']; ?></td>
                        <td><?php  echo $row['studNameJawi']; ?></td>
                        <td><?php  echo $row['studGender']; ?></td>
                        <td><?php  echo $row['studStd']; ?></td>
                      </tr>
                    <?php $count++; } //endwhile?>
                  </tbody>
                </table>
                <?php } //endselect?>
              </div>
            </div>
          </div>

        </div>

      </div>
            </form>
      </div>
        <!-- /.container-fluid -->

        <!-- TABLE!!! -->
         
        

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