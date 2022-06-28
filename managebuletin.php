<?php
    include('headeradmin.php');
    include('dbconnect.php');

     
?>
<title>Buletin</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container">
    <div class="card shadow mb-4">
  <div class="card-body">
  <h2>Pengumuman</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Bil</th>
        <th>Tajuk</th>
        <th>Penerangan</th>
        <th>Arahan</th>
        <th>Tarikh Buka</th>
        <th>Tarikh Tutup</th>
        <th>Tindakan</th>
      </tr>
    </thead>
    <tbody>
        <?php

            $sql = "SELECT * FROM tb_news";
            $result = mysqli_query($con,$sql);
            

            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>".$row['newsID']."</td>";
                echo "<td>".$row['newsTitle']."</td>";
                echo "<td>".$row['newsDesc']."</td>";
                echo "<td>".$row['newsAction']."</td>";
                echo "<td>".$row['newsDatebk']."</td>";
                echo "<td>".$row['newsDatetp']."</td>";
                echo "<td>";
                echo "<a href='managebuletinupd.php?id=".$row['newsID']."' class='btn btn-warning'>Kemaskini</a>&nbsp";
                echo "</td>";
                echo "</tr>";
            }

            
        ?>
      
    </tbody>
  </table>

  
</div><br>

<div class="container">
  <h2>Buletin</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Bil</th>
        <th>Gambar</th>
        <th>Tajuk</th>
        <th>Tarikh</th>
        <th>Tindakan</th>
      </tr>
    </thead>
    <tbody>
        <?php

            

            $sqlbul = "SELECT * FROM tb_buletin
                        LEFT JOIN tb_galery ON tb_buletin.bulID=tb_galery.galID
                        WHERE bulID < 10";
            $resultbul = mysqli_query($con,$sqlbul);
            

            while($rowbul = mysqli_fetch_array($resultbul))
            {
                echo "<tr>";
                echo "<td>".$rowbul['bulID']."</td>";
                echo "<td>".$rowbul['bulImage']."</td>";
                echo "<td>".$rowbul['bulTitle']."</td>";
                echo "<td>".$rowbul['bulDate']."</td>";
                echo "<td>";
                echo "<a href='manageimageupd.php?id=".$rowbul['bulID']."' class='btn btn-warning'>Kemaskini</a>&nbsp";
                echo "</td>";
                echo "</tr>";
            }

            
        ?>
      
    </tbody>
  </table>

  
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
