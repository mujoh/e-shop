<?php
  session_start();

  unset($_SESSION["cart"]);   // function that Destroys Session 
  header("Location: ../index.php");
?>