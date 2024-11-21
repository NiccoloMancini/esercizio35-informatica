<?php
  session_start();
  if($_POST['username'] == 'admin' && $_POST['password'] == '1234'){
    if(!isset($_SESSION['secondi'])){
      $_SESSION['secondi'] = time();
    }
    header("Location:benvenuto.php");
  }else{
    header("Location:errore.php");
  }
?>