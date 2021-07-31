<?php 
      
      include('../Database/function.php');
      include('../Database/connection.php');
$title = "Receptionist-Billing"; include('header.php'); ?>
<header>
 <?php $billing = "active";  include('navbar.php'); 
if(isset($_SESSION['RECEP_LOGIN']) && $_SESSION['RECEP_email']!=''){
  $res = $_SESSION['RECEP_email'];
  $name='';
  $name = $_SESSION['RECEP_name'];
 
  

}else{
   header('location:index.php');
   die();
}
$gtotal=(int)0;
$discount= (float)0;
$qty=0;
$count = "0";
$exist = "false";

$item = '';
$stock = '';
$rate  = '';
$qty = 0; 
$amt = '';
$discount = 0;
$total = '';
$tamt=0;









if(isset($_POST['submit'])){

  $id = get_safe_value($con,$_POST['barcode']);
   $res = mysqli_query($con,"SELECT  `id`,`item`, `cat_id`, `stock`, `rate` FROM `product` WHERE `id`='$id' and `status`='1'");
   while($row = mysqli_fetch_assoc($res)) { 
     $id=$row['id'];
     $item = $row['item'];
     $stock = $row['stock'];
     $rate  = (float)$row['rate'];
    $amt = $rate * $qty;
     $total = $amt;
    $res1 =  mysqli_fetch_assoc(mysqli_query($con,"select `barcode` from `bill` where `barcode`='$id'"));
    
    if($res1){
      $exist='true';
    }
    $count++;
   
    
    }
  

  if($item!=''){
    if($exist=='false'){

     

      $sql = "INSERT INTO `bill`( `barcode`, `stock`, `rate`, `qty`,`amt` , `total`) VALUES ('$id','$stock','$rate','$qty','$amt','$total')";
    
      $res = mysqli_query($con,$sql);
    $exist='done';
    if ( false===$res ) {
      printf("error: %s\n", mysqli_error($con));
      die();
    }
  
    }else{
      ?>


<script>
  
    toastr.error('Item already in list', 'Error');
  </script>
    <?php

    }

  }else{


    

    ?>


<script>
    toastr.error('Item not found', 'Error');
  </script>
    <?php


  }
 
  
  }
  





?>
 



 <form action="billing.php" method="POST" >
<div class="search">
<div class="input-group search1">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" />
    <label class="form-label" for="form1">Only Barcode Scaning</label>
  </div>
  <button type="button" class="btn btn-dark">
    <i class="fas fa-search"></i>
  </button>
</div>

<div class="input-group search2">

  <div class="form-outline">
    <input type="search" id="barcode" name="barcode"  class="form-control" />
    <label class="form-label" for="form1">Enter Barcode</label>
  </div>
  <button  name="submit" class="btn btn-dark"
  type="submit"
  >
    <i class="fas fa-search"></i>
  </button>
  </form>
</div>

</div>


<div class="contain">

<div class="bill">
<table class="table">
  <thead class="black white-text">
    <tr>
    <th scope="col">SN</th>
      <th scope="col">Item</th>
      
      <th scope="col">Stock</th>
      
      <th scope="col">Rate</th>
      <th scope="col">Quantity</th>
      <th scope="col">Amount</th>
      
      <th scope="col">Total</th>
      <th scope="col">Update</th>

    </tr>
  </thead>
 
  <tbody>
  <?php
$result = mysqli_query($con,"SELECT * FROM `bill` WHERE 1");
$num=1;
  while($row = mysqli_fetch_assoc($result)) { 
    $bar = $row['barcode'];
   
   
    $r = mysqli_fetch_assoc(mysqli_query($con,"select `item` from product,bill where product.id = '$bar' "));
    ?> 

    <tr>
     
      <td><?php  echo $num?></td>
      <td><?php  echo $r['item']?></td>
     
      <td> <input type="number" id="stock_<?php echo  $bar ?>" name="rate" value="<?php echo $row['stock'] ?>" style="width:60px;border:none;" ></td>
      <td><input type="text" id="rate_<?php echo  $bar ?>" name="rate" value="<?php echo $row['rate'] ?>" style="width:60px;border:none;" ></td>
      <td><input type="number"  onchange="fill(<?php echo $bar ?>);" id="qty_<?php echo  $bar ?>" name="qty" value="<?php echo $row['qty'] ?>" style="width:50px;  border:none;"></td>
      <td><input type="text" id="amt_<?php echo  $bar ?>" name="amt" value="<?php echo $row['amt'] ?>" style="width:60px;border:none;" ></td>
      <td><input type="text" id="total_<?php echo  $bar ?>" name="total" value="<?php echo $row['total'] ?>"style="width:60px; border:none;" ></td>
      <td><p onclick="update(<?php echo $bar ?>);"   ><i class="fas fa-recycle" ></i></p></td>
    </tr>
  
    <?php

    
  $num++;}?>
    </tbody>
</table>
</div>


<?php 
$re = mysqli_query($con,"SELECT * FROM `bill` WHERE 1");
while($w = mysqli_fetch_assoc($re)) {
  
 $gtotal = $gtotal +$w['total'];
 //$discount = $discount +$w['dis'];
 $qty = $qty +$w['qty' ]; 

}
 ?>
<div class="sidenav">
<div class="card">
  <div class="card-body text-center ">
    <h5 class="card-title ">Billing Amount</h5>
    <form>
   <div class="row">
     <div class="amt"> Qty:
     <input type="text" id="tqty" name="id" value="<?php echo $qty ?>" size="5">
     </div>
     <div class="qty"> Amt:
     <input type="text" id="tamt" name="id" value="<?php echo $gtotal ?>" size="5">
</div>
     <div class="qty">Dis:
     <input type="text"  id="tdis" name="id" value="" size="5">
</div>
<div class="qty">cash:
     <input type="text" onchange="returnamt();" id="iamt" name="iamt" value="" size="5">
</div>

<div class="qty">Return:
     <input type="text" id="ramt" name="ramt" value="" size="5">
</div>

<div class="qty"> Amount:
     <input type="text" id="gamt" name="gamt" value="" size="5">
</div>
   
   </div>
   
  <br/>
  <div class="cid"> C.ID:
     <input type="text" onchange="dis(<?php echo $gtotal ?>);" id="cid" name="cid" value="0" size="15">
</div>
<br/>


    <button type="button" onclick="printbill('<?php echo $name ?>','<?php echo $gtotal ?>');" class="btn btn-dark">Save & Print</button>
  </div>
</form>
</div>
</div>
</div>


<script>
   function returnamt(){
    var iamt = document.getElementById('iamt').value;
    var dis = document.getElementById('tdis').value;
    var gamt = document.getElementById('gamt').value;
     document.getElementById('ramt').value = iamt -gamt ;
   }


  </script>
<?php include('footer.php'); ?>