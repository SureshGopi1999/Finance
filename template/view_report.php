  <?php
require("function.php");
$ledger = $_GET['ledger'];
$check = $_GET['val'];
$fdate = $_GET['fdate'];
$tdate = $_GET['tdate'];
$db=new data();
if($check == 'day'){
$ledgers = $db->ledgerreportday('tbvoucher',$ledger);
}elseif($check == 'month'){
  $ledgemon = $db->ledgerreportmonth('tbvoucher',$ledger);
}elseif($check == 'day' && $fdate != null && $tdate != null){
  $ledgedayfdate = $db->ledgerdayftdate('tbvoucher',$ledger,$fdate,$tdate);
}elseif($check == 'month' && $fdate != null && $tdate != null){
  $ledgemonthfdate = $db->ledgermonthftdate('tbvoucher',$ledger,$fdate,$tdate);
}else{
  $ledgeftdate = $db->ledgerftdate('tbvoucher',$ledger,$fdate,$tdate);
}
?>  
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BALA FINANCE</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<style>
  .form-group .form-control{
    border:0.5px solid black;
  }
  </style>
<body>
  <!-- <div class="row" id="proBanner">
    <div class="col-12">
      <span class="d-flex align-items-center purchase-popup">
         <p>Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!</p> -->
        <!-- <a href="https://bootstrapdash.com/demo/polluxui/template/index.html?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn download-button purchase-button ml-auto">Upgrade To Pro</a> -->
        <!-- <i class="typcn typcn-delete-outline" id="bannerClose"></i> -->
      </span>
    </div>
  </div> 
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
   
<?php
// include("partials/_navbar.php");
?>

      </div>
    </nav>
     <!-- partial -->
    
     <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close typcn typcn-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close typcn typcn-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php
      // include("partials/_sidebar.php");
      ?>


          
        </ul>
      </nav>
      
      <!------>
      <div class="col-10 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center"><?php echo $ledger;?></h4>
                  <ul class="list-group list-group-flush">
    <li class="list-group-item"></li>
    <li class="list-group-item text-center">Ledger Account</li>
    <li class="list-group-item text-center"><?php if($check == 'day'){
       echo "<span> Day Wise Reports </span>";
    }elseif($check == 'month'){
        echo "<span> Month Wise Reports </span>";
    }elseif(isset($fdate)){
        echo "<span>".$fdate ." to ".$tdate."</span>";
    }
        ?></li>
    <li class="list-group-item"></li>
  </ul>
  <table class="table">
    <thead>
        <tr>
            <th scope="col">Sl.No</th>
            <th scope="col">Date</th>
            <th scope="col">Particulars</th>
            <th scope="col">Vr.Type</th>
            <th scope="col">Vr.No</th>
            <th scope="col">Debit</th>
            <th scope="col">Credit</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $totalDebit = 0;
        $totalCredit = 0;
        if($check == 'day'){
        $slno = 1;
        foreach($ledgers as $ledge){
            echo "<tr>";
            echo "<td>".$slno++."</td>";
            echo "<td>".$ledge['date']."</td>";
            echo "<td>".$ledge['lname']."</td>";
            echo "<td>".$ledge['vouchertype']."</td>";
            echo "<td>".$ledge['voucherno']."</td>";
            echo "<td>".$ledge['debit']."</td>";
            echo "<td>".$ledge['credit']."</td>";
            echo "</tr>";
            $totalDebit += (float) $ledge['debit'];
            $totalCredit += (float) $ledge['credit'];
        }
      }elseif($check == 'month'){
        $slno = 1;
        foreach($ledgemon as $ledge){
          echo "<tr>";
          echo "<td>".$slno++."</td>";
          echo "<td>".$ledge['month_name']."</td>";
          echo "<td>".$ledge['lname']."</td>";
          echo "<td>".$ledge['vouchertype']."</td>";
          echo "<td>".$ledge['voucherno']."</td>";
          echo "<td>".$ledge['total_debit']."</td>";
          echo "<td>".$ledge['total_credit']."</td>";
          echo "</tr>";
          $totalDebit += (float) $ledge['total_debit'];
          $totalCredit += (float) $ledge['total_credit'];
      }
      }elseif($check == 'day' && $fdate != null && $tdate != null){
        $slno = 1;
        foreach($ledgedayfdate as $ledge){
          echo "<tr>";
          echo "<td>".$slno++."</td>";
          echo "<td>".$ledge['date']."</td>";
          echo "<td>".$ledge['lname']."</td>";
          echo "<td>".$ledge['vouchertype']."</td>";
          echo "<td>".$ledge['voucherno']."</td>";
          echo "<td>".$ledge['debit']."</td>";
          echo "<td>".$ledge['credit']."</td>";
          echo "</tr>";
          $totalDebit += (float) $ledge['debit'];
          $totalCredit += (float) $ledge['credit'];
      }
      }elseif($check == 'month' && $fdate !=null && $tdate!=null){
        $slno = 1;
        foreach($ledgemonthfdate as $ledge){
          echo "<tr>";
          echo "<td>".$slno++."</td>";
          echo "<td>".$ledge['month_name']."</td>";
          echo "<td>".$ledge['lname']."</td>";
          echo "<td>".$ledge['vouchertype']."</td>";
          echo "<td>".$ledge['voucherno']."</td>";
          echo "<td>".$ledge['total_debit']."</td>";
          echo "<td>".$ledge['total_credit']."</td>";
          echo "</tr>";
          $totalDebit += (float) $ledge['total_debit'];
          $totalCredit += (float) $ledge['total_credit'];
      }
      }else{
        $slno = 1;
        foreach( $ledgeftdate as $ledge){
          echo "<tr>";
          echo "<td>".$slno++."</td>";
          echo "<td>".$ledge['date']."</td>";
          echo "<td>".$ledge['lname']."</td>";
          echo "<td>".$ledge['vouchertype']."</td>";
          echo "<td>".$ledge['voucherno']."</td>";
          echo "<td>".$ledge['debit']."</td>";
          echo "<td>".$ledge['credit']."</td>";
          echo "</tr>";

          $totalDebit += (float) $ledge['debit'];
          $totalCredit += (float) $ledge['credit'];
      }
      }
?>
    </tbody>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Total:</td>
            <td></td>
            <td><?php echo $totalDebit;?></td>
            <td><?php echo $totalCredit;?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>To Opening Balance:</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>By Closing Balance:</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
  </table>
                    
</div>
</div>
</form>


                    
                    <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>