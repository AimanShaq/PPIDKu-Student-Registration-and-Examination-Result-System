<?php
	ob_start();
	session_start(); //Start session

    //get db connection
	include('dbconnect.php');

    //retrieve login credentials
	$fcadid = $_POST['fcadid'];
    $fcadpwd = $_POST['fcadpwd'];

    
    //get user data based on login info
	$sql = "SELECT * FROM tb_admin WHERE adID = '$fcadid' AND adPwd = '$fcadpwd'";

    //execute sql
	$result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
  
    //check data exist
	$count = mysqli_num_rows($result);

	//check login
	if($count == 1)
	{
		//set session
		$_SESSION['adID'] = session_id();
		$_SESSION['ad_id'] = $fcadid;        //to stored user id
		if($_SESSION['ad_id']=='admin')
		{
			header('Location: adminmanage.php');
		}
		else
		{
			header('Location: sekolahmanage.php');
			//vardump($sql);
		}
	}
	else
	{
		header('Location: adminlogin.php?false=1');
	}

	mysqli_close($con);
	ob_end_flush();
	

?>