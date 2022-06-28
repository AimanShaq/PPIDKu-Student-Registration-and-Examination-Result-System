<?php
    include 'dbconnect.php';

    //check id in URL
    if(isset($_GET['id']))
    {
        $fid = $_GET['id'];
    }

    //SQL delete operation
    $sql = "DELETE FROM tb_class WHERE classID='$fid'";

    //execute
    $result = mysqli_query($con,$sql);

    //close connection
    mysqli_close($con);

    //redirect
    header('Location: managekelas.php');


?>