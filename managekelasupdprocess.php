<?php
    include 'dbconnect.php';

    //retrieve data from form
    $fclid = $_POST['fclid'];
    $fclname = $_POST['fclname'];
    $fclcode = $_POST['fclcode'];
    $fclno = $_POST['fclno'];
    $fcltchr = $_POST['fcltchr'];
    $fclcolour = $_POST['fclcolour'];
    $fcltime = $_POST['fcltime'];
    
    //insert new infromation into teacher table
    $sql = "UPDATE tb_class
            SET className='$fclname', classCode='$fclcode', classNo='$fclno', classTeacher='$fcltchr', classColor='$fclcolour', classTime='$fcltime'
            WHERE classID=$fclid";

    //execute sql
    $result = mysqli_query($con,$sql);

    //close connection
    mysqli_close($con);
    //var_dump($sql);
   header('Location: managekelas.php')

?>