<?php
    if(!session_id())
    {
        session_start();
    }
    if (isset($_SESSION['schID']) != session_id())
    {
        header ('Location:tclogin.php'); 
    }
    
    
?>