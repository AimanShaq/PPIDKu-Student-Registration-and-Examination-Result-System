<?php 
    include 'headermanage.php';
    include 'dbconnect.php'
?>
<head>
  <title>Penambahan Murid</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-gradient-primary">
              <div class="row">
                  <div class="col-lg" style="padding:10px 10px">
                    <h6 class="m-0 font-weight-bold " style="color:white">Penambahan Murid</h6>
                  </div>
              </div>
            </div>
    <form method="POST" action="managestudaddprocess.php" style="padding: 10px;">

        <div class="form-group">
            <label for="email">IC Murid:</label>
            <input type="text" class="form-control" id="fsic" name="fsic" required>
        </div>

        <div class="form-group">
            <label for="email">Surat Beranak Murid:</label>
            <input type="text" class="form-control" id="fssb" name="fssb">
        </div>

        <div class="form-group">
            <label for="email">Nama Murid:</label>
            <input type="text" class="form-control" id="fsname" name="fsname" required>
        </div>

        <div class="form-group">
            <label for="email">Nama Murid (Jawi):</label>
            <input type="text" class="form-control" dir="rtl" id="fsnamejawi" name="fsnamejawi">
        </div>

        <div class="form-group">
            <label for="email">Jantina:</label>
                  <select class="form-control" id="fsgender" name="fsgender" required>
                    <option>L</option>
                    <option>P</option>
                  </select>
        </div>

        <div class="form-group">
            <label for="email">Darjah:</label>
            <select class="form-control" id="fsstd" name="fsstd" required>
                <option selected='selected'>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </select>
        </div>
        <input type="hidden" id="fsstatus" name="fsstatus" value="1">
		<input type="hidden" id="fschidassign" name="fschidassign" value= "<?php echo $schidassign; ?>">
        <br>
        <button type="submit" class="btn btn-primary">Tambah Maklumat</button>
        <a href="managestud.php" class="btn btn-danger">Batal</a>
    </form>
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