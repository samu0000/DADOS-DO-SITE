<?php
 if(!isset($_SESSION)){
    session_start();
    header("location:config_conta.php");
 }
 
 if(!isset($_SESSION['id'])){
  header("location:login.php");
 }
?>