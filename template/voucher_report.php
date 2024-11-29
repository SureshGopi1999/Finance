<?php
require("function.php");

$vname = $_GET['vname']; 
$db = new data();


$data = $db->vouchernum('tbvoucher', $vname);


echo json_encode($data);
?>
