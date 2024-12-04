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
                  <h4 class="card-title">Receipt Entry</h4>
                  <form class="form-sample" action="receipt_insert.php" method="POST">
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
                          <label class="col-sm-3 col-form-label">Customer Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Customer Name"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Name</label>
                          <div class="col-sm-7">
                            <input type="text" name="name" id="customername" class="form-control" placeholder="Name" readonly/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Date</label>
                          <div class="col-sm-7">
                            <input type="text" name="date" id="date" class="form-control"placeholder="date" readonly/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label"> Amount</label>
                          <div class="col-sm-7">
                            <input type="text" name="amount" id="loanamount" class="form-control" placeholder="0.00" readonly/>
                          </div>
                        </div>
                      </div>
                    </div>
<br>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Voucher No</label>
                          <div class="col-sm-9">
                            <input type="text" name="voucherno" id="voucherno" class="form-control" placeholder="Voucher No"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Voucher Date</label>
                          <div class="col-sm-9">
                            <input type="text" name="voucher_date" id="voucher_date" class="form-control" placeholder="Voucher Date"/>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Receipt AC</label>
                          <div class="col-sm-9">
                            <input type="text" name="receiptac" id="" class="form-control" placeholder=" Receipt Ac"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Amount</label>
                          <div class="col-sm-9">
                            <input type="text" name="amount" id="" class="form-control" placeholder="Amount"/>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Narration</label>
                          <div class="col-sm-9">
                            <input type="text" name="narration" id="" class="form-control" placeholder="Narration"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Receipt Type</label>
                          <div class="col-sm-9">
                            <!-- <input type="text" name="narration" id="narration" class="form-control" placeholder="Narration"/> -->
                            <select class="form-control" name="receipttype" id="receipttype"> >
                            <option value="">select</option>
                              <option value="interest">Interest</option>
                              <option value="principal">Principal</option>
                              <option value="chittai">Chittai</option>

                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"></label>
                          <div class="col-sm-9">
                           <input type="text" class="form-control" /> -->
                           <!-- <select class="form-control" name="receipttype" id="receipttype"> >
                            <option value="">select</option>
                              <option value="interest">Interest</option>
                              <option value="principal">Principal</option>
                              <option value="chittai">Chittai</option>

                            </select> 
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                           <label class="col-sm-3 col-form-label"></label>
                          <div class="col-sm-9">
                            <input class="form-control" name="" id="" placeholder="dd/mm/yyyy"/>
                          </div> 
                        </div>
                      </div>
                    </div> -->

                    <center>
                    <button type="submit" name="insert" class="btn btn-primary mb-2">Save</button>
                    </form>
                    <button type="submit" class="btn btn-primary mb-2">Refresh</button>


                    <button type="submit" class="btn btn-primary mb-2">UPDATE</button></center> 
                    <br>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Loan Amount</label>
                          <div class="col-sm-7">
                            <input type="text" name="amount" id="loanamount1" class="form-control" placeholder="0.00" readonly/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">No of Days</label>
                          <div class="col-sm-7">
                            <input type="text" name="" id="nodays" class="form-control" placeholder="0.00"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Interest Amount</label>
                          <div class="col-sm-7">
                            <input type="text" name="" id="interestamnt" class="form-control" placeholder="0.00"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">ChittaiTobePaid</label>
                          <div class="col-sm-7">
                            <input type="text" name="" id="chittai_paid" class="form-control" placeholder="0.00"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Penalty Amount</label>
                          <div class="col-sm-7">
                            <input type="text" name="" id="" class="form-control" placeholder="0.00"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Principal Paid</label>
                          <div class="col-sm-7">
                            <input type="text" name="" id="principal_paid" class="form-control" placeholder="0.00"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Interest Paid</label>
                          <div class="col-sm-7">
                            <input type="text" name="" id="interestpaid" class="form-control" placeholder="0.00"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Principal Balance</label>
                          <div class="col-sm-7">
                            <input type="text" name="" id="principal_bal" class="form-control" placeholder="0.00"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Interest Balalnce</label>
                          <div class="col-sm-7">
                            <input type="text" name="" id="interestbal" class="form-control" placeholder="0.00"/>
                          </div>
                        </div>
                      </div>
                    </div><div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Chittai Balance</label>
                          <div class="col-sm-7">
                            <input type="text" name="" id="chittai_bal" class="form-control" placeholder="0.00"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Balalnce Totoal</label>
                          <div class="col-sm-7">
                            <input type="text" name="" id="balance_total" class="form-control" placeholder="0.00"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <br>


                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" />
                            <!-- <select class="form-control">
                              <option>Category1</option>
                              <option>Category2</option>
                              <option>Category3</option>
                              <option>Category4</option>
                            </select> -->
                          </div>
                        </div>
                      </div>

            
                      <!-- <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Payment 1</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div> -->
                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Payment 1</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Payment 2</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Payment 3</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" />
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>

