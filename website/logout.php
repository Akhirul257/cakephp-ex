<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);

   echo 'You have logged out and going to login page to login. ';
   header('Refresh: 2; URL = index.php');
?>
