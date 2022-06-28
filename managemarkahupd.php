<?php

    include 'headermanage.php'; 
    include 'dbconnect.php';
    mysqli_set_charset($con,"utf8");
    //get teacher ID
    if(isset($_GET['id']))
    {
        $fid = $_GET['id'];
    }

    //retrieve teacher information
    $sql = "SELECT * FROM tb_resultstud LEFT JOIN tb_student ON tb_resultstud.markStud = tb_student.studIC
            WHERE markID='$fid'";

    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    $sqlsub = "SELECT * FROM tb_subject";
    $resultsub = mysqli_query($con,$sqlsub);
    $rowsub = mysqli_fetch_array($resultsub);
?>
<title>Kemaskini Markah Murid</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
              <div class="col-lg" style="padding:10px 10px">
                  <h6 class="m-0 font-weight-bold text-primary">Kemaskini Markah Murid</h6>
              </div>
            </div>
        </div>
        <div class="card-body font-weight-bold">
    <form method="POST" action="managemarkahupdprocess.php">

        <div class="form-group">
            <label for="text">ID: </label>
            <?php

                echo $fid;
                
            ?>
            <label for="text">Darjah: <?php echo $std=$row['studStd'] ?></label>
        </div>

        <div class="form-group">
            <label for="email">Nama:</label>
            <input type="text" class="form-control" id="fmname" name="fmname" value= "<?php echo $row['studName'];?>" readonly>
        </div>

        <?php
                $sqlcol = "SHOW COLUMNS FROM tb_standard";
                $resultcol= mysqli_query($con,$sqlcol);
                $totalreal=mysqli_num_rows($resultcol);

                $sqltotal = "SELECT * FROM tb_subject";
                $resulttotal = mysqli_query($con,$sqltotal);
                $totalsub=mysqli_num_rows($resulttotal); 

                $sqlselect = "SELECT * FROM tb_standard WHERE stdID='$std'";
                $resultselect= mysqli_query($con,$sqlselect);
                $rowselect=mysqli_fetch_array($resultselect);

                $count=0;

                while($rowcol=mysqli_fetch_array($resultcol))
                {
                    $colname[]=$rowcol['Field'];

                }
                $count1=0;
                while($count1<$totalreal)
                {
                    //echo $rowselect[$count1];
                    $count1++;
                }

                while($count<$totalreal-1){

                    $sqlsub = "SELECT * FROM tb_subject WHERE subjID='$count'";
                    $resultsub = mysqli_query($con,$sqlsub);
                    $rowsub=mysqli_fetch_array($resultsub);
                    $count++;
                    if($rowselect[$count]=='1'){
                        //echo $rowselect[$count];
                        echo '<div class="form-group">';
                        if($std<'4'&&$count>'6'){
                            echo '<label for="email">Markah '.$colname[$count].' ('.($rowsub['subjFullMark']/2).') :</label>';
                            echo '<input type="number" class="form-control" id="'.$colname[$count].'" 
                            min="0" max="'.($rowsub['subjFullMark']/2).'" name="'.$colname[$count].'" value= "'.$row[$count+1].'">
                            </div>';
                        }
                        else{
                            echo '<label for="email">Markah '.$colname[$count].' ('.$rowsub['subjFullMark'].') :</label>';
                            echo '<input type="number" class="form-control" id="'.$colname[$count].'" 
                            min="0" max="'.$rowsub['subjFullMark'].'" name="'.$colname[$count].'" value= "'.$row[$count+1].'">
                            </div>';
                        }
                    }
                }
            ?>
        <div class="form-group">
                <label for="email">Kedudukan Dalam Kelas:</label>
                <input type="number" class="form-control" id="fmrankclass" name="fmrankclass" value= "<?php echo $row['markRankClass'];?>">
        </div>
        <input type="hidden" id="fmstd" name="fmstd" value= "<?php echo $row['studStd']; ?>">
        <input type="hidden" id="fmid" name="fmid" value= "<?php echo $row['markID']; ?>">

        <button type="submit" class="btn btn-primary">Kemaskini Maklumat</button>
        <a href="managemarkah.php" class="btn btn-danger">Batal</a>
    </form>
</div>
</div>
</div>
<br>

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