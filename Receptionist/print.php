<?php
 include('../Database/function.php');
 include('../Database/connection.php');
 
$rname = get_safe_value($con,$_POST['name']);
$amt = get_safe_value($con,$_POST['amt']);
$discount = get_safe_value($con,$_POST['dis']);
$cid = get_safe_value($con,$_POST['cid']);
date_default_timezone_set('Asia/Kathmandu');
$date =  date('Y-m-d H:i:s');

$num=1; 
$name='';
if($cid!=0){
$res = mysqli_fetch_assoc(mysqli_query($con,"SELECT `name` FROM add_customer where `id`='$cid'"));
$name = $res['name'];
}
$resu = mysqli_query($con,"INSERT INTO `sale`( `amount`, `receptionist`, `customer`, `date`) VALUES ('$amt','$rname','$name','$date')");
if ( false===$resu ) {
  printf("error: %s\n", mysqli_error($con));
  die();
}

$count = mysqli_fetch_assoc(mysqli_query($con,"select count(*) from sale"));
$billno= $count['count(*)'];
$html = '<head>

</head>

<body class="A4 portrait">

<section class="sheet" id="content-print">
  <div
    class="box-body"
    id="box_data"
    style="display: flex; padding: 5px 10px 0 10px; margin-bottom: -21px"
  >
    <div style="width: 100%; padding-right: 10px" class="col-md-12">
      <div class="row" style="margin-bottom: 50px">
        <div class="col-lg-4" style="width: 70%; padding-left: 20px">
          <h2 style="text-align: center; margin-left: 160px">
            Computer Department store
          </h2>
          <h4 style="text-align: center; margin-left: 180px">Dharan-09</h4>
        </div>
        
      <br />
      <div class="" style="display: flex; ">
        <table style="width: 30%; border: 1" ;>
          <tr style="background: rgba(217, 225, 242, 1)">
            <td
              style="font-size: 14px"
              class="db text-center"
              width="100px"
            >
              Date & TIme
            </td>
            <td style="border-left: none; font-size: 14px">INVOICE NO</td>
          </tr>
          <tr>
            <td style="font-size: 12px">'.$date.'</td>
            <td>'.$billno.'</td>
          </tr>
        </table>
      </div>
      <br />

      <table width="10%" ;border="1">
        <tr style="background: rgba(217, 225, 242, 1)">
          <th class="text-center" colspan="2" style="">
            Bill To
          </th>
        </tr>
        <tr>
          <th>'.$name.'</th>
        </tr>
      </table>
      <br />
      <table width="100%" ;border="1px">
        <tr style="background: rgba(217, 225, 242, 1)">
          <th class="text-center">#</th>
          <th class="text-center" colspan="3">Product Description</th>
          <th class="text-center">Price</th>
          <th class="text-center">Quantity</th>
          <th class="text-center">Amount</th>
        </tr>
        <tbody>';
        $result = mysqli_query($con,"SELECT * FROM `bill` WHERE 1");
          
            while($row = mysqli_fetch_assoc($result)) { 
              $bar = $row['barcode'];
             
             
              $r = mysqli_fetch_assoc(mysqli_query($con,"select `item` from product,bill where product.id = '$bar' "));
              
          

          
          $html.='<tr>
            <td>'.$num.'</td>
            <td colspan="3">'.$r['item'].'</td>
            <td>'.$row['rate'].'</td>
            <td>'.$row['qty'].'</td>
            <td>'.$row['total'].'</td>
          </tr>';
          $num++;
            }
          
          
       $html.=' </tbody>
        <tfoot>
          <tr style="background: rgba(217, 225, 242, 1)">
            
            <td>Discount(10%)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td >Total </td>
            
          </tr>
          <tr style="background: rgba(217, 225, 242, 1)">
            
            <td colspan="2">'.$discount.'</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td >'.$amt.'</td>
            
          </tr>
        </tfoot>
      </table>
      <br />
      <table width="94%" ;border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="19%" rowspan="3" valign="top">
            <strong class="asd"> &nbsp;<br /></strong>
          </td>
          <td width="65%" valign="top">
            <h6>
              If you have any query about this invoice, please contact us at
            </h6>
            <h6>+977-98XXXXXXXX</h6>
          </td>
          <td width="16%" valign="top">
            <h6 style="margin-bottom: 0">
              <span
                style="
                  text-decoration: dashed;
                  padding-left: 100%;
                  color: #000;
                  border-bottom: 1px solid black;
                "
              ></span>
            </h6>
            <h5 class="text-center" style="margin-top: 5px">
              Signature and Seal
            </h5>
            <h6 class="text-center" style="margin-top: 5px">
              '.$rname.'
            </h6>
          </td>
        </tr>
      </table>
    </div>
  </div>
 
</section>
</body>
</html>';



mysqli_query($con,"DELETE FROM bill");



$css=file_get_contents('bill/normalize.css');
$css2=file_get_contents('bill/paper.css');
$css3=file_get_contents('bill/print_style.css');

include('vendor/autoload.php');
 $mpdf = new \Mpdf\Mpdf();
 $mpdf->WriteHTML($css,1);

 $mpdf->WriteHTML($html,2);
// $mpdf->Output('bill'.'.pdf','F');
//echo "<script>location.reload();</script>";

//$mpdf->SetProtection(array('print'));
$mpdf->SetWatermarkText("Paid");
$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');
//$mpdf->SetJS('this.print(false);');
$mpdf->Output('bill'.'.pdf','F');
echo "bill.pdf";

?>

 

