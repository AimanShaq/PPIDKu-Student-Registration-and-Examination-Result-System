<?php 
include ('dbconnect.php');



//retrieve the data from form and session

$fn =$_POST['fn'];
$fs=$_POST['fs']; 
$fjt=$_POST['fjt'];
$fte=$_POST['fte'];
$fwn=$_POST['fwn'];
$fta=$_POST['fta'];
$fl=$_POST['fl'];
$fsn=$_POST['fsn'];
$fds=$_POST['fds'];
$fal=$_POST['fal'];
$fp=$_POST['fp'];
$fnt=$_POST['fnt'];
$fb=$_POST['fb'];
$fpb=$_POST['fpb'];
$fkb=$_POST['fkb'];
$fpeb=$_POST['fpeb'];
$ftb=$_POST['ftb'];
$fni=$_POST['fni'];
$fpib=$_POST['fpib'];
$fki=$_POST['fki'];
$fpei=$_POST['fpei'];
$fti=$_POST['fti'];




$sql = "INSERT INTO tb_d1(n,s,jt,te,wn,ta,l,sn,ds,al,p,nt,b,pb,kb,peb,tb,ni,pib,ki,pei,ti)
        VALUES ('$fn','$fs','$fjt','$fte','$fwn','$fta','$fl','$fsn','$fds','$fal','$fp','$fnt','$fb','$fpb','$fkb','$fpeb','$ftb','$fni','$fpib','$fki','$fpei','$fti')";

//check sql output
//var_dump($sql);

// execute SQL
$result= mysqli_query($con,$sql);

// close
mysqli_close($con);

header('Location: borgdarjahsatu.php?id='.$fs);

?>