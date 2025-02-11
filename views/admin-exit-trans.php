<?php
$includeAdminController = new includeAdminController();
$includeAdminController->header();
$includeAdminController->navbar();
?>
<div class="container-fluid">
   <div class="card shadow-sm">
      <div class="card-header d-sm-flex justify-content-center">
         <div class="d-sm-inline-block d-none mx-1"></div>
         <img class="d-lg-inline-block d-none" src="img/csu_lasam_logo.webp" width="130" height="130"/>
         <div class="text-gray-900">
            <div class="h5 text-center"> Republic of the Philippines </div>
            <div class="h4 text-uppercase text-center font-weight-bold"> cagayan state university </div>
            <div class="h5 text-capitalize text-center"> lasam campus </div>
            <div class="h4 text-uppercase text-center mb-4"> guidance and counseling center </div>
            <div class="h4 text-uppercase text-center font-weight-bold"> exit form (for transferring) </div>
         </div>
         <div class="mx-5"></div>
      </div>
      <div class="card-body">
         <div class="form-group d-sm-flex mb-4">
            <label class="my-1 mr-3"> Student number : </label>
            <div class="form-inline">
               <div class="input-group">
                  <input type="search" name="Student-No" id="Student-No-exit" list="ListOfStudentNoExit" class="form-control" placeholder="Search for...">
                  <div class="input-group-append">
                     <button type="button" class="btn btn-primary" title="Search student no." id="Btn-Search-Student-No-exit">
                        <i class="fas fa-search fa-sm"></i>
                     </button>
                  </div>
               </div>
               <datalist id="ListOfStudentNoExit">
                  <?php $studentFormsModel = new studentFormsModel();
                     foreach ($studentFormsModel->view_account_student() as $row) {?>
                     <option value ="<?=$row['studentno']?>"
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
                        mothername ="<?=$row['m_mothername']?>">
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
         </div>
         <label for="ScreenedOut" class="text-gray-900">
            Direction: Please check your choices below.
         </label>
         <ol class="text-gray-900 p-3">
            <div>
               <li>
                  <h1 class="h6 text-gray-900">
                     Reasons for transferring
                  </h1>
                  <div class="d-sm-flex justify-content-between mb-3">
                     <div class="d-flex flex-column">
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="ScreenedOut" name="ReasonTransfer[]" class="custom-control-input"/>
                           <label class="custom-control-label text-gray-900" for="ScreenedOut"> Screened out </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="ChangeOfCourse" name="ReasonTransfer[]" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="ChangeOfCourse"> Change of course </label>
                        </div>
                     </div>
                     <div class="d-flex flex-column">
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="FamilyProblem" name="ReasonTransfer[]" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="FamilyProblem"> Family problem </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="ParentChoice" name="ReasonTransfer[]" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="ParentChoice"> Parent's choice </label>
                        </div>
                     </div>
                     <div class="d-flex flex-column">
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="FinancialProblem" name="ReasonTransfer[]" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="FinancialProblem"> Financial problem </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="ChangeOfResidence" name="ReasonTransfer[]" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="ChangeOfResidence"> Change of residence </label>
                        </div>
                     </div>
                     <div class="d-flex flex-column">
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="Distance" name="ReasonTransfer[]" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="Distance"> Distance </label>
                        </div>
                        <div class="d-sm-flex">
                           <label class="text-gray-900 pr-2" for="OthersOne"> Others(pls.Specify) </label>
                           <input type="text" id="OthersOne" name="OthersOne" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
                        </div>
                     </div>
                  </div>
               </li>
            </div>
            <div>
               <li>
                  <h1 class="h6 text-gray-900">
                     Feeling about Transferring
                  </h1>
                  <div class="d-sm-flex justify-content-between mb-3">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="SadLonely" name="FeelAboutTransfer[]" class="custom-control-input" />
                        <label class="custom-control-label text-gray-900" for="SadLonely"> Sad/lonely </label>
                     </div>
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="HappyGreat" name="FeelAboutTransfer[]" class="custom-control-input" />
                        <label class="custom-control-label text-gray-900" for="HappyGreat"> Happy/great </label>
                     </div>
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="Excited" name="FeelAboutTransfer[]" class="custom-control-input" />
                        <label class="custom-control-label text-gray-900" for="Excited"> Excited </label>
                     </div>
                     <div class="d-sm-flex">
                        <label class="text-gray-900 pr-2" for="OthersTwo"> Others(pls.Specify) </label>
                        <input type="text" id="OthersTwo" name="OthersTwo" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
                     </div>
                  </div>
               </li>
            </div>
            <div>
               <li>
                  <h1 class="h6 text-gray-900"> Parents' Awareness </h1>
                  <div class="d-sm-flex justify-content-start mb-3">
                     <div class="custom-control custom-checkbox pr-5 mr-5">
                        <input type="radio" id="ParentAware" name="ParentAwareness" class="custom-control-input" checked />
                        <label class="custom-control-label text-gray-900" for="ParentAware"> Aware </label>
                     </div>
                     <div class="custom-control custom-checkbox">
                        <input type="radio" id="NotAware" name="ParentAwareness" class="custom-control-input" />
                        <label class="custom-control-label text-gray-900" for="NotAware"> Not Aware </label>
                     </div>
                  </div>
               </li>
            </div>
            <div>
               <li>
                  <h1 class="h6 text-gray-900">
                     Parents' feelings about transferring
                  </h1>
                  <div class="d-sm-flex justify-content-between mb-3">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="AgreedOk" name="PrntFeelAboutTransfer[]" class="custom-control-input" />
                        <label class="custom-control-label text-gray-900" for="AgreedOk"> Agreed/ok </label>
                     </div>
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="Sad" name="PrntFeelAboutTransfer[]" class="custom-control-input" />
                        <label class="custom-control-label text-gray-900" for="Sad"> Sad </label>
                     </div>
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="Supportive" name="PrntFeelAboutTransfer[]" class="custom-control-input" />
                        <label class="custom-control-label text-gray-900" for="Supportive"> Supportive </label>
                     </div>
                     <div class="d-sm-flex">
                        <label class="text-gray-900 pr-2" for="OthersThree"> Others(pls.Specify) </label>
                        <input type="text" id="OthersThree" name="OthersThree" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
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
                  <label for="QualityEducation"> Reasons for choosing the school. </label>
                  <div class="d-sm-flex justify-content-between mb-3">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="QualityEducation" name="RsnsChoosTheSchl[]" class="custom-control-input" />
                        <label class="custom-control-label text-gray-900" for="QualityEducation"> Quality education </label>
                     </div>
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="CourseAvailability" name="RsnsChoosTheSchl[]" class="custom-control-input" />
                        <label class="custom-control-label text-gray-900" for="CourseAvailability"> Course Availability </label>
                     </div>
                     <div class="d-sm-flex">
                        <label class="text-gray-900 pr-2" for="OthersFour"> Others(pls.Specify) </label>
                        <input type="text" id="OthersFour" name="OthersFour" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
                     </div>
                  </div>
               </li>
            </div>
            <div>
               <li>
                  <h1 class="h6 text-gray-900">
                     Any comment regarding your stay with CSU Lasam Campus.
                  </h1>
                  <textarea name="Regarding" cols="30" rows="5" class="form-control"></textarea>
               </li>
            </div>
         </ol>
      </div>
      <div class="card-footer">
         <button type="submit" name="SaveTransferringBtn" title="Save record." class="btn btn-success">
            <i class="fas fa-save"></i>
            Save
         </button>
      </div>
   </div>
</div>
<?php
$includeAdminController->footer();
$includeAdminController->script();
?>
<script>
   $('#Student-No-exit').on('input', function(){
      $('#Btn-Search-Student-No-exit').click(()=>{
         const y = $(`#ListOfStudentNoExit option[value=${$("#Student-No-exit").val()}]`);
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
      });
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
   })
</script>