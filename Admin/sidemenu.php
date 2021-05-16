
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
<div class="position-sticky">
  <div class="list-group list-group-flush mx-3 mt-4 ">
    <a href="dashbord.php" class="list-group-item list-group-item-action py-2 ripple <?php echo $dashboard ?>" aria-current="true">
      <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
    </a>
    <a href="addReceptionist.php" class="list-group-item list-group-item-action py-2 ripple  <?php echo $add_receptionist?> ">
    <i class="fas fa-user-friends fa-fw me-3"></i><span>Add Receptionist </span>
    </a>
    <a href="category.php" class="list-group-item list-group-item-action py-2 ripple <?php echo $category?>"><i
        class="fas fa-list fa-fw me-3"></i><span>Category</span></a>
    <a href="product.php" class="list-group-item list-group-item-action py-2 ripple  <?php echo $product?>"><i
        class="fas fa-chart-line fa-fw me-3"></i><span>product</span></a>
   
   
    <a href="receptionist.php" class="list-group-item list-group-item-action py-2 ripple  <?php echo $receptionist?>"><i
        class="fas fa-users fa-fw me-3"></i><span>Receptionist</span></a>
    <a href="stocks.php" class="list-group-item list-group-item-action py-2 ripple  <?php echo $stocks?>  <?php echo $stocks?>"><i
        class="fas fa-money-bill fa-fw me-3"></i><span>Stocks</span></a>
  </div>
</div>
</nav>