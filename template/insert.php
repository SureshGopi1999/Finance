<?php
require("function.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $data=new data();
    if($_POST['insert']=="insert"){
        $dataa=[
            "customer_id"=>$_POST['customer_id'],
            "dontgiveloan"=>$_POST['dontgiveloan'],
            "ledgername"=>$_POST['ledgername'],
            "tamilname"=>$_POST['tamilname'],
            "dateofbrith"=>$_POST['dateofbrith'],
            "age"=>$_POST['age'],
            "balancesheet"=>$_POST['balancesheet'],
            "presentaddress"=>$_POST['presentaddress'],
            "permanetaddress"=>$_POST['permanetaddress'],
            "district"=>$_POST['district'],
            "state"=>$_POST['state'],
            "phone"=>$_POST['phone'],
            "guranderdetails"=>$_POST['guranderdetails'],
            "referenceby"=>$_POST['referenceby'],
            "referencedetailed"=>$_POST['referencedetailed'],
            "idproof"=>$_POST['idproof']
        ];
         $sai=$data->insert("tbcustomer",$dataa);
        if($sai){
            // echo "INSERTED SUCCESS";
            echo "<script>alert('Insert Successfully'),
            window.location.href='table.php'</script>";
    }else{
        echo "INSERTED ERROR";
    }
        }
        // $data->closeconnect();
    }
?>