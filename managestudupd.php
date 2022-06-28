<?php

    include 'headermanage.php'; 
    include 'dbconnect.php';
    //mysqli_set_charset($con,"utf8");
    //get teacher ID
    if(isset($_GET['id']))
    {
        $fid = $_GET['id'];
    }

    //retrieve teacher information
    $sql = "SELECT * FROM tb_student LEFT JOIN tb_studstatus ON tb_student.studStatus=tb_studstatus.studstatID
            WHERE studID='$fid'";

    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<title>Kemaskini Maklumat Murid</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container-fluid">
    <div class="card shadow mb-4 font-weight-bold">
        <div class="card-header py-3 bg-gradient-primary">
              <div class="row">
                  <div class="col-lg" style="padding:10px 10px">
                    <h6 class="m-0 font-weight-bold" style="color:white">Kemaskini Butiran Murid</h6>
                  </div>
              </div>
            </div>
    <form method="POST" action="managestudupdprocess.php" style="padding: 10px;">

        <div class="form-group">
            <label for="text">Student ID: </label>
            <?php

                echo $fid;
                
            ?>
        </div>

        <div class="form-group">
            <label for="email">IC Murid:</label>
            <input type="text" class="form-control" id="fsic" name="fsic" value= "<?php echo $row['studIC'];?>">
        </div>

        <div class="form-group">
            <label for="email">Surat Beranak Murid:</label>
            <input type="text" class="form-control" id="fssb" name="fssb" value= "<?php echo $row['studSB'];?>">
        </div>

        <div class="form-group">
            <label for="email">Nama Murid:</label>
            <input type="text" class="form-control" id="fsname" name="fsname" value= "<?php echo $row['studName'];?>">
        </div>

        <div class="form-group">
            <label for="email">Nama Murid (Jawi):</label>
            <input type="text" class="form-control" dir="rtl" id="fsnamejawi" name="fsnamejawi" value= "<?php echo $row['studNameJawi'];?>">
        </div>

        <div class="form-group">
            <label for="email">Jantina:</label>
                  <select class="form-control" id="fsgender" name="fsgender" required>
                    <?php echo "<option selected='selected' value= '".$row['studGender']."' > Default: ".$row['studGender']." </option>"; ?>
                    <option>L</option>
                    <option>P</option>
                  </select>
        </div>

        <div class="form-group">
            <label for="email">Darjah:</label>
            <select class="form-control" id="fsstd" name="fsstd" required>
                <?php echo "<option selected='selected' value= '".$row['studStd']."' > Default: ".$row['studStd']." </option>"; ?>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </select>
        </div>

        <div class="form-group">
            <label for="email">Status Murid:</label>
            <select class="form-control" id="fsstatus" name="fsstatus" required>
            <?php
            $sqlst= "SELECT * FROM tb_studstatus";
            $resultst = mysqli_query($con,$sqlst);
            while($rowst = mysqli_fetch_array($resultst))
                    {

                        if($rowst['studstatID'] == $row['studStatus'])
                        {
                            echo "<option selected='selected' value= '".$rowst['studstatID']."' > ".$rowst['studstatDesc']." </option>";
                        }
                        else{
                            echo "<option value= '".$rowst['studstatID']."' > ".$rowst['studstatDesc']." </option>";
                        }
                    }
            ?>
        </div>

        <input type="hidden" id="fsid" name="fsid" value= "<?php echo $row['studID']; ?>">
        <br>
        <button type="submit" class="btn btn-primary">Kemaskini Maklumat</button>
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