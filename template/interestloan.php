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
      <div class="col-10 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">INTEREST LOAN</h4>
                  <form class="form-sample" action="interestloan_insert.php" method="POST">
                    <p class="card-description">
                      
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Loan No</label>
                          <div class="col-sm-9">
                            <input type="text" name="loanno" id="loanno" class="form-control" placeholder="Loan No"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Loan Type</label>
                          <div class="col-sm-9">
                            <input type="text" name="loantype" id="loantype" class="form-control" placeholder="Loan Type"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Customer Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="customername" id="customername" class="form-control" placeholder="Customer Name"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input type="date" name="date" id="date" class="form-control" placeholder=""/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Contact Number</label>
                          <div class="col-sm-9">
                          <input type="text"  name="contactno" id="contactno" class="form-control" placeholder="Contact Number"/>
                            <!-- <select class="form-control">
                              <option>Male</option>
                              <option>Female</option>
                            </select> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Loan Amount</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="loanamount" id="loanamount" placeholder="Loan Amount"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Interest</label>
                          <div class="col-sm-9">
                          <input class="form-control" name="interest" id="interest" placeholder="Interest"/>
                          </div>
                        </div>
                      </div>
                     
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Days</label>
                          <div class="col-sm-9">
                            <input type="text" name="days" id="days" class="form-control" placeholder="Days">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Document Charges</label>
                          <div class="col-sm-9">
                            <input type="text" name="document_charges" id="document_charges" class="form-control" placeholder="Document Charges"/>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Interest Taken</label>
                          <div class="col-sm-9">
                            <input type="text" name="interest_taken" id="interest_taken" class="form-control" placeholder="Interest Taken"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Interest Amount PerDay</label>
                          <div class="col-sm-9">
                            <input type="text" name="Interestamt_perday" id="Interestamt_perday" class="form-control" placeholder="Interest Amount PerDay"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Collection Amount/Day</label>
                          <div class="col-sm-9">
                            <input type="text" name="collectionamt_day" id="collectionamt_day"class="form-control" placeholder="Collection Amount/Day"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Given Amount</label>
                          <div class="col-sm-9">
                            <input type="text" name="givenamt" id="givenamt" class="form-control" placeholder="Given Amount"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Payment AC</label>
                          <div class="col-sm-9">
                            <input type="text" name="paymentac" id="paymentac" class="form-control" placeholder="Reference By"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Narration</label>
                          <div class="col-sm-9">
                            <input type="text" name="narration" id="narration" class="form-control" placeholder="Narration"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">ID Details</label>
                          <div class="col-sm-9">
                          <input type="text" name="id_details" id="id_details" class="form-control" placeholder="ID Details"/>

                            <!-- <select class="form-control" name="idproof" >
                            <option>Select</option>
                              <option value="aadharcard">AADHAR CARD</option>
                              <option value="voterid">VOTER ID</option>
                              <option value="pancard">PANCARD</option>
                              <option value="drivinglicense">DRIVING LICENSE</option>
                            </select> -->
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <!-- <label class="col-sm-3 col-form-label">ID Proof No</label>
                          <div class="col-sm-9">
                            <input type="text" name="idproofno" class="form-control" placeholder="ID Proof No"/> -->
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                         <!-- <label class="col-sm-3 col-form-label"></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>-->
                      </div>
                    </div> 
                    <br>
                    <br>
                   <center> <button type="submit" name="insert" id="insert" class="btn btn-primary mb-2">SAVE</button>
                    <button type="" class="btn btn-info mb-2">Refresh</button>
                    <button type="" class="btn btn-info mb-2">ACTIVE</button></center>
                    <a href="documentupload.php"><button type="submit" class="btn btn-danger mb-2">Open Document</a></button> 


                    
</div>
</div>
</form>
<!-- <script>
  $(document).ready(function(){
    $('#insert').click(function(){
      var loanno=$('#loanno').val();
      var loantype=$('#loantype').val();
      var customername=$('#customername').val();
      var date=$('#date').val();
      var contactno=$('#contactno').val();
      var loanamount=$('#loanamount').val();
      var interest=$('#interest').val();
      var days=$('#days').val();
      var document_charges=$('#document_charges').val();
      var interest_taken=$('#interest_taken').val();
      var Interestamt_perday=$('#Interestamt_perday').val();
      var collectionamt_day=$('#collectionamt_day').val();
      var givenamt=$('#givenamt').val();
      var paymentac=$('#paymentac').val();
      var narration=$('#narration').val();
      var id_details=$('#id_details').val();
      if (loanno!="", loantype!="", customername!="", date!="", contactno!="", loanamount!="", interest!="", days!="", document_charges!="", interest_taken!="", Interestamt_perday!="",
      collectionamt_day!="", givenamt!="", paymentac!="", narration!="", id_details!="",){
        $.ajax({
          url:"interestloan_insert.php",
          type:"GET",
          data:{loanno:loanno,loantype:loantype,customername:customername,date:date,contactno:contactno,loanamount:loanamount,interest:interest,
            days:days,document_charges:document_charges,interest_taken:interest_taken,Interestamt_perday:Interestamt_perday,collectionamt_day:collectionamt_day,
            givenamt:givenamt,paymentac:paymentac,narration:narration,id_details:id_details},
            success:function(response){

            }
        });
      }
      
    });
  });
</script> -->
                   



<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">INTEREST DETAILS</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p> -->
                  <div class="table-responsive pt-3">
                  <!-- <div class="table-responsive"> -->
                    <table class="table">
                      <thead>
                        <tr>
                          <th></th>
                          <th>SINo.</th>
                          <th>Voucher No</th>
                          <th>Voucher Date</th>
                          <th>Voucher Type</th>
                          <th>Debit</th>
                          <th>Credit</th>
                          <th>Narration</th>
                          <th>Bill Type</th>
                          <th>Receipt Ac</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td></td>
                          <td>Jacob</td>
                          <td>53275531</td>
                          <td>12 May 2017</td>
                          <td><label class="badge badge-danger">Pending</label></td>
                        </tr>
                        
                      </tbody>
                    </table>
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

</html>

