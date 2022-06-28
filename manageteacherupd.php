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
    $sql = "SELECT * FROM tb_teacher
            WHERE tchID='$fid'";

    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<title>Kemaskini Maklumat Guru</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-gradient-primary">
            <div class="row">
              <div class="col-lg" style="padding:10px 10px">
                  <h6 class="m-0 font-weight-bold " style="color:white">Kemaskini Butiran Guru</h6>
              </div>
            </div>
        </div>
        <div class="card-body font-weight-bold">
    <form method="POST" action="manageteacherupdprocess.php">

        <div class="form-group">
            <label for="text">Teacher ID: </label>
            <?php

                echo $fid;
                
            ?>
        </div>

        <div class="form-group">
            <label for="email">Nama (Rumi):</label>
            <input type="text" class="form-control" id="ftchname" name="ftchname" value= "<?php echo $row['tchName'];?>" required>
        </div>

        <div class="form-group">
            <label for="email">Nama (Jawi):</label>
            <input type="text" class="form-control" id="ftchnamejawi" dir="rtl" name="ftchnamejawi" value= "<?php echo $row['tchNameJawi'];?>">
        </div>

        <div class="form-group">
            <label for="email">Kod Nama:</label>
            <input type="text" class="form-control" id="ftchcode" maxlength="2"  name="ftchcode" value= "<?php echo $row['tchCode'];?>" required>
        </div>

        <input type="hidden" id="ftchid" name="ftchid" value= "<?php echo $row['tchID']; ?>">

        <button type="submit" class="btn btn-primary">Kemaskini Maklumat</button>
        <a href="manageteacher.php" class="btn btn-danger">Batal</a>
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