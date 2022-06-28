<?php
 include "ibubapasession.php";
 if(!session_id())
    {
        session_start();
    } 
 include "dbconnect.php";

$studdic=$_SESSION['stud_ic'];

$id=$_GET['id'];

    $sql = "SELECT * FROM tb_resultstud LEFT JOIN tb_student ON tb_resultstud.markStud = tb_student.studIC
            WHERE markStud='$studdic'";

    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    $sqlsch="SELECT * FROM tb_school WHERE schID='$id'";
    mysqli_set_charset($con,"utf8");
    $resultsch = mysqli_query($con,$sqlsch);
    $rowsch=mysqli_fetch_array($resultsch);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Slip Butiran Murid</title>
  
  <style>
    
    .padleft{
      padding:10px;
      float:left;
    }
    
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding:5px;
        text-align: center;
    }
@media print
    {
        #non-printable { display: none; }
        #printable { display: block; }
        
        * {page-break-inside: avoid;}

        .page {
        width: 21cm;
        min-height: 29.7cm;
        padding: 0cm;
        margin: 0cm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);

        -webkit-print-color-adjust: exact;
    }
    th{
    -webkit-print-color-adjust: exact;
    }
}

@page {
        size: A4;
        margin: 0;
    }
@font-face{
	font-family: Jawi Uthman Taha Regular;
  	src: url(assets/fonts/JAWIUTHMANTAHA.TTF);
	}
  </style>
