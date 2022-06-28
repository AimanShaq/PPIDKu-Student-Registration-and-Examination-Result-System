<?php include'headeradmin.php' ;
	include 'dbconnect.php';

if(isset($_GET['id']))
{
  $id = $_GET['id'];
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
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-body">
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
                //echo $puratamd[$count];
                 //$data[] = $row['studStd'];
                 //$data2[] = $row['AVG(markJumlah)'];
                }
                
                $i++;
                $count++;
              }
            ?>
          </tr>
       
        <script type="text/javascript">
        window.onload = function() {

        var options = {
          exportEnabled: true,
          animationEnabled: true,
          title:{
            text: "Carta Pai Markah Dapat"
          },
          legend:{
            horizontalAlign: "right",
            verticalAlign: "center"
          },
          data: [{
            type: "pie",
            showInLegend: true,
            toolTipContent: "<b>{name}</b>: {y} ",
            indexLabel: "{name}",
            legendText: "{name}   ",
            indexLabelPlacement: "inside",
            dataPoints: [
            
              <?php echo '{ y:'.$puratamd[1].', name: "Darjah 1" },'?>
              <?php echo '{ y:'.$puratamd[2].', name: "Darjah 2" },'?>
              <?php echo '{ y:'.$puratamd[3].', name: "Darjah 3" },'?>
              <?php echo '{ y:'.$puratamd[4].', name: "Darjah 4" },'?>
              <?php echo '{ y:'.$puratamd[5].', name: "Darjah 5" },'?>
              <?php echo '{ y:'.$puratamd[6].', name: "Darjah 6" },'?>
              
            ]
          }]
        };
        $("#chartContainer").CanvasJSChart(options);

        }
        </script>
        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>  
        <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
        </tbody>
      </table>
    </div>
  </div>
</div>



