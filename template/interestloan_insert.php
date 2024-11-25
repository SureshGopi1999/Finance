<?php
require("function.php");
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $con=new data();
    // echo"working";

    // if($_POST['insert']==="insert"){
        echo "working";
        $data=[
            "loanno"=>$_POST['loanno'],
            "loantype"=>$_POST['loantype'],
            "customername"=>$_POST['customername'],
            "date"=>$_POST['date'],
            "contactno"=>$_POST['contactno'],
            "loanamount"=>$_POST['loanamount'],
            "interest"=>$_POST['interest'],
            "days"=>$_POST['days'],
            "document_charges"=>$_POST['document_charges'],
            "interest_taken"=>$_POST['interest_taken'],
            "Interestamt_perday"=>$_POST['Interestamt_perday'],
            "collectionamt_day"=>$_POST['collectionamt_day'],
            "givenamt"=>$_POST['givenamt'],
            "paymentac"=>$_POST['paymentac'],
            "narration"=>$_POST['narration'],
            "id_details"=>$_POST['id_details']
            
        ];
         $bala=$con->insert("tbinterest_loan",$data);
        if($bala){
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