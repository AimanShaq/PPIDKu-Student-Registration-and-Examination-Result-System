<?php
    include 'dbconnect.php';

    //retrieve data from form
    $ftchid = $_POST['ftchid'];
    $ftchname = $_POST['ftchname'];
	$ftchnamejawi = $_POST['ftchnamejawi'];
    $ftchcode = $_POST['ftchcode'];
    
    //insert new infromation into teacher table
    $sql = "UPDATE tb_teacher
            SET tchName='$ftchname', tchNameJawi='$fcnamejawi', tchCode='$ftchcode'
            WHERE tchID='$ftchid'";

    //execute sql
    $result = mysqli_query($con,$sql);

    //close connection
    mysqli_close($con);
    header('Location: manageteacher.php')

?>