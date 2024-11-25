<?php
require("function.php");
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $con=new data();
    // echo"working";

    // if($_POST['insert']==="insert"){
        echo "working";
        $data=[
            "customer_id"=>$_POST['customer_id'],
            "loanno"=>$_POST['loanno'],
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
         $sai=$con->insert("tbcustomer",$data);
        if($sai){
            // echo "INSERTED SUCCESS";
            echo "<script>alert('Insert Successfully'),
            window.location.href='interestloan.php'</script>";
    }else{
        echo "INSERTED ERROR";
    }
        // }
        // $data->closeconnect();
    }
?>