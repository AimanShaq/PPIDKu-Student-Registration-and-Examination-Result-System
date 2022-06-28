<?php
	
	include("dbconnect.php");

	$fsname = $_POST['fsname'];
	$fsic = $_POST['fsic'];
	$fssb = $_POST['fssb'];
	$fsnamejawi = $_POST['fsnamejawi'];
	$fsgender = $_POST['fsgender'];
	$fsstd = $_POST['fsstd'];
	$fsstatus = $_POST['fsstatus'];
    $fschidassign = $_POST['fschidassign'];

	//SQL insert (create)
	$sql = "INSERT INTO tb_student(studIC, studSB, studName, studNameJawi, studGender, studStd, studStatus, studSchool)
			VALUES ('$fsic', '$fssb','$fsname','$fsnamejawi','$fsgender', '$fsstd', '$fsstatus', '$fschidassign')";

	//Execute SQL
	mysqli_query($con, $sql);

	//Close connection
	header('Location: managestud.php');

?>