
<?php 
include('../Database/function.php');
include('../Database/connection.php');

$title = "Receptionist-Password update"; include('header.php'); ?>
<header>
 <?php $update_password = "active";  include('navbar.php'); 

  
      


 



if(isset($_SESSION['RECEP_LOGIN']) && $_SESSION['RECEP_email']!=''){
  $email = $_SESSION['RECEP_email'];
  
  

}else{
   header('location:index.php');
   die();
}



if(isset($_POST['submit'])){
    $pass = get_safe_value($con,$_POST['password']);
    
$sql = "UPDATE `add_receptionist` SET `password`='$pass' WHERE `email`='$email'";

$res = mysqli_query($con,$sql);
if($res){
  ?>
  <script>
    toastr.success('Changed successfully', 'Password');
  </script>

  <?php
  
}
//header('location:index.php');
}

?>




<main style="margin-top: 58px ">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3"><p class="mb-0 text-center">Update Password</p>
            <h5 class="mb-0 text-center"><strong> <?php  echo $email?></strong></h5>
            <br>
            <form class="w-50 mx-auto" method="post" action="update_password.php">
  <!-- Email input -->
  <div class="form-outline mb-4" >
    <input type="password" id="password" name="password" class="form-control" />
    <label class="form-label" for="name">Password</label>
  </div>
  
  

  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-secondary btn-block w-25 mx-auto">Update</button>
</form>
          </div>
         
        </div>
      </section>

<?php include('footer.php'); ?>