<?php
    include 'dbconnect.php';

    //check id in URL
    if(isset($_GET['id']))
    {
        $fid = $_GET['id'];
    }

    //SQL delete operation
    $sql2 = "DELETE FROM tb_class WHERE classTeacher='$fid'";
    $sql = "DELETE FROM tb_teacher WHERE tchName='$fid'";


    
    //execute
    $result2=mysqli_query($con,$sql2);
    $result = mysqli_query($con,$sql);
    
    //close connection
    mysqli_close($con);

    //redirect
    var_dump($sql2);

    var_dump($sql);
    header('Location: manageteacher.php');


?>