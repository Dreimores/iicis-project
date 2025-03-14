<?php
$includeAdminController = new includeAdminController();
$includeAdminController->header();
$includeAdminController->navbar();
?>
<div class="container-fluid animate__animated animate__fadeIn">
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
      <form action="?route=exit-exit-trans" method="post">
         <div class="card-body">
            <div class="d-flex mb-2 text-danger">
               <span id="message-notifications"></span>
            </div>
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
                           mothername ="<?=$row['m_mothername']?>"
                           SmstrSchool="<?=$row['SmstrSchool']?>"
                           ReasonTransfer   ="<?=$row['ReasonTransfer']?>"
                           trans_OthersOne  ="<?=$row['trans_OthersOne']?>"
                           FeelAboutTransfer="<?=$row['FeelAboutTransfer']?>"
                           trans_OthersTwo  ="<?=$row['trans_OthersTwo']?>"
                           ParentAwareness  ="<?=$row['trans_ParentAwareness']?>"
                           PrntFeelAboutTransfer="<?=$row['PrntFeelAboutTransfer']?>"
                           trans_OthersThree="<?=$row['trans_OthersThree']?>"
                           trans_CourseOne  ="<?=$row['trans_CourseOne']?>"
                           trans_School     ="<?=$row['trans_School']?>"
                           RsnsChoosTheSchl ="<?=$row['RsnsChoosTheSchl']?>"
                           trans_OthersFour ="<?=$row['trans_OthersFour']?>"
                           Regarding        ="<?=$row['Regarding']?>"
                           transDate        ="<?=$row['transDate']?>"
                           >
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
               <div class="form-group col-sm-3" id="txtforTransferring">
                  <label class="col-form-label text-gray-900" for="txtforTransfer"> 
                     Date <span class="text-danger" id="txtforTransferReq"></span>
                  </label>
                  <input type="date" id="txtforTransfer" name="txtforTransfer" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
                  <span class="text-danger" id="errtxtforTransfer"></span>
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
                              <input type="checkbox" id="ScreenedOut" name="ReasonTransfer[]" value="Screened out" class="custom-control-input"/>
                              <label class="custom-control-label text-gray-900" for="ScreenedOut"> Screened out </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="ChangeOfCourse" name="ReasonTransfer[]" value="Change of course" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="ChangeOfCourse"> Change of course </label>
                           </div>
                        </div>
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="FamilyProblem" name="ReasonTransfer[]" value="Family problem" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="FamilyProblem"> Family problem </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="ParentChoice" name="ReasonTransfer[]" value="Parent's choice" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="ParentChoice"> Parent's choice </label>
                           </div>
                        </div>
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="FinancialProblem" name="ReasonTransfer[]" value="Financial problem" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="FinancialProblem"> Financial problem </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="ChangeOfResidence" name="ReasonTransfer[]" value="Change of residence" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="ChangeOfResidence"> Change of residence </label>
                           </div>
                        </div>
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="Distance" name="ReasonTransfer[]" value="Distance" class="custom-control-input" />
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
                           <input type="checkbox" id="SadLonely" name="FeelAboutTransfer[]" value="Sad/lonely" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="SadLonely"> Sad/lonely </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="HappyGreat" name="FeelAboutTransfer[]" value="Happy/great" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="HappyGreat"> Happy/great </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="Excited" name="FeelAboutTransfer[]" value="Excited" class="custom-control-input" />
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
                           <input type="radio" id="ParentAware" name="ParentAwareness" value="Aware" class="custom-control-input" checked />
                           <label class="custom-control-label text-gray-900" for="ParentAware"> Aware </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="radio" id="NotAware" name="ParentAwareness" value="Not Aware" class="custom-control-input" />
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
                           <input type="checkbox" id="AgreedOk" name="PrntFeelAboutTransfer[]" value="Agreed/ok" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="AgreedOk"> Agreed/ok </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="Sad" name="PrntFeelAboutTransfer[]" value="Sad" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="Sad"> Sad </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="Supportive" name="PrntFeelAboutTransfer[]" value="Supportive" class="custom-control-input" />
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
                           <input type="checkbox" id="QualityEducation" name="RsnsChoosTheSchl[]" value="Quality education" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="QualityEducation"> Quality education </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="CourseAvailability" name="RsnsChoosTheSchl[]" value="Course Availability" class="custom-control-input" />
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
                     <textarea name="Regarding" id="Regarding" cols="30" rows="5" class="form-control"></textarea>
                  </li>
               </div>
            </ol>
         </div>
         <div class="card-footer">
            <button type="submit" title="Save record." id="btn-Transferring-save" disabled class="btn btn-success"> <i class="fas fa-save"></i> Save </button>
         </div>
      </form>
   </div>
