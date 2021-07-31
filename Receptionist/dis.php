<?php
 include('../Database/function.php');
 include('../Database/connection.php');
$dis=0;
$total=get_safe_value($con,$_POST['total']);
 $cid = get_safe_value($con,$_POST['cid']);

 $res  =   mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(*) FROM add_customer WHERE `id` ='$cid'"));



if ($res['COUNT(*)']!=0) {

    $dis = 0.1*$total;
    
    
}
echo $dis;
?>