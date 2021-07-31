<?php $title = "Receptionist-Add Customer"; include('header.php');

include('../Database/function.php');
include('../Database/connection.php');
$count=0;
$exist='false';
?>
<header>
 <?php $add_customer = "active";  include('navbar.php');
 
 
 
 if(isset($_POST['submit'])){
  $name = get_safe_value($con,$_POST['name']);
  $phone = get_safe_value($con,$_POST['phone']);
  $address = get_safe_value($con,$_POST['address']);
 
  $gender = get_safe_value($con,$_POST['gender']);
 
   
   $res = mysqli_query($con,"select * from `add_customer` where phone='$phone'");
   
   while($row = mysqli_fetch_assoc($res)) { 
     
     if($phone == $row['phone']){
       $exist='true';
       }
    }
   $count++;
  
  if($exist=='false'){
    $sql = "INSERT INTO `add_customer`( `name`, `address`, `gender`, `phone`) VALUES ('$name','$address','$gender','$phone')";
  $res = mysqli_query($con,$sql);
  $exist='done';
  if ( false===$res ) {
    printf("error: %s\n", mysqli_error($con));
    die();
  }else{
    $sql = "SELECT `id` FROM `add_customer` WHERE `phone`='$phone'";
    $res = mysqli_fetch_assoc(mysqli_query($con,$sql));
    
?>
    <script>
    toastr.success('<?php echo $res['id'];?>', 'Your ID is');
  </script>
  <?php
  }

  }
  
  }
  





?>
 
 
 

    <main style="margin-top: 58px ">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Add Customer</strong></h5>
            <br>
            <form class="w-50 mx-auto" method="post" action="addCustomer.php">
  <!-- Email input -->
  <div class="form-outline mb-4" >
    <input type="text" id="name" name="name" class="form-control" />
    <label class="form-label" for="name">Name</label>
  </div>
  
 




  <div class="form-outline mb-4" >
    <input type="number" id="phone" name="phone" class="form-control" />
    <label class="form-label" for="phone">Phone Number</label>
  </div>

  <div class="form-outline mb-4" >
    <input type="text" id="address" name="address" class="form-control" />
    <label class="form-label" for="text">Address</label>
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
  <button type="submit" name="submit" class="btn btn-dark btn-block w-25 mx-auto">Submit</button>


<?php
  if($exist=='done'){
  ?>
  <script>
    toastr.success('Customer Added', 'Task Completed');
  </script>

  <?php }
  
  if($exist=='true'){
    ?>

<script>
    toastr.error('Mobile number already exists', 'Error');
  </script>

    <?php
  }
  ?>

</form>
          </div>
         
        </div>
      </section>
    <!-- Sidebar -->
<?php include('footer.php'); ?>