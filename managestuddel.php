<?php
    include 'dbconnect.php';

    //check id in URL
    if(isset($_GET['id']))
    {
        $fid = $_GET['id'];
    }

    //SQL delete operation
    $sql = "DELETE FROM tb_student WHERE studID='$fid'";
    $sql2 = "DELETE FROM tb_placement WHERE plcID='$fid'";
    $sql3 = "DELETE FROM tb_resultstud WHERE markID='$fid'";

    //execute
    $result = mysqli_query($con,$sql);
    $result2 = mysqli_query($con,$sql2);
    $result3 = mysqli_query($con,$sql3);

    //close connection
    mysqli_close($con);

    //redirect
    if(($result)||($result2)||($result3))
    {
        header('Location: managestud.php');
    }  
    else
    {
        die("Student record is not deleted. Query Error: ".mysqlie_error());
    }

?>