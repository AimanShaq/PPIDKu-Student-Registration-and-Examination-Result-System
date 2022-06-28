<?php
	ob_start();
	session_start(); //Start session

	//get db connection
	include('dbconnect.php');

	//retrieve login credentials
	echo 'input1:'.$fcmykid = $_POST['fcmykid'];
	echo '<br>input2:'.$fcmykid2=$_POST['fcmykid2'];
	echo '<br>input3:'.$fcmykid3=$_POST['fcmykid3'];
	echo '<br>input4:'.$fcsb2=$_POST['fcsb2'];
	echo '<br>';
	$fcsch= $_POST['fcsch'];
	$fcyear=$_POST['fcyear'];

?>

<?php


	//get user data based on login info
	$sql = "SELECT * FROM tb_student WHERE studIC = '$fcmykid' OR studIC='$fcmykid2' OR studIC='fcmykid3' OR (studSch='$fcsch' AND studYear='$fcyear')";
	$sqlsb = "SELECT * FROM tb_student WHERE studSB = '$fcmykid' OR studSB='$fcsb2' OR (studSch='$fcsch' AND studYear='$fcyear')";

	//execute sql
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);

	$resultsb = mysqli_query($con,$sqlsb);
	$rowsb = mysqli_fetch_array($resultsb);
	//check data exist
	$count = mysqli_num_rows($result);
	$countsb = mysqli_num_rows($resultsb);



//	$sql1 = "SELECT studID FROM tb_student WHERE studIC='$fcmykid'";
//	$result1 = mysqli_query($con,$sql1);
//	$row1 = mysqli_fetch_array($result1);
//	$count1 = mysqli_num_rows($result1);

	//check login
	if($row['studIC']==$fcmykid || $row['studSB']==$fcmykid)
	{
		//set session
		//echo $_SESSION['studIC'] = session_id();
		echo 'input1='. $_SESSION['stud_ic'] = $fcmykid; //to store user id
		//header('Location: pilihsemakan.php');	
		
	}
	else if($row['studIC']==$fcmykid2)
	{
		$_SESSION['studIC'] = session_id();
		echo 'input2='. $_SESSION['stud_ic'] = $fcmykid2;
		//header('Location: pilihsemakan.php');
	}
	else if($row['studIC']==$fcmykid3)
	{
		$_SESSION['studIC'] = session_id();
		echo 'input3='. $_SESSION['stud_ic'] = $fcmykid3;
		//header('Location: pilihsemakan.php');
	}
	else if($row['studSB'] == $fcsb2)
	{
		//set session
		$_SESSION['studIC'] = session_id();
		echo 'input4='.$_SESSION['stud_ic'] = $rowsb['studIC'];   //to store user id
		
		//var_dump($sql);
		//header('Location: pilihsemakan.php');
	}
	else
	{
		//echo "<script type='text/javascript'>alert('Tiada Data yang Dijumpai')</script>";
		//echo "Redirecting..";
		//var_dump($sql);
		header('Location: semakanibubapa.php?false=1');
	}



	mysqli_close($con);

	ob_end_flush();

?>