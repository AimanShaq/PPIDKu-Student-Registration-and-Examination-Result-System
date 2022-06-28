<?php
    include 'dbconnect.php';

    //retrieve data from form
    $fsubjid = $_POST['fsubjid'];
    $fsubjname = $_POST['fsubjname'];
	$fsubjnamejawi = $_POST['fsubjnamejawi'];
    $fsubjfm = $_POST['fsubjfm'];
    
    //insert new infromation into teacher table
    $sql = "UPDATE tb_subject
            SET subjName='$fsubjname', subjNameJawi='$fsubjnamejawi', subjFullmark='$fsubjfm'
            WHERE subjID='$fsubjid'";

    //execute sql
    $result = mysqli_query($con,$sql);

    //close connection
    mysqli_close($con);
    header('Location: managesubj.php')

?>