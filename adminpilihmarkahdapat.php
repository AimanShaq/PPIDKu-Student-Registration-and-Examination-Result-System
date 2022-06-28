<?php 

include'headeradmin.php';
include 'dbconnect.php';

//$id = $_GET['id'];
$sql = "SELECT * FROM tb_resultstud";


?>

<title>Pilih Sekolah</title>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Markah Dapat Setiap Sekolah</h1>
            
          </div>

          <!-- Content Row -->
      <div class="row">

              <!-- Earnings (Monthly) Card Example -->
            
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" id="SAFBP">Sekolah Agama Felda Bukit Permai</div>
                      </div>
                      <?php echo '<a href="adminmdstatistik.php?id=SAFBP" class=" stretched-link"></a>' ?>
                      <div class="col-auto">
                        <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1" id="SAFBB">Sekolah Agama Felda Bukit Batu</div>
                        </div>
                       <?php echo '<a href="adminmdstatistik.php?id=SAFBB" class=" stretched-link"></a>' ?>
                      <div class="col-auto">
                        <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1" id="SAMJT">Sekolah Agama Murni Jaya Terkini</div>
                       </div>
                       <?php echo '<a href="adminmdstatistik.php?id=SAMJT" class=" stretched-link"></a>' ?>
                      <div class="col-auto">
                        <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

       

      </tbody>
    </table>
  </div>


            </div>    

            

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <?php include"footermanage.php" ?>