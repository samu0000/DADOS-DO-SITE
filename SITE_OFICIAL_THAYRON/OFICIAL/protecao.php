<?php
 if(!isset($_SESSION)){
    session_start();
 }
 
 if(!isset($_SESSION['id'])){
   echo "faça login ou cadastrado primeiramente";
  header("location:casa.php");
 }
?>