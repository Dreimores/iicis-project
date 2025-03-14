<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>| CSU Lasam</title>
   <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
   <!-- Custom styles for this template-->
   <link href="css/sb-admin-2.min.css" rel="stylesheet" />
   <!-- Custom styles -->
   <link href="css/css.css" rel="stylesheet" type="text/css" />
   <!-- Custom css animation -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>

   <link href="img/csu_lasam_logo.webp" rel="icon">
</head>
<body>
   <div class="d-flex">
      <div class="col-xl-6 col-lg-12 bg-gradient-light">
         <div class="container col-xl-6 col-lg-12">
            <!-- Outer Row -->
            <?php
            unset($_SESSION['success']);
            $loginModel = new loginStudentModel();
            $studentNumbers = $loginModel->invalid_studentno();
            if ($_GET['route'] == 'sign-in') { ?>
               <div class="row justify-content-center align-items-center min-vh-100 animate__animated animate__fadeIn">
                  <div class="card o-hidden shadow">
                     <!-- Nested Row within Card Body  -->
                     <div class="row">
                        <img src="img/cagayan_state_university_lasam_campus_logo.png" class="img-fluid border-bottom" alt="Error">
                        <div class="col-xl-12">
                           <div class="p-4 mb-2">
                              <div class="h4 mb-4 text-center text-gray-800 sign-in-text"> Sign in </div>
                              <?php if (isset($_SESSION['errIncor'])) { ?>
                                 <div class="text-danger text-center position-relative animate__animated animate__shakeY" style="top: -10px;">
                                    <?= $_SESSION['errIncor'] ?>
                                 </div>
                              <?php };
                              unset($_SESSION['errIncor']) ?>
                              <form action="?route=login" method="post" class="user">
                                 <div class="mb-4">
                                    <div class="input-group">
                                       <div class="input-group-append">
                                          <div class="btn text-white py-2 bg-login">
                                             <i class="fas fa-user fa-md mt-2"></i>
                                          </div>
                                       </div>
                                       <input type="text" name="txtUName" placeholder="Enter student no."
                                          class="form-control form-control-user rounded-0" />
                                    </div>
                                    <?php if (isset($_SESSION['errUName'])) { ?>
                                       <span class="text-danger"><?= $_SESSION['errUName'] ?></span>
                                    <?php };
                                    unset($_SESSION['errUName']) ?>
                                 </div>
                                 <div class="mb-4">
                                    <div class="input-group">
                                       <div class="input-group-append">
                                          <div class="btn text-white py-2 bg-login">
                                             <i class="fas fa-key fa-sm mt-2"></i>
                                          </div>
                                       </div>
                                       <input type="password" name="txtPWord" id="txtPassworduser" placeholder="Enter password"
                                          class="form-control form-control-user rounded-0 textPWord" />
                                    </div>
                                    <?php if (isset($_SESSION['errPWord'])) { ?>
                                       <span class="text-danger"><?= $_SESSION['errPWord'] ?></span>
                                    <?php };
                                    unset($_SESSION['errPWord']) ?>
                                 </div>
                                 <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                       <input type="checkbox" id="customCheck" class="custom-control-input" />
                                       <label class="custom-control-label text-gray-900" for="customCheck"> Show password </label>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <button type="submit" class="btn btn-user btn-block text-white rounded-0 font-weight-bold bg-login"> Log in </button>
                                 </div>
                              </form>
                              <hr>
                              <div class="text-gray-800 text-center">
                                 Don't have an Account?
                                 <a class="h6" href="?route=sign-up"> Create One! </a>
                              </div>
                              <div class="text-center">
                                 <a class="h6" href="?route=forgot-password"> Forgot Password? </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            <?php }
            if ($_GET['route'] == 'sign-up') { ?>
               <div class="d-flex justify-content-center align-items-center min-vh-100 animate__animated animate__fadeIn">
                  <!-- Nested Row within Card Body  -->
                  <div class="card col-xl-12 col-lg-12 col-md-12 o-hidden shadow">
                     <div class="mb-4">
                        <div class="text-center border-bottom m-3">
                           <div class="h2 text-color text-nowrap">
                              <img src="img/csu_lasam_logo.webp" class="img-fluid d-lg-inline-block d-none" width="65">
                              Create an account!
                           </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                           <ul class="nav nav-pills">
                              <li class="nav-item small">
                                 <a class="nav-link active" id="Personal-tab" href="#Personal" data-bs-toggle="pill">
                                    Personal
                                 </a>
                              </li>
                              <li class="nav-item small">
                                 <a class="nav-link" id="Verification-tab" href="#Verification" data-bs-toggle="pill">
                                    Verification
                                 </a>
                              </li>
                              <li class="nav-item small">
                                 <a class="nav-link" id="Curriculum-tab" href="#Curriculum"
                                    data-bs-toggle="pill">
                                    Curriculum
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="tab-content">
                           <div class="d-flex justify-content-center">
                              <img class="img-profile rounded-circle sign-up-profile" id="imgProfPicture" width="75" height="75" />
                              <i class="fas fa-camera position-absolute bg-secondary text-white border-sign-up-profile" id="profile-sing-up"></i>
                              <input type="file" id="file-image" class="d-none file-image">
                           </div>
                           <div class="tab-pane fade show active  animate__animated animate__fadeIn" id="Personal">
                              <div class="col-sm-12 mb-3">
                                 <label for="cbYearLevel" class="form-label text-gray-900">
                                    Year level <span class="text-danger" id="yLevelReq"></span>
                                 </label>
                                 <select name="cbYearLevel" id="cbYearLevel" class="form-control cbYearLevel">
                                    <option value=""> Choose... </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                    <option value="4"> 4 </option>
                                 </select>
                                 <span id="errYearLevel" class="text-danger small"></span>
                              </div>
                              <div class="col-sm-12">
                                 <div class="row">
                                    <div class="col-sm-6 mb-3">
                                       <label for="txtLastName" class="form-label text-gray-900">
                                          Last Name <span class="text-danger" id="lNameReq"></span>
                                       </label>
                                       <input type="text" name="txtLastName" id="txtLastName" class="form-control" />
                                       <span id="errLastName" class="text-danger small"></span>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                       <label for="txtFirstName" class="form-label text-gray-900">
                                          First Name <span class="text-danger" id="fNameReq"></span>
                                       </label>
                                       <input type="text" name="txtFirstName" id="txtFirstName" class="form-control" />
                                       <span id="errFirstName" class="text-danger small"></span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6 mb-3">
                                       <label for="txtMiddleName" class="form-label text-gray-900">
                                          Middle Name <span class="text-danger" id="mNameReq"></span>
                                       </label>
                                       <input type="text" name="txtMiddleName" id="txtMiddleName" class="form-control" />
                                       <span id="errMiddleName" class="text-danger small"></span>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                       <label for="txtEmail" class="form-label text-gray-900">
                                          Email <span class="text-danger" id="emailReq"></span>
                                       </label>
                                       <input type="email" name="txtEmail" id="txtEmail" class="form-control" />
                                       <span id="errEmail" class="text-danger small"></span>
                                    </div>
                                 </div>
                              </div>
                              <!-- Add more personal fields here -->
                              <div class="d-flex justify-content-end">
                                 <button type="button" class="btn text-white mr-2 mb-1 next-tab btn-circle bg-sign-up" disabled id="nextStepBtn" title="Next step">
                                    <i class="fa fa-arrow-right"></i>
                                 </button>
                              </div>
                              <!-- end button -->
                           </div>
                           <div class="tab-pane show fade animate__animated animate__fadeIn" id="Verification">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label for="txtStudentNo" class="form-label text-gray-900">
                                       Student no. <span class="text-danger" id="sNoreq"></span>
                                    </label>
                                    <input type="text" name="txtStudentNo" id="txtStudentNo" class="form-control" />
                                    <span class="text-danger" id="errStudentno"></span>
                                 </div>
                                 <div class="form-group row">
                                    <label for="txtPassword" class="form-label text-gray-900 col-sm-12">
                                       Password <span class="text-danger" id="pWordReq"></span>
                                    </label>
                                    <div class="col-sm-12">
                                       <input type="password" name="txtPassword" id="txtPassword" class="form-control txtPassword" />
                                       <i class="fas fa-eye position-absolute text-gray-500 sign-up-pword d-none" style="top:11px;right:2.5rem;" id="sign-up-pword"></i>
                                       <span class="text-danger" id="errPassword"></span>
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="txtConfirmPassword" class="form-label text-gray-900 col-sm-12">
                                       Confirm password <span class="text-danger" id="cPwordReq"></span>
                                    </label>
                                    <div class="col-sm-12">
                                       <input type="password" id="txtConfirmPassword" class="form-control txtConfirmPassword" />
                                       <i class="fas fa-eye position-absolute text-gray-500 sign-up-cpword d-none" style="top:11px;right:2.5rem;" id="sign-up-cpword"></i>
                                       <span class="text-danger" id="errCPword"></span>
                                    </div>
                                 </div>
                              </div>
                              <!-- Add more Verification fields here -->
                              <div class="d-flex justify-content-end">
                                 <button type="button" class="btn btn-primary text-white prev-tab btn-circle" title="Preview">
                                    <i class="fas fa-undo"></i>
                                 </button>
                                 &nbsp;
                                 <button type="button" class="btn text-white mr-2 mb-1 btn-circle bg-sign-up" id="next-tab2" disabled title="Next step">
                                    <i class="fas fa-arrow-right"></i>
                                 </button>
                              </div>
                           </div>
                           <div class="tab-pane show fade animate__animated animate__fadeIn" id="Curriculum">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label for="cbCourse" class="form-label text-gray-900">
                                       Course <span class="text-danger" id="courseReq"></span>
                                    </label>
                                    <select name="cbCourse" id="cbCourse" class="form-control" onchange="getCourseId()">
                                       <option value="">Choose...</option>
                                       <?php $courseModel = new courseModel();
                                       foreach ($courseModel->read_courses() as $row) { ?>
                                          <option value="<?= $row['course'] ?>"><?= $row['course'] ?></option>
                                       <?php } ?>
                                    </select>
                                    <input type="hidden" name="courseid" id="courseid" class="form-control">
                                    <span class="text-danger" id="errCourse"></span>
                                 </div>
                                 <div class="form-group row">
                                    <label for="cbCollege" class="form-label text-gray-900 col-sm-12">
                                       College <span class="text-danger" id="collegeRq"></span>
                                    </label>
                                    <div class="col-sm-12">
                                       <select name="cbCollege" id="cbCollege" class="form-control" onchange="getcollegeId()">
                                          <option value="">Choose...</option>
                                          <?php $collegeModel = new collegeModel();
                                          foreach ($collegeModel->read_colleges() as $row) { ?>
                                             <option value="<?= $row['college'] ?>"><?= $row['college'] ?></option>
                                          <?php } ?>
                                       </select>
                                       <input type="hidden" name="collegeid" id="collegeid" class="form-control">
                                       <span id="errCollege" class="text-danger"></span>
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="cbMajor" class="form-label text-gray-900 col-sm-12">
                                       Major <span class="text-danger" id="majorReq"></span>
                                    </label>
                                    <div class="col-sm-12">
                                       <select name="cbMajor" id="cbMajor" class="form-control" onchange="getmajorId()">
                                          <option value="">Choose...</option>
                                          <?php $majorModel = new majorModel();
                                          foreach ($majorModel->read_majors() as $row) { ?>
                                             <option value="<?= $row['major'] ?>"><?= $row['major'] ?></option>
                                          <?php } ?>
                                       </select>
                                       <input type="hidden" name="majorid" id="majorid" class="form-control">
                                       <span class="text-danger" id="errMajor"></span>
                                    </div>
                                 </div>
                              </div>
                              <!-- Add more Curriculum fields here -->
                              <div class="d-flex justify-content-end">
                                 <button type="button" class="btn btn-primary text-white mr-2 prev-tab btn-circle" title="Preview">
                                    <i class="fas fa-undo"></i>
                                 </button>
                                 <button type="button" id="btnSubmitSaveSignUp" class="btn btn-success mr-2 mb-1 text-white btn-circle submitButton" disabled title="Save">
                                    <i class="fas fa-save"></i>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="text-gray-800 text-center">
                           Already have an account? <a href="?route=sign-in"> Sign In! </a>
                        </div>
                     </div>
                  </div>
               </div>
            <?php } if ($_GET['route'] === 'admin-sign-up') { ?>
               <form action="?route=create-admin-account" method="post">
                  <div class="d-flex justify-content-center align-items-center min-vh-100 animate__animated animate__fadeIn">
                     <!-- Nested Row within Card Body  -->
                     <div class="card col-xl-12 col-lg-12 col-md-12 o-hidden shadow">
                        <div class="mb-4">
                           <div class="text-center border-bottom mb-3 mt-3">
                              <div class="h2"> Create an Account! </div>
                           </div>
                           <div class="d-flex justify-content-center mb-3">
                              <img src="img/undraw_profile.svg" class="img-profile rounded-circle sign-up-profile" width="75" height="75" />
                              <i class="fas fa-camera position-absolute bg-secondary text-white border-sign-up-profile"></i>
                           </div>
                           <div class="col-sm-12">
                              <div class="row">
                                 <div class="col-sm-6 mb-2">
                                    <label for="adminLastName" class="form-label text-gray-900"> Last Name </label>
                                    <input type="text" name="adminLastName" id="adminLastName" class="form-control" />
                                 </div>
                                 <div class="col-sm-6 mb-2">
                                    <label for="adminFirstName" class="form-label text-gray-900"> First Name </label>
                                    <input type="text" name="adminFirstName" id="adminFirstName" class="form-control" />
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="row">
                                 <div class="col-sm-6 mb-2">
                                    <label for="adminMiddleName" class="form-label text-gray-900"> Middle Name </label>
                                    <input type="text" name="adminMiddleName" id="adminMiddleName" class="form-control" />
                                 </div>
                                 <div class="col-sm-6 mb-2">
                                    <label for="adminEmailAddress" class="form-label text-gray-900"> Email Address </label>
                                    <input type="text" name="adminEmailAddress" id="adminEmailAddress" class="form-control" />
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 mb-2">
                              <label for="adminUserName" class="form-label text-gray-900"> User Name </label>
                              <input type="text" name="adminUserName" id="adminUserName" class="form-control" />
                           </div>
                           <div class="col-sm-12 mb-2">
                              <div class="row">
                                 <div class="col-sm-6 mb-2">
                                    <label for="adminPassword" class="form-label text-gray-900"> Password </label>
                                    <input type="text" name="adminPassword" id="adminPassword" class="form-control" />
                                 </div>
                                 <div class="col-sm-6 mb-2">
                                    <label for="adminConfirmPassword" class="form-label text-gray-900"> Confirm Password </label>
                                    <input type="text" name="adminConfirmPassword" id="adminConfirmPassword" class="form-control" />
                                 </div>
                              </div>
                           </div>
                           <div class="d-flex justify-content-end">
                              <button type="submit" class="btn btn-success mr-2 text-white btn-circle" title="Save">
                                 <i class="fas fa-save"></i>
                              </button>
                           </div>
                           <hr>
                           <div class="form-goup text-center">
                              Already have an account? <a href="?route=sign-in"> Sign In! </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            <?php } if ($_GET['route'] === 'forgot-password') { ?>
               <form action="?route=forgot-pass" method="post">
                  <div class="d-flex justify-content-center align-items-center min-vh-100 animate__animated animate__fadeIn">
                     <!-- Nested Row within Card Body  -->
                     <div class="card col-xl-12 col-lg-12 col-md-12 o-hidden shadow">
                        <div class="mb-4">
                           <div class="h5 text-center text-primary mt-3" title="forgot your password.">
                              Forgot your password
                              <i class="fas fa-question-circle fa-sm" role="button"></i>
                           </div>
                           <hr>
                           <div class="animate__animated animate__fadeIn">
                              <div class="col-sm-12 mb-3">
                                 <?php if(isset($_SESSION['error'])) {?>
                                    <div class="bg-danger text-white form-control col-sm-12">
                                       <?=$_SESSION['error']?>
                                    </div>   
                                 <?php } unset($_SESSION['error']) ?>
                              </div>
                              <div class="col-sm-12 mb-3">
                                 <label for="" class="form-label text-gray-900">
                                    Full Name <span class="text-danger" id="fullNameReq"></span>
                                 </label>
                                 <input type="text" name="fullName" id="fullName" class="form-control"/>
                                 <span id="errfullName" class="text-danger small"></span>
                              </div>
                              <div class="col-sm-12 mb-3">
                                 <label for="" class="form-label text-gray-900">
                                    Student No <span class="text-danger" id="userNameReq"></span>
                                 </label>
                                 <input type="text" name="userName" id="userName" class="form-control"/>
                                 <span id="erruserName" class="text-danger small"></span>
                              </div>
                              <div class="col-sm-12 mb-3">
                                 <label for="" class="form-label text-gray-900">
                                    Email Address <span class="text-danger" id="emailAddressReq"></span>
                                 </label>
                                 <input type="text" name="emailAddress" id="emailAddress" class="form-control"/>
                                 <span id="erremailAddress" class="text-danger small"></span>
                              </div>
                              <!-- Add more personal fields here -->
                              <div class="d-flex justify-content-end col-sm-12">
                                 <button type="submit" class="btn bg-primary text-white" id="forgot-password-btn" disabled>
                                    <i class="fas fa-paper-plane"></i>
                                    Send
                                 </button>
                              </div>
                              <!-- end button -->
                           </div>
                           <hr>
                           <div class="text-gray-800 text-center">
                              Already have an account? <a href="?route=sign-in"> Sign In! </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            <?php } ?>
         </div>
      </div>
      <div class="min-vh-100 col-xl-6 d-none d-xl-block" id="body-picture-brand">
      </div>
   </div>
   <div class="modal fade" id="loading-modal" tabindex="-1" role="dialog" aria-labelledby="loading-modal-label" aria-hidden="false">
      <div class="modal-dialog modal-dialog-centered justify-content-center" role="document">
         <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"></div>
      </div>
   </div>
   <div class="modal fade" id="select-file" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header pt-2 pb-2 pl-3 pr-3">
               <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body text-center text-lg">
               <i class="fas fa-info-circle fa-2x text-info"></i>
               <span class="text-gray-700 position-relative" style="top: -8px;font-family: Arial;">
                  Please upload an image file. The valid formats are: jpg, jpeg, png, gif.
               </span>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="invalid-file" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header pt-2 pb-2 pl-3 pr-3">
               <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body text-center text-lg">
               <i class="fas fa-exclamation-triangle fa-2x text-warning"></i>
               <span class="text-gray-700 position-relative" style="top: -8px;font-family: Arial;">
                  Invalid file type! Please upload an image file (jpg, jpeg, png, gif).
               </span>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="file-size-error" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header pt-2 pb-2 pl-3 pr-3">
               <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body text-center text-lg">
               <i class="fas fa-exclamation-circle fa-2x text-danger"></i>
               <span class="text-gray-700 position-relative" style="top:-8px;font-family:Arial;">
                  The file you are trying to upload exceeds the maximum allowed size of <b>2MB</b>.
                  Please ensure your file is smaller than <b>2MB</b>.
               </span>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="already-exist-file" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header pt-2 pb-2 pl-3 pr-3">
               <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body text-center text-lg">
               <i class="fas fa-exclamation-triangle fa-2x text-warning"></i>
               <span class="text-gray-700 position-relative" style="top: -8px;font-family: Arial;">
                  Invalid file! Please try again.
               </span>
            </div>
         </div>
      </div>
   </div>
   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <!-- Custom scripts for all pages-->
   <script src="js/sb-admin-2.min.js"></script>
   <script src="js/sweetalert.min.js"></script>
   <!-- Custom script -->
   <script type="text/javascript">

      function invalidForgotPass() {
         const fullName     = $('#fullName').val().trim()
         const userName     = $('#userName').val().trim()
         const emailAddress = $('#emailAddress').val().trim()
         const email        = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(emailAddress);
         const isValid = fullName.length > 3 && userName.length > 3 && email && emailAddress.length > 5;
         $("#forgot-password-btn").prop("disabled", !isValid);
      }
      $('#fullName').on('input',()=>{
         const fullName = $('#fullName').val().trim();
         if(fullName.length <= 0) {
            $('#fullName').addClass('is-invalid');
            $('#fullNameReq').text('*');
            $('#errfullName').text('No blank spaces allowed.');
         } else if(fullName.length <= 3) {
            $('#fullName').addClass('is-invalid');
            $('#fullNameReq').text('*');
            $('#errfullName').text('At least 4 Characters.');
         } else {
            $('#fullName').removeClass('is-invalid').addClass('is-valid');
            $('#fullNameReq').text('');
            $('#errfullName').text('');
         }
         invalidForgotPass();
      });
      $('#userName').on('input',()=>{
         const userName = $('#userName').val().trim();
         if(userName.length <= 0) {
            $('#userName').addClass('is-invalid');
            $('#userNameReq').text('*');
            $('#erruserName').text('No blank spaces allowed.');
         } else if(userName.length <= 3) {
            $('#userName').addClass('is-invalid');
            $('#userNameReq').text('*');
            $('#erruserName').text('At least 4 Characters.');
         } else {
            $('#userName').removeClass('is-invalid').addClass('is-valid');
            $('#userNameReq').text('');
            $('#erruserName').text('');
         }
         invalidForgotPass();
      });
      $('#emailAddress').on('input',()=>{
         const emailAddress = $('#emailAddress').val().trim();
         if(emailAddress.length <= 0) {
            $('#emailAddress').addClass('is-invalid');
            $('#emailAddressReq').text('*');
            $('#erremailAddress').text('No blank spaces allowed.');
         } else if(emailAddress.length <= 5) {
            $('#emailAddress').addClass('is-invalid');
            $('#emailAddressReq').text('*');
            $('#erremailAddress').text('At least 6 Characters.');
         } else if(!/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(emailAddress)) {
            $('#emailAddress').addClass('is-invalid');
            $('#emailAddressReq').text('*');
            $('#erremailAddress').text('Invalid Email Address.');
         } else {
            $('#emailAddress').removeClass('is-invalid').addClass('is-valid');
            $('#emailAddressReq').text('');
            $('#erremailAddress').text('');
         }
         invalidForgotPass();
      });

      function getCourseId() {
         const c = document.getElementById('cbCourse');
         const selCourse = c.options[c.selectedIndex].text;
         $.ajax({
            type: 'post',
            url: '?route=submit-courses',
            data: {
               'course-btn': 1,
               'seleted-course': selCourse
            },
            success: (x) => {
               document.getElementById('courseid').value = x;
            }
         })
      }

      function getcollegeId() {
         const c = document.getElementById('cbCollege');
         const selCollege = c.options[c.selectedIndex].text;
         $.ajax({
            type: 'post',
            url: '?route=submit-colleges',
            data: {
               'college-btn': 1,
               'seleted-college': selCollege
            },
            success: (x) => {
               document.getElementById('collegeid').value = x;
            }
         })
      }

      function getmajorId() {
         const m = document.getElementById('cbMajor');
         const selMajor = m.options[m.selectedIndex].text;
         $.ajax({
            type: 'post',
            url: '?route=submit-majors',
            data: {
               'major-btn': 1,
               'selected-major': selMajor
            },
            success: (x) => {
               document.getElementById('majorid').value = x;
            }
         })
      }
      $('#customCheck').click(function() {
         $('#txtPassworduser').attr('type', this.checked ? 'text' : 'password');
      });
      const prevButtons = document.querySelectorAll(".prev-tab");
      const nextButtonfirst = document.querySelector(".next-tab");
      const nextButtonsecond = document.querySelector("#next-tab2");
      nextButtonfirst.addEventListener("click", () => {
         const activeTab = document.querySelector(".tab-pane.show.active");
         const nextTab = activeTab.nextElementSibling;
         const tabId = nextTab.getAttribute("id");
         const tab = new bootstrap.Tab(document.getElementById(`${tabId}-tab`));
         tab.show();
      });
      nextButtonsecond.addEventListener("click", () => {
         const activeTab = document.querySelector(".tab-pane.show.active");
         const nextTab = activeTab.nextElementSibling;
         const tabId = nextTab.getAttribute("id");
         const tab = new bootstrap.Tab(document.getElementById(`${tabId}-tab`));
         tab.show();
      });
      prevButtons.forEach((button) => {
         button.addEventListener("click", () => {
            const activeTab = document.querySelector(".tab-pane.show.active");
            const prevTab = activeTab.previousElementSibling;
            const tabId = prevTab.getAttribute("id");
            const tab = new bootstrap.Tab(document.getElementById(`${tabId}-tab`));
            tab.show();
         });
      });
      $(".sign-up-profile").attr(`src`, `img/undraw_profile.svg`);

      function checkFormValidity() {
         const fName = $("#txtFirstName").val().trim();
         const lName = $("#txtLastName").val().trim();
         const email = $("#txtEmail").val().trim();
         const mName = $("#txtMiddleName").val().trim();
         const yLevel = $("#cbYearLevel").val().trim();
         const emailIsValid = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(email);
         const isFormValid = fName.length > 2 && lName.length > 2 && mName.length > 2 && yLevel.length > 0 && emailIsValid;
         $("#nextStepBtn").prop("disabled", !isFormValid);
      }
      $("#cbYearLevel").on("input", () => {
         const lName = $("#cbYearLevel").val();
         if (lName.trim().length <= 0) {
            $("#errYearLevel").text("Choose year level.");
            $("#cbYearLevel").addClass("is-invalid");
            $("#yLevelReq").text("*");
         } else {
            $("#errYearLevel").text("");
            $("#yLevelReq").text("");
            $("#cbYearLevel").removeClass("is-invalid").addClass("is-valid");
         }
         checkFormValidity();
      });
      $("#txtLastName").on("input", () => {
         const lName = $("#txtLastName").val();
         if (lName.trim().length <= 0) {
            $("#errLastName").text("No blank spaces allowed.");
            $("#txtLastName").addClass("is-invalid");
            $("#lNameReq").text("*");
         } else if (lName.trim().length <= 2) {
            $("#errLastName").text("At least 3 characters required.");
            $("#lNameReq").text("*");
            $("#txtLastName").addClass("is-invalid");
         } else {
            $("#errLastName").text("");
            $("#lNameReq").text("");
            $("#txtLastName").removeClass("is-invalid").addClass("is-valid");
         }
         checkFormValidity();
      });
      $("#txtFirstName").on("input", () => {
         const fName = $("#txtFirstName").val();
         if (fName.trim().length <= 0) {
            $("#errFirstName").text("No blank spaces allowed.");
            $("#txtFirstName").addClass("is-invalid");
            $("#fNameReq").text("*");
         } else if (fName.trim().length <= 2) {
            $("#errFirstName").text("At least 3 characters required.");
            $("#fNameReq").text("*");
            $("#txtFirstName").addClass("is-invalid");
         } else {
            $("#errFirstName").text("");
            $("#fNameReq").text("");
            $("#txtFirstName").removeClass("is-invalid").addClass("is-valid");
         }
         checkFormValidity();
      });
      $("#txtMiddleName").on("input", () => {
         const mName = $("#txtMiddleName").val();
         if (mName.trim().length <= 0) {
            $("#errMiddleName").text("No blank spaces allowed.");
            $("#txtMiddleName").addClass("is-invalid");
            $("#mNameReq").text("*");
         } else if (mName.trim().length <= 2) {
            $("#errMiddleName").text("At least 3 characters required.");
            $("#mNameReq").text("*");
            $("#txtMiddleName").addClass("is-invalid");
         } else {
            $("#errMiddleName").text("");
            $("#mNameReq").text("");
            $("#txtMiddleName").removeClass("is-invalid").addClass("is-valid");
         }
         checkFormValidity();
      });
      $("#txtEmail").on("input", () => {
         const email = $("#txtEmail").val().trim();
         if (email.length <= 0) {
            $("#errEmail").text("No blank spaces allowed.");
            $("#txtEmail").addClass("is-invalid");
            $("#emailReq").text("*");
         } else if (email.length <= 2) {
            $("#errEmail").text("At least 3 characters required.");
            $("#emailReq").text("*");
            $("#txtEmail").addClass("is-invalid");
         } else if (!/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(email)) {
            $("#errEmail").text("Invalid Email Address.");
            $("#emailReq").text("*");
            $("#txtEmail").addClass("is-invalid");
         } else {
            $("#errEmail").text("");
            $("#emailReq").text("");
            $("#txtEmail").removeClass("is-invalid").addClass("is-valid");
         }
         checkFormValidity();
      });

      function verifyPassword() {
         const txtStudentNo = $("#txtStudentNo").val().trim();
         const txtPassword = $("#txtPassword").val().trim();
         const txtConfirmPassword = $("#txtConfirmPassword").val().trim();
         const existingStudentNumbers = <?= json_encode($studentNumbers); ?>;
         const isFormValidTwo = txtStudentNo.length > 2 && txtPassword.length > 7 && txtConfirmPassword.length > 7 && !existingStudentNumbers.includes(txtStudentNo);
         const isPasswordMatch = txtPassword === txtConfirmPassword;
         $("#next-tab2").prop("disabled", !(isFormValidTwo && isPasswordMatch));
      }
      $("#txtStudentNo").on("input", () => {
         const txtStudentNo = $("#txtStudentNo").val().trim();
         const existingStudentNumbers = <?= json_encode($studentNumbers); ?>;
         if (txtStudentNo.length <= 0) {
            $("#errStudentno").text("No blank spaces allowed");
            $("#sNoreq").text("*");
            $("#txtStudentNo").addClass("is-invalid");
         } else if (txtStudentNo.length <= 2) {
            $("#errStudentno").text("At least 3 characters required.");
            $("#sNoreq").text("*");
            $("#txtStudentNo").addClass("is-invalid");
         } else if (existingStudentNumbers.includes(txtStudentNo)) {
            $("#errStudentno").text("Invalid Student no.");
            $("#sNoreq").text("*");
            $("#txtStudentNo").addClass("is-invalid");
         } else {
            $("#errStudentno").text("");
            $("#sNoreq").text("");
            $("#txtStudentNo").removeClass("is-invalid").addClass("is-valid");
         }
         verifyPassword();
      });
      $("#txtPassword, #txtConfirmPassword").on("input", () => {
         const txtPassword = $("#txtPassword").val().trim();
         const txtConfirmPassword = $("#txtConfirmPassword").val().trim();
         const signuppword = $('.sign-up-pword');
         const signupcpword = $('.sign-up-cpword');
         if (txtPassword.length <= 0) {
            $("#errPassword").text("No blank spaces allowed.");
            $("#txtPassword").addClass("is-invalid");
            $("#pWordReq").text("*");
            signuppword.addClass('d-none');
            signupcpword.addClass('d-none');
         } else if (txtPassword.length <= 7) {
            $("#errPassword").text("At least 8 characters required.");
            $("#txtPassword").addClass("is-invalid");
            $("#pWordReq").text("*");
            signuppword.addClass('d-none');
            signupcpword.addClass('d-none');
         } else if (!/[A-Z]/.test(txtPassword)) {
            $("#errPassword").text("At least 1 uppercase letter required.");
            $("#txtPassword").addClass("is-invalid");
            $("#pWordReq").text("*");
            signuppword.addClass('d-none');
            signupcpword.addClass('d-none');
         } else if (!/[0-9]/.test(txtPassword)) {
            $("#errPassword").text("At least 1 number required.");
            $("#txtPassword").addClass("is-invalid");
            $("#pWordReq").text("*");
            signuppword.addClass('d-none');
            signupcpword.addClass('d-none');
         } else if (txtPassword !== txtConfirmPassword) {
            $("#errCPword").text("Passwords do not match.");
            $("#errPassword").text("");
            $("#pWordReq").text("");
            $("#txtConfirmPassword").addClass("is-invalid");
            $("#txtPassword").removeClass("is-invalid").addClass("is-valid");
            $("#cPwordReq").text("*");
            signuppword.removeClass('d-none');
            signupcpword.addClass('d-none');
         } else {
            signupcpword.removeClass('d-none');
            $("#errCPword").text("");
            $("#cPwordReq").text("");
            $("#pWordReq").text("");
            $("#txtConfirmPassword").removeClass("is-invalid").addClass("is-valid");
         }
         verifyPassword();
      });

      function verifyCurriculum() {
         const cbCourse = $("#cbCourse").val().trim();
         const cbCollege = $("#cbCollege").val().trim();
         const cbMajor = $("#cbMajor").val().trim();
         const isFormValidThree = cbCourse.length > 0 && cbCollege.length > 0 && cbMajor.length > 0;
         $(".submitButton").prop("disabled", !isFormValidThree);
      }

      $("#cbCourse").on("input", () => {
         const lName = $("#cbCourse").val();
         if (lName.trim().length <= 0) {
            $("#errCourse").text("Choose course.");
            $("#cbCourse").addClass("is-invalid");
            $("#courseReq").text("*");
         } else {
            $("#errCourse").text("");
            $("#courseReq").text("");
            $("#cbCourse").removeClass("is-invalid").addClass("is-valid");
         }
         verifyCurriculum();
      });
      $("#cbCollege").on("input", () => {
         const lName = $("#cbCollege").val();
         if (lName.trim().length <= 0) {
            $("#errCollege").text("Choose college.");
            $("#cbCollege").addClass("is-invalid");
            $("#collegeRq").text("*");
         } else {
            $("#errCollege").text("");
            $("#collegeRq").text("");
            $("#cbCollege").removeClass("is-invalid").addClass("is-valid");
         }
         verifyCurriculum();
      });
      $("#cbMajor").on("input", () => {
         const lName = $("#cbMajor").val();
         if (lName.trim().length <= 0) {
            $("#errMajor").text("Choose major.");
            $("#cbMajor").addClass("is-invalid");
            $("#majorReq").text("*");
         } else {
            $("#errMajor").text("");
            $("#majorReq").text("");
            $("#cbMajor").removeClass("is-invalid").addClass("is-valid");
         }
         verifyCurriculum();
      });
      $('#btnSubmitSaveSignUp').click(() => {
         const studentNo = $('input[name="txtStudentNo"]').val();
         const pWord = $('input[name="txtPassword"]').val();
         const txtFirstName = $('input[name="txtFirstName"]').val();
         const txtLastName = $('input[name="txtLastName"]').val();
         const txtMiddleName = $('input[name="txtMiddleName"]').val();
         const yearLevel = $('select[name="cbYearLevel"]').val();
         const Email = $('input[name="txtEmail"]').val();
         const cbCourse = $('input[name="courseid"]').val();
         const cbCollege = $('input[name="collegeid"]').val();
         const cbMajor = $('input[name="majorid"]').val();
         const files = $('.file-image').prop('files')[0];
         // If file empty
         if (!files) {
            $('#select-file').modal('show')
            return;
         } else {
            const validExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            const fileExtension = files.name.split('.').pop().toLowerCase();
            const maxSize = 2 * 1024 * 1024;
            if (!validExtensions.includes(fileExtension)) { // If the file extentions are invalid
               $('#invalid-file').modal('show');
               return;
            } else {
               if (files.size > maxSize) { // If valid size file
                  $('#file-size-error').modal('show');
                  return;
               } else {
                  const filename = files.name;
                  $.ajax({ // check if the file already exist 
                     type: "post",
                     url: "?route=check-file-exist",
                     data: {
                        "filename": filename
                     },
                     success: (response) => {
                        if (response.exists) {
                           $('#already-exist-file').modal('show');
                        } else { // Then Insert into table students account
                           const formData = new FormData();
                           formData.append("btnSubmitSaveAdd", 1);
                           formData.append("btnSubmitSignup", 1);
                           formData.append("txtStudentNo", studentNo);
                           formData.append("txtPassword", pWord);
                           formData.append("txtFirstName", txtFirstName);
                           formData.append("txtLastName", txtLastName);
                           formData.append("txtMiddleName", txtMiddleName);
                           formData.append("cbYearLevel", yearLevel);
                           formData.append("txtEmail", Email);
                           formData.append("courseid", cbCourse);
                           formData.append("collegeid", cbCollege);
                           formData.append("majorid", cbMajor);
                           formData.append("files", files);
                           $.ajax({
                              type: "post",
                              url: "?route=create-an-account",
                              contentType: false,
                              processData: false,
                              data: formData,
                              beforeSend: () => {
                                 $('#loading-modal').modal({
                                    backdrop: 'static',
                                    keyboard: false
                                 }).modal('show');
                              },
                              success: () => {
                                 setTimeout(() => {
                                    $('#loading-modal').modal('hide');
                                    swal({
                                       title: "Success!",
                                       // Modify as Success Session
                                       text: "Your account is currently pending approval. You will receive an email notification once it has been reviewed and approved by the admin.",
                                       icon: "success",
                                       closeOnClickOutside: false,
                                       button: {
                                          confirm: "Ok"
                                       }
                                    }).then(() => {
                                       location.href = "?route=sign-in";
                                    });
                                    $('.swal-text').addClass('text-center ml-3 mr-3');
                                 }, 3000);
                              },
                           });
                        }
                     }
                  })
               }
            }
         }
      });
      const filemage = $('#file-image');
      $('#profile-sing-up').click(() => {
         filemage.click();
         $('#file-image').on('change', function(e) {
            e.preventDefault();
            if (this.files[0]) $('#imgProfPicture').attr('src', URL.createObjectURL(this.files[0]));
            else $(".sign-up-profile").attr(`src`, `img/undraw_profile.svg`);
         });
      });
      $('#sign-up-pword').on('click', (event) => {
         $(event.currentTarget).toggleClass('fa-eye-slash');
         $('.txtPassword').attr('type', $('.txtPassword').attr('type') === 'password' ? 'text' : 'password');
      });
      $('.sign-up-cpword').on('click', (event) => {
         $(event.currentTarget).toggleClass('fa-eye-slash');
         $('.txtConfirmPassword').attr('type', $('.txtConfirmPassword').attr('type') === 'password' ? 'text' : 'password');
      });
   </script>
</body>

</html>