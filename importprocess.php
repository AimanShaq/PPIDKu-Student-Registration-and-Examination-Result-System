<?php

//Connect to database
include('importdbconnect.php');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

else{

  /*Delete Table Record */
  if (isset($_POST['delete']))
  {
    include('importdelete.php');
  }

  /*Create Record */
  if ( isset($_POST['submit']) )
  {
    include('importinsert.php');
  }

  /*Replace Table Record */
  if (isset($_POST['replace']))
  {
    include('importdelete.php');
    include('importinsert.php');
  }
}
?>