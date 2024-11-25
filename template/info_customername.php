<?php 
$name =$_GET['name'];
$arr_data = [];
// include"dbconfig.php";
// $link = opencon();
$link=mysqli_connect("localhost","root","","balafinance");

$qr = "select * from tbinterest_loan where customername='$name'";   // and plan='WC'";
// echo$qr;
$qr_exe = mysqli_query($link,$qr);
while ($qr_fet = mysqli_fetch_array($qr_exe)){
$arr_data['customername'] =$qr_fet['customername'];
$arr_data['date'] =$qr_fet['date'];
$arr_data['loanamount'] =$qr_fet['loanamount'];
// $arr_data['address'] =$qr_fet['address'];
// $arr_data['amount'] =$qr_fet['balance_amount'];
	// echo$qr_fet['customer_name']."||GOOD";
}
echo json_encode($arr_data);
?>	