</html>
<script type="text/javascript">
    $(document).ready(function(){
      $("#loanno").focus();  //cursor show click avoid
        $("#loanno").keyup(function(){        //event
            // alert("click working");
            var loanno = $("#loanno").val();  
            $.ajax({
                url:"info.php",         //url
                method:"GET",           //
                data:{loanno:loanno},
                success:function(response){
                    response = JSON.parse(response);
                   $("#customername").val(response.customername);   //name show input bod
                   $("#date").val(response.date);    //amount show input name
                   $("#loanamount").val(response.loanamount);
                   $("#loanamount1").val(response.loanamount);
                   if(response.chittai){
                   $("#principal_paid").val(response.chittai);
                   }else{
                    $("#principal_paid").val(response.principal);
                   }
                   $("#chittai_paid").val(response.chittai);
                   $("#interestpaid").val(response.interest_paid);
                
                   var principal_bal = response.loanamount - response.chittai;
                   var principal_bal1 = response.loanamount - response.principal;
                   if(principal_bal){
                   $("#principal_bal").val(principal_bal);
                   }else{
                    $("#principal_bal").val(principal_bal1);
                   }

                  

                  // Calculate date difference
                  const currentDate = new Date();
                        var dateInput = response.date; // Date from AJAX response
                        var inputDate = new Date(dateInput);

                        if (!isNaN(inputDate.getTime())) { // Check for a valid date
                            var differenceInMs = inputDate - currentDate;
                            var differenceInDays = Math.ceil(differenceInMs / (1000 * 60 * 60 * 24));

                            if (differenceInDays >= 0) {
                                $("#nodays").val(` ${differenceInDays}`);
                            } else {
                                $("#nodays").val( `${Math.abs(differenceInDays)}`);
                            }
                        } else {
                            $("#nodays").val("0");
                        }

                    var interest = response.interest;
                    var days = $("#nodays").val();
                    var iamnt = interest * days ;
                    if(iamnt){ 
                    $("#interestamnt").val(iamnt);
                    }else{
                      $("#interestamnt").val('0')
                    }
                    var intbal =iamnt - response.interest_paid;
                    if(intbal){
                    $("#interestbal").val(intbal);
                    }else{
                      $("#interestbal").val('0');
                    }
                    // console.log(days);
                    var chittaipaid = $("#chittai_paid").val();
                    // console.log(response.collectionamt);
                    var chittai_bal = (days * chittaipaid);
                    var chittaibal = chittai_bal - response.collectionamt;
                    $("#chittai_bal").val(chittaibal);
                    var balance_total = principal_bal + chittaibal;
                    var balance_total1 = principal_bal1 + intbal;
                    if(balance_total){
                    $("#balance_total").val(balance_total);
                    }else{
                      $("#balance_total").val(balance_total1);
                    }

                 }

            });
            // alert("Ajax - TEST");
        });
     


      $("#name").keyup(function(){
            //alert("click working");
            var name = $("#name").val();
            $.ajax({
                url:"info_customername.php", 
                method:"GET",
                data:{name:name},
                success:function(response){
                  response = JSON.parse(response);
                   $("#customername").val(response.customername);   //name show input bod
                   $("#date").val(response.date);    //amount show input name
                   $("#loanamount").val(response.loanamount);
                   $("#loanamount1").val(response.loanamount);
                   if(response.chittai){
                   $("#principal_paid").val(response.chittai);
                   }else{
                    $("#principal_paid").val(response.principal);
                   }
                   $("#chittai_paid").val(response.chittai);
                   $("#interestpaid").val(response.interest_paid);
                
                   var principal_bal = response.loanamount - response.chittai;
                   var principal_bal1 = response.loanamount - response.principal;
                   if(principal_bal){
                   $("#principal_bal").val(principal_bal);
                   }else{
                    $("#principal_bal").val(principal_bal1);
                   }

                  

                  // Calculate date difference
                  const currentDate = new Date();
                        var dateInput = response.date; // Date from AJAX response
                        var inputDate = new Date(dateInput);

                        if (!isNaN(inputDate.getTime())) { // Check for a valid date
                            var differenceInMs = inputDate - currentDate;
                            var differenceInDays = Math.ceil(differenceInMs / (1000 * 60 * 60 * 24));

                            if (differenceInDays >= 0) {
                                $("#nodays").val(` ${differenceInDays}`);
                            } else {
                                $("#nodays").val( `${Math.abs(differenceInDays)}`);
                            }
                        } else {
                            $("#nodays").val("0");
                        }

                    var interest = response.interest;
                    var days = $("#nodays").val();
                    var iamnt = interest * days ;
                    if(iamnt){ 
                    $("#interestamnt").val(iamnt);
                    }else{
                      $("#interestamnt").val('0')
                    }
                    var intbal =iamnt - response.interest_paid;
                    if(intbal){
                    $("#interestbal").val(intbal);
                    }else{
                      $("#interestbal").val('0');
                    }
                    // console.log(days);
                    var chittaipaid = $("#chittai_paid").val();
                    // console.log(response.collectionamt);
                    var chittai_bal = (days * chittaipaid);
                    var chittaibal = chittai_bal - response.collectionamt;
                    $("#chittai_bal").val(chittaibal);
                    var balance_total = principal_bal + chittaibal;
                    var balance_total1 = principal_bal1 + intbal;
                    if(balance_total){
                    $("#balance_total").val(balance_total);
                    }else{
                      $("#balance_total").val(balance_total1);
                    }

                 }

            });
            // alert("Ajax - TEST 1");
        });
      });
 </script>


