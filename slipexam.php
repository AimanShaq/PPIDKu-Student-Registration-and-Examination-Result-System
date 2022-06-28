<?php
 include "ibubapasession.php";
 if(!session_id())
    {
        session_start();
    } 
include "dbconnect.php";
//    mysqli_set_charset($con,"utf8");

 $studdic=$_SESSION['stud_ic'];

    $id=$_GET['id'];
    $sql="SELECT * FROM tb_student WHERE studIC='$studdic'";
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
  background-color: #e7e7e7;
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
  padding: 5px;
}
th {
  text-align: right;
}
td{
    text-align: right;
}

/* @media print
    {
        #non-printable { display: none; }
        #printable {  page-break-inside: avoid;}
        
        table {page-break-inside: avoid;}

    } */


@page :left {
  margin-left: 0cm;
}

@page :right {
  margin-right: 0cm;
}

</style>
<title>Slip Exam</title>
</head>
<body>

                
<div class="row">
    <div class="col-xl-5 col-md-6 mb-4" style="margin:auto auto ;">
        <div style="text-align:center; font-size: 15px">
            <h2>سکوله اݢام کراجاٴن جوهر</h2>
            <h2>لاڤورن کڤوتوسن ڤڤريقساٴن اخير تاهون</h2>
            <h2><?php echo $rowsch['schNameJawi']; ?></h2> 
        </div>
    </div>
 </div>
