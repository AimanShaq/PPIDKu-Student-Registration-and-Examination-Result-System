<?php
    include 'headeradmin.php';
    include 'dbconnect.php';

    //get  ID
    if(isset($_GET['id']))
    {
        $fid = $_GET['id'];
    }

    //retrieve from db
    $sql="SELECT * FROM tb_galery
            WHERE galID='$fid'";

    
    

    $fgalimage_path = 'assets/img/';
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result))
    {
        $img_name = $row['galDesc'];
        $img_src = $row['galImage'];
    ?>

    <div class="img-block">
    <center><img src="<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" width="600" height="500" class="img-responsive" />
    <h6><strong><?php echo $img_name; ?></strong></h6><br>
    <a href="managegalery.php" class="btn btn-primary">Kembali</a></center><br> 
    </div>

    <?php
    }
?>
<title>Galeri</title>

<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
