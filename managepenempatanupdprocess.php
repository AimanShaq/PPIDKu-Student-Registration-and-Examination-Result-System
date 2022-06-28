<?php
    date_default_timezone_set('Asia/Singapore');
    $tahun=date('Y');
    $tarikh=date('Y-m-d');
    
    include 'dbconnect.php';

    //retrieve data from form
    $fplcid = $_POST['fplcid'];
    $fplcroom = $_POST['fplcroom'];
	$fplcstd = $_POST['fplcstd'];
    $fplcclass = $_POST['fplcclass'];
    $fplcap = $_POST['fplcap'];
    $fplctime = $_POST['fplctime'];
    $fplcteacher = $_POST['fplcteacher'];

    
    //insert new infromation into teacher table
    $sql = "UPDATE tb_placement
            SET plcRoom='$fplcroom', plcStd='$fplcstd', plcClass='$fplcclass', plcAP='$fplcap', plcTime='$fplctime', plcTeacher='$fplcteacher', plcYear='$tarikh'
            WHERE plcID='$fplcid'";

    //execute sql
    $result = mysqli_query($con,$sql);

    //close connection
    mysqli_close($con);
    //var_dump($sql);
    header('Location: managepenempatan.php')

?>