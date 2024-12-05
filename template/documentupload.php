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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Principal Paid Details</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table</code>
                  </p> -->

                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Loan NO</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" id="loanno" />
                          </div>
                          <button type="submit" id="upload" class="btn-sm btn btn-success">UPLOAD</button>
                        </div>
                      </div>
                      
<div>
                  <!-- <div class="table-responsive"> -->
                    <!-- <table class="table">
                      <thead>
                        <tr>
                          <th>SINo</th>
                          <th>Document Type</th>
                          <th>Upload files</th>
                         
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                          <td>AATHAR CARD</td>
                          <td>UPLOAD</td>
                        
                        </tr>
                        
                      </tbody>
                    </table> -->
                <thead>
                    <th>
                        Document Type
</th>

                    <th>
                         Upload
</th>
                </thead>

                    <ul>
                    <li>
    AADHAR CARD 
    <span id="aadhar">
        <input type="file" id="aadhar-input" enctype="multipart/form-data" style="display:none;">
        <i class="bi bi-upload" id="aadhar-icon" style="font-size: 20px; margin-left:102px;"></i>
    </span>
</li>
<li>
    CHEQUE 
    <span id="cheque">
        <input type="file" id="cheque-input" enctype="multipart/form-data" style="display:none;">
        <i class="bi bi-upload" id="cheque-icon" style="font-size: 20px; margin-left:145px;"></i>
    </span>
</li>

                    <li>E.C <span id="ec"><input type="file" id="ec-input" enctype="multipart/form-data" style="display:none;">
                    <i class="bi bi-upload" id="ec-icon" style="font-size: 20px; margin-left:179px;"></i>
                  </span></li>
                    <li>PAN CARD <span id="pan"><input type="file" id="pan-input" enctype="multipart/form-data" style="display:none;">
                    <i class="bi bi-upload" id="pan-icon" style="font-size: 20px; margin-left:132px;"></i>
                  </span></li>
                    <li>PROMISERY PAPER <span id="paper"><input type="file" id="paper-input" enctype="multipart/form-data" style="display:none;">
                    <i class="bi bi-upload" id="paper-icon" style="font-size: 20px; margin-left:83px;"></i>
                  </span></li>
                    <li>PROPERTY DOCUMENT <span id="document"><input type="file" id="doc-input" enctype="multipart/form-data" style="display:none;">
                    <i class="bi bi-upload" id="doc-icon" style="font-size: 20px; margin-left:57px;"></i>
                  </span></li>
                    <li>RC <span id="rc"><input type="file" id="rc-input" enctype="multipart/form-data" style="display:none;">
                    <i class="bi bi-upload" id="rc-icon" style="font-size: 20px; margin-left:185px;"></i>
                  </span></li>
                    </ul>
                    
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
  $(document).ready(function() {
    $("#upload").on('click', function(e) {
      e.preventDefault();

      // Create a FormData object
      var formData = new FormData();
      formData.append("loanno", $("#loanno").val());
      formData.append("aadhar", $("#aadhar-input")[0].files[0]);
      formData.append("cheque", $("#cheque-input")[0].files[0]);
      formData.append("ec", $("#ec-input")[0].files[0]);
      formData.append("pan", $("#pan-input")[0].files[0]);
      formData.append("paper", $("#paper-input")[0].files[0]);
      formData.append("doc", $("#doc-input")[0].files[0]);
      formData.append("rc", $("#rc-input")[0].files[0]);

      // AJAX request
      $.ajax({
        url: 'doc_up.php',
        type: 'POST',
        data: formData,
        processData: false, // Prevent jQuery from processing the data
        contentType: false, // Prevent jQuery from setting content type
        success: function(response) {
          alert(response);
        },
        error: function(xhr, status, error) {
          alert("Error: " + error);
        }
      });
    });
  });
</script>

<script>
  $(document).ready(function () {
    // AADHAR CARD
    const aadharInput = document.getElementById('aadhar-input');
    const aadharIcon = document.getElementById('aadhar-icon');

    aadharIcon.addEventListener('click', function () {
        aadharInput.click(); 
    });

    aadharInput.addEventListener('change', function () {
        if (aadharInput.files.length > 0) {
            aadharIcon.classList.remove('bi-upload');
            aadharIcon.classList.add('bi-check-circle');
            
            aadharIcon.style.color = 'green';
        }
    });

    // CHEQUE
    const chequeInput = document.getElementById('cheque-input');
    const chequeIcon = document.getElementById('cheque-icon');

    chequeIcon.addEventListener('click', function () {
        chequeInput.click(); 
    });

    chequeInput.addEventListener('change', function () {
        if (chequeInput.files.length > 0) {
            
            chequeIcon.classList.remove('bi-upload');
            chequeIcon.classList.add('bi-check-circle');
           
            chequeIcon.style.color = 'green';
        }
    });

    //EC
   const ecInput = document.getElementById('ec-input');
   const ecIcon = document.getElementById('ec-icon');

   ecIcon.addEventListener('click', function(){
    ecInput.click();
   });

   ecInput.addEventListener('change', function(){
    if(ecInput.files.length > 0){
      ecIcon.classList.remove('bi-upload');
      ecIcon.classList.add('bi-check-circle');

      ecIcon.style.color = 'green';
    }
   });

   //PAN CARD
   const panInput = document.getElementById('pan-input');
   const panIcon = document.getElementById('pan-icon');

   panIcon.addEventListener('click', function(){
    panInput.click();
   });

   panInput.addEventListener('change', function(){
    if(panInput.files.length > 0){
      panIcon.classList.remove('bi-upload');
      panIcon.classList.add('bi-check-circle');

      panIcon.style.color = 'green';
    }
   });
   
   //PAPER 
   const paperInput = document.getElementById('paper-input');
   const paperIcon = document.getElementById('paper-icon');

   paperIcon.addEventListener('click', function(){
    paperInput.click();
   });

   paperInput.addEventListener('change', function(){
    if(paperInput.files.length > 0){
      paperIcon.classList.remove('bi-upload');
      paperIcon.classList.add('bi-check-circle');

      paperIcon.style.color = 'green';
    }
   });

   //DOCUMENT
   const docInput = document.getElementById('doc-input');
   const docIcon = document.getElementById('doc-icon');

   docIcon.addEventListener('click', function(){
    docInput.click();
   });

   docInput.addEventListener('change', function(){
    if(docInput.files.length > 0){
      docIcon.classList.remove('bi-upload');
      docIcon.classList.add('bi-check-circle');

      docIcon.style.color = 'green';
    }
   });

   //RC
   const rcInput = document.getElementById('rc-input');
   const rcIcon = document.getElementById('rc-icon');

   rcIcon.addEventListener('click', function(){
    rcInput.click();
   });

   rcInput.addEventListener('change', function(){
    if(rcInput.files.length > 0){
      rcIcon.classList.remove('bi-upload');
      rcIcon.classList.add('bi-check-circle');

      rcIcon.style.color = 'green';
    }
   });
});
</script>

</html>