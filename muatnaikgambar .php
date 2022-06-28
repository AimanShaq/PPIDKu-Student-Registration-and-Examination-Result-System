<?php

  include 'dbconnect.php';

    // $fgalimage = $_FILE['fgalimage'];
    $fgaldesc = $_POST['fgaldesc'];
    $fgaldate = $_POST['fgaldate'];

    
    $fgalimage_get = $_FILES['fgalimage']['name'];
    $temp = $_FILES['fgalimage']['tmp_name'];

    $fgalimage_to_saved = "assets/img/".$fgalimage_get; //Documents folder, should exist in       your host in there you're going to save the file just uploaded
    move_uploaded_file($temp, $fgalimage_to_saved);

    echo $fgalimage_to_saved;

    $insert_img = mysqli_query($con, "INSERT INTO tb_galery (galImage, galDesc, galDate) VALUES ('$fgalimage_to_saved', '$fgaldesc', '$fgaldate')");
    if ($insert_img) {
    # code...
    echo "<br>";
    echo "Img inserted successfully";
    echo "<br>";
    echo "<a href='managegalery.php'>Kembali</a>";
    }
    else{
    echo "<br>";
    echo "There is something wrong with this code. Eff!";
    echo "<br>";
    echo "<a href='managegalery.php'>Kembali</a>";
    }

    
    mysqli_close($con);
    //var_dump($sql);
    





?>