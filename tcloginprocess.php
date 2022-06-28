<?php
	ob_start();
	session_start(); //Start session

	//get db connection
	include('dbconnect.php');

	//retrieve login credentials
	$fcschid = $_POST['fcschid'];
	$fcschpwd = $_POST['fcschpwd'];
	// $fcschool = $_POST['fcschool'];

	//get user data based on login info
	$sql = "SELECT * FROM tb_school WHERE schID = '$fcschid' AND schPwd='$fcschpwd' ";

	//execute sql
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);

	//check data exist
	$count = mysqli_num_rows($result);

	//check login
	if($count == 1)
	{
		//set session
		$_SESSION['schID'] = session_id();
		$_SESSION['sch_id'] = $fcschid;        //to user id
		
		header('Location: sekolahmanage.php');
		
	}
	else
	{
		header('Location: tclogin.php?false=1');
	}

	mysqli_close($con);
	ob_end_flush();

?>