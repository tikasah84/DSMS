<?php
 include('../Database/function.php');
 include('../Database/connection.php');
$id = get_safe_value($con,$_POST['id']);
$qty = get_safe_value($con,$_POST['qty']);
$rate =get_safe_value($con,$_POST['rate']);
$stock = get_safe_value($con,$_POST['stock']);
$cid = get_safe_value($con,$_POST['cid']);

$dis = 0;
// $res  =   mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(*) FROM add_customer WHERE `id` ='$cid'"));



// if ($res['COUNT(*)']!=0) {

//     $dis = 0.1*$qty*$rate;
    
    
// }



$amt = get_safe_value($con,$_POST['amt']);
$total=get_safe_value($con,$_POST['total']);
mysqli_query($con,"UPDATE `bill` SET `stock`='$stock',`qty`='$qty',`dis`='$dis',`amt`='$amt',`total`='$total' WHERE `barcode`='$id' ");
mysqli_query($con,"UPDATE `product` SET `stock`='$stock' WHERE `id`='$id' ");
echo "done";

?>
