<?php

    include 'headeradmin.php'; 
    include 'dbconnect.php';
    //get teacher ID
    if(isset($_GET['id']))
    {
        $fid = $_GET['id'];
    }

    //retrieve teacher information
    $sql = "SELECT * FROM tb_standard
            WHERE stdID='$fid'";

    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    $sqlsub = "SELECT * FROM tb_subject";
    $resultsub = mysqli_query($con,$sqlsub);

?>
<title>Kemaskini Maklumat Subjek</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="assets/css/checkbox.css" rel="stylesheet">

<style type="text/css"></style>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
              <div class="col-lg" style="padding:10px 10px">
                  <h6 class="m-0 font-weight-bold text-primary">Kemaskini Aliran</h6>
              </div>
            </div>
        </div>
    <div class="card-body font-weight-bold">
    <form method="POST" action="managestdupdprocess.php">

        <div class="form-group">
            <label for="text">Darjah: </label>
            <span style="color:red; font-weight: bold; font-size: 20px">
            <?php

                echo $fid;
                
            ?>
            </span>
        </div>
        <table  class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Bil</th>
                    <th>Nama Subjek</th>
                    <th>Pilih</th>
                </tr>                
            </thead>
            <tbody>
                <?php
                        $totalsub=mysqli_num_rows($resultsub); 
                        $count=0;
                        while ($count<($totalsub))
                        {
                            $rowsub = mysqli_fetch_array($resultsub);
                            echo "<tr>";
                            echo "<td>".($count+1)."</td>";
                            echo "<td>";
                            echo $rowsub['subjName'];
                            echo "</td>";
                            echo "<td>";
                            if($row[$count+2]==1)
                            {
                                //echo $rowsub['subjID'];
                                echo '<input name="'.$rowsub['subjID'].'" id="'.$rowsub['subjID'].'" type="hidden" value="0">';
                                echo '<label class="switch"><input name="'.$rowsub['subjID'].'" id="'.$rowsub['subjID'].'" value="1"  type="checkbox" checked>
                                      <span class="slider round"></span></label>
                                ';
                                
                            }
                            else{
                                //echo $rowsub['subjID'];
                                echo '<input name="'.$rowsub['subjID'].'" id="'.$rowsub['subjID'].'" type="hidden" value="0">';
                                echo '<label class="switch"><input name="'.$rowsub['subjID'].'" id="'.$rowsub['subjID'].'" value="1" type="checkbox">
                                      <span class="slider round"></span></label>
                                ';
                                
                            }
                            echo "</td>";
                            echo "</tr>";
                            $count++;
                        }
                ?>
            </tbody>
        </table>

        <input type="hidden" id="fstdid" name="fstdid" value= "<?php echo $row['stdID']; ?>">

        <button type="submit" class="btn btn-primary">Kemaskini Maklumat</button>
        <a href="managestd.php" class="btn btn-danger">Batal</a>
    </form>
</div>
</div>
</div>

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins >
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts >
<script src="assets/js/demo/datatables-demo.js"></script>