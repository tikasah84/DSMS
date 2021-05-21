<?php 
      
      include('../Database/function.php');
      include('../Database/connection.php');
$title = "Receptionist-Billing"; include('header.php'); ?>
<header>
 <?php $billing = "active";  include('navbar.php'); 

  


$count=0;
 



if(isset($_SESSION['RECEP_LOGIN']) && $_SESSION['RECEP_email']!=''){
  $res = $_SESSION['RECEP_email'];
  
  

}else{
   header('location:index.php');
   die();
}
?>

<?php include('footer.php'); ?>