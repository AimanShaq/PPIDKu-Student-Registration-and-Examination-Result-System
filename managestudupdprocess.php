<?php
    include 'dbconnect.php';

    //retrieve data from form
    $fsid = $_POST['fsid'];
    $fsic = $_POST['fsic'];
    $fssb = $_POST['fssb'];
    $fsname = $_POST['fsname'];
    $fsnamejawi = $_POST['fsnamejawi'];
    $fsgender = $_POST['fsgender'];
    $fsstd = $_POST['fsstd'];
    $fsstatus = $_POST['fsstatus'];   
    //insert new infromation into teacher table
    $sql = "UPDATE tb_student
            SET studIC='$fsic', studSB='$fssb', studName='$fsname', studNameJawi='$fsnamejawi', studGender='$fsgender', studStd='$fsstd', studStatus='$fsstatus'
            WHERE studID=$fsid";

    //execute sql
    $result = mysqli_query($con,$sql);

    //close connection
    mysqli_close($con);
    //var_dump($sql);
   header('Location: managestud.php')

?>