</head>
<body>

  
 
  <div class="container-fluid;" id="printable" align="center">
    <!-- <img class="bg-image" src="assets/img/kerajaanjohor.png" alt="Logo Kerajaan Johor" width="110" height="100" style="align-left"> -->
    <div style="text-align:center;">
      <h2><font face = "Jawi Uthman Taha Regular" size ="5" >سکوله &nbsp اݢام&nbsp  کراجاٴن &nbsp نݢري &nbsp جوهر</font><br></h2>
      <h2><font face = "Jawi Uthman Taha Regular" size ="4" >دإيره&nbsp کولاي</font><br></h2>
      <h2><font face = "Jawi Uthman Taha Regular" size ="5" ><?php echo $rowsch['schNameJawi']; ?></font></h2> 
    </div>
    <div style="padding:0px">
      <p>Nama: <?php  echo $row['studName']; ?></p>
      <p>No IC: <?php echo  $row['studIC']; ?> </p>
      <p>No Angka Giliran: <?php echo  $row['studID']; ?> </p>
    </div>
    <br>
    <div class="container-fluid">
      <div class="col-lg-12" align="right">
        <center>
          <table style="width:400px">
              <tr class="subjectList" >
                <th bgcolor="#3d6098"><font face = "Jawi Uthman Taha Regular" size ="4" >ڤرکارا</font></th>
                <th bgcolor="#3d6098"><font face = "Jawi Uthman Taha Regular" size ="4" >بيلڠن</font></th>
              </tr>

              <?php
                    $std=$row['studStd'];

                    $sqlcol = "SHOW COLUMNS FROM tb_standard";
                    $resultcol= mysqli_query($con,$sqlcol);
                    $totalreal=mysqli_num_rows($resultcol);

                    $sqltotal = "SELECT * FROM tb_subject";
                    $resulttotal = mysqli_query($con,$sqltotal);
                    $totalsub=mysqli_num_rows($resulttotal); 

                    $sqlselect = "SELECT * FROM tb_standard WHERE stdID='$std'";
                    $resultselect= mysqli_query($con,$sqlselect);
                    $rowselect=mysqli_fetch_array($resultselect);

                    $count=0;

                    while($rowcol=mysqli_fetch_array($resultcol))
                    {
                        $colname[]=$rowcol['Field'];

                    }
                    $count1=0;
                    while($count1<$totalreal)
                    {
                        //echo $rowselect[$count1];
                        $count1++;
                    }
                    mysqli_set_charset($con,"latin1");

                    while($count<$totalreal-1){
                        $sqlsub = "SELECT * FROM tb_subject WHERE subjID='$count'";
                        $resultsub = mysqli_query($con,$sqlsub);
                        $rowsub=mysqli_fetch_array($resultsub);
                        $count++;
                        if($rowselect[$count]=='1'){
                            //echo $rowselect[$count];
                            echo '<tr class="subjectList">';
                            if($std<'4'&&$count>'6'){
                                echo"<td bgcolor='#bfbfbf'><font face = 'Jawi Uthman Taha Regular' size ='5' ><strong>".$rowsub['subjNameJawi']."</font></td>";
                                echo"<td bgcolor='#bfbfbf' style='text-align:center;'>".($count-1)."</td>";
                                echo "</tr>";
                            }
                            else{
                                echo"<td bgcolor='#bfbfbf'><font face = 'Jawi Uthman Taha Regular' size ='5' ><strong>".$rowsub['subjNameJawi']."</font></td>";
                                echo"<td bgcolor='#bfbfbf' style='text-align:center;'>".($count-1)."</td>";
                                echo "</tr>";
                            }
                        }
                    }
                ?>
              <!--?php
                $sqls = "SELECT * FROM tb_subject";
                // $sqlm = "SELECT * FROM tb_resultstud WHERE markStud='$studdic'";
                mysqli_set_charset($con,"latin1");
                $results = mysqli_query($con,$sqls);
                // $resultm = mysqli_query($con,$sqlm);
                // $rowm = mysqli_fetch_array($resultm);

                if($row['studStd']<'4')
                {
                    $count=0;
                    while($count<11)
                    {
                        $rows = mysqli_fetch_array($results);   
                        echo "<tr class='subjectList' >";

                        echo"<td bgcolor='#bfbfbf'><font face = 'Jawi Uthman Taha Regular' size ='4' ><strong>".$rows['subjNameJawi']."</font></td>";
                        echo"<td bgcolor='#bfbfbf' style='text-align:center;'>".$rows['subjID']."</td>";
                        echo "</tr>";
                        $count=$count+1;
                    } 
                }

                else if($row['studStd']=='4')
                {
                    $count=0;
                    while($count<16)
                    {
                        $rows = mysqli_fetch_array($results);   
                        echo "<tr class='subjectList'>";
                        if($rows['subjID']=='10'||$rows['subjID']=='13'){
                            mysqli_fetch_array($results);
                            
                            echo"<td bgcolor='#bfbfbf'><font face = 'Jawi Uthman Taha Regular' size ='4' ><strong>".$rows['subjNameJawi']."</strong></font></td>";
                            echo"<td bgcolor='#bfbfbf' style='text-align:center;'>".$rows['subjID']."</td>";
                            echo "</tr>";
                        }
                        else
                        {
                            
                            echo"<td bgcolor='#bfbfbf'><font face = 'Jawi Uthman Taha Regular' size ='4' ><strong>".$rows['subjNameJawi']."</strong></font></td>";
                            echo"<td bgcolor='#bfbfbf' style='text-align:center;'>".$rows['subjID']."</td>";
                            echo "</tr>";
                        }   
                        $count=$count+1;
                    } 
                }
                else
                {

                    $count=0;
                    mysqli_fetch_array($results);
                    mysqli_fetch_array($results);
                    while($count<11)
                    {
                        $rows = mysqli_fetch_array($results);   
                        
                        echo "<tr class='subjectList'>";
                        if($rows['subjID']=='1'||$rows['subjID']=='10'||$rows['subjID']=='14'||$rows['subjID']=='15'||$rows['subjID']=='16'||$rows['subjID']=='17'){
                            mysqli_fetch_array($results);
                            
                            echo"<td bgcolor='#bfbfbf'><font face = 'Jawi Uthman Taha Regular' size ='4' ><strong>".$rows['subjNameJawi']."</strong></font></td>";
                            echo"<td bgcolor='#bfbfbf' style='text-align:center;'>".$rows['subjID']."</td>";
                            echo "</tr>";
                        }
                        else
                        {
                            
                            echo"<td bgcolor='#bfbfbf'><font face = 'Jawi Uthman Taha Regular' size ='4' ><strong>".$rows['subjNameJawi']."</strong></font></td>";
                            echo"<td bgcolor='#bfbfbf' style='text-align:center;'>".$rows['subjID']."</td>";
                            echo "</tr>";
                        }   
                          
                        $count=$count+1;
                    } 
                }
              ?-->
              
            </table>
          </center>
      </div>
    </div>
    
  </div>
  
    
        
</body>

<footer><br><br>
    <center><input id="non-printable" type="button" onclick="printBody('printable')" value="Print Slip"/></center><br>
    <script type="text/javascript">
        function printBody(divName) {
             var printContents = document.getElementById(divName).innerHTML;
             var originalContents = document.body.innerHTML;

             document.body.innerHTML = printContents;

             window.print();

             document.body.innerHTML = originalContents;
        }
    </script>
</footer>
</html>