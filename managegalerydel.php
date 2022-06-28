<?php
    
    include('dbconnect.php');

    //get  ID
    if(isset($_GET['id']))
    {
        $fid = $_GET['id'];
    }
    
    //SQL delete operation
    $sql = "DELETE FROM tb_galery WHERE galID='$fid'";

    //execute
    $result = mysqli_query($con,$sql);

    //close connection
    mysqli_close($con);

    //redirect
    header('Location: managegalery.php');
?>

