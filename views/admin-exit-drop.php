<?php
$includeAdminController = new includeAdminController();
$includeAdminController->header();
$includeAdminController->navbar();
?>
<div class="container-fluid animate__animated animate__fadeIn">
   <div class="card">
      <div class="card-header d-sm-flex justify-content-center">
         <img class="d-lg-inline-block d-none" src="img/csu_lasam_logo.webp" width="130" height="130" />
         <div class="text-gray-900">
            <div class="h5 text-center"> Republic of the Philippines </div>
            <div class="h4 text-uppercase text-center font-weight-bold"> cagayan state university </div>
            <div class="h5 text-capitalize text-center"> lasam campus </div>
            <div class="h4 text-uppercase text-center mb-4"> guidance and counseling center </div>
            <div class="h4 text-uppercase text-center font-weight-bold"> exit form (for dropping) </div>
         </div>
         <div class="mx-5"></div>
      </div>
      <form action="?route=exit-drop" method="post">
         <div class="card-body">
            <div class="d-flex mb-2 text-danger">
               <span id="message-notifications"></span>
            </div>
            <div class="form-group d-sm-flex mb-4">
               <label class="my-1 mr-3"> Student number : </label>
               <div class="form-inline">
                  <div class="input-group">
                     <input type="search" name="Student-No" id="Student-No" list="ListOfStudentNo" class="form-control" placeholder="Search for...">
                     <div class="input-group-append">
                        <button type="button" class="btn btn-primary" title="Search student no." id="Btn-Search-Student-No">
                           <i class="fas fa-search fa-sm"></i>
                        </button>
                     </div>
                  </div>
                  <datalist id="ListOfStudentNo">
                     <?php $studentFormsModel = new studentFormsModel();
                        foreach ($studentFormsModel->view_account_student() as $row) {?>
                        <option value    ="<?=$row['studentno']?>"
                              studentNo  ="<?=$row['studentno']?>" 
                              SurName    ="<?= $row['p_surname']?>"
                              firstName  ="<?=$row['p_firstname']?>"
                              middleName ="<?= substr($row['p_middlename'],0,1). "."?>"
                              nickName   ="<?=$row['p_nickname']?>"
                              ylevel     ="<?=$row['ylevel']?>"
                              course     ="<?=$row['course']?>"
                              p_age      ="<?=$row['p_age']?>"
                              civilstats ="<?=$row['p_cilvilstatus']?>"
                              homeAddres ="<?=$row['p_homeaddress']?>"
                              hameTelno  ="<?=$row['p_homeadd_telno']?>"
                              boardtelno ="<?=$row['p_boardhousetelno']?>"
                              fathername ="<?=$row['f_fathername']?>"
                              mothername ="<?=$row['m_mothername']?>"
                              SemYearLastAttend ="<?=$row['SemYearLastAttend']?>"
                              CourseOne  ="<?=$row['CourseOne']?>"
                              School     ="<?=$row['School']?>"
                              ReasonsForDrop ="<?=$row['ReasonsForDrop']?>"
                              ex_OthersOne   ="<?=$row['ex_OthersOne']?>"
                              PlanAfterDrop  ="<?=$row['PlanAfterDrop']?>"
                              ex_OthersTwo   ="<?=$row['ex_OthersTwo']?>"
                              FeelAboutDrop  ="<?=$row['FeelAboutDrop']?>"
                              ex_OthersThree ="<?=$row['ex_OthersThree']?>"
                              ParentsAwareness ="<?=$row['ParentsAwareness']?>"
                              ParentsFeelDrop  ="<?=$row['ParentsFeelingsDrop']?>"
                              ex_OthersFive    ="<?=$row['ex_OthersFive']?>"
                              ReasonChoosSchool="<?=$row['ReasonChoosSchool']?>"
                              ex_OthersSix     ="<?=$row['ex_OthersSix']?>"
                              CRSCsuLasam      ="<?=$row['CRSCsuLasam']?>"
                              dropDate         ="<?=$row['dropDate']?>">
                     <?php }?>
                  </datalist>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-sm-3">
                  <label for="txtSureName" class="text-gray-900"> 
                     Surname <span class="text-danger" id="txtSureNameReq"></span>
                  </label>
                  <input type="text" id="txtSureName" name="txtSureName" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtSureName"></span>
               </div>
               <div class="form-group col-sm-3">
                  <label for="txtFirstName" class="text-gray-900"> 
                     Firstname <span class="text-danger" id="txtFirstNameReq"></span> 
                  </label>
                  <input type="text" id="txtFirstName" name="txtFirstName" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtFirstName"></span>
               </div>
               <div class="form-group col-sm-3">
                  <label for="txtMiddleName" class="text-gray-900"> 
                     Middlename <span class="text-danger" id="txtMiddleNameReq"></span>
                  </label>
                  <input type="text" id="txtMiddleName" name="txtMiddleName" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtMiddleName"></span>
               </div>
               <div class="form-group col-sm-3">
                  <label for="txtNickName" class="text-gray-900"> 
                     Nickname <span class="text-danger" id="txtNickNameReq"></span> 
                  </label>
                  <input type="text" id="txtNickName" name="txtNickName" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtNickName"></span>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-sm-3">
                  <label class="text-gray-900"> Year Level <span class="text-danger" id="txtYearLevelReq"></span>  </label>
                  <input type="text" id="txtYearLevel" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtYearLevel"></span> 
               </div>
               <div class="form-group col-sm-3">
                  <label for="txtCourse" class="text-gray-900"> 
                     Course: <span class="text-danger" id="txtCourseReq"></span>
                  </label>
                  <input type="text" id="txtCourse" name="txtCourse" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtCourse"></span>
               </div>

               <div class="form-group col-sm-3">
                  <label class="text-gray-900"> Age <span class="text-danger" id="txtAgeReq"></span> </label>
                  <input type="text" id="txtAge" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtAge"></span>
               </div>
               <div class="form-group col-sm-3">
                  <label for="textCivilStatus" class="text-gray-900"> 
                     Civil Status: <span class="text-danger" id="textCivilStatusReq"></span>
                  </label>
                  <input type="text" id="textCivilStatus" name="textCivilStatus" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTextCivilStatus"></span>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-sm-3">
                  <label class="text-gray-900"> Complete Home Address <span class="text-danger" id="txtHomeAddressReq"></span> </label>
                  <input type="text" id="txtHomeAddress" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtHomeAddress"></span>
               </div>

               <div class="form-group col-sm-3">
                  <label class="text-gray-900"> Contact Number <span class="text-danger" id="txtTelphoneReq"></span> </label>
                  <input type="text" id="txtTelphone" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtTelphone"></span>
               </div>
               <div class="form-group col-sm-3">
                  <label class="text-gray-900"> Father <span class="text-danger" id="txtFatherReq"></span> </label>
                  <input type="text" id="txtFather" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtFather"></span>
               </div>
               <div class="form-group col-sm-3">
                  <label class="text-gray-900"> Mother <span class="text-danger" id="txtMotherReq"></span> </label>
                  <input type="text" id="txtMother" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtMother"></span>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-sm-3">
                  <label class="col-form-label text-gray-900" for="SmstrSchool"> 
                     Semester/School Year Last Attended <span class="text-danger" id="txtSmstrSchoolReq"></span>
                  </label>
                  <input type="text" id="SmstrSchool" name="SmstrSchool" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
                  <span class="text-danger" id="txtErrSmstrSchool"></span>
               </div>
               <div class="form-group col-sm-3" id="txtDateExitDroping">
                  <label class="col-form-label text-gray-900" for="txtDateExitDrop"> 
                     Date <span class="text-danger" id="txtDateExitDropReq"></span>
                  </label>
                  <input type="date" id="txtDateExitDrop" name="txtDateExitDrop" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
                  <span class="text-danger" id="errtxtDateExitDrop"></span>
               </div>
            </div>
            <label for="Financial" class="text-gray-900"> Direction: Please check your choices below. </label>
            <ol class="text-gray-900 p-3">
               <div>
                  <li>
                     <h1 class="h6 text-gray-900"> Reasons for dropping </h1>
                     <div class="d-sm-flex justify-content-between mb-1">
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="Financial" name="ReasonsForDrop[]" value="Financial" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="Financial"> Financial </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="Health" name="ReasonsForDrop[]" value="Health" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="Health"> Health </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="Personal" name="ReasonsForDrop[]" value="Personal" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="Personal"> Personal </label>
                        </div>
                        <div class="d-sm-flex">
                           <label class="text-gray-900 pr-2" for="txtExOthersOne"> Others(pls.Specify) </label>
                           <input type="text" id="txtExOthersOne" name="txtExOthersOne" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <h1 class="h6 text-gray-900"> Plan to do after dropping </h1>
                     <div class="d-sm-flex justify-content-between mb-1">
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="FindWork" name="PlanAfterDrop[]" value="Find Work" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="FindWork"> Find Work </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="Rest" name="PlanAfterDrop[]" value="Rest" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="Rest"> Rest </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="HelpMyFamily" name="PlanAfterDrop[]" value="Help my family" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="HelpMyFamily"> Help my family </label>
                        </div>
                        <div class="d-sm-flex">
                           <label class="text-gray-900 pr-2" for="txtExOthersTwo"> Others(pls.Specify) </label>
                           <input type="text" id="txtExOthersTwo" name="txtExOthersTwo" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <h1 class="h6 text-gray-900"> Feeling about dropping </h1>
                     <div class="d-sm-flex justify-content-between mb-1">
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="SadLonely" name="FeelAboutDrop[]" value="Sad/lonely" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="SadLonely"> Sad/lonely </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="ItsOk" name="FeelAboutDrop[]" value="It's ok" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="ItsOk"> It's ok </label>
                        </div>
                        <div class="d-sm-flex">
                           <label class="text-gray-900 pr-2" for="txtExOthersThree"> Others(pls.Specify) </label>
                           <input type="text" id="txtExOthersThree" name="txtExOthersThree" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <h1 class="h6 text-gray-900"> Parents' Awareness
                     </h1>
                     <div class="d-sm-flex justify-content-start mb-1">
                        <div class="custom-control custom-checkbox pr-5 mr-5">
                           <input type="radio" id="Aware" name="ParentsAwareness" value="Aware" class="custom-control-input" checked />
                           <label for="Aware" class="custom-control-label text-gray-900"> Aware </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="radio" id="NotAware" name="ParentsAwareness" value="Not Aware" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="NotAware"> Not Aware </label>
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <h1 class="h6 text-gray-900"> Parents' feelings about the dropping </h1>
                     <div class="d-sm-flex justify-content-between mb-1">
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="AgreedOf" name="ParentsFeelingsDrop[]" value="Agreed/ok" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="AgreedOf"> Agreed/ok </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="Sad" name="ParentsFeelingsDrop[]" value="Sad" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="Sad"> Sad </label>
                        </div>
                        <div class="d-sm-flex">
                           <label class="text-gray-900 pr-2" for="txtExOthersFive"> Others(pls.Specify) </label>
                           <input type="text" id="txtExOthersFive" name="txtExOthersFive" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <h1 class="h6 text-gray-900">
                        Planned Course and School to enroll next.
                     </h1>
                     <div class="form-group row">
                        <label class="col-sm-1 col-form-label text-gray-900" for="txtCourseEnroll"> 
                           Course <span class="text-danger" id="txtCourseEnrollReq"></span>
                        </label>
                        <div class="col-sm-11">
                           <input type="text" name="txtCourseEnroll" id="txtCourseEnroll" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
                           <span class="text-danger" id="txtErrCourseEnroll"></span>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-sm-1 col-form-label text-gray-900" for="txtSchool"> 
                           School <span class="text-danger" id="txtSchoolReq"></span>
                        </label>
                        <div class="col-sm-11">
                           <input type="text" name="txtSchool" id="txtSchool" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
                           <span class="text-danger" id="txtErrSchool"></span>
                        </div>
                     </div>
                     <label for="QualityEduc"> Reasons for choosing the school. </label>
                     <div class="d-sm-flex justify-content-between mb-3">
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="QualityEduc" name="ReasonChoosSchool[]" value="Quality education" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="QualityEduc"> Quality education </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="CourseAvail" name="ReasonChoosSchool[]" value="Course Availability" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="CourseAvail"> Course Availability </label>
                        </div>
                        <div class="d-sm-flex">
                           <label class="text-gray-900 pr-2" for="txtExOthersSix"> Others(pls.Specify) </label>
                           <input type="text" id="txtExOthersSix" name="txtExOthersSix" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <h1 class="h6 text-gray-900">
                        Any comment regarding your stay with CSU Lasam Campus.
                     </h1>
                     <textarea name="ComRegardStayCsuLasamCampus" id="ComRegardStayCsuLasamCampus" cols="30" rows="5" placeholder="Enter any regarding your stay with CSU lasam campus." class="form-control"></textarea>
                  </li>
               </div>
            </ol>
         </div>
         <div class="card-footer">
            <div class="d-sm-flex justify-content-start">
               <button type="submit" title="Save record." id="btn-dropping-save" class="btn btn-success" disabled> <i class="fas fa-save"></i> Save </button>
            </div>
         </div>
      </form>
   </div>
