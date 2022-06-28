.<?php
 include "ibubapasession.php";
 if(!session_id())
    {
        session_start();
    } 
include "dbconnect.php";
//    mysqli_set_charset($con,"utf8");

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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="charset='UTF-8'">
<style>
body {
  background-color: #ffffff;
  
}
* {
  box-sizing: border-box;
}

h2 {
    font-weight: bold;
    page-break-after: avoid;
    page-break-inside:avoid;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  page-break-inside: avoid;
}
th, td {
  padding: 0px;
}
th {
  text-align: right;
}
td{
    text-align: right;
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

<title>Slip Keputusan</title>
</head>
<body id="printable" class="page">     
    <div class="row">
        <div class="col-xl-5 col-md-6 mb-4" style="margin:auto auto ;">
            <div style="text-align:center; font-size: 3px">
                <h2><font face = "Jawi Uthman Taha Regular" size ="4" >سکوله &nbsp اݢام&nbsp  کراجاٴن &nbsp نݢري &nbsp جوهر</font></h2>
                <h2><font face = "Jawi Uthman Taha Regular" size ="4" >دإيره&nbsp کولاي</font></h2>
                <h2><font face = "Jawi Uthman Taha Regular" size ="4" ><?php echo $rowsch['schNameJawi']; ?></font></h2> 
            </div>
        </div>
    </div>
    <div class="row" style="padding:0px;">
        <div style="margin:0px 130px;text-align:right; font-size: 3px">
            <h4><font face = "Jawi Uthman Taha Regular" size="3">  نام موريد:  <?php echo $row['studNameJawi']; ?> </font></h4>
            <p><font face = "Jawi Uthman Taha Regular" size="3"> <?php echo $std=$row['studStd']; ?> :درجه</font></p>
            <p><font face = "Jawi Uthman Taha Regular" size="3"> 2019 :تاهون</font></p>
        </div>
        <div class="column right" style="background-color:#ffffff; font-size: 10px; font-style:bold;">
            <table style="width:80%;"  align="center">
                <tr class="tableResult">
                    <th bgcolor="#3d6098" colspan="2" style="text-align:center;padding:1px;" ><font face = "Jawi Uthman Taha Regular" size="4">ڤڤريقساٴن اخير تاهون </font></th>
                    <th bgcolor="#3d6098" rowspan="2" style="text-align:center;padding:1px;"><font face = "Jawi Uthman Taha Regular" size="4">مرکه ڤنوه </font></th>
                    <th bgcolor="#3d6098" rowspan="2"  style="text-align:center;padding:1px;"><font face = "Jawi Uthman Taha Regular" size="4">ڤرکارا </font></th>
                    <th bgcolor="#3d6098" rowspan="2" style="text-align:center;padding:1px;"><font face = "Jawi Uthman Taha Regular" size="4">بيلڠن </font></th>
                </tr>
                <tr class="tableResult">
                    <th bgcolor="#3d6098" style="text-align:center;" size="4">%</th>
                    <th bgcolor="#3d6098" style="text-align:center;"><font face = "Jawi Uthman Taha Regular" size="4">مرکه داڤت </font></th>
                </tr>

                <?php

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
                            echo '<tr class="tableResult">';
                            if($std<'4'&&$count>'6'){
                                echo"<td style='text-align:center;'>",
                                sprintf("%.0f",(($row[$count+1])/($rowsub['subjFullMark']/2))*'100')."</td>";
                                echo"<td style='text-align:center;'>".$row[$count+1]."</td>";
                                echo"<td style='text-align:center;'>".($rowsub['subjFullMark']/2)."</td>";
                                echo"<td><font face = 'Jawi Uthman Taha Regular' size='5'>".$rowsub['subjNameJawi']."</font></td>";
                                echo"<td style='text-align:center;'>".($count-1)."</td>";
                                echo "</tr>";
                            }
                            else{
                                echo"<td style='text-align:center;'>",
                                sprintf("%.0f",(($row[$count+1])/($rowsub['subjFullMark']))*'100')."</td>";
                                echo"<td style='text-align:center;'>".$row[$count+1]."</td>";
                                echo"<td style='text-align:center;'>".($rowsub['subjFullMark'])."</td>";
                                echo"<td><font face = 'Jawi Uthman Taha Regular' size='5'>".$rowsub['subjNameJawi']."</font></td>";
                                echo"<td style='text-align:center;'>".($count-1)."</td>";
                                echo "</tr>";
                            }
                        }
                    }
                ?>
            </table><br>
        </div>                            
    </div>
    <div class="row"  >
        <div class="column right" style="background-color: #ffffff; font-size: 3px">
                <div class="col-lg-6">
                <?php
                    $sqls = "SELECT * FROM tb_subject";
                    $sqlm = "SELECT * FROM tb_resultstud WHERE markStud='$studdic'";
                    mysqli_set_charset($con,"utf8");
                    $results = mysqli_query($con,$sqls);
                    $resultm = mysqli_query($con,$sqlm);
                    $rowm = mysqli_fetch_array($resultm);
                ?>
                <table width="80%" align="center" style="border:2px solid black;">
                    <tr class="tableResult">
                    <?php echo '<td style="text-align:center;">'.$rowm['markJumlah'].'</td>' ?>
                    <th bgcolor="#bfbfbf" style="width:50px"><font face = 'Jawi Uthman Taha Regular' size='4'>جومله</font></th>
                    </tr>
                    <tr class="tableResult">
                    <?php echo '<td style="text-align:center;">', sprintf("%.0f", $rowm['markPercent']).'</td>' ?>
                    <th bgcolor="#bfbfbf"><font face = 'Jawi Uthman Taha Regular' size='4'>ڤراتوس</font></th>
                    </tr>
                    <tr class="tableResult">
                    <?php echo '<td style="text-align:center;">'.$rowm['markRankClass'].'</td>' ?>
                    <th bgcolor="#bfbfbf"><font face = 'Jawi Uthman Taha Regular' size='4'>کدودوقن دالم کلس</font></th>
                    </tr>
                    <tr class="tableResult">
                    <?php 

                        if($rowm['markKeputusan']=='Lulus')
                        {
                            echo '<td bgcolor="#33cc33" style="text-align:center;">'.$rowm['markKeputusan'].'</td>';
                        }
                        else
                        {
                            echo '<td bgcolor="#ff0000" style="text-align:center;">'.$rowm['markKeputusan'].'</td>';
                        }
                    
                    ?>
                    <th bgcolor="#bfbfbf"><font face = 'Jawi Uthman Taha Regular' size='4'>کڤوتوسن</font></th>
                    </tr>
                    <tr class="tableResult">
                    <td style="text-align:center;"><?php echo $rowm['markKedatangan']; ?></td>
                    <th bgcolor="#bfbfbf"><font face = 'Jawi Uthman Taha Regular' size='4'>کداتڠن </font></th>
                    </tr>
                    <tr class="tableResult">
                    <td style="text-align:center;"><font face = 'Jawi Uthman Taha Regular' size='3'>باٴيق</font></td>
                    <th bgcolor="#bfbfbf"><font face = 'Jawi Uthman Taha Regular' size='4'>کلاکوان</font></th>
                    </tr>
                </table>
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