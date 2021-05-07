<?php include('header.php'); ?>
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
      <form class="input-group w-auto my-auto d-none d-sm-flex">
        <input
          autocomplete="off"
          type="search"
          class="form-control rounded"
          placeholder="Search"
          style="min-width: 125px;"
        />
        <span class="input-group-text border-0 d-none d-lg-flex"
          ><i class="fas fa-search"></i
        ></span>
      </form>
    </div>
    <!-- Left elements -->

    <!-- Center elements -->
    <ul class="navbar-nav flex-row d-none d-md-flex">
      <li class="nav-item me-3 me-lg-1 active">
        <a class="nav-link" href="#">
          <span><i class="fas fa-home fa-lg"></i></span>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>
      </li>

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
          <span><i class="fas fa-flag fa-lg"></i></span>
        </a>
      </li>

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
          <span><i class="fas fa-video fa-lg"></i></span>
        </a>
      </li>

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
          <span><i class="fas fa-shopping-bag fa-lg"></i></span>
        </a>
      </li>

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
          <span><i class="fas fa-users fa-lg"></i></span>
          <span class="badge rounded-pill badge-notification bg-danger">2</span>
        </a>
      </li>
    </ul>
    <!-- Center elements -->

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
          <strong class="d-none d-sm-block ms-1">John</strong>
        </a>
      </li>
      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
          <span><i class="fas fa-plus-circle fa-lg"></i></span>
        </a>
      </li>
      <li class="nav-item dropdown me-3 me-lg-1">
        <a
          class="nav-link dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-comments fa-lg"></i>

          <span class="badge rounded-pill badge-notification bg-danger">6</span>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li><a class="dropdown-item" href="#">Some news</a></li>
          <li><a class="dropdown-item" href="#">Another news</a></li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown me-3 me-lg-1">
        <a
          class="nav-link dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-bell fa-lg"></i>
          <span class="badge rounded-pill badge-notification bg-danger">12</span>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li><a class="dropdown-item" href="#">Some news</a></li>
          <li><a class="dropdown-item" href="#">Another news</a></li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown me-3 me-lg-1">
        <a
          class="nav-link dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-chevron-circle-down fa-lg"></i>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li><a class="dropdown-item" href="#">Some news</a></li>
          <li><a class="dropdown-item" href="#">Another news</a></li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </li>
    </ul>
    <!-- Right elements -->
  </div>
</nav>
<!-- Navbar -->
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
        src="https://mdbootstrap.com/img/Photos/Slides/img%20(19).jpg"
        class="d-block w-100"
        alt="..."
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img
        src="https://mdbootstrap.com/img/Photos/Slides/img%20(35).jpg"
        class="d-block w-100"
        alt="..."
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img
        src="https://mdbootstrap.com/img/Photos/Slides/img%20(40).jpg"
        class="d-block w-100"
        alt="..."
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
              src="https://mdbootstrap.com/img/new/fluid/city/113.jpg"
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
              src="https://mdbootstrap.com/img/new/fluid/city/111.jpg"
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
              src="https://mdbootstrap.com/img/new/fluid/city/112.jpg"
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
              src="https://mdbootstrap.com/img/new/fluid/city/114.jpg"
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
              src="https://mdbootstrap.com/img/new/fluid/city/115.jpg"
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
              src="https://mdbootstrap.com/img/new/fluid/city/116.jpg"
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

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
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
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<?php include('footer.php'); ?>