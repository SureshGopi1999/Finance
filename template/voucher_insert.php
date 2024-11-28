<?php
require("function.php");
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $con=new data();
    // echo"working";

    // if($_POST['insert']==="insert"){
        //echo "working";
        $data=[
            "vouchertype"=>$_POST['vouchertype'],
            "voucherno"=>$_POST['voucherno'],
            "date"=>$_POST['date'],
            "costcenter"=>$_POST['costcenter'],
            "Dr_Cr"=>$_POST['Dr_Cr'],
            "lname"=>$_POST['lname'],
            "debit"=>$_POST['debit'],
            "credit"=>$_POST['credit'],
            "openingbal"=>$_POST['openingbal'],
            "txt_Dr_Cr"=>$_POST['txt_Dr_Cr'],
            "txt_name"=>$_POST['txt_name'],
            "txt_debit"=>$_POST['txt_debit'],
            "txt_credit"=>$_POST['txt_credit'],
            "closingbal"=>$_POST['closingbal'],
            "narration"=>$_POST['narration']
           
        ];
        echo "working";
         $bala=$con->insert("tbvoucher",$data);
        if($bala){
            // echo "INSERTED SUCCESS";
            echo "<script>alert('Insert Successfully'),
            window.location.href='voucher.php'</script>";
    }else{
        echo "INSERTED ERROR";
    }
        // }
        // $data->closeconnect();
    }
?>