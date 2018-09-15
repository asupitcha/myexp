
<?php

  session_start() ;

  // unset($_SESSION['myCart']);
  $_SESSION['myCart'] = "";
  // echo "<script>alert('sss');</script>";
  header("Refresh:0; url=cart.php");






?>