</div>
<?php
$includeAdminController->footer();
$includeAdminController->script();
?>
<script>

   function validateInputs() {

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
      const txtforTransfer  = $("#txtforTransfer").val().trim();

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
      txtforTransfer.length > 2;
      $('#btn-Transferring-save').prop('disabled', !isValidInputs);
   }

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
         $('#SmstrSchool').val(y.attr("SmstrSchool"));
         $('#txtCourseEnroll').val(y.attr('trans_CourseOne'));
         $('#txtSchool').val(y.attr('trans_School'));
         $('#txtforTransfer').val(y.attr('transDate'));
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
            $('#txtErrSchool').text('School required.');
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
         const r = y.attr("ReasonTransfer");
         if (r) {
            const actions = r.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="ReasonTransfer[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         $('#OthersOne').val(y.attr('trans_OthersOne')).addClass('is-valid');

         const a = y.attr("FeelAboutTransfer");
         if (a) {
            const actions = a.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="FeelAboutTransfer[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         $('#OthersTwo').val(y.attr('trans_OthersTwo')).addClass('is-valid');
         const x = y.attr("ParentAwareness");
         x == "Aware" ? $('#Aware').attr("checked", true) : 
         x == "Not Aware" ? $('#NotAware').attr("checked", true) : '';

         const f = y.attr("PrntFeelAboutTransfer");
         if (f) {
            const actions = f.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="PrntFeelAboutTransfer[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         $('#OthersThree').val(y.attr('trans_OthersThree')).addClass('is-valid');

         const t = y.attr("RsnsChoosTheSchl");
         if (t) {
            const actions = t.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="RsnsChoosTheSchl[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         $('#OthersFour').val(y.attr('trans_OthersFour')).addClass('is-valid');
         $('#Regarding').val(y.attr('Regarding')).addClass('is-valid');
         const txtforTransfer = $('#txtforTransfer').val().trim();
         if (txtforTransfer.length <= 0) {
            $('#txtforTransferReq').text('*');
            $('#errtxtforTransfer').text('No blank spaces allowed.');
            $('#txtforTransfer').addClass('is-invalid');
         } else if(txtforTransfer.length > 2) {
            $('#txtforTransferring').addClass('d-none');
         } else {
            $('#txtforTransferReq').text('');
            $('#errtxtforTransfer').text('');
            $('#txtforTransfer').removeClass('is-invalid').addClass('is-valid')
         }
         const allinputs = [txtSureName, txtFirstName, txtMiddleName, txtNickName, txtCourse, textCivilStatus, txtHomeAddress,txtMother, txtFather,txtTelphone, txtAge,txtYearLevel];
         // Check if any input is empty
         const hasEmptyInputs = allinputs.some(input => input.trim() === '');
         const iconExla = '<i class="fa fa-exclamation-circle"></i>';
         const messages = 'The student must fill out all required fields in their account forms.';
         hasEmptyInputs ? $('#message-notifications').html(`${iconExla} ${messages}`) : null;
         validateInputs();
      });
      $(`input[name="ParentAwareness"][value="Aware"]`).prop('checked', true);
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
      $("#txtCourseEnroll").val('').removeClass('is-invalid is-valid border-bottom-0');
      $('#errTxtSureName').text('');
      $('#txtSureNameReq').text('');
      $('#errTxtFirstName').text('');
      $('#txtFirstNameReq').text('');
      $('#errTxtMiddleName').text('');
      $('#txtMiddleNameReq').text('');
      $('#errTxtNickName').text('');
      $('#txtNickNameReq').text('');
      $('#errTxtYearLevel').text('');
      $('#txtYearLevelReq').text('');
      $('#errTxtCourse').text('');
      $('#txtCourseReq').text('');
      $('#errTxtAge').text('');
      $('#txtAgeReq').text('');
      $('#errTextCivilStatus').text('');
      $('#textCivilStatusReq').text('');
      $('#errTxtHomeAddress').text('');
      $('#txtHomeAddressReq').text('');
      $('#errTxtTelphone').text('');
      $('#txtTelphoneReq').text('');
      $('#errTxtFather').text('');
      $('#txtFatherReq').text('');
      $('#errTxtMother').text('');
      $('#txtMotherReq').text('');
      $('#errTxtMother').text('');
      $('#txtMotherReq').text('');
      $('#txtErrCourseEnroll').text('');
      $('#txtCourseEnrollReq').text('');
      $('#txtErrSchool').text('');
      $('#txtSchoolReq').text('');
      $('#txtforTransferReq').text('');
      $('#errtxtforTransfer').text('');
      $('#txtforTransferring').removeClass('d-none');
      $('#txtforTransfer').removeClass('is-invalid');
      $('#txtErrSmstrSchool').text('');
      $('#txtSmstrSchoolReq').text('');
      $('#txtErrSmstrSchoolReq').text('');
      $("#txtSchool").val('').removeClass('is-invalid is-valid');
      $('#OthersFour').val('').removeClass('is-invalid is-valid');
      $('#Regarding').val('').removeClass('is-invalid is-valid');
      $('#OthersOne').val('').removeClass('is-invalid is-valid');
      $('#OthersTwo').val('').removeClass('is-invalid is-valid');
      $('#OthersThree').val('').removeClass('is-invalid is-valid');
      $('#SmstrSchool').val('').removeClass('is-invalid is-valid');
      $('#message-notifications').text('');
      $(`input[name="ReasonTransfer[]"]:checked`).each((_, checkbox) => {
         $(checkbox).prop('checked', false); // Uncheck the checkbox
      });
      $(`input[name="FeelAboutTransfer[]"]:checked`).each((_, checkbox) => {
         $(checkbox).prop('checked', false); // Uncheck the checkbox
      });
      $(`input[name="PrntFeelAboutTransfer[]"]:checked`).each((_, checkbox) => {
         $(checkbox).prop('checked', false); // Uncheck the checkbox
      });
      $(`input[name="RsnsChoosTheSchl[]"]:checked`).each((_, checkbox) => {
         $(checkbox).prop('checked', false); // Uncheck the checkbox
      });
      validateInputs();
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
      validateInputs();
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
      validateInputs();
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
      validateInputs();
   })
   $('#txtforTransfer').on('input', ()=>{
      const txtforTransfer = $('#txtforTransfer').val().trim();
      if (txtforTransfer.length <= 0) {
         $('#txtforTransferReq').text('*');
         $('#errtxtforTransfer').text('No blank spaces allowed.');
         $('#txtforTransfer').addClass('is-invalid');
      } else {
         $('#txtforTransferReq').text('');
         $('#errtxtforTransfer').text('');
         $('#txtforTransfer').removeClass('is-invalid').addClass('is-valid')
      }
      validateInputs();
   })
</script>