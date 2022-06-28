<?php
 include"headeradmin.php" ;
include"dbconnect.php";

$sqlupdate="SELECT * FROM tb_resultstud LEFT JOIN tb_school ON tb_resultstud.markSchool=tb_school.schID";
$resultupdate=mysqli_query($con,$sqlupdate);
$rowupdate=mysqli_fetch_array($resultupdate);

$sqltotal="SELECT * FROM tb_student";
$resulttotal=mysqli_query($con,$sqltotal);
$rowtotal=mysqli_num_rows($resulttotal);

$sqlschool="SELECT * FROM tb_school";
$resultschool= mysqli_query($con,$sqlschool);
$rowschool=mysqli_fetch_array($resultschool);
$rowschoolcount=mysqli_num_rows($resultschool);

$sqlclass="SELECT * FROM tb_class";
$resultclass= mysqli_query($con,$sqlclass);
$rowclass=mysqli_fetch_array($resultclass);
$rowclasscount=mysqli_num_rows($resultclass);

$sqlteacher="SELECT * FROM tb_teacher";
$resultteacher= mysqli_query($con,$sqlteacher);
$rowteacher=mysqli_fetch_array($resultteacher);
$rowteachercount=mysqli_num_rows($resultteacher);

$sqlsubject="SELECT * FROM tb_subject";
$resultsubject= mysqli_query($con,$sqlsubject);
$rowsubject=mysqli_fetch_array($resultsubject);
$rowsubjectcount=mysqli_num_rows($resultsubject);


$rowresultstudcount=mysqli_num_rows($resultupdate);

//guru
//sekolah
//kelas
//subjek

if($rowupdate['markDate']!=$rowschool['schDate'])
{
  echo '<div class="alert alert-primary" role="alert">
          '.$rowschool['schName'].' telah mengubah data markah bagi murid:'.$rowupdate['markStud'].'
        </div>';
}
?>
<title>Admin</title>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-100"><strong>Dashboard</strong></h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Murid</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowtotal ?></div>
                    </div>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Sekolah</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowschoolcount ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-table fa-2x text-gray-300"></i>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Guru</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowteachercount ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-table fa-2x text-gray-300"></i>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Kelas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowclasscount ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-table fa-2x text-gray-300"></i>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Subjek</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowsubjectcount ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-table fa-2x text-gray-300"></i>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Keputusan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowresultstudcount ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-table fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
  <!-- Bootstrap core JavaScript-->
  