</div>
<?php
$includeAdminController->footer();
$includeAdminController->script();
?>
<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script src="js/textarea.js"></script>
<script>
   function validateInput() {

      const txtSureName     = $("#txtSureName").val().trim();
      const txtFirstName    = $("#txtFirstName").val().trim();
      const txtMiddleName   = $("#txtMiddleName").val().trim();
      const txtNickName     = $("#txtNickName").val().trim();
      const txtYearLevel    = $("#txtYearLevel").val().trim();
      const txtCourse       = $("#txtCourse").val().trim();
      const txtAge          = $("#txtAge").val().trim();
      const textCivilStatus = $("#textCivilStatus").val().trim();
      const txtHomeAddress  = $("#txtHomeAddress").val().trim();
      const txtTelphone     = $("#txtTelphone").val().trim();
      const txtFather       = $("#txtFather").val().trim();
      const txtMother       = $("#txtMother").val().trim();
      const SmstrSchool     = $("#SmstrSchool").val().trim();
      const txtCourseEnroll = $("#txtCourseEnroll").val().trim();
      const txtSchool       = $("#txtSchool").val().trim();
      const txtDateExitDrop  = $("#txtDateExitDrop").val().trim();

      const isValidInputs = 
      txtSureName.length > 2 && 
      txtFirstName.length > 2 && 
      txtMiddleName.length > 1 && 
      txtYearLevel.length > 0 && 
      txtCourse.length > 2 && 
      txtAge.length > 1 && 
      txtNickName.length > 2 && 
      txtCourse.length > 2 && 
      textCivilStatus.length > 2 &&
      txtHomeAddress.length > 2 && 
      txtTelphone.length > 2 && 
      txtFather.length > 2 && 
      txtMother.length > 2 && 
      SmstrSchool.length > 2 && 
      txtCourseEnroll.length > 2 && 
      txtSchool.length > 2 && 
      txtDateExitDrop.length > 2;
      $('#btn-dropping-save').prop('disabled', !isValidInputs);
   }

   $('#Student-No').on('input', function(){
      $('#Btn-Search-Student-No').click(()=>{
         const y = $(`#ListOfStudentNo option[value=${$("#Student-No").val()}]`);
         $("#txtSureName").val(y.attr("SurName"));
         $("#txtFirstName").val(y.attr("firstName"));
         $("#txtMiddleName").val(y.attr("middleName"));
         $("#txtNickName").val(y.attr("nickName"));
         $("#txtYearLevel").val(y.attr("ylevel"));
         $("#txtCourse").val(y.attr("course"));
         $("#txtAge").val(y.attr("p_age"));
         $("#textCivilStatus").val(y.attr("civilstats"));
         $("#txtHomeAddress").val(y.attr("homeAddres"));
         $("#txtTelphone").val(y.attr("hameTelno"));
         $("#txtFather").val(y.attr("fathername"));
         $("#txtMother").val(y.attr("mothername"));
         $('#SmstrSchool').val(y.attr("SemYearLastAttend"));
         $('#txtCourseEnroll').val(y.attr('CourseOne'));
         $('#txtSchool').val(y.attr('School'));
         $('#txtDateExitDrop').val(y.attr('dropDate'));
         const txtSureName = $("#txtSureName").val().trim();
         if (txtSureName.length <= 0) {
            $('#txtSureNameReq').text('*');
            $("#txtSureName").addClass('is-invalid');
            $('#errTxtSureName').text('Surname is Required.');
         } else {
            $('#txtSureNameReq').text('');
            $("#txtSureName").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtSureName').text('');
         }
         const txtFirstName = $("#txtFirstName").val().trim();
         if (txtFirstName.length <= 0) {
            $('#txtFirstNameReq').text('*');
            $("#txtFirstName").addClass('is-invalid');
            $('#errTxtFirstName').text('First Name is Required.');
         } else {
            $('#txtFirstNameReq').text('');
            $("#txtFirstName").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtFirstName').text('');
         }
         const txtMiddleName = $("#txtMiddleName").val().trim();
         if (txtMiddleName.length <= 0) {
            $('#txtMiddleNameReq').text('*');
            $("#txtMiddleName").addClass('is-invalid');
            $('#errTxtMiddleName').text('Middle name is Required.');
         } else {
            $('#txtMiddleNameReq').text('');
            $("#txtMiddleName").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtMiddleName').text('');
         }
         const txtNickName = $("#txtNickName").val().trim();
         if (txtNickName.length <= 0) {
            $('#txtNickNameReq').text('*');
            $("#txtNickName").addClass('is-invalid');
            $('#errTxtNickName').text('Nick Name is Required.');
         } else {
            $('#txtNickNameReq').text('');
            $("#txtNickName").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtNickName').text('');
         }

         const txtCourse = $("#txtCourse").val().trim();
         if (txtCourse.length <= 0) {
            $('#txtCourseReq').text('*');
            $("#txtCourse").addClass('is-invalid');
            $('#errTxtCourse').text('Course is Required.');
         } else {
            $('#txtCourseReq').text('');
            $("#txtCourse").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtCourse').text('');
         }
         const textCivilStatus = $("#textCivilStatus").val().trim();
         if (textCivilStatus.length <= 0) {
            $('#textCivilStatusReq').text('*');
            $("#textCivilStatus").addClass('is-invalid');
            $('#errTextCivilStatus').text('Civil Status is Required.');
         } else {
            $('#textCivilStatusReq').text('');
            $("#textCivilStatus").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTextCivilStatus').text('');
         }
         const txtHomeAddress = $("#txtHomeAddress").val().trim();
         if (txtHomeAddress.length <= 0) {
            $('#txtHomeAddressReq').text('*');
            $("#txtHomeAddress").addClass('is-invalid');
            $('#errTxtHomeAddress').text('Home address is Required.');
         } else {
            $('#txtHomeAddressReq').text('');
            $("#txtHomeAddress").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtHomeAddress').text('');
         }

         const txtMother = $("#txtMother").val().trim();
         if (txtMother.length <= 0) {
            $('#txtMotherReq').text('*');
            $("#txtMother").addClass('is-invalid');
            $('#errTxtMother').text('Mother Name is Required.');
         } else {
            $('#txtMotherReq').text('');
            $("#txtMother").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtMother').text('');
         }
         const txtFather = $("#txtFather").val().trim();
         if (txtFather.length <= 0) {
            $('#txtFatherReq').text('*');
            $("#txtFather").addClass('is-invalid');
            $('#errTxtFather').text('Father Name is Required.');
         } else {
            $('#txtFatherReq').text('');
            $("#txtFather").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtFather').text('');
         }

         const txtTelphone = $("#txtTelphone").val().trim();
         if (txtTelphone.length <= 0) {
            $('#txtTelphoneReq').text('*');
            $("#txtTelphone").addClass('is-invalid');
            $('#errTxtTelphone').text('Contact number is Required.');
         } else {
            $('#txtTelphoneReq').text('');
            $("#txtTelphone").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtTelphone').text('');
         }
         const txtAge = $("#txtAge").val().trim();
         if (txtAge.length <= 0) {
            $('#txtAgeReq').text('*');
            $("#txtAge").addClass('is-invalid');
            $('#errTxtAge').text('Age is Required.');
         } else {
            $('#txtAgeReq').text('');
            $("#txtAge").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtAge').text('');
         }
         const txtYearLevel = $("#txtYearLevel").val().trim();
         if (txtYearLevel.length <= 0) {
            $('#txtYearLevelReq').text('*');
            $("#txtYearLevel").addClass('is-invalid');
            $('#errTxtYearLevel').text('Year Level is Required.');
         } else {
            $('#txtYearLevelReq').text('');
            $("#txtYearLevel").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtYearLevel').text('');
         }

         const SmstrSchool = $('#SmstrSchool').val().trim();
         if (SmstrSchool.length <= 0) {
            $('#txtSmstrSchoolReq').text('*');      
            $('#txtErrSmstrSchool').text('Semester/School Year Last Attended is required!');
            $('#SmstrSchool').addClass('is-invalid');
         } else {
            $('#txtSmstrSchoolReq').text('');      
            $('#txtErrSmstrSchool').text('');
            $('#SmstrSchool').removeClass('is-invalid').addClass('is-valid')
         } 
         const txtSchool = $('#txtSchool').val().trim();
         if (txtSchool.length <= 0) {
            $('#txtSchoolReq').text('*');
            $('#txtErrSchool').text('School is required.');
            $('#txtSchool').addClass('is-invalid');
         } else {
            $('#txtSchoolReq').text('');
            $('#txtErrSchool').text('');
            $('#txtSchool').removeClass('is-invalid').addClass('is-valid')
         }
         const txtCourseEnroll = $('#txtCourseEnroll').val().trim();
         if (txtCourseEnroll.length <= 0) {
            $('#txtCourseEnrollReq').text('*');
            $('#txtErrCourseEnroll').text('Course is required.');
            $('#txtCourseEnroll').addClass('is-invalid');
         } else {
            $('#txtCourseEnrollReq').text('');
            $('#txtErrCourseEnroll').text('');
            $('#txtCourseEnroll').removeClass('is-invalid').addClass('is-valid');
         }
         $('#ComRegardStayCsuLasamCampus').addClass('is-valid');
         $('#txtExOthersOne').addClass('is-valid');
         $('#txtExOthersTwo').addClass('is-valid');
         $('#txtExOthersThree').addClass('is-valid');
         $('#txtExOthersFive').addClass('is-valid');
         $('#txtExOthersSix').addClass('is-valid');

         const r = y.attr("ReasonsForDrop");
         if (r) {
            const actions = r.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="ReasonsForDrop[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         $('#txtExOthersOne').val(y.attr("ex_OthersOne"));
         const p = y.attr("PlanAfterDrop");
         if (p) {
            const actions = p.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="PlanAfterDrop[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         $('#txtExOthersTwo').val(y.attr("ex_OthersTwo"));

         const f = y.attr("FeelAboutDrop");
         if (f) {
            const actions = f.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="FeelAboutDrop[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }      
         $('#txtExOthersThree').val(y.attr("ex_OthersThree"));

         const x = y.attr("ParentsAwareness");
         x == "Aware" ? $('#Aware').attr("checked", true) : 
         x == "Not Aware" ? $('#NotAware').attr("checked", true) : '';

         const d = y.attr("ParentsFeelDrop");
         if (d) {
            const actions = d.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="ParentsFeelingsDrop[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         } 

         $('#txtExOthersFive').val(y.attr("ex_OthersFive"));

         const c = y.attr("ReasonChoosSchool");
         if (c) {
            const actions = c.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="ReasonChoosSchool[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         } 
         $('#txtExOthersSix').val(y.attr("ex_OthersSix"));
         $('#ComRegardStayCsuLasamCampus').val(y.attr("CRSCsuLasam"));
         const txtDateExitDrop = $('#txtDateExitDrop').val().trim();
         if (txtDateExitDrop.length <= 0) {
            $('#txtDateExitDropReq').text('*');
            $('#errtxtDateExitDrop').text('Date is required.');
            $('#txtDateExitDrop').addClass('is-invalid');
         } else if (txtDateExitDrop.length > 2) {
            $('#txtDateExitDroping').addClass('d-none');
         } else {
            $('#txtDateExitDropReq').text('');
            $('#errtxtDateExitDrop').text('');
            $('#txtDateExitDrop').removeClass('is-invalid').addClass('is-valid')
         }
         const allinputs = [txtSureName, txtFirstName, txtMiddleName, txtNickName, txtCourse, textCivilStatus, txtHomeAddress,txtMother, txtFather,txtTelphone, txtAge,txtYearLevel];
         // Check if any input is empty
         const hasEmptyInputs = allinputs.some(input => input.trim() === '');
         const iconExla = '<i class="fa fa-exclamation-circle"></i>';
         const messages = 'The student must fill out all required fields in their account forms.';
         hasEmptyInputs ? $('#message-notifications').html(`${iconExla} ${messages}`) : null;
         validateInput();
      });
      $(`input[name="ParentsAwareness"][value="Aware"]`).prop('checked', true);
      $("#txtSureName").val('');
      $("#txtFirstName").val('');
      $("#txtMiddleName").val('');
      $("#txtNickName").val('');
      $("#YearLevel").val('');
      $("#txtCourse").val('');
      $("#txtAge").val('');
      $("#textCivilStatus").val('');
      $("#txtHomeAddress").val('');
      $("#txtTelphone").val('');
      $("#txtFather").val('');
      $("#txtMother").val('');
      $('#SmstrSchool').val('');
      $('#txtCourseEnroll').val('');
      $('#txtSchool').val('');
      $("#txtFirstName").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtMiddleName").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtSureName").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtNickName").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtCourse").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#textCivilStatus").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtAge").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtHomeAddress").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtTelphone").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtFather").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtMother").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtYearLevel").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#SmstrSchool").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtCourseEnroll").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtSchool").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $('#txtDateExitDropReq').text('');
      $('#errtxtDateExitDrop').text('');
      $('#txtDateExitDroping').removeClass('d-none');
      $('#txtDateExitDrop').removeClass('is-invalid');
      $('#errTxtYearLevel').text('');
      $('#txtYearLevelReq').text('');
      $('#txtSureNameReq').text('');
      $('#errTxtSureName').text('');
      $('#txtFirstNameReq').text('');
      $('#errTxtFirstName').text('');
      $('#txtMiddleNameReq').text('');
      $('#errTxtMiddleName').text('');
      $('#txtNickNameReq').text('');
      $('#errTxtNickName').text('');
      $('#txtCourseReq').text('');
      $('#errTxtCourse').text('');
      $('#textCivilStatusReq').text('');
      $('#errTextCivilStatus').text('');
      $('#txtHomeAddressReq').text('');
      $('#txtAgeReq').text('');
      $('#errTxtAge').text('');
      $('#errTxtHomeAddress').text('');
      $('#txtTelphoneReq').text('');
      $('#errTxtTelphone').text('');
      $('#txtCellphoneReq').text('');
      $('#errTxtCellphone').text('');
      $('#txtFatherReq').text('');
      $('#errTxtFather').text('');
      $('#txtMotherReq').text('');
      $('#errTxtMother').text('');
      $('#txtSmstrSchoolReq').text('');      
      $('#txtErrSmstrSchool').text('');
      $('#txtSchoolReq').text('');
      $('#txtErrSchool').text('');
      $('#txtCourseEnrollReq').text('');
      $('#txtErrCourseEnroll').text('');
      $('#ComRegardStayCsuLasamCampus').removeClass('is-valid');
      $('#txtExOthersOne').removeClass('is-valid');
      $('#txtExOthersTwo').removeClass('is-valid');
      $('#txtExOthersThree').removeClass('is-valid');
      $('#txtExOthersFive').removeClass('is-valid');
      $('#txtExOthersSix').removeClass('is-valid');
      $('#message-notifications').text('');
      $(`input[name="ReasonsForDrop[]"]:checked`).each((_, checkbox) => {
         $(checkbox).prop('checked', false); // Uncheck the checkbox
      });
      $(`input[name="PlanAfterDrop[]"]:checked`).each((_, checkbox) => {
         $(checkbox).prop('checked', false); // Uncheck the checkbox
      });
      $(`input[name="FeelAboutDrop[]"]:checked`).each((_, checkbox) => {
         $(checkbox).prop('checked', false); // Uncheck the checkbox
      });
      $(`input[name="ParentsFeelingsDrop[]"]:checked`).each((_, checkbox) => {
         $(checkbox).prop('checked', false); // Uncheck the checkbox
      });
      $(`input[name="ReasonChoosSchool[]"]:checked`).each((_, checkbox) => {
         $(checkbox).prop('checked', false); // Uncheck the checkbox
      });
      $('#txtExOthersOne').val("");
      $('#txtExOthersTwo').val("");
      $('#txtExOthersThree').val("");
      $('#txtExOthersFive').val("");
      $('#txtExOthersSix').val("");
      $('#ComRegardStayCsuLasamCampus').val("");
      validateInput();
   });
   
   $('#SmstrSchool').on('input',()=>{
      const SmstrSchool = $('#SmstrSchool').val().trim();
      if (SmstrSchool.length <= 2) {
         $('#txtSmstrSchoolReq').text('*');      
         $('#txtErrSmstrSchool').text('Semester/School Year Last Attended is required!');
         $('#SmstrSchool').addClass('is-invalid');
      } else {
         $('#txtSmstrSchoolReq').text('');      
         $('#txtErrSmstrSchool').text('');
         $('#SmstrSchool').removeClass('is-invalid').addClass('is-valid')
      } 
      validateInput();
   });
   $('#txtCourseEnroll').on('input', ()=>{
      const txtCourseEnroll = $('#txtCourseEnroll').val().trim();
      if (txtCourseEnroll.length <= 0) {
         $('#txtCourseEnrollReq').text('*');
         $('#txtErrCourseEnroll').text('No blank spaces allowed.');
         $('#txtCourseEnroll').addClass('is-invalid');
      } else if (txtCourseEnroll.length < 3) {
         $('#txtCourseEnrollReq').text('*');
         $('#txtErrCourseEnroll').text('Course is required!');
         $('#txtCourseEnroll').addClass('is-invalid');
      } else {
         $('#txtCourseEnrollReq').text('');
         $('#txtErrCourseEnroll').text('');
         $('#txtCourseEnroll').removeClass('is-invalid').addClass('is-valid')
      }
      validateInput();
   })
   $('#txtSchool').on('input', ()=>{
      const txtSchool = $('#txtSchool').val().trim();
      if (txtSchool.length <= 0) {
         $('#txtSchoolReq').text('*');
         $('#txtErrSchool').text('No blank spaces allowed.');
         $('#txtSchool').addClass('is-invalid');
      } else if (txtSchool.length < 3) {
         $('#txtSchoolReq').text('*');
         $('#txtErrSchool').text('School is required!');
         $('#txtSchool').addClass('is-invalid');
      } else {
         $('#txtSchoolReq').text('');
         $('#txtErrSchool').text('');
         $('#txtSchool').removeClass('is-invalid').addClass('is-valid')
      }
      validateInput();
   })
   $('#txtDateExitDrop').on('input', ()=>{
      const txtDateExitDrop = $('#txtDateExitDrop').val().trim();
      if (txtDateExitDrop.length <= 0) {
         $('#txtDateExitDropReq').text('*');
         $('#errtxtDateExitDrop').text('Date is required.');
         $('#txtDateExitDrop').addClass('is-invalid');
      } else {
         $('#txtDateExitDropReq').text('');
         $('#errtxtDateExitDrop').text('');
         $('#txtDateExitDrop').removeClass('is-invalid').addClass('is-valid')
      }
      validateInput();
   })
</script>