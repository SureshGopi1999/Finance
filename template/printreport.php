<?php
$vno = $_GET['voucherno'];
$date = $_GET['date'];
$vtype = $_GET['vouchertype'];
$vname = $_GET['lname'];
$debit = $_GET['debit'];
$credit = $_GET['credit'];
$narration = $_GET['narration'];
?>
<html>
<head>
</head>
<body>
    <center><h1>BALA FINANCE</h1>
    <h3>HANGKONG PLAZA</h3>
    <h3>TUTICORIN</h3></center>



    <h5>Voucher No :<span><?php echo $vno;?></span></h5>
    <h5>Voucher Date :<span><?php echo $date;?></span></h5>
    <h5>Voucher Type :<span><?php echo $vtype;?></span></h5>
    <br>

    <div>
    <table border="2" style="border-collapse:collapse; width:100%; text-align: ;">            
                  <thead>
                        <tr>
                          <th>Sl.No</th>
                          <th>Date</th>
                          <th>Particular</th>
                          <th>Dr(Rs.)</th>
                          <th>Cr(Rs.)</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                
                <tr>
                  <?php $serial=1;?>
                    <td><?php echo  $serial++;?></td>
                    <td><?php echo $date;?></td>
                    <td><?php echo $vname;?></td>
                    <td><?php echo $debit;?></td>
                    <td><?php echo $credit;?></td>

                     </tr>

            </tbody>
</table>

</div>
<br>
<span>Narration :</span><?php echo $narration;?>
<br>
<br>
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Receiver's Signature</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span>Authorised Signatory</span>


</body>
</html>