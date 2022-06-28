<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbppid";

if(isset($_FILES['filekeputusan'])){
    $inputfilename = $_FILES['filekeputusan']['tmp_name'];
}

$exceldata = array();
//mysqli_query("SET SESSION sql_mode = '';
//SET @@SESSION.sql_mode = '';
//SET @@sql_mode = '';");
$conn = mysqli_connect($servername, $username, $password, $dbname);
	//$conn->options(MYSQLI_INIT_COMMAND,"SET SQL_MODE=''")
$rowfetch1=mysqli_query($conn,"SET SESSION sql_mode='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION'");


?>