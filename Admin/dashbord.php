<?php $title = "ADMIN-Dashboard"; include('header.php');




include('../Database/function.php');
include('../Database/connection.php');

$count=0;
 



if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_username']!=''){
  $res = $_SESSION['ADMIN_username'];
  
  

}else{
   header('location:login_admin.php');
   die();
}

header("Location: http://localhost/Minor/Admin/stocks.php");
exist();

?>

<body>
  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <?php $dashboard = "active";  include('sidemenu.php'); ?>
    <!-- Sidebar -->

   <?php include('navbar.php') ?>
  <!--Main Navigation-->

  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Weekly Sales Report</strong></h5>
          </div>
          <div class="card-body">
          <canvas class="my-4 w-100" id="myChart" height="380"></canvas>
          </div>
        </div>
      </section>
      <!-- Section: Main chart -->

      <!--Section: Sales Performance KPIs-->
      <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Today Sales History</strong>
            </h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th scope="col">Receptionist</th>
                    <th scope="col">Item</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Time</th>
                    <th scope="col">Total Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">name</th>
                    <td>CUP</td>
                    <td>20000</td>
                    <td>1</td>
                    <td>2021-02-03</td>
                    <td>23434</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Sales Performance KPIs-->
        <div class="row">
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <h2 class="h1 mb-0 me-4">76</h2>
                    </div>
                    <div>
                      <h4>Total Sales</h4>
                      <p class="mb-0">Today Sales Amount</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <i class="far fa-calendar-check text-primary fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <h2 class="h1 mb-0 me-4">36</h2>
                    </div>
                    <div>
                      <h4>Total Sales</h4>
                      <p class="mb-0">Monthly Sales Amount</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-wallet text-success fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Statistics with subtitles-->
    </div>
  </main>
  <?php include('footer.php'); ?>