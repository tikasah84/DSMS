<?php $title = "ADMIN-Category";  include('header.php');  ?>
<header>
<?php $category = "active";  include('sidemenu.php'); ?>
    <?php include('navbar.php') ?>


 



    
    <main style="margin-top: 58px ">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">


  


          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Add Category</strong></h5>
            <br>
            <div class="card-body">
                          
                           <h6 class="box-title-manage" > <a href="category.php">  Catgories </a> </h6>
                        </div>
            <form class="w-50 mx-auto">
  <!-- Email input -->
  <div class="form-outline" >
    <input type="text" id="name" class="form-control" />
    <label class="form-label" for="name"> Category Name</label>
  </div>
  <br>
  
  <button type="submit" class="btn btn-primary btn-block w-25 mx-auto">Submit</button>
</form>
          </div>
         
        </div>
      </section>
<?php include('footer.php'); ?>