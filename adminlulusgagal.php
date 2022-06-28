<?php 

include'headeradmin.php';
include 'dbconnect.php';

$id = $_GET['sekolah'];

$sqlschool = "SELECT * FROM tb_school WHERE schID='$id'";
$resultschool = mysqli_query($con,$sqlschool);
$rowschool=mysqli_fetch_array($resultschool);


?>
<head>
    <link rel="stylesheet" href="style.css">
</head>


<body>

<title>Statistik Lulus Gagal</title>
        <!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">  

          <!-- Page Heading -->
        <div id="chartlulusgagal_div" style="width: 900px; height: 500px;"></div>
        <br>
        <!--?php
                $countlulus=0;
                $countgagal=0;
                $count=1;
                while($rowselect1=mysqli_fetch_array($resultselect1))
                {    
                    if($rowselect1['markKeputusan']=='Lulus')
                        $countlulus++;
                    else if($rowselect1['markKeputusan']=='Gagal')
                        $countgagal++;
                }
                echo $countlulus.'<br>'.$countgagal;
        ?-->

        <div class="table-responsive">
          <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">  
            <thead>
              <tr>
                <th>Darjah</th>
                <th>Jumlah Lulus</th>
                <th>Jumlah Gagal</th>
                <th>Peratus Lulus</th>

              </tr>
            </thead>
            <tbody>
            <?php
                $count=0;
                //$lulus[];
                //$gagal[];
                while($count<6){
                $count++;
                $sqlselect1 = "SELECT * FROM tb_resultstud  WHERE markSchool='$id' AND markStd='$count' AND markKeputusan='Lulus'";
                $sqlselect2 = "SELECT * FROM tb_resultstud  WHERE markSchool='$id' AND markStd='$count' AND markKeputusan='Gagal'";
                $resultselect1= mysqli_query($con,$sqlselect1);
                $resultselect2= mysqli_query($con,$sqlselect2);
                $rowselect1=mysqli_fetch_array($resultselect1);
                $rowcount1=mysqli_num_rows($resultselect1);
                $rowcount2=mysqli_num_rows($resultselect2);
                    echo "<tr>";
                    echo "<td>".$count."</td>";
                    echo "<td>".$lulus[$count]=$rowcount1;
                    echo "</td>";
                    echo "<td>".$gagal[$count]=$rowcount2;
                    echo "</td>";
                    echo "<td>";
                    echo sprintf('%0.2f', ($rowcount1/($rowcount1+$rowcount2))*'100')."</td>";
                    echo "</tr>";
                    
                }
            ?>
            </tbody>
          </table>
      </div>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawVisualization);

              function drawVisualization() {
                // Some raw data (not necessarily accurate)
                var data = google.visualization.arrayToDataTable([
                  ['Darjah', 'Lulus', 'Gagal'],
                 <?php echo "['1',  ".$lulus[1].",      0,]," ?>
                  <?php echo "['1',  ".$lulus[1].",      ".$gagal[1].",]," ?>
                  <?php echo "['2',  ".$lulus[2].",      ".$gagal[2].",]," ?>
                  <?php echo "['3',  ".$lulus[3].",      ".$gagal[3].",]," ?>
                  <?php echo "['4',  ".$lulus[4].",      ".$gagal[4].",]," ?>
                  <?php echo "['5',  ".$lulus[5].",      ".$gagal[5].",]," ?>
                  <?php echo "['6',  ".$lulus[6].",      ".$gagal[6]."]" ?>
                ]);

                var options = {
                  title : 'Lulus Gagal setiap Darjah bagi <?php echo $rowschool['schName']?>',
                  vAxis: {title: 'Jumlah'},
                  hAxis: {title: 'Darjah'},
                  seriesType: 'bars',
                  series: {5: {type: 'line'}}        };

                var chart = new google.visualization.ComboChart(document.getElementById('chartlulusgagal_div'));
                chart.draw(data, options);
              }
            </script>

        </div>
    </div>
</div>
      <!-- End of Main Content -->
