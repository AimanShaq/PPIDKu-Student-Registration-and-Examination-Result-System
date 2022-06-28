<?php
    include 'dbconnect.php';

    //retrieve data from form
    $fnewsid = $_POST['fnewsid'];
    $fnewstitle = $_POST['fnewstitle'];
    $fnewsdesc = $_POST['fnewsdesc'];
    $fnewsact = $_POST['fnewsact'];
    $fnewsdatebk = $_POST['fnewsdatebk'];
    $fnewsdatetp = $_POST['fnewsdatetp'];
    
    //insert new infromation into teacher table
    $sql = "UPDATE tb_news
            SET newsTitle='$fnewstitle', newsDesc='$fnewsdesc ', newsAction='$fnewsact ', newsDatebk='$fnewsdatebk', newsDatetp='$fnewsdatetp'
            WHERE newsID=$fnewsid";

    //execute sql
    $result = mysqli_query($con,$sql);

    //close connection
    mysqli_close($con);
    //var_dump($sql);
   header('Location: managebuletin.php')

?>