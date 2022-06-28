<?php 
    include 'headermanage.php';
    include 'dbconnect.php'
?>
<head>
  <title>Penambahan Kelas</title>
  <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-gradient-primary">
            <div class="row">
              <div class="col-lg" style="padding:10px 10px">
                  <h6 class="m-0 font-weight-bold" style="color:white">Tambah Kelas</h6>
              </div>
            </div>
        </div>
        <div class="card-body font-weight-bold">
	    <form method="POST" action="managekelasaddprocess.php">

	        <div class="form-group">
	          <label for="email">Nama Kelas:</label>
	          <input type="text" class="form-control" id="fclname" placeholder="Name Kelas" name="fclname" required>
	        </div>

            <div class="form-group">
	          <label for="email">Kod Bilik:</label>
	          <input type="text" class="form-control" id="fclcode" placeholder="Kod Bilik" name="fclcode" required>
	        </div>

	        <div class="form-group">
	          <label for="email">No Bilik:</label>
	          <input type="text" class="form-control" id="fclno" maxlength="2" placeholder="No Bilik" name="fclno" required>
	        </div>

            <div class="form-group">
	          <label for="email">Nama Guru:</label>
			      <select class="form-control" id="fcltchr" name="fcltchr" required>
			        <?php 
			        	$sql= "SELECT * FROM tb_teacher WHERE tchSchool='$schidassign'";
			        	$result = mysqli_query($con,$sql);
			        	
			        	while($row = mysqli_fetch_array($result))
			        	{
			        		echo "<option value= '".$row['tchName']."' > ".$row['tchName']." </option>";
			        	}
			         ?>
			      </select>
	        </div>
            <div class="form-group">
                <label>Warna Kelas: </label>
                <input type="color" id='fclcolour' name="fclcolour" required>
             </div>

            <div class="form-group">
	            <label for="email">Masa:</label>
	            <select class="form-control" id="fcltime" name="fcltime" required>
	                <option value="07.15 - 08.45">07.15 AM - 08.45 AM</option>
	                <option value="08.45 - 10.15">08.45 AM - 10.15 AM</option>
	                <option value="10.15 - 11.45">10.15 AM - 11.45 AM</option>
	                <option value="07.15 - 10.15">07.15 AM - 10.15 AM</option>
	                <option value="08.45 - 11.45">08.45 AM - 11.45 AM</option>
	                <option value="02.00 - 03.30">02.00 PM - 03.30 PM</option>
	                <option value="03.30 - 05.00">03.30 PM - 05.00 PM</option>
	                <option value="05.00 - 06.30">05.00 PM - 06.30 PM</option>
	                <option value="02.00 - 05.00">02.00 PM - 05.00 PM</option>
	                <option value="03.30 - 06.30">03.30 PM - 06.30 PM</option>
	            </select>
	        </div>

			<input type="hidden" id="fschidassign" name="fschidassign" value= "<?php echo $schidassign; ?>">
	        <button type="submit" class="btn btn-primary">Daftar Kelas</button>
			<a href="managekelas.php" class="btn btn-danger">Batal</a>
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