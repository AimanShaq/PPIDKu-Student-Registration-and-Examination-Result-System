<?php
    include"headeradmin.php";
    include('dbconnect.php');

    //get  ID
    if(isset($_GET['id']))
    {
        $fblid = $_GET['id'];
    }
    
    //retrieve news information
    $sql = "SELECT * FROM tb_buletin LEFT JOIN tb_galery ON tb_buletin.bulID=tb_galery.galID
            WHERE bulID='$fblid'";

    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>

<title>Kemaskini Buletin</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container">
    <form method="POST" action="manageimageupdprocess.php">
        <div class="form-group">
            <label for="text">Buletin ID: </label>
            <?php

                echo $fblid;
                
            ?>
        </div>

        <div class="form-group">
            <label for="text">Pilih Gambar:</label>
            <select type="text" class="form-control" id="fbulimage" name="fbulimage">
            <?php 
                $sql2= "SELECT * FROM tb_galery";
                $result2 = mysqli_query($con,$sql2);
                
                while($row2 = mysqli_fetch_array($result2))
                {
                    echo "<option value= '".$row2['galImage']."' > ".$row2['galImage']." </option>";
                }
            ?>
            </select>
        </div>

        <div class="form-group">
            <label for="text">Tajuk:</label>
            <input type="text" class="form-control" id="fbultitle" name="fbultitle" value= "<?php echo $row['galDesc'];?>">
        </div>

        <div class="form-group">
            <label for="date">Tarikh:</label>
            <input type="date" class="form-control" id="fbuldate" name="fbuldate" value= "<?php echo $row['galDate'];?>">
        </div>

        <input type="hidden" id="fblid" name="fblid" value= "<?php echo $row['bulID']; ?>">

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

