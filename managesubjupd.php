<?php

    include 'headeradmin.php'; 
    include 'dbconnect.php';
    //get teacher ID
    if(isset($_GET['id']))
    {
        $fid = $_GET['id'];
    }

    //retrieve teacher information
    $sql = "SELECT * FROM tb_subject
            WHERE subjID='$fid'";

    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<title>Kemaskini Maklumat Subjek</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
              <div class="col-lg" style="padding:10px 10px">
                  <h6 class="m-0 font-weight-bold text-primary">Kemaskini Butiran  Subjek</h6>
              </div>
            </div>
        </div>
    <div class="card-body font-weight-bold">
    <form method="POST" action="managesubjupdprocess.php">

        <div class="form-group">
            <label for="text">Subj ID: </label>
            <?php

                echo $fid;
                
            ?>
        </div>

        <div class="form-group">
            <label for="email">Nama Subjek(Rumi):</label>
            <input type="text" class="form-control" id="fsubjname" name="fsubjname" value= "<?php echo $row['subjName'];?>">
        </div>

        <div class="form-group">
            <label for="email">Nama Subjek(Jawi):</label>
            <input type="text" class="form-control" id="fsubjnamejawi" name="fsubjnamejawi" value= "<?php echo $row['subjNameJawi'];?>">
        </div>

        <div class="form-group">
            <label for="email">Markah Penuh:</label>
            <input type="text" class="form-control" id="fsubjfm" name="fsubjfm" value= "<?php echo $row['subjFullMark'];?>">
        </div>

        <input type="hidden" id="fsubjid" name="fsubjid" value= "<?php echo $row['subjID']; ?>">

        <button type="submit" class="btn btn-primary">Kemaskini Maklumat</button>
        <a href="managesubj.php" class="btn btn-danger">Batal</a>
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

<!-- Page level plugins -->
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="assets/js/demo/datatables-demo.js"></script>