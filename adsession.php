<?php
	ob_start();
    if(!session_id())
    {
        session_start();
    }
    if (isset($_SESSION['ad_id']) != 'admin')
    {
        header ('Location:adminlogin.php'); 
    }
    ob_end_flush();
    
?>