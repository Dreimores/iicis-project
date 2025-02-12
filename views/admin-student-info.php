<?php
   $includeAdminController = new includeAdminController();
   $includeAdminController->header();
   $includeAdminController->navbar();
?>
<div class="container-fluid">
   <div class="card">
      <div class="card-header">
         <div class="h4">List of Students</div>
      </div>
      <div class="card-body">
         <div class="form-group">
            <a href="#" data-toggle="modal" data-target="#modal-students" class="btn btn-primary add-show-modal-students">
               <i class="fas fa-plus"></i>
               Add student
            </a>
         </div>
         <div class="table-responsive">
            <table class="table table-bordered" id="student-lists">
               <thead>
                  <tr>
                     <th class="align-middle text-nowrap">Profile</th>
                     <th class="align-middle text-nowrap">Student No</th>
                     <th class="align-middle text-nowrap">First Name</th>
                     <th class="align-middle text-nowrap">Middle Name</th>
                     <th class="align-middle text-nowrap">Last Name</th>
                     <th class="align-middle text-nowrap">Year Level</th>
                     <th class="align-middle text-nowrap">Email Address</th>
                     <th class="align-middle text-nowrap">Course</th>
                     <th class="align-middle text-nowrap">College</th>
                     <th class="align-middle text-nowrap">Major</th>
                     <th class="align-middle text-nowrap">Status</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $loginModel = new loginStudentModel();
                  $studentNumbers = $loginModel->invalid_studentno();
                  $studentFormsModel = new studentFormsModel();
                  foreach ($studentFormsModel->view_account_student() as $row) { ?>
                     <tr>
                        <td class="align-middle text-nowrap d-flex justify-content-center align-items-center p-1"><img src="<?= !empty($row['file_name']) ? "uploads/".$row['file_name'] : 'img/undraw_profile.svg' ?>" class=" img-fluid img-profile rounded-circle user-profile"></td>
                        <td class="align-middle text-nowrap"><?= $row['studentno'] ?></td>
                        <td class="align-middle text-nowrap"><?= $row['p_firstname'] ?></td>
                        <td class="align-middle text-nowrap"><?= $row['p_middlename'] ?></td>
                        <td class="align-middle text-nowrap"><?= $row['p_surname'] ?></td>
                        <td class="align-middle text-center"><?= $row['ylevel'] ?></td>
                        <td class="align-middle text-nowrap"><?= $row['email'] ?></td>
                        <td class="align-middle text-nowrap"><?= $row['course'] ?></td>
                        <td class="align-middle text-nowrap"><?= $row['college'] ?></td>
                        <td class="align-middle text-nowrap"><?= $row['major'] ?></td>
                        <td class="align-middle text-nowrap"><?= $row['status'] === "Pending..."?"<i class='fas fa-circle text-danger'></i> ".$row['status'] : "<i class='fas fa-circle text-success'></i> ". $row['status'] ?></td>
                        <td class="align-middle">
                           <div class="btn-group d-flex justify-content-center">
                              <div>
                                 <a data-toggle="modal" data-target="#modal-students" class="btn btn-sm btn-primary edit-show-modal-students"
                                    studentno   ="<?=$row['studentno']?>"
                                    old__image  ="<?=$row['file_name']?>"
                                    p_firstname ="<?=$row['p_firstname']?>"
                                    p_middlename="<?=$row['p_middlename']?>"
                                    p_surname   ="<?=$row['p_surname']?>"
                                    yearLevel   ="<?=$row['ylevel']?>"
                                    emaddress   ="<?=$row['email']?>"
                                    courses__   ="<?=$row['course']?>"
                                    colleges_   ="<?=$row['college']?>"
                                    majors___   ="<?=$row['major']?>"
                                    courseid    ="<?=$row['courseid']?>"
                                    collegeid   ="<?=$row['colid']?>"
                                    majors_id   ="<?=$row['majorid']?>"
                                    passwords   ="<?=$row['pword']?>">
                                    <i class="fas fa-pencil-alt"></i>
                                 </a>
                              </div>
                              &nbsp;
                              <div>
                                 <button type="button" value="<?=$row['studentno']?>" img="<?=$row['file_name']?>" class="btn btn-sm btn-danger delete-btn-students">
                                    <i class="fas fa-trash-alt"></i>
                                 </button>
                              </div>
                           </div>
                        </td>
                     </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="modal-students" tabindex="-1" role="dialog" aria-hidden="true" data-keybord="false" data-backdrop="static">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header pt-2 pb-2 pl-3 pr-3">
            <div class="h6" id="Add_student"> Add </div>
            <div class="h6" id="Edit_student"> Edit </div>
            <button type="button" onclick="location.reload()" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="card col-xl-12 col-lg-12 col-md-12 o-hidden shadow">
            <div class="mb-4">
               <div class="row justify-content-center mb-3 mt-3">
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
                     <input type="hidden" id="old__image" class="form-control" name="old__image">
                  </div>
                  <div class="tab-pane fade show active  animate__animated animate__fadeIn" id="Personal">
                     <div class="mb-4 col-sm-12">
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
                           <div class="mb-4 col-sm-6">
                              <label for="txtLastName" class="form-label text-gray-900">
                                 Last Name <span class="text-danger" id="lNameReq"></span>
                              </label>
                              <input type="text" name="txtLastName" id="txtLastName" class="form-control" />
                              <span id="errLastName" class="text-danger small"></span>
                           </div>
                           <div class="mb-4 col-sm-6">
                              <label for="txtFirstName" class="form-label text-gray-900">
                                 First Name <span class="text-danger" id="fNameReq"></span>
                              </label>
                              <input type="text" name="txtFirstName" id="txtFirstName" class="form-control" />
                              <span id="errFirstName" class="text-danger small"></span>
                           </div>
                        </div>
                        <div class="row">
                           <div class="mb-4 col-sm-6">
                              <label for="txtMiddleName" class="form-label text-gray-900">
                                 Middle Name <span class="text-danger" id="mNameReq"></span>
                              </label>
                              <input type="text" name="txtMiddleName" id="txtMiddleName" class="form-control" />
                              <span id="errMiddleName" class="text-danger small"></span>
                           </div>
                           <div class="mb-4 col-sm-6">
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
                        <div class="mb-4 row">
                           <label for="txtStudentNo" class="form-label text-gray-900 col-sm-12">
                              Student no. <span class="text-danger" id="sNoreq"></span>
                           </label>
                           <div class="col-sm-12">
                              <input type="text" name="txtStudentNo" id="txtStudentNo" class="form-control"/>
                              <input type="hidden" name="txtOldStudentNo" id="txtOldStudentNo" class="form-control"/>
                              <span class="text-danger" id="errStudentno"></span>
                           </div>
                        </div>
                        <div class="mb-4 row">
                           <label for="txtPassword" class="form-label text-gray-900 col-sm-12">
                              Password <span class="text-danger" id="pWordReq"></span>
                           </label>
                           <div class="col-sm-12">
                              <input type="password" name="txtPassword" id="txtPassword" class="form-control txtPassword" />
                              <i class="fas fa-eye position-absolute text-gray-500 sign-up-pword d-none" style="top:11px;right:2.5rem;" id="sign-up-pword"></i>
                              <span class="text-danger" id="errPassword"></span>
                           </div>
                        </div>
                        <div class="mb-4 row">
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
                        <div class="mb-4 row">
                           <label for="cbCourse" class="form-label text-gray-900 col-sm-12">
                              Course <span class="text-danger" id="courseReq"></span>
                           </label>
                           <div class="col-sm-12">
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
                        </div>
                        <div class="mb-4 row">
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
                        <div class="mb-4 row">
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
                        <button type="button" id="btnSubmitSaveAdd" class="btn btn-success mr-2 mb-1 text-white btn-circle submitButton" disabled title="Save">
                           <i class="fas fa-save"></i>
                        </button>
                        <button type="button" id="btnSubmitSaveEdit" class="btn btn-success mr-2 mb-1 text-white btn-circle submitButton" disabled title="Save">
                           <i class="fas fa-save"></i>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="loading-modal" tabindex="-1" role="dialog" aria-labelledby="loading-modal-label" aria-hidden="false">
   <div class="modal-dialog modal-dialog-centered justify-content-center" role="document">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"></div>
   </div>
</div>
<?php
   $includeAdminController->footer();
   $includeAdminController->script();
?>
<script>
   // add modal student script
   $('.add-show-modal-students').click(function() {
      $('#Edit_student').addClass('d-none');
      $('#Add_student').removeClass('d-none');
      $('#btnSubmitSaveAdd').removeClass('d-none');
      $('#btnSubmitSaveEdit').addClass('d-none');
      $('#txtOldStudentNo').val('');
      $('#txtStudentNo').val('');
      $('#txtFirstName').val('');
      $('#txtMiddleName').val('');
      $('#txtLastName').val('');
      $('#txtPassword').val('');
      $('#txtConfirmPassword').val('');
      $('#cbYearLevel').val('')
      $('#txtEmail').val('');
      $('#cbCourse').val('');
      $('#cbCollege').val('');
      $('#cbMajor').val('');
      $("#nextStepBtn").attr("disabled", true);
      $('#next-tab2').attr("disabled",true);
      $('#btnSubmitSaveAdd').attr("disabled",true);
      $('#old__image').val('');
      $('#imgProfPicture').attr('src',`img/undraw_profile.svg`);
   });
   // end
   // edit modal student script
   $('.edit-show-modal-students').on('click', function() {
      $('#Add_student').addClass('d-none');
      $('#Edit_student').removeClass('d-none');
      $('#btnSubmitSaveEdit').removeClass('d-none');
      $('#btnSubmitSaveAdd').addClass('d-none');
      $('#txtOldStudentNo').val($(this).attr('studentno'));
      $('#txtStudentNo').val($(this).attr('studentno'));
      $('#txtPassword').val($(this).attr('passwords'));
      $('#txtConfirmPassword').val($(this).attr('passwords'));
      $('#txtFirstName').val($(this).attr('p_firstname'));
      $('#txtMiddleName').val($(this).attr('p_middlename'));
      $('#txtLastName').val($(this).attr('p_surname'));
      $('#cbYearLevel').val($(this).attr('yearLevel'));
      $('#txtEmail').val($(this).attr('emaddress'));
      $('#cbCourse').val($(this).attr('courses__'));
      $('#cbCollege').val($(this).attr('colleges_'));
      $('#cbMajor').val($(this).attr('majors___'));
      $('#courseid').val($(this).attr('courseid')); 
      $('#collegeid').val($(this).attr('collegeid'));
      $('#majorid').val($(this).attr('majors_id'));
      $("#nextStepBtn").removeAttr("disabled", true);
      $('#next-tab2').removeAttr("disabled",true);
      $('#btnSubmitSaveEdit').removeAttr("disabled",true);
      $('#old__image').val($(this).attr('old__image'));
      $('#imgProfPicture').attr('src',`uploads/${$(this).attr('old__image')}`);
   });
   // end
   // script get course id
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
   // end
   // script get college id
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
   // end
   // script get major Id
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
   // End
   // script for previous and next buttons
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
   // end
   // set default profile picture
   $(".sign-up-profile").attr(`src`, `img/undraw_profile.svg`);
   // end
   // check validation personal data
   function checkFormValidity() {
      const fName = $("#txtFirstName").val().trim();
      const lName = $("#txtLastName").val().trim();
      const email = $("#txtEmail").val().trim();
      const mName = $("#txtMiddleName").val().trim();
      const yLevel = $("#cbYearLevel").val().trim();
      const emailIsValid = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(email);
      const isFormValidPersData = fName.length > 2 && lName.length > 2 && mName.length > 2 && yLevel.length > 0 && emailIsValid;
      $("#nextStepBtn").prop("disabled", !isFormValidPersData);
   }
   // end
   // strictly input validation
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
   // check validation verification 
   function verifyPassword() {
      const txtStudentNo = $("#txtStudentNo").val().trim();
      const txtPassword = $("#txtPassword").val().trim();
      const txtConfirmPassword = $("#txtConfirmPassword").val().trim();
      const existingStudentNumbers = <?= json_encode($studentNumbers); ?>;
      const txtOldStudentNo = $('#txtOldStudentNo').val().trim();
      const isFormValidTwo = txtStudentNo.length > 2 && txtPassword.length > 7 && txtConfirmPassword.length > 7 && txtStudentNo !== txtOldStudentNo === !existingStudentNumbers.includes(txtStudentNo);
      const isPasswordMatch = txtPassword === txtConfirmPassword;
      $("#next-tab2").prop("disabled", !(isFormValidTwo && isPasswordMatch));
   }
   // end
   $("#txtStudentNo").on("input", () => {
      const txtStudentNo = $("#txtStudentNo").val().trim();
      const existingStudentNumbers = <?= json_encode($studentNumbers); ?>;
      const txtOldStudentNo = $('#txtOldStudentNo').val().trim();
      if (txtStudentNo.length <= 0) {
         $("#errStudentno").text("No blank spaces allowed");
         $("#sNoreq").text("*");
         $("#txtStudentNo").addClass("is-invalid");
      } else if (txtStudentNo.length <= 2) {
         $("#errStudentno").text("At least 3 characters required.");
         $("#sNoreq").text("*");
         $("#txtStudentNo").addClass("is-invalid");
      } else if(txtOldStudentNo === txtStudentNo) {
         $("#errStudentno").text("");
         $("#sNoreq").text("");
         $("#txtStudentNo").removeClass("is-invalid").addClass("is-valid");
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
   // check validation curriculum
   function verifyCurriculum() {
      const cbCourse = $("#cbCourse").val().trim();
      const cbCollege = $("#cbCollege").val().trim();
      const cbMajor = $("#cbMajor").val().trim();
      const isFormValidThree = cbCourse.length > 0 && cbCollege.length > 0 && cbMajor.length > 0;
      $("#btnSubmitSaveAdd").prop("disabled", !isFormValidThree);
      const isFormValidiThree = cbCourse.length <= 0 || cbCollege.length <= 0 || cbMajor.length <= 0;
      $("#btnSubmitSaveEdit").prop("disabled", isFormValidiThree);
   }  
   // end
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
   // end strictly inputs validation

   // create object image
   const filemage = $('#file-image');
   $('#profile-sing-up').click(() => {
      filemage.click();
      $('#file-image').on('change', function(e) {
         e.preventDefault();
         if (this.files[0]) $('#imgProfPicture').attr('src', URL.createObjectURL(this.files[0]));
         else $(".sign-up-profile").attr(`src`, `uploads/${$('#old__image').val()}`);
      });
   });
   //  end
   // Add an account students
   $('#btnSubmitSaveAdd').click(()=>
   {
      const files = $('.file-image').prop('files')[0];
      const formData = new FormData();
      formData.append("btnSubmitSaveAdd",1);
      formData.append("txtStudentNo", $('input[name="txtStudentNo"]').val());
      formData.append("old__image", $('input[name="old__image"]').val());
      formData.append("txtOldStudentNo", $('input[name="txtOldStudentNo"]').val());
      formData.append("txtPassword", $('input[name="txtPassword"]').val());
      formData.append("txtFirstName", $('input[name="txtFirstName"]').val());
      formData.append("txtLastName", $('input[name="txtLastName"]').val());
      formData.append("txtMiddleName", $('input[name="txtMiddleName"]').val());
      formData.append("cbYearLevel", $('select[name="cbYearLevel"]').val());
      formData.append("txtEmail", $('input[name="txtEmail"]').val());
      formData.append("courseid", $('input[name="courseid"]').val());
      formData.append("collegeid", $('input[name="collegeid"]').val());
      formData.append("majorid", $('input[name="majorid"]').val());
      formData.append("files", files);
      // If file empty
      if (!files) {
         swal({
            title: "Info!",
            text: "Please upload an image file. The valid formats are: jpg, jpeg, png, gif.",
            icon: "info",
            closeOnClickOutside: false,
            button:{confirm: "Ok"}
         })
         $('.swal-text').addClass('text-center ml-3 mr-3');
         return;
      } else{ 
         const validExtensions = ['jpg', 'jpeg', 'png', 'gif'];
         const fileExtension = files.name.split('.').pop().toLowerCase();
         const maxSize = 2 * 1024 * 1024;
         if (!validExtensions.includes(fileExtension)) { // If the file extentions are invalid
            swal({
               title: "Info!",
               text: "Invalid file type! Please upload an image file (jpg, jpeg, png, gif).",
               icon: "info",
               closeOnClickOutside: false,
               button:{confirm: "Ok"}
            })
            $('.swal-text').addClass('text-center ml-3 mr-3');
            return;
         } else {
            if (files.size > maxSize){ // If valid size file
               swal({
                  title: "Info!",
                  text: "The file you are trying to upload exceeds the maximum allowed size of 2MB. Please ensure your file is smaller than 2MB.",
                  icon: "info",
                  closeOnClickOutside: false,
                  button:{confirm: "Ok"}
               })
               $('.swal-text').addClass('text-center ml-3 mr-3');
               return;
            } else {
               const filename = files.name;
               $.ajax({ // check if the file already exist 
                  type: "post",
                  url: "?route=check-file-exist",
                  data: {"filename": filename},
                  success:(response)=>{
                     if (response.exists) {
                        swal({
                           title: "Error!",
                           text: "Invalid file! Please try again.",
                           icon: "error",
                           closeOnClickOutside: false,
                           button:{confirm: "Ok"}
                        })
                        $('.swal-text').addClass('text-center ml-3 mr-3');
                     } else { // Then Insert into table students account
                        // Add using Ajax 
                        $.ajax({
                           type: "post",
                           url: "?route=create-an-account",
                           contentType: false,
                           processData: false,
                           data: formData,
                           success:() => {
                              location.reload();
                           }
                        });
                     }
                  }
               })
            }
         } 
      }
   });
   // end
   // Edit an account students
   $('#btnSubmitSaveEdit').click(()=>
   {  
      const files  = $('.file-image').prop('files')[0];
      const formData = new FormData();
      formData.append("btnSubmitSaveEdit",1);
      formData.append("txtStudentNo", $('input[name="txtStudentNo"]').val());
      formData.append("old__image", $('input[name="old__image"]').val());
      formData.append("txtOldStudentNo", $('input[name="txtOldStudentNo"]').val());
      formData.append("txtPassword", $('input[name="txtPassword"]').val());
      formData.append("txtFirstName", $('input[name="txtFirstName"]').val());
      formData.append("txtLastName", $('input[name="txtLastName"]').val());
      formData.append("txtMiddleName", $('input[name="txtMiddleName"]').val());
      formData.append("cbYearLevel", $('select[name="cbYearLevel"]').val());
      formData.append("txtEmail", $('input[name="txtEmail"]').val());
      formData.append("courseid", $('input[name="courseid"]').val());
      formData.append("collegeid", $('input[name="collegeid"]').val());
      formData.append("majorid", $('input[name="majorid"]').val());
      formData.append("files", files);
      if (!files) {
         // edit using Ajax 
         $.ajax({
            type: "post",
            url: "?route=create-an-account",
            contentType: false,
            processData: false,
            data: formData,
            success:() => {
               location.reload();
            }
         });
         // end  
      } else {
         const validExtensions = ['jpg', 'jpeg', 'png', 'gif'];
         const fileExtension = files.name.split('.').pop().toLowerCase();
         const maxSize = 2 * 1024 * 1024;
         const filename = files.name;
         if (!validExtensions.includes(fileExtension)) { // If the file extentions are invalid
            swal({
               title: "Info!",
               text: "Invalid file type! Please upload an image file (jpg, jpeg, png, gif).",
               icon: "info",
               closeOnClickOutside: false,
               button:{confirm: "Ok"}
            })
            $('.swal-text').addClass('text-center ml-3 mr-3');
            return;
         }else if (files.size > maxSize){ // If valid size file
            swal({
               title: "Info!",
               text: "The file you are trying to upload exceeds the maximum allowed size of 2MB. Please ensure your file is smaller than 2MB.",
               icon: "info",
               closeOnClickOutside: false,
               button:{confirm: "Ok"}
            })
            $('.swal-text').addClass('text-center ml-3 mr-3');
            return;
         } else {
            $.ajax({ // check if the file already exist 
               type: "post",
               url: "?route=check-file-exist",
               data: {"filename": filename},
               success:(response)=>{
                  if (response.exists) {
                     swal({
                        title: "Error!",
                        text: "Invalid file! Please try again.",
                        icon: "error",
                        closeOnClickOutside: false,
                        button:{confirm: "Ok"}
                     })
                     $('.swal-text').addClass('text-center ml-3 mr-3');          
                  } else {
                     // edit using Ajax 
                     $.ajax({
                        type: "post",
                        url: "?route=create-an-account",
                        contentType: false,
                        processData: false,
                        data: formData,
                        success:() => {
                           location.reload();
                        }
                     });
                     // end 
                  }
               }  
            })
         }
      }
   });
   // end
   // delete student account
   $('.delete-btn-students').click(function(e) {
      const studentid = $(this).val();
      const unlinkimg = $(this).attr('img');
      e.preventDefault();
      swal({
         title: "Are you sure?",
         text: "Once deleted, you will not be able to recover it.",
         icon: "warning",
         buttons: true,
         dangerMode: true,
         closeOnClickOutside: false,
         buttons: {
            confirm: "Ok",
            cancel: "Cancel",
         },
      }).then((wilDelete) => {
         if (wilDelete) {
            $.ajax({
               type: "post",
               url: "?route=create-an-account",
               data: {
                  "btnDelete": 1,
                  "studentId": studentid,
                  "unlinkimg": unlinkimg
               },
               success: () => {
                  location.href = "?route=student-info";
               },
            });
         }
      });
   });
   // end
   // show password
   $('#sign-up-pword').on('click', (event) => {
      $(event.currentTarget).toggleClass('fa-eye-slash');
      $('.txtPassword').attr('type', $('.txtPassword').attr('type') === 'password' ? 'text' : 'password');
   });
   $('.sign-up-cpword').on('click', (event) => {
      $(event.currentTarget).toggleClass('fa-eye-slash');
      $('.txtConfirmPassword').attr('type', $('.txtConfirmPassword').attr('type') === 'password' ? 'text' : 'password');
   });
   // ends
</script>