<?php $title = "ADMIN-Stocks"; include('header.php'); 
$id=0;
$amt=0;
include('../Database/function.php');
include('../Database/connection.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_username']!=''){
  $res = $_SESSION['ADMIN_username'];
  
  

}else{
   header('location:login_admin.php');
   die();
}
?>

<body>
  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <?php $stocks = "active";  include('sidemenu.php'); ?>
    <!-- Sidebar -->

   <?php include('navbar.php') ?>
  <!--Main Navigation-->
  <main style="margin-top: 58px ">
  <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">


      
                        <div class="card-body">
                           <h4 class="box-title">Stocks </h4>
                           <h6 class="box-title-manage" > <a href="manage_product.php"> Details </a> </h6>
                        </div>
                        <div class="card-body">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                     
                                    <tr>
                                      
                                       <th>id</th>
                                       <th>Category</th>
                                       <th>Name</th>
                                       <th>price</th>
                                       <th>qty</th>
                                       <th>Total</th>
                        
                                    </tr>
                                 </thead>
                                 <tbody>
                                 
                                 <?php
                                 //$sql = "SELECT * FROM `product`,`category` where product.cat_id=category.id ORDER BY product.stock ASC";
                                 $sql = "SELECT p.id,p.item,c.name,p.stock,p.rate,p.status from product p ,category c where p.cat_id=c.id";
                                 $res = mysqli_query($con,$sql);
                                 while($row = mysqli_fetch_assoc($res)) {
                                  $id++;
                                  $amt=$amt + $row['stock']*$row['rate'];
                                   ?>      
                                 <tr>
                                 
                                 <td><?php echo $id ?></td>
                                 <td><?php echo $row['name'] ?></td>
                                 <td><?php echo $row['item'] ?></td>
                                 <td><?php echo $row['rate'] ?></td>
                                 <td><?php echo $row['stock'] ?></td>
                                 <td><?php echo  $row['stock']*$row['rate']?></td>
        
        
          
                                        
                        
                                        </tr>
                                    <?php } ?>
                                    <th>Total</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <th><?php echo $amt; ?></th>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>



         
         
        </div>
      </section>
      <div>
  
      

  <?php include('footer.php'); ?>