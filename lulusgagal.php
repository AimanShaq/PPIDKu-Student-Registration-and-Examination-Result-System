<?php
    include 'headeradmin.php';
    include 'dbconnect.php';
    $id=$_GET['id'];
?>
<div class="form-group">
      <label for="text">Nama Sekolah: SABP</label>
    </div>

    <title>Statistik Murid Lulus/Gagal</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container">
<div class="col-lg-12" style="padding:0px 90%" >
  <a href="chartmuridlulusgagal.php" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Lihat Carta</a>
  </div>
  <h2>Murid Lulus</h2>
  <table class="table table-striped">
  <thead>
      <tr>
        <th>Darjah</th>
        <th>Total Murid</th>
        <th>Jumlah Murid Lulus</th>
        <th>Jumlah Murid</th>
        <th>Peratus</th>
      </tr>
    </thead>
    <tbody>
<?php
    $sql = "SELECT *, markKeputusan, COUNT(markStud), studStd
    FROM tb_resultstud WHERE markSchool='$id'
    LEFT JOIN tb_student ON tb_resultstud.markStud=tb_student.studIC
    GROUP BY studStd ";
     
$result = mysqli_query($con,$sql);

// Print out result
while($row = mysqli_fetch_array($result)){
  echo " <td> Darjah =".$row['studStd']."</td>";
  echo "<td> test2".$row['COUNT(markStud)']." </td>";
}
?> 
 
<?php
    $sql1 = "SELECT markKeputusan, COUNT(markStud) 
          FROM tb_resultstud 
          GROUP BY markKeputusan"; 
     
$result1 = mysqli_query($con,$sql1);

// Print out result
while($row1 = mysqli_fetch_array($result1)){
	echo "<td>".  $row1['markKeputusan'] ."</td>";
}
  ?>

<td>   
<?php

$sql2 = "SELECT markKeputusan, COUNT(markStud) 
          FROM tb_resultstud"; 
     
$result2 = mysqli_query($con,$sql2);

// Print out result
while($row2 = mysqli_fetch_array($result2)){
	echo "". $row2['COUNT(markStud)'] ."";
	echo "<br />";
}


?>

</td>
<td>

</td>

