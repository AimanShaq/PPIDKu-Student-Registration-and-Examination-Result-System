<?php 
    include 'headermanage.php';
?>
<head>
  <title>Borang Penambahan</title>
  <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-gradient-primary">
            <div class="row">
              <div class="col-lg" style="padding:10px 10px">
                  <h6 class="m-0 font-weight-bold" style="color:white">Tambah Guru</h6>
              </div>
            </div>
        </div>
        <div class="card-body font-weight-bold">
	    <form method="POST" action="manageteacheraddprocess.php">

	        <div class="form-group">
	          <label for="email" >Nama Guru(Rumi):</label>
	          <input type="text" class="form-control" id="ftchname" placeholder="Name Rumi" name="ftchname" required>
	        </div>

            <div class="form-group">
	          <label for="email">Nama Guru(Jawi):</label>
	          <input type="text" class="form-control" dir="rtl" id="ftchnamejawi" placeholder="Name Jawi" name="ftchnamejawi">
	        </div>

	        <div class="form-group">
	          <label for="email">Kod Nama:</label>
	          <input type="text" class="form-control" id="ftchcode" maxlength="2" placeholder="Kod Nama" name="ftchcode" required>
	        </div>
			<input type="hidden" id="fschidassign" name="fschidassign" value= "<?php echo $schidassign; ?>">
	        <button type="submit" class="btn btn-primary">Daftar Maklumat</button>
			<a href="manageteacher.php" class="btn btn-danger">Batal</a>
	    </form>
		</div>
	</div>
</div>
</body>
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