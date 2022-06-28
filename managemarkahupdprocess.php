<?php
    date_default_timezone_set('Asia/Singapore');
    $tahun=date('Y');
    $tarikh=date('Y-m-d');
    
    include 'dbconnect.php';

    //retrieve data from form
    $fmid = $_POST['fmid'];
    $fmstd = $_POST['fmstd'];
    $fmrankclass=$_POST['fmrankclass'];


    $sqlcol = "SHOW COLUMNS FROM tb_standard";
    $resultcol= mysqli_query($con,$sqlcol);
    $totalreal=mysqli_num_rows($resultcol);

    $sqlcolmark = "SHOW COLUMNS FROM tb_resultstud";
    $resultcolmark= mysqli_query($con,$sqlcolmark);

    $sqltotal = "SELECT * FROM tb_subject";
    $resulttotal = mysqli_query($con,$sqltotal);
    $totalsub=mysqli_num_rows($resulttotal); 

    $sqlselect = "SELECT * FROM tb_standard WHERE stdID='$fmstd'";
    $resultselect= mysqli_query($con,$sqlselect);
    $rowselect=mysqli_fetch_array($resultselect);

    $count=0;

    while($rowcol=mysqli_fetch_array($resultcol))
    {
        $colname[]=$rowcol['Field'];
    }
    while($rowcolmark=mysqli_fetch_array($resultcolmark))
    {
        $colnamemark[]=$rowcolmark['Field'];
    }

    $mjumlah=0;
    $mtotal=0;
    while($count<$totalreal-1){

        $sqlsub = "SELECT * FROM tb_subject WHERE subjID='$count'";
        $resultsub = mysqli_query($con,$sqlsub);
        $rowsub=mysqli_fetch_array($resultsub);
        $count++;
        if($rowselect[$count]=='1'){
            $fsub[$count]=$_POST[$colname[$count]];
            if($fmstd<4&&$count>6){
                $mjumlah=$mjumlah+$fsub[$count];
                $mtotal=$mtotal+($rowsub['subjFullMark']/2);
                
            }
            else{
                $mjumlah=$mjumlah+$fsub[$count];
                $mtotal=$mtotal+$rowsub['subjFullMark'];

            }
            $sql[$count]= "UPDATE tb_resultstud SET ".$colnamemark[$count+1]."='$fsub[$count]' WHERE markID='$fmid'";
            $result[$count] = mysqli_query($con,$sql[$count]);
        }
    }
    $markPercent=($mjumlah/$mtotal)*100;
    
if($fmstd<'4'){
    if($markPercent<'40'){
        $markKeputusan='Gagal';
        if($markPercent<'20')
            $markGred='E';
        else
            $markGred='D';
    }
    else{
        $markKeputusan='Lulus';
        if($markPercent<'60')
            $markGred='C';
        else if($markPercent<'80')
            $markGred='B';
        else if($markPercent<'90')
            $markGred='A2';
        else
            $markGred='A1';
    }
}
else if($fmstd=='4')
{
    if($markPercent<'40'){
        $markKeputusan='Gagal';
        if($markPercent<'20')
            $markGred='E';
        else
            $markGred='D';
    }
    else{
        $markKeputusan='Lulus';
        if($markPercent<'60')
            $markGred='C';
        else if($markPercent<'80')
            $markGred='B';
        else if($markPercent<'90')
            $markGred='A2';
        else
            $markGred='A1';
        }
}
else if($fmstd=='6')
{
    if($markPercent<'40'){
        $markKeputusan='Gagal';
        $markGred='E';
    }
    else{
        $markKeputusan='Lulus';
        if($markPercent<'55')
            $markGred='D';
        else if($markPercent<'70')
            $markGred='C';
        else if($markPercent<'85')
            $markGred='B';
        else
            $markGred='A';
        }
}

else{
    if($markPercent<'40'){
        $markKeputusan='Gagal';
        if($markPercent<'20')
            $markGred='E';
        else
            $markGred='D';
    }
    else{
        $markKeputusan='Lulus';
        if($markPercent<'60')
            $markGred='C';
        else if($markPercent<'80')
            $markGred='B';
        else if($markPercent<'90')
            $markGred='A2';
        else
            $markGred='A1';
    }
}

$sqlupdate="UPDATE tb_resultstud SET markJumlah='$mjumlah', markPercent='$markPercent',markGred='$markGred',markRankClass='$fmrankclass',markYear='$tarikh' WHERE markID='$fmid'";
$resultupdate = mysqli_query($con,$sqlupdate);

    //close connection
    mysqli_close($con);
    //var_dump($sql);
    echo "<script type='text/javascript'>alert('Kemaskini telah berjaya')</script>";
    echo "Redirecting..";
    header('refresh:0.5; url="managemarkah.php"');

?>