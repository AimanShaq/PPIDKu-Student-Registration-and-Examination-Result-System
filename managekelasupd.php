<?php

    include 'headermanage.php'; 
    include 'dbconnect.php';

    //get teacher ID
    if(isset($_GET['id']))
    {
        $fclid = $_GET['id'];
    }

    //retrieve teacher information
    $sql = "SELECT * FROM tb_class LEFT JOIN tb_teacher ON tb_class.classTeacher=tb_teacher.tchName
            WHERE classID=$fclid";

    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

?>
<title>Kemaskini Maklumat Kelas</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-gradient-primary">
            <div class="row">
              <div class="col-lg" style="padding:10px 10px">
                  <h6 class="m-0 font-weight-bold " style="color:white">Kemaskini Kelas</h6>
              </div>
            </div>
        </div>
        <div class="card-body font-weight-bold">
    <form method="POST" action="managekelasupdprocess.php">

        <div class="form-group">
            <label for="text">Kelas ID: </label>
            <?php

                echo $fclid;
                
            ?>
        </div>

        <div class="form-group">
            <label for="email">Nama Kelas:</label>
            <input type="text" class="form-control" id="fclname" name="fclname" value= "<?php echo $row['className'];?>">
        </div>

        <div class="form-group">
            <label for="email">Kod Bilik:</label>
            <input type="text" class="form-control" id="fclcode" name="fclcode" value= "<?php echo $row['classCode'];?>">
        </div>

        <div class="form-group">
	          <label for="email">No Bilik:</label>
	          <input type="text" class="form-control" id="fclno"  maxlength="2" name="fclno" value= "<?php echo $row['classNo'];?>">
	        </div>

        <div class="form-group">
            <label for="email">Nama Guru:</label>
                  <select class="form-control" id="fcltchr" name="fcltchr" required>
                    <?php 
                        $sql2= "SELECT * FROM tb_teacher WHERE tchSchool='$schidassign'";
                        $result2 = mysqli_query($con,$sql2);
                        
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            echo "<option value= '".$row2['tchName']."' > ".$row2['tchName']." </option>";
                        }
                     ?>
                  </select>
        </div>

        <div class="form-group">
              <label for="email">Warna Kelas:</label>
              <?php echo'<input type="color" id="fclcolour" name="fclcolour" required value="'.$row['classColor'].'">'?>
        </div>

        <div class="form-group">
            <label for="email">Masa:</label>
                <select class="form-control" id="fcltime" name="fcltime" required>
                    <?php 
                echo "<option selected='selected' value= '".$row['classTime']."' > Default: ".$row['classTime']." </option>";              
                ?>
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

        <input type="hidden" id="fclid" name="fclid" value= "<?php echo $row['classID']; ?>">

        <button type="submit" class="btn btn-primary">Kemaskini Maklumat</button>
        <a href="managekelas.php" class="btn btn-danger">Batal</a>
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