<div class="row" style="padding:5px;" id="blockqoute">
    <div style="margin:0px 130px;text-align:right; font-size: 10px">
        <h4><font size="4">  نام موريد:  <?php echo $row['studNameJawi']; ?> </font></h4>
        <p><font size="4"> <?php echo $row['studStd']; ?> :درجه</font></p>
        <p><font size="4"> 2019 :تاهون</font></p>
    </div>
    <div class="column right" style="background-color:#e7e7e7; font-size: 15px; font-style:bold;">
        <table style="width:80%;" align="center" >
            <tr>
                <th colspan="2" style="text-align:center;" >ڤڤريقساٴن اخير تاهون</th>
                <th rowspan="2" style="text-align:center;">مرکه ڤنوه</th>
                <th rowspan="2"  style="text-align:center;">ڤرکارا </th>
                <th rowspan="2" style="text-align:center;">کود سوبجيک</th>
            </tr>
            <tr>
                <th style="text-align:center;">%</th>
                <th style="text-align:center;">مرکه داڤت</th>
            </tr>

            <?php
                $sqls = "SELECT * FROM tb_subject";
                $sqlm = "SELECT * FROM tb_resultstud WHERE markStud='$studdic'";
                mysqli_set_charset($con,"utf8");
                $results = mysqli_query($con,$sqls);
                $resultm = mysqli_query($con,$sqlm);
                $rowm = mysqli_fetch_array($resultm);
                if($row['studStd']<'4')
                {
                    $count=0;
                    while($count<11)
                    {
                        $rows = mysqli_fetch_array($results);   
                        echo "<tr>";
                                                        //echo"<td style='text-align:center;'></td>";
                        if($count==0){
                            echo"<td style='text-align:center;'>".(($rowm['markAfaal'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markAfaal']."</td>";
                        }
                        if($count==1){
                            echo"<td style='text-align:center;'>".(($rowm['markAqwal'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markAqwal']."</td>";
                        }
                        if($count==2){
                            echo"<td style='text-align:center;'>".(($rowm['markBacaan'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markBacaan']."</td>";
                        }
                        if($count==3){
                            echo"<td style='text-align:center;'>".(($rowm['markHafazan'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markHafazan']."</td>";
                        }
                        if($count==4){
                            echo"<td style='text-align:center;'>".(($rowm['markAlquran'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markAlquran']."</td>";
                        }
                        if($count==5){
                            echo"<td style='text-align:center;'>".(($rowm['markTauhid'])/($rows['subjFullMark']/'2'))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markTauhid']."</td>";
                        }
                        if($count==6){
                            echo"<td style='text-align:center;'>".(($rowm['markIbadat'])/($rows['subjFullMark']/'2'))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markIbadat']."</td>";
                        }
                        if($count==7){
                            echo"<td style='text-align:center;'>".(($rowm['markAkhlak'])/($rows['subjFullMark']/'2'))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markAkhlak']."</td>";
                        }
                        if($count==8){
                            echo"<td style='text-align:center;'>".(($rowm['markSirah'])/($rows['subjFullMark']/'2'))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markSirah']."</td>";
                        }
                        if($count==9){
                            echo"<td style='text-align:center;'>".(($rowm['markArab'])/($rows['subjFullMark']/'2'))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markArab']."</td>";
                        }
                        if($count==10){
                            echo"<td style='text-align:center;'>".(($rowm['markJawi'])/($rows['subjFullMark']/'2'))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markJawi']."</td>";
                        }
                        
                        if($rows['subjID']=='6'||$rows['subjID']=='7'||$rows['subjID']=='8'||$rows['subjID']=='9'||$rows['subjID']=='10'||$rows['subjID']=='11')
                            echo"<td style='text-align:center;'>".($rows['subjFullMark'])/'2'."</td>";
                        else
                            echo"<td style='text-align:center;'>".$rows['subjFullMark']."</td>";


                        echo"<td>".$rows['subjNameJawi']."</td>";
                        echo"<td style='text-align:center;'>".$rows['subjID']."</td>";
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
                        echo "<tr>";
                                                        //echo"<td style='text-align:center;'></td>";
                        if($count==0){
                            echo"<td style='text-align:center;'>".(($rowm['markAfaal'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markAfaal']."</td>";
                        }
                        if($count==1){
                            echo"<td style='text-align:center;'>".(($rowm['markAqwal'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markAqwal']."</td>";
                        }
                        if($count==2){
                            echo"<td style='text-align:center;'>".(($rowm['markBacaan'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markBacaan']."</td>";
                        }
                        if($count==3){
                            echo"<td style='text-align:center;'>".(($rowm['markHafazan'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markHafazan']."</td>";
                        }
                        if($count==4){
                            echo"<td style='text-align:center;'>".(($rowm['markAlquran'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markAlquran']."</td>";
                        }
                        if($count==5){
                            echo"<td style='text-align:center;'>".(($rowm['markTauhid'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markTauhid']."</td>";
                        }
                        if($count==6){
                            echo"<td style='text-align:center;'>".(($rowm['markIbadat'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markIbadat']."</td>";
                        }
                        if($count==7){
                            echo"<td style='text-align:center;'>".(($rowm['markAkhlak'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markAkhlak']."</td>";
                        }
                        if($count==8){
                            echo"<td style='text-align:center;'>".(($rowm['markSirah'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markSirah']."</td>";
                        }
                        if($count==9){
                            echo"<td style='text-align:center;'>".(($rowm['markArab'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markArab']."</td>";
                        }
                        if($count==10){
                            echo"<td style='text-align:center;'>".(($rowm['markTajwid'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markTajwid']."</td>";
                        }
                        if($count==11){
                            echo"<td style='text-align:center;'>".(($rowm['markTafsir'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markTafsir']."</td>";
                        }
                        if($count==12){
                            echo"<td style='text-align:center;'>".(($rowm['markMuamalat'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markMuamalat']."</td>";
                        }
                        if($count==13){
                            echo"<td style='text-align:center;'>".(($rowm['markMunakahat'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markMunakahat']."</td>";
                        }
                        if($count==14){
                            echo"<td style='text-align:center;'>".(($rowm['markJenayat'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markJenayat']."</td>";
                        }
                        if($count==15){
                            echo"<td style='text-align:center;'>".(($rowm['markFaraid'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markFaraid']."</td>";
                        }
                        if($rows['subjID']=='10'||$rows['subjID']=='13'){
                            mysqli_fetch_array($results);
                            echo"<td style='text-align:center;'>".$rows['subjFullMark']."</td>";
                            echo"<td>".$rows['subjNameJawi']."</td>";
                            echo"<td style='text-align:center;'>".$rows['subjID']."</td>";
                            echo "</tr>";
                        }
                        else
                        {
                            echo"<td style='text-align:center;'>".$rows['subjFullMark']."</td>";
                            echo"<td>".$rows['subjNameJawi']."</td>";
                            echo"<td style='text-align:center;'>".$rows['subjID']."</td>";
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
                        
                        echo "<tr>";
                                                        //echo"<td style='text-align:center;'></td>";
                        if($count==0){
                            echo"<td style='text-align:center;'>".(($rowm['markBacaan'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markBacaan']."</td>";
                        }
                        if($count==1){
                            echo"<td style='text-align:center;'>".(($rowm['markHafazan'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markHafazan']."</td>";
                        }
                        if($count==2){
                            echo"<td style='text-align:center;'>".(($rowm['markAlquran'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markAlquran']."</td>";
                        }
                        if($count==3){
                            echo"<td style='text-align:center;'>".(($rowm['markTauhid'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markTauhid']."</td>";
                        }
                        if($count==4){
                            echo"<td style='text-align:center;'>".(($rowm['markIbadat'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markIbadat']."</td>";
                        }
                        if($count==5){
                            echo"<td style='text-align:center;'>".(($rowm['markAkhlak'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markAkhlak']."</td>";
                        }
                        if($count==6){
                            echo"<td style='text-align:center;'>".(($rowm['markSirah'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markSirah']."</td>";
                        }
                        if($count==7){
                            echo"<td style='text-align:center;'>".(($rowm['markArab'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markArab']."</td>";
                        }
                        if($count==8){
                            echo"<td style='text-align:center;'>".(($rowm['markTajwid'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markTajwid']."</td>";
                        }
                        if($count==9){
                            echo"<td style='text-align:center;'>".(($rowm['markTafsir'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markTafsir']."</td>";
                        }
                        if($count==10){
                            echo"<td style='text-align:center;'>".(($rowm['markIbadat2'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markIbadat2']."</td>";
                                                    }
                        if($count==11){
                            echo"<td style='text-align:center;'>".(($rowm['markMuamalat'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markMuamalat']."</td>";
                        }
                        if($count==12){
                            echo"<td style='text-align:center;'>".(($rowm['markMunakahat'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markMunakahat']."</td>";
                        }
                        if($count==13){
                            echo"<td style='text-align:center;'>".(($rowm['markJenayat'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markJenayat']."</td>";
                        }
                        if($count==14){
                            echo"<td style='text-align:center;'>".(($rowm['markFaraid'])/($rows['subjFullMark']))*'100'."</td>";
                            echo"<td style='text-align:center;'>".$rowm['markFaraid']."</td>";
                        }
                        //mysqli_fetch_array($results);
                        if($rows['subjID']=='1'||$rows['subjID']=='10'||$rows['subjID']=='14'||$rows['subjID']=='15'||$rows['subjID']=='16'||$rows['subjID']=='17'){
                            mysqli_fetch_array($results);
                            echo"<td style='text-align:center;'>".$rows['subjFullMark']."</td>";
                            echo"<td>".$rows['subjNameJawi']."</td>";
                            echo"<td style='text-align:center;'>".$rows['subjID']."</td>";
                            echo "</tr>";
                        }
                        else
                        {
                            echo"<td style='text-align:center;'>".$rows['subjFullMark']."</td>";
                            echo"<td>".$rows['subjNameJawi']."</td>";
                            echo"<td style='text-align:center;'>".$rows['subjID']."</td>";
                            echo "</tr>";
                        }   
                           
                        $count=$count+1;
                    } 
                }
            ?>
        </table><br><br>
    </div>                            
</div>
<div class="row" style="padding: 5px;">
    <div class="column right" style="background-color: #e7e7e7; font-size: 15px" id="blockqoute">
        <table width="80%" align="center" style="border:3px solid black;">
            <tr>
                <th style="text-align:center;" colspan="4">لاڤورن ݢورو</th>
            </tr>
            <tr>
                <th colspan="2"></th>
                <th colspan="2"> :اولسن ݢورو درجه</th>
            </tr>
            <tr>
                <th></th>
                <th > :تاريخ</th>
                <th></th>
                <th> :تنداتاڠن ݢورو درجه</th>
            </tr>
            <tr>
                <th colspan="2"></th>
                <th colspan="2"> :اولسن ݢورو بسر</th>
            </tr>
            <tr>
                <th></th>
                <th> :تاريخ</th>
                <th></th>
                <th> :تنداتاڠن ݢورو بسر</th>
            </tr>
            <tr>
                <th></th>
                <th> :تاريخ</th>
                <th></th>
                <th> :تنداتاڠن ايبو باڤ/ڤنجاݢ</th>
            </tr>
        </table>
    </div>
</div>
    
</body>
<footer>
<!-- <center><input type="button" onclick="printBody()" value="Print slip"></input></center>
<script type="text/javascript">
        function printBody() {
             var printContents = document.getElementById().innerHTML;
             var originalContents = document.body.innerHTML;

             document.body.innerHTML = printContents;

             window.print();

             document.body.innerHTML = originalContents;
        }
    </script> -->
    <!-- <center><input id="non-printable" type="button" onclick="printBody('printable')" value="Print Slip" /></center><br>
    <script type="text/javascript">
        function printBody(divName) {
             var printContents = document.getElementById(divName).innerHTML;
             var originalContents = document.body.innerHTML;

             document.body.innerHTML = printContents;

             window.print();

             document.body.innerHTML = originalContents;
        }
    </script> -->
    <center><button onclick="myFunction()">Cetak Slip</button></center>

<script>
function myFunction() {
  window.print();
}
</script>
</footer>
</html>