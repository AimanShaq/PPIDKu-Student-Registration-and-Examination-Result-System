<?php
 include "ibubapasession.php";
 if(!session_id())
    {
        session_start();
    } 
 include "dbconnect.php";
 $studdic=$_SESSION['stud_ic'];

    $sql="SELECT * FROM tb_placement
    LEFT JOIN tb_student ON tb_placement.plcStud=tb_student.studIC
      WHERE plcStud='$studdic'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    $id=$_GET['id'];
    $sqlsch="SELECT * FROM tb_school WHERE schID='$id'";
    mysqli_set_charset($con,"utf8");
    $resultsch = mysqli_query($con,$sqlsch);
    $rowsch=mysqli_fetch_array($resultsch);

    $classname=$row['plcClass'];
    $classTch=$row['plcTeacher'];

    $sqlcolor= "SELECT classColor FROM tb_class WHERE className='$classname' AND classTeacher='$classTch'";
    //echo $sqlcolor;
    $resultcolor=mysqli_query($con,$sqlcolor);
    $rowcolor=mysqli_fetch_array($resultcolor);
?>

<!DOCTYPE html>
<html>
<title>Slip Penempatan Murid</title>


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-color: #ffffff;
}
* {
  box-sizing: border-box;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
th {
  text-align: left;
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
    }
}
@media print{
    .Penempatan td{
    -webkit-print-color-adjust: exact;
    }
}

@media print{
    .Penempatan th{
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
<body class="page" id="printable">


<div class="row" id="printable">
<div style="text-align:center;">
<h2><font face = "Jawi Uthman Taha Regular" size ="5" >سکوله &nbsp اݢام&nbsp  کراجاٴن &nbsp نݢري &nbsp جوهر </font><h2>
<h2><font face = "Jawi Uthman Taha Regular" size ="4" >دإيره&nbsp کولاي</font><h2>
<h2><font face = "Jawi Uthman Taha Regular" size ="5" ><?php echo $rowsch['schNameJawi']; ?></font></h2> 
<h4>Nama Murid: <?php  echo $row['studName']; ?></h4>
<h4>Tahun      : 2019</h4>

</div>
    <div class="column left" style="background-color:#ffffff;">
        <table style="width:50%" align="center">
            <tr class="Penempatan">
                <th bgcolor="#f0f0f0" ><div style="text-align:center;">Penempatan 2020</div></th>
            </tr>
            <tr class="Penempatan">
                <td bgcolor="<?php echo $rowcolor[0] ?>">No Siri:  <?php  echo $row['plcID']; ?></td>
            </tr>
            <tr class="Penempatan">
                <td bgcolor="<?php echo $rowcolor[0] ?>">Bilik  : <?php  echo $row['plcRoom']; ?></td>
            </tr>
            <tr class="Penempatan">
                <td bgcolor="<?php echo $rowcolor[0] ?>">Darjah : <?php  echo $row['plcStd']; ?></td>
            </tr>
            <tr class="Penempatan">
                <td bgcolor="<?php echo $rowcolor[0] ?>">Kelas  :  <?php  echo $row['plcClass']; ?></td>
            </tr>
            <tr class="Penempatan">
                <td bgcolor="<?php echo $rowcolor[0] ?>">Masa   : <?php  echo $row['plcTime']; ?></td>
            </tr>
            <tr class="Penempatan">
                <td bgcolor="<?php echo $rowcolor[0] ?>">Guru   : <?php  echo $row['plcTeacher']; ?></td>
            </tr>
        </table>

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