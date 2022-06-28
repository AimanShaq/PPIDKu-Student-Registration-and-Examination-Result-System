<?php include'headeradmin.php' ;
	include 'dbconnect.php';


  include ('adsession.php');
  if(!session_id())
  {
    session_start();
  }

if(isset($_GET['id']))
{
  $id = $_GET['id'];
}
//var_dump($id);
$sql = "SELECT *,SUM(markJumlah),AVG(markJumlah) FROM tb_resultstud 
        LEFT JOIN tb_student ON tb_resultstud.markStud = tb_student.studIC 
         WHERE schID = '$id'";

$result = mysqli_query($con,$sql);
?>
<table class="table table-striped" >
    <thead>
      <tr>
        <th>Darjah</th>
        <th>Jumlah Dapat</th>
      <!--  <th>Jumlah Patut</th>-->
        <th>Purata</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<?php
        	while ($row=mysqli_fetch_array($result)) {
          //  echo "<font size='18' face='Arial'><tr>";
            echo "<tr>";
        		echo "<td>".$row['studStd']."</td>";
            echo "<td>".$row['SUM(markJumlah)']."</td>";
            echo "<td>".$row['AVG(markJumlah)']."</td>";
           // echo "<br>";
            echo "</tr>";
        	}
        ?>
      </tr>
      
    </tbody>
  </table>


 <?php include"footermanage.php" ?>