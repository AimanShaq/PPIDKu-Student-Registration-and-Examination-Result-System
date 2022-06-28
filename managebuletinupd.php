<?php
    include"headeradmin.php";
    include('dbconnect.php');

    //get  ID
    if(isset($_GET['id']))
    {
        $fid = $_GET['id'];
    }
    
    //retrieve news information
    $sql = "SELECT * FROM tb_news
            WHERE newsID='$fid'";

    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>

<title>Kemaskini Pengumuman</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container">
    <div class="card shadow mb-4">
  <div class="card-body">
    <form method="POST" action="managebuletinupdprocess.php">
        <div class="form-group">
            <label for="text">Pengumuman ID: </label>
            <?php

                echo $fid;
                
            ?>
        </div>

        <div class="form-group">
            <label for="text">Tajuk:</label>
            <input type="text" class="form-control" id="fnewstitle" name="fnewstitle" value= "<?php echo $row['newsTitle'];?>">
        </div>

        <div class="form-group">
            <label for="text">Penerangan:</label>
            <input type="text" class="form-control" id="fnewsdesc" name="fnewsdesc" value= "<?php echo $row['newsDesc'];?>">
        </div>

        <div class="form-group">
            <label for="text">Arahan:</label>
            <input type="text" class="form-control" id="fnewsact" name="fnewsact" value= "<?php echo $row['newsAction'];?>">
        </div>

        <div class="form-group">
            <label for="date">Tarikh Bukak:</label>
            <input type="date" class="form-control" id="fnewsdatebk" name="fnewsdatebk" value= "<?php echo $row['newsDatebk'];?>">
        </div>

        <div class="form-group">
            <label for="date">Tarikh Tutup:</label>
            <input type="date" class="form-control" id="fnewsdatetp" name="fnewsdatetp" value= "<?php echo $row['newsDatetp'];?>">
        </div>

        <input type="hidden" id="fnewsid" name="fnewsid" value= "<?php echo $row['newsID']; ?>">

        <button type="submit" class="btn btn-primary">Kemaskini Buletin</button>
        <a href="managebuletin.php" class="btn btn-danger">Batal</a>




    </form>
</div>

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScri;pt-->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="assets/js/demo/datatables-demo.js"></script>


