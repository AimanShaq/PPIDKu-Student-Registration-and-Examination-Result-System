<?php

    include 'headermanage.php'; 
    include 'dbconnect.php';
    mysqli_set_charset($con,"utf8");
    //get teacher ID
    if(isset($_GET['ic']))
    {
        $fic = $_GET['ic'];
    }
    $sqlinsert= "INSERT INTO tb_placement(plcStud) VALUES('$fic')";

    $result1=mysqli_query($con,$sqlinsert);

    //retrieve teacher information
    $sql = "SELECT * FROM tb_placement LEFT JOIN tb_student ON tb_placement.plcStud = tb_student.studIC
            WHERE plcStud='$fic'";

    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<title>Kemaskini Penempatan Murid</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
              <div class="col-lg" style="padding:10px 10px">
                  <h6 class="m-0 font-weight-bold text-primary">Kemaskini Penempatan Murid</h6>
              </div>
            </div>
        </div>
        <div class="card-body font-weight-bold">
    <form method="POST" action="managepenempatanupdprocess.php">

        <div class="form-group">
            <label for="text"> ID: </label>
            <?php

                echo $fid;
                
            ?>
        </div>

        <div class="form-group">
            <label for="email">Nama:</label>
            <input type="text" class="form-control" id="fplcname" name="fplcname" value= "<?php echo $row['studName'];?>" readonly>
        </div>

        <div class="form-group">
            <label for="email">No. Bilik:</label>
            <select class="form-control" id="fplcroom" name="fplcroom" required>
                    <?php 
                        $sql2= "SELECT * FROM tb_class WHERE classSchool='$schidassign'";
                        $result2 = mysqli_query($con,$sql2);
                        
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            if($row['plcRoom']==$row2['classNo'])
                                echo "<option selected='selected' value= '".$row2['classNo']."' > ".$row2['classNo']." - ".$row2['className']." </option>";
                            else
                                echo "<option value= '".$row2['classNo']."' > ".$row2['classNo']." - ".$row2['className']." </option>";
                        }
                     ?>
            </select>
        </div>

        <div class="form-group">
            <label for="email">Darjah Tahun Depan:</label>
            <select class="form-control" id="fplcstd" name="fplcstd" required>
                <?php echo "<option selected='selected' value= '".$row['plcStd']."' > Default: ".$row['plcStd']." </option>"; ?>
                <option value ="1" >1</option>
                <option value ="2">2</option>
                <option value ="3">3</option>
                <option value ="4">4</option>
                <option value ="5">5</option>
                <option value ="6">6</option>
            </select>
        </div>

        <div class="form-group">
            <label for="email">Kelas:</label>
            <select class="form-control" id="fplcclass" name="fplcclass" required>
            <?php       
                        $sql3= "SELECT * FROM tb_class WHERE classSchool='$schidassign'";
                        $result3 = mysqli_query($con,$sql3);
                        while($row3 = mysqli_fetch_array($result3))
                        {
                            if($row['plcClass']==$row3['className'])
                                echo "<option selected='selected' value= '".$row3['className']."' > ".$row3['classNo']." - ".$row3['className']." </option>";
                            else
                                echo "<option value= '".$row3['className']."' > ".$row3['classNo']." - ".$row3['className']." </option>";
                        }
            ?>
            </select>
        </div>

        <div class="form-group">
            <label for="email">Sesi:</label>
            <select class="form-control" id="fplcap" name="fplcap" required>
                <?php echo "<option selected='selected' value= '".$row['plcAP']."' > Default: ".$row['plcAP']." </option>"; ?>
                <option value = "Pagi">Pagi</option>
                <option value = "Petang">Petang</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Masa:</label>
            <select class="form-control" id="fplctime" name="fplctime" required>
                <?php 
                echo "<option selected='selected' value= '".$row['plcTime']."' > Default: ".$row['plcTime']." </option>";              
                ?>
                <option value="07.15 - 08.45">07.15 - 08.45</option>
                <option value="08.45 - 10.15">08.45 - 10.15</option>
                <option value="10.15 - 11.45">10.15 - 11.45</option>
                <option value="07.15 - 10.15">07.15 - 10.15</option>
                <option value="08.45 - 11.45">08.45 - 11.45</option>
                <option value="02.00 - 03.30">02.00 - 03.30</option>
                <option value="03.30 - 05.00">03.30 - 05.00</option>
                <option value="05.00 - 06.30">05.00 - 06.30</option>
                <option value="02.00 - 05.00">02.00 - 05.00</option>
                <option value="03.30 - 06.30">03.30 - 06.30</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="email">Nama Guru:</label>
            <select class="form-control" id="fplcteacher" name="fplcteacher" required>
                    <?php 
                        $sql4= "SELECT * FROM tb_teacher WHERE tchSchool='$schidassign'";
                        $result4 = mysqli_query($con,$sql4);
                        
                        while($row4 = mysqli_fetch_array($result4))
                        {
                            if($row['plcTeacher']==$row3['tchName'])
                                echo "<option selected='selected' value= '".$row4['tchName']."' > ".$row4['tchName']." </option>";
                            else
                                echo "<option value= '".$row4['tchName']."' > ".$row4['tchName']." </option>";
                        }
                     ?>
            </select>
        </div>

        <input type="hidden" id="fplcid" name="fplcid" value= "<?php echo $row['plcID']; ?>">

        <button type="submit" class="btn btn-primary">Kemaskini Maklumat</button>
        <?php echo "<a href='managepenempatandel.php?id=".$row['plcStud']."' class='btn btn-danger'>Batal</a>&nbsp"; ?>
    </form>
</div>
</div>
</div>
<br>

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