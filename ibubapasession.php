<?php
	ob_start();
    if(!session_id())
    {
        session_start();
    }
    if (isset($_SESSION['studIC']) != session_id())
    {
        header ('Location:semakanibubapa.php'); 
    }
    ob_end_flush();
    
?>