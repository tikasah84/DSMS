<?php $title = "ADMIN-Add Receptionist"; include('header.php'); ?>
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
            <form class="w-50 mx-auto">
  <!-- Email input -->
  <div class="form-outline mb-4" >
    <input type="text" id="name" class="form-control" />
    <label class="form-label" for="name">Name</label>
  </div>
  
 




  <div class="form-outline mb-4" >
    <input type="number" id="phone" class="form-control" />
    <label class="form-label" for="phone">Phone Number</label>
  </div>

  <div class="form-outline mb-4" >
    <input type="text" id="address" class="form-control" />
    <label class="form-label" for="text">Address</label>
  </div>

  <div class="form-outline mb-4" >
    <input type="email" id="email" class="form-control" />
    <label class="form-label" for="email">Email address</label>
  </div>

  

  <div class="form-check form-check-inline">
  <input
    class="form-check-input"
    type="radio"
    name="inlineRadioOptions"
    id="inlineRadio1"
    value="option1"
  />
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>

<div class="form-check form-check-inline">
  <input
    class="form-check-input"
    type="radio"
    name="inlineRadioOptions"
    id="inlineRadio2"
    value="option2"
  />
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
  

  <!-- Submit button -->
  <button type="submit" class="btn btn-secondary btn-block w-25 mx-auto">Submit</button>
</form>
          </div>
         
        </div>
      </section>
    <!-- Sidebar -->
<?php include('footer.php'); ?>