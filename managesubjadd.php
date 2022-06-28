<?php

    include 'headeradmin.php'; 
    include 'dbconnect.php';

    //retrieve teacher information
    $sqlsub = "SELECT * FROM tb_subject";
    $resultsub = mysqli_query($con,$sqlsub);

    $totalsub=mysqli_num_rows($resultsub); 

?>
<title>Tambah Subjek</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
              <div class="col-lg" style="padding:10px 10px">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Subjek</h6>
              </div>
            </div>
        </div>
    <div class="card-body font-weight-bold">
    <form method="POST" action="managesubjaddprocess.php">

        <div class="form-group">
            <label for="email">Nama Subjek(Rumi):</label>
            <input type="text" class="form-control" id="fsubjname" name="fsubjname" maxlength="10" onkeypress="return AvoidSpace(event)" required>
        </div>
        <script type="text/javascript">
            function AvoidSpace(event) {
                var k = event ? event.which : window.event.keyCode;
                if (k == 32) return false;
            }
        </script>

        <div class="form-group">
            <label for="email">Nama Subjek(Jawi):</label>
            <input type="text" class="form-control" id="fsubjnamejawi" name="fsubjnamejawi" required>
        </div>

        <div class="form-group">
            <label for="email">Markah Penuh:</label>
            <input type="text" class="form-control" id="fsubjfm" name="fsubjfm" value= "100" readonly>
        </div>

        <input type="hidden" id="fsubjid" name="fsubjid" value= "<?php echo $totalsub+1 ?>">

        <button type="submit" class="btn btn-primary">Tambah Subjek</button>
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