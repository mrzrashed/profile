<?php session_start();
require_once('config.php');
  function get_header(){
    require_once('includes/header.php');
  }

  function get_footer(){
    require_once('includes/footer.php');
  }

  function get_sidebar(){
    require_once('includes/sidebar.php');
  }

  function getLoggedID(){
    return $_SESSION['id']? true:false;
  }
  function needLogged(){
    $checkLog = getLoggedID();
    if(!$checkLog){
      header('Location: login.php');
    }
  }
 ?>
