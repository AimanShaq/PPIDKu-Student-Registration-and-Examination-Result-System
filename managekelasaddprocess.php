<?php
	
	include("dbconnect.php");

	$fclname = $_POST['fclname'];
	$fclno = $_POST['fclno'];
    $fclcode = $_POST['fclcode'];
    $fcltchr = $_POST['fcltchr'];
    $fclcolour = $_POST['fclcolour'];
    $fcltime = $_POST['fcltime'];
    $fschidassign = $_POST['fschidassign'];

	//SQL insert (create)
	$sql = "INSERT INTO tb_class(className, classCode, classNo, classTeacher, classColor, classTime, classSchool)
			VALUES ('$fclname', '$fclcode','$fclno','$fcltchr','$fclcolour', '$fcltime', '$fschidassign')";

	//Execute SQL
	mysqli_query($con, $sql);

	//Close connection
	header('Location: managekelas.php');

?>