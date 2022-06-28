<?php
    include 'dbconnect.php';

    //check id in URL
    if(isset($_GET['id']))
    {
        $fid = $_GET['id'];
    }

    //SQL delete operation
    $sql = "DELETE FROM tb_resultstud WHERE markStud='$fid'";
    
    //execute
    $result = mysqli_query($con,$sql);

    //close connection
    mysqli_close($con);

    //redirect
    header('Location: managemarkah.php');


?>