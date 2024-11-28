<?php
require("function.php");
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $con=new data();
    // echo"working";

    // if($_POST['insert']==="insert"){
        echo "working";
        $data=[
            "ledgername"=>$_POST['ledgername'],
            "balancesheet"=>$_POST['balancesheet'],
            "bata"=>$_POST['bata'],
            "address"=>$_POST['address'],
            "gstin"=>$_POST['gstin']
           
        ];
         $sai=$con->insert("tbaccounts_master",$data);
        if($sai){
            // echo "INSERTED SUCCESS";
            echo "<script>alert('Insert Successfully'),
            window.location.href='accountsmaster.php'</script>";
    }else{
        echo "INSERTED ERROR";
    }
        // }
        // $data->closeconnect();
    }
?>