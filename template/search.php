<?php
require("function.php");

$db = new data();

// Retrieve GET parameters
$sdate = isset($_GET['sdate']) ? $_GET['sdate'] : null;
$edate = isset($_GET['edate']) ? $_GET['edate'] : null;
$vtype = isset($_GET['vtype']) ? $_GET['vtype'] : null;
$vname = isset($_GET['vname']) ? $_GET['vname'] : null;
$vno = isset($_GET['vno']) ? $_GET['vno'] : null;

$user = $db->user('tbvoucher', $sdate, $edate, $vtype, $vname, $vno);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PolluxUI Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        <a href="https://bootstrapdash.com/demo/polluxui/template/index.html?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn download-button purchase-button ml-auto">Upgrade To Pro</a>
        <i class="typcn typcn-delete-outline" id="bannerClose"></i>
      </span>
    </div>
  </div> 
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
   
<?php
include("partials/_navbar.php");
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
      include("partials/_sidebar.php");
      ?>


          
        </ul>
      </nav>
      <!------>

      
<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
<!-- <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">   search</h4>
                   <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p> 
                  <div class="table-responsive"> -->
<!-- form data opening-->
                  


            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">SEARCH</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p> -->
  
                  <form action="" method="POST">
                    <center>
    <label for="start_date">Start Date:</label>
    <input type="date" id="start_date" name="start_date" required>

    <label for="end_date">End Date:</label>
    <input type="date" id="end_date" name="end_date" required>

   <!-- <button type="submit" class="btn btn-success mb-2">Search</button></center> -->
</form>
                  <div class="table-responsive pt-3">
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Voucher Type</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="balancesheet" id="vtype">
                              <option value="payment">PAYMENT</option>
                              <option value="receipt">RECEIPT</option>
                              <option value="purchase">PURCHASE</option>
                              <option value="sales">SALES</option>
                              <option value="journal">JOURNAL</option>
                              <option value="credit">CREDIT</option>
                              <option value="debit">DEBIT</option>
                              <option value="contra">CONTRA</option>
                              
                            </select>
                          </div>
                        </div>
                      </div>
                     
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Voucher No</label>
                          <div class="col-sm-9">
                            <input type="text" name="vno" id="vno" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Voucher Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="vname" id="vname" class="form-control" />
                          </div>
                        </div>
                      </div>
                      
                      <!-- <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Voucher No</label>
                          <div class="col-sm-9">
                            <input type="text" name="district" class="form-control" />
                          </div>
                        </div>
                      </div> -->
                    </div>

           <center><a href="printreport.php"><button type="submit" name="preprt" id="preport" class="btn btn-primary mb-2">Print Report</button></a>
           <button type="submit" id="refresh" class="btn btn-info mb-2">Refresh</button>
           </center>
           
                  
              </div>
            </div>
</div>
</div>

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">VOUCHER</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p> -->
                  <div class="table-responsive pt-3">

    <table class="table table-bordered">
      <thead>
        <tr>
            <th>Serial</th>
            <th>Voucher Name</th>
            <th>Voucher Number</th>
            <th>Voucher Type</th>
            <th>Date</th>
            <th>Narration</th>
            <th>Debit</th>
            <th>Credit</th>
        </tr>
</thead>
<tbody>
<?php if (!empty($user)): ?>
        <?php
        $serial = 1;
        foreach ($user as $users):
        ?>
            <tr>
                <td><button 
                    type="button" 
                    class="btn btn-primary print-btn" 
                    data-serial="<?php echo $serial++; ?>" 
                    data-lname="<?php echo htmlspecialchars($users['lname']); ?>" 
                    data-voucherno="<?php echo htmlspecialchars($users['voucherno']); ?>" 
                    data-vouchertype="<?php echo htmlspecialchars($users['vouchertype']); ?>" 
                    data-date="<?php echo htmlspecialchars($users['date']); ?>" 
                    data-narration="<?php echo htmlspecialchars($users['narration']); ?>" 
                    data-debit="<?php echo htmlspecialchars($users['debit']); ?>" 
                    data-credit="<?php echo htmlspecialchars($users['credit']); ?>"
                >
                    <i class="bi bi-printer"> Print</i>
                </button></td>
                <td><?php echo htmlspecialchars($users['lname']); ?></td>
                <td><?php echo htmlspecialchars($users['voucherno']); ?></td>
                <td><?php echo htmlspecialchars($users['vouchertype']); ?></td>
                <td><?php echo htmlspecialchars($users['date']); ?></td>
                <td><?php echo htmlspecialchars($users['narration']); ?></td>
                <td><?php echo htmlspecialchars($users['debit']); ?></td>
                <td><?php echo htmlspecialchars($users['credit']); ?></td>
            </tr>
        <?php endforeach; ?>
<?php endif; ?>
        </tbody>
        </table>

                  </div>
                </div>
              </div>
            </div>

</div>
</div>
                    
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function () {
    $("#vname").on('input', function (e) {
      e.preventDefault();
      var vname = $(this).val(); 
      $.ajax({
        url: 'voucher_report.php', 
        type: 'GET',
        data: { vname: vname },
        success: function (response) {
          var data = JSON.parse(response);
          if (data.length > 0) {
            $("#vno").val(data[0]); 
          } else {
            $("#vno").val(''); 
          }
        },
        error: function (xhr, status, error) {
          console.error("Error: " + error);
        }
      });
    });
  });
</script>
<script>
  $(document).ready(function () {
    $("#preport").on('click', function (e) {
      e.preventDefault();
      var sdate = $("#start_date").val();
      var edate = $("#end_date").val();
      var vtype = $("#vtype").val();
      var vname = $("#vname").val();
      var vno = $("#vno").val();

      var params = "?sdate=" + encodeURIComponent(sdate) +
                   "&edate=" + encodeURIComponent(edate) +
                   "&vtype=" + encodeURIComponent(vtype) +
                   "&vname=" + encodeURIComponent(vname) +
                   "&vno=" + encodeURIComponent(vno);

      window.location.href = "search.php" + params;

    });
    const url = new URL(window.location.href);
    if (url.search) { 
      history.replaceState(null, "", url.pathname);
    }
  });
</script>
<script>
  $(document).ready(function () {
    $("#refresh").on('click', function (e) {
      e.preventDefault();
      var sdate = $("#start_date").val();
      var edate = $("#end_date").val();
      var vtype = $("#vtype").val();
      var vname = $("#vname").val();
      var vno = $("#vno").val();

      var params = "?sdate=" + encodeURIComponent(sdate) +
                   "&edate=" + encodeURIComponent(edate) +
                   "&vtype=" + encodeURIComponent(vtype) +
                   "&vname=" + encodeURIComponent(vname) +
                   "&vno=" + encodeURIComponent(vno);

    window.location.href = "search.php" + params;
    });
    const url = new URL(window.location.href);
    if (url.search) { 
      history.replaceState(null, "", url.pathname);
    }
  });
</script>
<script>
  $(document).ready(function () {
    $(".print-btn").click(function () {
        // Extract data from the clicked button's data attributes
        const rowData = {
          serial: $(this).data("serial"),
            lname: $(this).data("lname"),
            voucherno: $(this).data("voucherno"),
            vouchertype: $(this).data("vouchertype"),
            date: $(this).data("date"),
            narration: $(this).data("narration"),
            debit: $(this).data("debit"),
            credit: $(this).data("credit"),
        };

        // Convert data to a query string
        const queryString = $.param(rowData);

        // Redirect to the new page with the query string
        window.location.href = "printreport.php?" + queryString;
    });
});

</script>




</html>