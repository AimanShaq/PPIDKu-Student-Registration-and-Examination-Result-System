<?php
    include 'dbconnect.php';

    $fstdid=$_POST['fstdid'];

    //retrieve data from form
    $sqlsub = "SELECT * FROM tb_subject";
    $resultsub = mysqli_query($con,$sqlsub);

    $totalsub=mysqli_num_rows($resultsub); 

    $sqlcol = "SHOW COLUMNS FROM tb_standard";
    $colquery= mysqli_query($con,$sqlcol);

    $count=0;

    while($colselect=mysqli_fetch_array($colquery))
    {
        $col[]=$colselect['Field'];
    }

    while($count<$totalsub)
    {
        $count++;
        echo "col table:".$col[$count+1];echo "&nbsp";
        
        echo "count:".$count;echo "&nbsp";
        echo "new:".$subj[$count]=$_POST[$count];
        echo "<br>";
        $sql[$count]= "UPDATE tb_standard SET ".$col[$count+1]."='$subj[$count]' WHERE stdID='$fstdid'";
        $result[$count] = mysqli_query($con,$sql[$count]);


    }
    $sum=0;
    $count1=0;
    $sqlselect = "SELECT * FROM tb_standard WHERE stdID = '$fstdid'";
    $resultselect = mysqli_query($con,$sqlselect);
    $rowselect=mysqli_fetch_array($resultselect);
    while($count1<$totalsub)
    {
        $count1++;
        echo "col after:".$rowselect[$count1+1];echo "&nbsp";$sum=$sum+$rowselect[$count1+1];echo $sum;
        echo "<br>";
    }

    $sqlcount = "UPDATE tb_standard SET stdtotal='$sum' WHERE stdID='$fstdid'";
    $resultcount = mysqli_query($con,$sqlcount);


    
    //insert new infromation into teacher table

    //execute sql
    //var_dump($sqlcount);
    //close connection
    mysqli_close($con);
    header('Location: managestd.php')

?>