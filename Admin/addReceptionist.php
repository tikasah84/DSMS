<?php $title = "ADMIN-Add Receptionist"; include('header.php');


include('../Database/function.php');
include('../Database/connection.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_username']!=''){
  $res = $_SESSION['ADMIN_username'];
  
  

}else{
   header('location:login_admin.php');
   die();
}


if(isset($_POST['submit'])){
  $name = get_safe_value($con,$_POST['name']);
  $phone = get_safe_value($con,$_POST['phone']);
  $address = get_safe_value($con,$_POST['address']);
  $email = get_safe_value($con,$_POST['email']);
  $gender = get_safe_value($con,$_POST['gender']);
 
  $sql_count = "SELECT `id`, `name`, `address`, `gender`, `phone`, `email` FROM `add_receptionist` WHERE 1";
   $res1 = mysqli_query($con,$sql_count);
   $count = mysqli_num_rows($res1);
   $count++;
  
  
  $sql = "INSERT INTO `add_receptionist`(`id`, `name`, `address`, `gender`, `phone`, `email`) VALUES ('$count','$name','$address','$gender','$phone','$email')";
  $res = mysqli_query($con,$sql);
  if ( false===$res ) {
    printf("error: %s\n", mysqli_error($con));
    die();
  }
  }
  





?>
<header>
<?php $add_receptionist = "active";  include('sidemenu.php'); ?>
    <?php include('navbar.php') ?>
    <main style="margin-top: 58px ">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Add Receptionist</strong></h5>
            <br>
            <form class="w-50 mx-auto" method="post" action="addReceptionist.php">
  <!-- Email input -->
  <div class="form-outline mb-4" >
    <input type="text" id="name" name="name" class="form-control" required/>
    <label class="form-label" for="name">Name</label>
  </div>
  <div class="form-outline mb-4" >
    <input type="number" id="phone" name="phone" class="form-control" required />
    <label class="form-label" for="phone">Phone Number</label>
  </div>

  <div class="form-outline mb-4" >
    <input type="text" id="address" name="address" class="form-control" required />
    <label class="form-label" for="text">Address</label>
  </div>

  <div class="form-outline mb-4" >
    <input type="email" id="email" name="email" class="form-control" required />
    <label class="form-label" for="email">Email address</label>
  </div>

  

  <div class="form-check form-check-inline">
  <input
    class="form-check-input"
    type="radio"
    name="gender"
    id="gender"
    value="male"
  />
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>

<div class="form-check form-check-inline">
  <input
    class="form-check-input"
    type="radio"
    name="gender"
    id="gender"
    value="female"
  />
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
  

  <!-- Submit button -->
  <button type="submit" class="btn btn-secondary btn-block w-25 mx-auto" name="submit">Submit</button>
</form>
          </div>
         
        </div>
      </section>
    <!-- Sidebar -->
<?php include('footer.php'); ?>