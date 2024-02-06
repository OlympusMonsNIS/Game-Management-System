<?php 
require_once("include/initialize.php");
   if (!isset($_SESSION['USERID'])){
      redirect(WEB_ROOT."login.php");


     }else{
     } 
$title="Admin Panel"; 
$content='home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
  case '1' :
         $title="Home"; 
     $content='home.php'; 

    break;  
  default :
    $content    = 'home.php'; 
}
require_once("theme/template.php");
?>

