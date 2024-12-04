<?php 
$loanno =$_GET['loanno'];
$arr_data = [];   //array variable
// include"dbconfig.php";
//  $link = opencon();
$link=mysqli_connect("localhost","root","","balafinance");
$qr = "select * from tbinterest_loan where loanno='$loanno' ";     //and  plan='WC'";
// echo$qr;
$qr_exe = mysqli_query($link,$qr);
while ($qr_fet = mysqli_fetch_array($qr_exe)){
$arr_data['customername'] =$qr_fet['customername'];
$arr_data['date'] =$qr_fet['date'];
$arr_data['loanamount'] =$qr_fet['loanamount'];
$arr_data['interest'] = $qr_fet['interest'];
$arr_data['loantype'] = $qr_fet['loantype'];	
$arr_data['collectionamt'] = $qr_fet['collectionamt_day'];
 //$arr_data['loanamount'] =$qr_fet['loanamount'];
// $arr_data['amount'] =$qr_fet['balance_amount'];
	// echo$qr_fet['amount']."||GOOD";
}
if($arr_data['loantype'] == 'chittai')
{
	$sum_amount = 0;
	$sql = "SELECT * FROM tbreceipt_entry WHERE loanno='$loanno' AND receipttype ='chittai'";

$res = mysqli_query($link,$sql);
while($row=mysqli_fetch_array($res)){
	$sum_amount += $row['amount'];
}
$arr_data['chittai'] = $sum_amount;
}
elseif($arr_data['loantype'] == 'interest'){
$sum_amount1 = 0;
$sql = "SELECT * FROM tbreceipt_entry WHERE loanno ='$loanno' AND receipttype = 'interest'";
$res = mysqli_query($link,$sql);
while($row=mysqli_fetch_array($res)){
	$sum_amount1 += $row['amount'];
}
$arr_data['interest_paid'] = $sum_amount1;
$sum_amount2 = 0;
$sql1 = "SELECT * FROM tbreceipt_entry WHERE loanno = '$loanno' AND receipttype = 'principal'";
$res1 = mysqli_query($link,$sql1);
while($row1=mysqli_fetch_array($res1)){
	$sum_amount2 +=$row1['amount'];
}
$arr_data['principal'] = $sum_amount2;
}
echo json_encode($arr_data);
?>  