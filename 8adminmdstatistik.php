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
else{
  echo "<script type='text/javascript'>alert('Tiada Data yang Dijumpai')</script>";
    echo "Redirecting..";
    //var_dump($sql);
    header('refresh:0.5; url="adminpilihmarkahdapat.php"');
}
//var_dump($id);

//var_dump($id);
$sql = "SELECT * ,SUM(markJumlah),AVG(markJumlah) FROM tb_resultstud 
        LEFT JOIN tb_student ON tb_resultstud.markStud = tb_student.studIC  
         WHERE markSchool='$id'
         GROUP BY studStd";

$result = mysqli_query($con,$sql);
$result = mysqli_query($con,$sql);

$resultchart = mysqli_query($con,$sql);

//var_dump($result);
echo "Sekolah: ".$id;
?>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="assets/js/canvasjs.min.js"></script> 
<table class="table table-striped" >
    <thead>
      <tr>
        <th>Darjah</th>
        <th>Jumlah Dapat</th>
     <!-- <th>Jumlah Patut</th> -->
        <th>Purata</th>
      </tr>
    </thead>
    <tbody>
      <tr>

 



        <?php
        //mysqli_fetch_array($result);
        //mysqli_fetch_array($result);
        $count = 0;
        $i = 0;
          while ($count < 8) {

          //  echo "<font size='18' face='Arial'><tr>";
            $row=mysqli_fetch_array($result);

            echo "<tr>";
            if ($row['studStd']!= NULL && $row['studStd']!= '0') {
              echo "<td>".$row['studStd']."</td>";
              echo "<td>".$row['SUM(markJumlah)']."</td>";
             //  echo "<td>".$row['COUNT(studStd)']."</td>";

            echo "<td>";
            echo $puratamd[$count]=sprintf("%.2f",($row['AVG(markJumlah)']));
            echo "</td>";
            echo "</tr>";
          //  echo $w[$i] = array( $row['AVG(markJumlah)']);
          //  foreach($w[$i] as $val[]);

             $data[] = $row['studStd'];
             $data2[] = $row['AVG(markJumlah)'];
             $i++;
            $count++;
            }
            
            
          }
        ?>
      </tr>
   
<?php
 
$dataPoints = array( 
  array('y' => $puratamd[2], "label" => "Darjah 1" ),
  array("y" => $puratamd[3], "label" => "Darjah 2" ),
  array("y" => $puratamd[4], "label" => "Darjah 3" ),
  array("y" => $puratamd[5], "label" => "Darjah 4" ),
  array("y" => $puratamd[6], "label" => "Darjah 5" ),
  array("y" => $puratamd[7], "label" => "Darjah 6" )
);
 
?>

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
  title:{
    text: "Graf Purata Markah Setiap Darjah"
  },
  axisY: {
    title: ""
  },
  data: [{
    type: "column",
    yValueFormatString: "#,##0.## ",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>
                      
    </tbody>
  </table>


