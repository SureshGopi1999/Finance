<?php
require("function.php");
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $con=new data();
    // echo"working";

    // if($_POST['insert']==="insert"){
        echo "working";
        $data=[
            "loanno"=>$_POST['loanno'],
            "name"=>$_POST['name'],
            "voucherno"=>$_POST['voucherno'],
            "voucher_date"=>$_POST['voucher_date'],
            "receiptac"=>$_POST['receiptac'],
            "amount"=>$_POST['amount'],
            "narration"=>$_POST['narration'],
            "receipttype"=>$_POST['receipttype']
            
        ];
         $sai=$con->insert("tbreceipt_entry",$data);
        if($sai){
            // echo "INSERTED SUCCESS";
            echo "<script>alert('Insert Successfully'),
            // window.location.href='receiptentry.php'</script>";
    }else{
        echo "INSERTED ERROR";
    }
        // }
        // $data->closeconnect();
    }
?>