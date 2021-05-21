<?php $title = "ADMIN-product";  include('header.php'); 
$category_id='';
$item='';
$stock='';
$rate='';
$check='';
include('../Database/function.php');
include('../Database/connection.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_username']!=''){
   $res = $_SESSION['ADMIN_username'];
   
   
 
 }else{
    header('location:login_admin.php');
    die();
 }
 ?>
<header>
<?php $product = "active";  include('sidemenu.php'); ?>
    <?php 
     include('navbar.php');
    if(isset($_GET['id']) && $_GET['id']!=''){
      $id = get_safe_value($con,$_GET['id']);
      $res= mysqli_query($con,"select * from `product` where id='$id'");
      $data = mysqli_num_rows($res);
      if($data >0){
      $row = mysqli_fetch_assoc($res);
      $category_id=$row['cat_id'];
      $rate = $row['rate'];
      $stock = $row['stock'];
      $item=$row['item'];
      }else{
         header('location:category.php');
         die();
      }
   }
    
    
if(isset($_POST['submit']))
{
    $categories = get_safe_value($con,$_POST['category']);
    $items = get_safe_value($con,$_POST['item']);
    $stocks = get_safe_value($con,$_POST['stock']);
    $rate = get_safe_value($con,$_POST['rate']);
    
    $res= mysqli_query($con,"select * from `product` where item='$items'");
   
    $check = mysqli_num_rows($res);
   
    
    if($check>0)
    {
      if(isset($_GET['id']) && $_GET['id']!='')
      {
         $getData = mysqli_fetch_assoc($res);
         if($id==$getData['id'])
         {
           mysqli_query($con,"UPDATE `product` SET `item`=$items,`cat_id`=$categories,`stock`=$stocks,`rate`=$rate,`status`='1' WHERE `id`=$id");
            $check = 0;
         }  
     
    }
   
   } else{
   
    $sql = mysqli_query($con,"insert into product(item,cat_id,stock,rate,status) values ('$items','$categories','$stocks','$rate','1')");
    
    ?>
  <script> toastr.success('Product Inserted'); </script> 
  <?php
  
    }
}
    
    
    
    ?>


 



    
    <main style="margin-top: 58px ">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">


  


          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Add Product</strong></h5>
            <br>
            <div class="card-body">
                          
                           <h6 class="box-title-manage" > <a href="product.php">  Products </a> </h6>
                        </div>
            <form class="w-50 mx-auto" method="POST" action="manage_product.php">

      
  <div>
         
  <select  name="category" class="form-control mb-4 custom-select">
                              <option  >Select Category</option>
                           <?php
                           
                           $res=mysqli_query($con,"select id,name from category WHERE status='1' order by id asc");
                           
                           
                            while($row=mysqli_fetch_assoc($res))
                            {
                             
                               
                               if($row['id']==$category_id){
                               echo "<option selected value=".$row['id'].">".$row['name']."</option>";
                               
                               }else{
                                 echo "<option  value=".$row['id'].">".$row['name']."</option>";
                                 
                                  

                               }
                               
                            }

                            ?>
                           </select>
  </div>
    
  
  


  <div class="form-outline mb-4" >
    <input type="text" id="item" value='<?php echo $item ?>' name="item" class="form-control" />
    <label class="form-label" for="name"> Item</label>
  </div>

  


  <div class="form-outline mb-4" >
    <input type="text" id="stock" value="<?php echo $stock ?>" name="stock" class="form-control" />
    <label class="form-label" for="name"> Stock</label>
  </div>
  <div class="form-outline mb-4" >
    <input type="text" id="rate" value="<?php echo $rate ?>" name="rate" class="form-control" />
    <label class="form-label" for="rate"> Rate</label>
  </div>
  <br>
  
  <button type="submit" name="submit" class="btn btn-primary btn-block w-25 mx-auto">Submit</button>
</form>
          </div>
         
        </div>
      </section>
<?php 
if($check){
  ?>
  <script> toastr.error('product already exist'); </script> 
  <?php
}
include('footer.php'); ?>