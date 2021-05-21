<?php $title = "ADMIN-Category";  include('header.php'); 


include('../Database/function.php');
include('../Database/connection.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_username']!=''){
   $res = $_SESSION['ADMIN_username'];
   
   
 
 }else{
    header('location:login_admin.php');
    die();
 }

 if(isset($_GET['type']) && $_GET['type']!=''){
   $type = get_safe_value($con,$_GET['type']);
   if($type == 'status'){
       $operation = get_safe_value($con,$_GET['operation']);
       $id = get_safe_value($con,$_GET['id']);
       if($operation == 'active')
       {
           $status = '1';
       }
       else{
           $status = '0';
       }
       $update_status = "update `category` set status='$status' where id='$id' ";
       mysqli_query($con,$update_status);
   }
}

if(isset($_GET['type']) && $_GET['type']!=''){
   $type = get_safe_value($con,$_GET['type']);
   if($type == 'delete'){
      
       $id = get_safe_value($con,$_GET['id']);
      
       $delete_sql = "delete from `category`  where id='$id' ";
       mysqli_query($con,$delete_sql);
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


      
                        <div class="card-body">
                           <h4 class="box-title">Categories </h4>
                           <h6 class="box-title-manage" > <a href="manage_categories.php"> Add Categories </a> </h6>
                        </div>
                        <div class="card-body">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                     
                                    <tr>
                                      
                                       <th>id</th>
                                       <th>Category</th>
                                       <th>Status</th>
                        
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                 $sql = "SELECT * FROM `category` ORDER BY `id` ASC";
                                 $res = mysqli_query($con,$sql);
                                 while($row = mysqli_fetch_assoc($res)) { ?>  
                                 <tr>
                                 
                                      
                                       <td><?php echo $row['id'] ?></td>
                                       <td><?php echo $row['name'] ?></td>
                                       <th>
                                           
                                         <?php
                                         if($row['status']=='1'){
                                          echo "<a href='?type=status&operation=deactive&id=".$row['id']."'><span class='badge bg-success text-white'>Active</span></a>";
                                         } else{
                                         
                                      echo "<a href=?type=status&operation=active&id=".$row['id']."'> <span class='badge bg-primary text-white'>Deactive</span></a>";
                                       
                                        }
                                         
                                      echo "<a href='?type=delete&id=".$row['id']."'> <span class='badge bg-danger text-white'>Delete</span> </a>";
                                      
                                    ?>
                                   
                                        </th>
                                        
                        
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