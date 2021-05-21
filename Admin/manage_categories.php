<?php $title = "ADMIN-Category";  include('header.php'); 

$check='';
include('../Database/function.php');
include('../Database/connection.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_username']!=''){
   $res = $_SESSION['ADMIN_username'];
   
   
 
 }else{
    header('location:login_admin.php');
    die();
 }
 

if(isset($_POST['submit']))
{
    $categories = get_safe_value($con,$_POST['category']);
    
    $res= mysqli_query($con,"select * from `category` where name='$categories'");
    $check = mysqli_num_rows($res);
    
    if($check>0)
    {
     
    }
    else{
   
   $sql = mysqli_query($con,"insert into category(name,status) values ('$categories','1')");
   header('location:category.php');
   die();
   }
  
  
}





?>

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
            <form class="w-50 mx-auto" method="post" action="manage_categories.php">
  <!-- Email input -->
  <div class="form-outline" >
    <input type="text" id="name" name="category" class="form-control" />
    <label class="form-label" for="name"> Category Name</label>
  </div>
  <br>
  
  <button type="submit" id="button" class="btn btn-primary btn-block w-25 mx-auto" name="submit">Submit</button>
</form>
          </div>
         
        </div>
      </section>
      
<?php
if($check){
  ?>
  <script> toastr.error('Catogary already exist'); </script> 
  <?php
}
include('footer.php'); ?>