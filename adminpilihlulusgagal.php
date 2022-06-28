<?php 

include'headeradmin.php';
include 'dbconnect.php';

//$id = $_GET['id'];
$sql = "SELECT * FROM tb_resultstud";
$sqlschool = "SELECT * FROM tb_school";
$resultschool = mysqli_query($con,$sqlschool);
$rowschool=mysqli_fetch_array($resultschool);

?>

<title>Pilih Sekolah</title>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card shadow mb-4">  

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lulus Gagal Setiap Sekolah</h1>
            
          </div>

          <!-- Content Row -->
      <div class="row">

              <!-- Earnings (Monthly) Card Example -->
              <?php
                while($rowschool=mysqli_fetch_array($resultschool))
                {
                  echo '<div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" >'.$rowschool['schName'];
                            echo '</div>
                      </div>
                          <a href="adminlulusgagal.php?sekolah='.$rowschool['schID'].'" class=" stretched-link"></a>
                      <div class="col-auto">
                        <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>';

                }

              ?>

      </tbody>
    </table>
  </div>


            </div>    

            

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <?php include"footermanage.php" ?>