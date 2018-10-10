<?php
  session_start();
  echo($_SESSION['username']);
  unset($_SESSION['username']);//removes all session variables

  echo(' you have cleaned the session');

  header('Refresh:2; URL=login.php');
 ?>
