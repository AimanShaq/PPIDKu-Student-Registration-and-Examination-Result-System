<?php
    include 'dbconnect.php';

    //retrieve data from form
    $fblid = $_POST['fblid'];
    $fbulimage = $_POST['fbulimage'];
    $fbultitle = $_POST['fbultitle'];
    $fbuldate = $_POST['fbuldate'];
    
    //insert new infromation into buletin table
    $sql = "UPDATE tb_buletin
            SET bulImage='$fbulimage', bulTitle='$fbultitle ', bulDate='$fbuldate'
            WHERE bulID='$fblid'";

    //execute sql
    $result = mysqli_query($con,$sql);

    //close connection
    mysqli_close($con);
    //var_dump($sql);
   header('Location: managebuletin.php')

?>