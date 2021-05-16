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
        
        <li class="nav-item me-3 me-lg-1">
        <a class="nav-link d-sm-flex align-items-sm-center" href="view_details.php">
          <img
            src="https://mdbootstrap.com/img/new/avatars/1.jpg"
            class="rounded-circle"
            height="22"
            alt=""
            loading="lazy"
          />
          <strong class="d-none d-sm-block ms-1">John</strong>
        </a>
      </li>
      </ul>
     
    </div>
  </div>
</nav>