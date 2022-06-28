<?php
    include 'headeradmin.php';
    include 'dbconnect.php';

    $id=$_GET['id'];

?>

<!DOCTYPE HTML>
<html>
<head>
  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {            
      title:{
        text: "Carta Lulus Gagal"              
      },

      data: [  //array of dataSeries     
      { //dataSeries - first quarter
   /*** Change type "column" to "bar", "area", "line" or "pie"***/        
       type: "column",
       name: "Lulus",
       dataPoints: [
       { label: "<?php echo $darjah[1]?>", y: <?php echo $peratuslulus[1]?>},
       { label: "<?php echo $darjah[2]?>", y: <?php echo $peratuslulus[2]?>},
       { label: "<?php echo $darjah[3]?>", y: <?php echo $peratuslulus[3]?>},                                    
       { label: "<?php echo $darjah[4]?>", y: <?php echo $peratuslulus[4]?>},
       { label: "<?php echo $darjah[5]?>", y: <?php echo $peratuslulus[5]?>},
       { label: "<?php echo $darjah[6]?>", y: <?php echo $peratuslulus[6]?>}
       ]
     },
     { //dataSeries - second quarter

      type: "column",
      name: "Gagal",                
      dataPoints: [
      { label: "<?php echo $darjah[1]?>", y: <?php echo $peratusgagal[1]?> },
      { label: "<?php echo $darjah[2]?>", y: <?php echo $peratusgagal[2]?> },
      { label: "<?php echo $darjah[3]?>", y: <?php echo $peratusgagal[3]?> },                                    
      { label: "<?php echo $darjah[4]?>", y: <?php echo $peratusgagal[4]?> },
      { label: "<?php echo $darjah[5]?>", y: <?php echo $peratusgagal[5]?> },
      { label: "<?php echo $darjah[6]?>", y: <?php echo $peratusgagal[6]?> }
      ]
    }
    ]
  });

    chart.render();
  }
  </script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
  <div id="chartContainer" style="height: 300px; width: 100%;">
  </div>
</body>
</html>


<div class="form-group">
  <label for="text">Nama Sekolah: <?php echo $id ?></label>
</div>

<title>Statistik Murid Lulus/Gagal</title>
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container">

  <h2>Murid Lulus</h2>
  <table class="table table-striped">
  <thead>
      <tr>
        <th>Darjah</th>
        <th>Jumlah Murid</th>
        <th>Jumlah Murid Lulus</th>
        <th>Peratus</th>
      </tr>
  </thead>
  <tbody>
    <?php
      $sql = "SELECT markKeputusan, COUNT(markStud), studStd
      FROM tb_resultstud 
      LEFT JOIN tb_student ON tb_resultstud.markStud=tb_student.studIC
      WHERE markSchool='$id'
      GROUP BY studStd";
      
      $sql1 = "SELECT markKeputusan, COUNT(markStud) 
      FROM tb_resultstud 
      LEFT JOIN tb_student ON tb_resultstud.markStud=tb_student.studIC
      WHERE markKeputusan = 'Lulus' AND markSchool='$id'
      GROUP BY studStd"; 
      $result1 = mysqli_query($con,$sql1);

      
      $result = mysqli_query($con,$sql);
      // Print out result
      $count=0;
        
      mysqli_fetch_array($result);
      mysqli_fetch_array($result);
      mysqli_fetch_array($result1);
      while($count<6){
        $row = mysqli_fetch_array($result);
        $row1 = mysqli_fetch_array($result1);
        echo "<tr>". $row['COUNT(markStud)'] ;
        echo "<td>Darjah ".$darjah[$count]= $row['studStd'];
        echo "</td>";
        echo "<td>". $row['COUNT(markStud)'] ."</td>";
        echo "<td>". $row1['COUNT(markStud)'] ."</td>";
        echo "<td>";
        echo $peratuslulus[$count]=(($row1['COUNT(markStud)'])/$row['COUNT(markStud)'])*'100';
        echo "</td>";
        echo "</tr>";
        $count++;
      }
    ?>

    <td>
    <?php
    $sql2 = "SELECT markKeputusan, COUNT(markStud) 
              FROM tb_resultstud"; 
        
    $result2 = mysqli_query($con,$sql2);

    // Print out result
    while($row2 = mysqli_fetch_array($result2)){
      echo "Jumlah murid: ". $row2['COUNT(markStud)'] ."";
      echo "<br/>";
    }
    ?>
    </td>
  </tbody>
  </table>
</div>

<br><br>

<div class="container">

<h2>Murid Gagal</h2>
  <table class="table table-striped">
  <thead>
      <tr>
        <th>Darjah</th>
        <th>Jumlah Murid</th>
        <th>Jumlah Murid Gagal</th>
        <th>Peratus</th>
      </tr>
  </thead>
  <tbody>
    <?php
      $sql3 = "SELECT markKeputusan, COUNT(markStud), studStd
      FROM tb_resultstud 
      LEFT JOIN tb_student ON tb_resultstud.markStud=tb_student.studIC
      WHERE markSchool='$id'
      GROUP BY studStd";
      
      $sql4= "SELECT markKeputusan, COUNT(markStud) 
      FROM tb_resultstud 
      LEFT JOIN tb_student ON tb_resultstud.markStud=tb_student.studIC
      WHERE markKeputusan = 'Lulus' AND markSchool='$id'
      GROUP BY studStd"; 
      $result4 = mysqli_query($con,$sql4);

      
      $result3 = mysqli_query($con,$sql3);
      // Print out result
      $count=0;
      
      mysqli_fetch_array($result3);
      mysqli_fetch_array($result3);
      mysqli_fetch_array($result4);
      while($count<6){
        $row3 = mysqli_fetch_array($result3);
        $row4 = mysqli_fetch_array($result4);
        echo "<tr>". $row3['COUNT(markStud)'] ;
        echo "<td>Darjah ". $row3['studStd']."</td>";
        echo "<td>". $row3['COUNT(markStud)'] ."</td>";
        echo "<td>". (($row3['COUNT(markStud)'])-($row4['COUNT(markStud)'])) ."</td>";
        echo "<td>";
        $peratusgagal[$count]=( (($row3['COUNT(markStud)']) - ($row4['COUNT(markStud)']))/$row3['COUNT(markStud)'])*'100';
        echo "</td>";
        echo "</tr>";
        $count++;
      }
    ?>

    <td>
    <?php
    $sql2 = "SELECT markKeputusan, COUNT(markStud) 
              FROM tb_resultstud"; 
        
    $result2 = mysqli_query($con,$sql2);

    // Print out result
    while($row2 = mysqli_fetch_array($result2)){
      echo "Jumlah murid: ". $row2['COUNT(markStud)'] ."";
      echo "<br/>";
    }
    ?>
    </td>
  </tbody>
  </table>
</div>