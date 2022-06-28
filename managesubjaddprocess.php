<?php
    include 'dbconnect.php';

    //retrieve data from form
    $fsubjid = $_POST['fsubjid'];
    $fsubjname = $_POST['fsubjname'];
	$fsubjnamejawi = $_POST['fsubjnamejawi'];
    $fsubjfm = $_POST['fsubjfm'];
    
    $sqlcol = "SHOW COLUMNS FROM tb_standard";
    $colquery= mysqli_query($con,$sqlcol);

    $count=0;

    while($colselect=mysqli_fetch_array($colquery))
    {
        $col[]=$colselect['Field'];
        $count++;
    }

    $sqlrstd = "SHOW COLUMNS FROM tb_resultstud";
    $resultrstd= mysqli_query($con,$sqlrstd);

    $countrstd=0;

    while($rowrstd=mysqli_fetch_array($resultrstd))
    {
        $colrstd[]=$rowrstd['Field'];
        $countrstd++;
    }

    //insert new infromation into teacher table
    echo $sql = "INSERT INTO tb_subject(subjID,subjName,subjNameJawi,subjFullmark) VALUES ('$fsubjid','$fsubjname','$fsubjnamejawi','$fsubjfm')";
    //execute sql
    $result = mysqli_query($con,$sql);
    echo "<br>";
    echo $sqlstd = "ALTER TABLE tb_standard ADD ".$fsubjname." INT(1) NOT NULL DEFAULT(0) AFTER ".$col[$count-1];
    $resultstd = mysqli_query($con,$sqlstd);
    echo "<br>";
    echo $sqlresult = "ALTER TABLE tb_resultstud ADD ".$fsubjname." INT(3) NOT NULL DEFAULT(0) AFTER ".$colrstd[$count];
    $resultres = mysqli_query($con,$sqlresult);
    //close connection
    mysqli_close($con);
    header('Location: managesubj.php')

?>