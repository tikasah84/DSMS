<?php include('header.php');
include('../Database/function.php');
include('../Database/connection.php');
$name = '';
$amt = 0;
$id=0;
if(isset($_POST['submit'])){
  $cid = get_safe_value($con,$_POST['cid']);
  $res = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM add_customer where `id`='$cid'"));
  $name = $res['name'];
 $amt = 0;
 $id=1;
}







?>

<style>
	<?php include 'CSS/admin.css'; ?>
</style>
<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid justify-content-between">
    <!-- Left elements -->
    <div class="d-flex">
      <!-- Brand -->
      <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
        <img
          src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"
          height="20"
          alt=""
          loading="lazy"
          style="margin-top: 2px;"
        />
      </a>

      <!-- Search form -->
      <form class="input-group w-auto my-auto d-none d-sm-flex" action="index.php" method="post">
        <input
          autocomplete="off"
          type="search"
          name="cid"
          class="form-control rounded"
          placeholder="Search"
          style="min-width: 125px;"
        />
        <button type="submit" name="submit" class="input-group-text border-0 d-none d-lg-flex"
          ><i class="fas fa-search"></i
        ></button>
      </form>
    </div>
    <!-- Left elements -->

    
    <!-- Right elements -->
    <ul class="navbar-nav flex-row">
      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link d-sm-flex align-items-sm-center" href="#">
          <img
            src="https://mdbootstrap.com/img/new/avatars/1.jpg"
            class="rounded-circle"
            height="22"
            alt=""
            loading="lazy"
          />
          <strong class="d-none d-sm-block ms-1"><?php echo $name ?></strong>
        </a>
      </li>
          </ul>
    <!-- Right elements -->
  </div>
</nav>
<!-- Navbar -->

<?php

if($name!=''){
  ?>

<div class="card-body">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                     
                                    <tr>
                                      
                                       <th>id</th>
                                       <th>Receptionist</th>
                                       <th>Amount</th>
                                       <th>Date</th>
                                       
                        
                                    </tr>
                                 </thead>
                                 <tbody>
                                 
                                 <?php
                                
                                 $res =  mysqli_query($con,"SELECT * FROM sale where `customer`='$name'");
                                 while($row = mysqli_fetch_assoc($res)) {
                                 
                                  $amt=$amt + $row['amount'];
                                   ?>      
                                 <tr>
                                 
                                 <td><?php echo $id ?></td>
                                 <td><?php echo $row['receptionist'] ?></td>
                                 <td><?php echo $row['amount'] ?></td>
                                 <td><?php echo $row['date'] ?></td>
                                
        
        
          
                                        
                        
                                        </tr>
                                    <?php 
                                   $id++;
                                   }
                                   
                                     ?>
                                    <th>Total</th>
                                    <td></td>
                                    <td></td>
                                    
                                    <th><?php echo $amt; ?></th>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>

<?php
    }else{
?>

<!-- Carousel wrapper -->
<div
  id="carouselDarkVariant"
  class="carousel slide carousel-fade carousel-dark"
  data-mdb-ride="carousel"
>
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button
      data-mdb-target="#carouselDarkVariant"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      data-mdb-target="#carouselDarkVariant"
      data-mdb-slide-to="1"
      aria-label="Slide 1"
    ></button>
    <button
      data-mdb-target="#carouselDarkVariant"
      data-mdb-slide-to="2"
      aria-label="Slide 1"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <img
        src="img/photo1.jpg"
        class="d-block w-100"
        alt="..."
        
      />
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img
        src="img/photo2.jpg"
        class="d-block w-100"
        alt="..."
        
      />
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img
        src="img/photo3.png"
        class="d-block w-100"
        alt="..."
        
      />
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button
    class="carousel-control-prev"
    type="button"
    data-mdb-target="#carouselDarkVariant"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselDarkVariant"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->


<footer class="bg-light text-center text-white">
 
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Images -->
    <section class="">
      <div class="row">
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="img/comp1.jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="img/comp2.jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="img/comp3.jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="img/comp4.jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="img/comp5.jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="img/comp6.jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Images -->
  </div>
  <!-- Grid container -->

  
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

     

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->
<?php
}
?>
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/"></a>
  </div>
  <!-- Copyright -->
</footer>
<?php include('footer.php'); ?>