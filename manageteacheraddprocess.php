<?php
	
	include("dbconnect.php");

	$fcnamerumi = $_POST['ftchname'];
	$fcnamejawi = $_POST['ftchnamejawi'];
	$fccode = $_POST['ftchcode'];
	$fschidassign = $_POST['fschidassign'];

	//SQL insert (create)
	$sql = "INSERT INTO tb_teacher(tchName, tchNameJawi, tchCode, tchSchool)
			VALUES ('$fcnamerumi', '$fcnamejawi', '$fccode', '$fschidassign')";

	//Execute SQL
	mysqli_query($con, $sql);

	//Close connection
	//var_dump($sql);
	header('Location: manageteacher.php');
	
?>