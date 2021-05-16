<?php $title = "ADMIN-Category";  include('header.php'); ?>
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
                                       <th></th>
                        
                                    </tr>
                                 </thead>
                                 <tbody>
                                 
                                 <tr>
                                 
                                      
                                       <th></th>
                                       <th></th>
                                       <th>
                                           
                                          
                                       <span class="badge bg-success text-white">Active</span>
                                       <span class="badge bg-primary text-white">Deactive</span>
                                       <span class="badge bg-warning text-white">edit</span>   
                                      <span class="badge bg-danger text-white">Delete</span> 
                                      
                                    
                                   
                                        </th>
                                        
                        
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>



         
         
        </div>
      </section>
      <div>
<?php include('footer.php'); ?>