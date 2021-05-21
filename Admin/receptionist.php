<?php $title = "ADMIN-Receptionist"; include('header.php'); 

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
<?php $receptionist = "active";  include('sidemenu.php'); ?>
    <?php include('navbar.php') ?>


 



    
    <main style="margin-top: 58px ">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">


      
                        <div class="card-body">
                           <h4 class="box-title">Receptionist </h4>
                           
                        </div>
                        <div class="card-body">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                     
                                    <tr>
                                      
                                       <th>id</th>
                                       
                                       <th>Name</th>
                                       <th>Address</th>
                                       <th>Gender</th>
                                       <th>phone</th>
                        
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                 $sql = "SELECT * FROM `add_receptionist` ORDER BY `id` ASC";
                                 $res = mysqli_query($con,$sql);
                                 while($row = mysqli_fetch_assoc($res)) { ?>      
                                 <tr>
                                 <td><?php echo $row['id'] ?></td>
                                 <td><?php echo $row['name'] ?></td>
                                 <td><?php echo $row['address'] ?></td>
                                 <td><?php echo $row['gender'] ?></td>
                                 <td><?php echo $row['phone'] ?></td>
        
                        
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>



         
         
        </div>
      </section>
      <div>
<?php include('footer.php'); ?>