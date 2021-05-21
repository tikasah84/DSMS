<?php 

 

if(isset($_SESSION['RECEP_LOGIN']) && $_SESSION['RECEP_email']!=''){
  $name = $_SESSION['RECEP_name'];
  
  
  

}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid ">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <a class="navbar-brand" href="#">Receptionist </a>
    <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link <?php echo $billing?>" aria-current="page" href="billing.php">Billing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $add_customer?>" href="addCustomer.php">Add Customer</a>
        </li>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <div class="d-flex align-items-center">
      

      

      <!-- Avatar -->
      <a
        class="dropdown-toggle d-flex align-items-center hidden-arrow"
        href="#"
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
      >
      <?php echo $name; ?>
      </a>
      <ul
        class="dropdown-menu dropdown-menu-end"
        aria-labelledby="navbarDropdownMenuLink"
      >
        <li>
          <a class="dropdown-item" href="view_details.php">My profile</a>
        </li>
        <li>
          <a class="dropdown-item" href="update_password.php">Change password</a>
        </li>
        <li>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
    
</nav>

