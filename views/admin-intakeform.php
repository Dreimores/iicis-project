<?php
   $includeAdminController = new includeAdminController();
   $includeAdminController->header();
   $includeAdminController->navbar();
?>
<div class="container-fluid">
   <div class="card">
      <div class="card-header d-sm-flex justify-content-center">
         <div class="d-sm-inline-block d-none mx-2"></div>
         <img class="d-lg-inline-block d-none" src="img/csu_lasam_logo.webp" width="130" height="130"/>
         <div class="text-gray-900">
            <div class="h5 text-center"> Republic of the Philippines </div>
            <div class="h4 text-uppercase text-center font-weight-bold"> cagayan state university </div>
            <div class="h5 text-capitalize text-center"> lasam campus </div>
            <div class="h4 text-uppercase text-center mb-4"> guidance and counseling center </div>
            <div class="h4 text-uppercase text-center font-weight-bold"> intake form </div>
         </div>
         <div class="mx-5"></div>
      </div>
      <form action="?route=submit-intake-form" method="post">
         <div class="card-body">
            <div class="form-group d-sm-flex mb-4">
               <label class="my-1 mr-3"> Student number : </label>
               <div class="form-inline">
                  <div class="input-group">
                     <input type="search" name="studentno" id="studentno" list="list-of-student-no" class="form-control" placeholder="Search for...">
                     <div class="input-group-append">
                        <button type="button" class="btn btn-primary" title="Search student no." id="btn-search-studentno">
                           <i class="fas fa-search fa-sm"></i>
                        </button>
                     </div>
                  </div>
                  <datalist id="list-of-student-no">
                     <?php $studentFormsModel = new studentFormsModel();
                        foreach ($studentFormsModel->view_account_student() as $row) { ?>
                           <option value="<?=$row['studentno']?>"
                           studentNo="<?=$row['studentno']?>" 
                           fullName  ="<?=$row['p_firstname']." ".substr($row['p_middlename'],0,1).". ".$row['p_surname']?>"
                           courseYear="<?=$row['coursecode']."-".$row['ylevel']?>"
                           homeAddres="<?=$row['p_homeaddress']?>"
                           homeContct="<?=$row['p_homeadd_telno']?>"
                           emailAdres="<?=$row['email']?>"
                           studentAge="<?=$row['p_age']?>"
                           dateOfBrth="<?=$row['p_datebirth']?>"
                           studentSex="<?=$row['p_sex']?>"
                           civilstats="<?=$row['p_cilvilstatus']?>"
                           studRelign="<?=$row['p_religion']?>"
                           intakeDate="<?=$row['Date']?>"
                           intakeTime="<?=$row['Time']?>"
                           TypeOfCsel="<?=$row['TypeOfCounsel']?>"
                           DteRefered="<?=$row['DateReferred']?>"
                           ReferredBy="<?=$row['ReferredBy']?>"
                           RForCounsl="<?=$row['ReasonsForCounsel']?>"
                           PlanOfAction="<?=$row['PlanOfAction']?>"
                           CounselStatus="<?=$row['CounselStatus']?>"
                           OthersOne ="<?=$row['OthersOne']?>"
                           OthersTwo ="<?=$row['OtherTwo']?>"
                           >
                     <?php }?>
                  </datalist>
               </div>
            </div>
            <div class="row">
               <input type="hidden" name="txtStudnetno" id="txtStudnetno">
               <div class="form-group col-md-6 col-xl-3">
                  <label> Client Name: <span class="text-danger" id="txtClientNameReq"></span> </label> 
                  <input type="text" id="txtClientName" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly>
                  <span class="text-danger" id="errTxtClientName"></span>
               </div>
               <div class="form-group col-md-6 col-xl-3">
                  <label> Course & Year: <span class="text-danger" id="txtCourseYearReq"></span> </label>
                  <input type="text" id="txtCourseYear" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly>   
                  <span class="text-danger" id="errtTxtCourseYear"></span>
               </div> 
               <div class="form-group col-md-6 col-xl-3">
                  <label> Date: <span class="text-danger" id="txtDateEditReq"></span> </label>
                  <input type="date" id="txtDateEdit" name="txtDateEdit" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" required>
                  <span class="text-danger" id="errTxtDateEdit"></span>
               </div>     
               <div class="form-group col-md-6 col-xl-3">
                  <label> Time: <span class="text-danger" id="txtTimedEditReq"></span> </label>
                  <input type="time" id="txtTimedEdit" name="txtTimedEdit" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" required>
                  <span class="text-danger" id="errTxtTimedEdit"></span>
               </div>                                                         
               <div class="form-group col-md-6 col-xl-3">
                  <label> Address: <span class="text-danger" id="txtHmeAddressReq"></span> </label> 
                  <input type="text" id="txtHmeAddress" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtHmeAddress"></span>
               </div>
               <div class="form-group col-md-6 col-xl-3">
                  <label> Contact No: <span class="text-danger" id="txtContactNoReq"></span> </label>
                  <input type="text" id="txtContactNo" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtContactNo"></span>
               </div>
               <div class="form-group col-md-6 col-xl-3">
                  <label> E-mail Adress: <span class="text-danger" id="txtEmailAddressReq"></span> </label>
                  <input type="email" id="txtEmailAddress" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtEmailAddress"></span>
               </div>
               <div class="form-group col-md-6 col-xl-3">
                  <label> Age: <span class="text-danger" id="txtAgeReq"></span> </label>
                  <input type="text" id="txtAge" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/> 
                  <span class="text-danger" id="errTxtAge"></span>
               </div> 
               <div class="form-group col-md-6 col-xl-3">
                  <label> Date of Birth: <span class="text-danger" id="txtDateOfBirthReq"></span> </label>
                  <input type="date" id="txtDateOfBirth" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtDateOfBirth"></span>
               </div> 
               <div class="form-group col-md-6 col-xl-3">
                  <label> Sex: <span class="text-danger" id="txtSexReq"></span> </label>
                  <select id="txtSex" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" disabled>
                     <option value=""> Choose... </option>
                     <option value="Male">   Male </option>
                     <option value="Female"> Female </option>
                  </select>
                  <span class="text-danger" id="errTxtSex"></span>
               </div> 
               <div class="form-group col-md-6 col-xl-3">
                  <label> Civil Status: <span class="text-danger" id="txtCivilStatusReq"></span> </label> 
                  <input type="text" id="txtCivilStatus" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly>       
                  <span class="text-danger" id="errTxtCivilStatus"></span>
               </div>
               <div class="form-group col-md-6 col-xl-3">
                  <label> Religion: <span class="text-danger" id="txtReligionReq"></span> </label> 
                  <input type="text" id="txtReligion" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly>
                  <span class="text-danger" id="errTxtReligion"></span>
               </div> 
            </div>   
            <div class="row justify-content-start">
               <div class="form-group col-md-6 col-xl-3 custom-checkbox">
                  <div class="custom-control">
                     <input type="radio" id="WalkIn" name="TypeOfCounsel" value="Walk-In"  class="custom-control-input" checked/>
                     <label class="custom-control-label text-gray-900" for="WalkIn"> 
                        Walk-In 
                     </label>
                  </div>
                  <div class="custom-control">
                     <input type="radio" id="CselIntiate" name="TypeOfCounsel" value="Counselor Initiated" class="custom-control-input"/>
                     <label class="custom-control-label text-gray-900 text-nowrap" for="CselIntiate"> 
                        Counselor Initiated 
                     </label>
                  </div>
                  <div class="custom-control">
                     <input type="radio" id="Referred" name="TypeOfCounsel" value="Referred" class="custom-control-input"/>
                     <label class="custom-control-label text-gray-900" for="Referred"> 
                        Referred 
                     </label>
                  </div>
               </div>
               <div class="form-group col-md-6 col-xl-3">
                  <label> Date Referred: <span class="text-danger" id="txtDateRferredReq"></span> </label>
                  <input type="date" id="txtDateRferred" name="txtDateRferred" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none"/>
                  <span class="text-danger" id="errTxtDateRferred"></span>
               </div>
               <div class="form-group col-md-6 col-xl-3">
                  <label> Referred by: <span class="text-danger" id="txtReferredByReq"></span> </label>
                  <input type="text" id="txtReferredBy" name="txtReferredBy" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none">
                  <span class="text-danger" id="errTxtReferredBy"></span>
               </div> 
            </div>
            <div class="d-sm-flex justify-content-between custom-checkbox">
               <div class="form-group">
                  <label class="text-uppercase text-gray-900"> 
                     reason/s for counseling: 
                  </label>
                  <div class="custom-checkbox">
                     <div class="d-flex flex-column">
                        <div class="custom-control">
                           <input type="checkbox" id="AcadConcern" name="PersonalIssuess[]" value="Academic concern" class="custom-control-input" checked/>
                           <label class="custom-control-label text-gray-900" for="AcadConcern"> 
                              Academic concern 
                           </label>
                        </div>
                        <div class="custom-control">
                           <input type="checkbox" id="Behavioral" name="PersonalIssuess[]" value="Personality Behavioral Issues" class="custom-control-input"/>
                           <label class="custom-control-label text-gray-900" for="Behavioral">
                              Personality/ Behavioral Issues 
                           </label>
                        </div>
                        <div class="custom-control">
                           <input type="checkbox" id="FamilyConcern" name="PersonalIssuess[]" value="Family concern" class="custom-control-input"/>
                           <label class="custom-control-label text-gray-900" for="FamilyConcern"> 
                              Family concern 
                           </label>
                        </div>
                        <div class="custom-control">
                           <input type="checkbox" id="PeerIssues" name="PersonalIssuess[]" value="Peer issues" class="custom-control-input"/>
                           <label class="custom-control-label text-gray-900" for="PeerIssues"> 
                              Peer issues 
                           </label>
                        </div>
                        <div class="custom-control">
                           <input type="checkbox" id="Concern" name="PersonalIssuess[]" value="Relationship concern" class="custom-control-input"/>
                           <label class="custom-control-label text-gray-900" for="Concern"> 
                              Relationship concern 
                           </label>
                        </div>
                        <div class="custom-control">
                           <input type="checkbox" id="CarrPlace" name="PersonalIssuess[]" value="Career placement concern" class="custom-control-input"/>
                           <label class="custom-control-label text-gray-900" for="CarrPlace"> 
                              Career/ placement concern 
                           </label>
                        </div>
                        <div class="">
                           <label class="pr-1 text-gray-900" for="txtOthersOne"> 
                              Others(pls.Specify) <span class="text-danger" id="txtOthersOneReq"></span>
                           </label>
                           <input type="text" id="txtOthersOne" name="txtOthersOne" placeholder="Enter others" value="" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none">
                           <span class="text-danger" id="errTxtOthersOne"></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="text-uppercase text-gray-900"> 
                     plan of action: 
                  </label>
                  <div class="d-flex flex-column">
                     <div class="custom-control">
                        <input type="checkbox" id="FollUpCounsel" name="PlanActionAdd[]" value="For follow up counseling" class="custom-control-input PlanActionAdd" checked/>
                        <label class="custom-control-label text-gray-900" for="FollUpCounsel"> 
                           For follow - up counseling 
                        </label>
                     </div>
                     <div class="custom-control">
                        <input type="checkbox" id="ForParentConsult" name="PlanActionAdd[]" value="For Parents Consultant" class="custom-control-input PlanActionAdd"/>
                        <label class="custom-control-label text-gray-900" for="ForParentConsult"> 
                           For Parents Consultant 
                        </label>
                     </div>
                     <div class="custom-control">
                        <input type="checkbox" id="Spiritual" name="PlanActionAdd[]" value="For Spiritual counseling" class="custom-control-input PlanActionAdd"/>
                        <label class="custom-control-label text-gray-900" for="Spiritual"> 
                           For Spiritual counseling 
                        </label>
                     </div>
                     <div class="custom-control">
                        <input type="checkbox" id="Monitor" name="PlanActionAdd[]" value="For monitoring coordinate with teachers" class="custom-control-input PlanActionAdd"/>
                        <label class="custom-control-label text-gray-900" for="Monitor"> 
                           For monitoring (coordinate with teachers) 
                        </label>
                     </div>
                  </div>
                  <div class="custom-control">
                     <input type="checkbox" id="ForHome" name="PlanActionAdd[]" value="For Home Visitation" class="custom-control-input PlanActionAdd"/>
                     <label class="custom-control-label text-gray-900" for="ForHome"> 
                        For Home Visitation 
                     </label>
                  </div>
                  <div class="custom-control">
                     <input type="checkbox" id="ForPhychologic" name="PlanActionAdd[]" value="For Phychological testing" class="custom-control-input PlanActionAdd"/>
                     <label class="custom-control-label text-gray-900" for="ForPhychologic"> 
                        For Phychological testing 
                     </label>
                  </div>
                  <div class="custom-control">
                     <input type="checkbox" id="ReferPhychologist" name="PlanActionAdd[]" value="For Referral phychologist phychiatrist" class="custom-control-input PlanActionAdd"/>
                     <label class="custom-control-label text-gray-900" for="ReferPhychologist"> 
                        For Referral (phychologist/ phychiatrist) 
                     </label>
                  </div>
                  <div>
                     <label class="pr-1 text-gray-900" for="txtOthersTwo"> Others(pls.Specify) <span class="text-danger" id="txtOthersTwoReq"></span> </label>
                     <input type="text" name="txtOthersTwo" id="txtOthersTwo" placeholder="Enter others" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none">
                     <span class="text-danger" id="errTxtOthersTwo"></span>
                  </div>
               </div>
               <div class="form-group">
                  <label class="text-uppercase text-gray-900"> 
                     Counseling Status: 
                  </label>
                  <div class="custom-checkbox">
                     <div class="custom-control">
                        <input type="checkbox" id="Terminated" name="CounselStat[]" value="Terminated" class="custom-control-input" checked/>
                        <label class="custom-control-label text-gray-900" for="Terminated">
                           Terminated 
                        </label>
                     </div>
                     <div class="custom-control">
                        <input type="checkbox" id="Ongoing" name="CounselStat[]" value="Ongoing" class="custom-control-input"/>
                        <label class="custom-control-label text-gray-900" for="Ongoing"> 
                           Ongoing 
                        </label>
                     </div>
                  </div>
               </div>
            </div>                                                                         
         </div>
         <div class="card-footer">
            <button type="submit" name="btn-save-intake" id="btn-save-intake" title="Save record." disabled class="btn btn-success">
               <i class="fas fa-save"></i> 
               Save 
            </button>
         </div>
      </form>
   </div>
</div>
<?php
   $includeAdminController->footer();
   $includeAdminController->script();
?>
<script>
   function verifyInpust() {
      const txtClient = $("#txtClientName").val().trim();
      const txtCourseYear = $("#txtCourseYear").val().trim();
      const txtHmeAddress = $("#txtHmeAddress").val().trim();
      const txtContactNo = $("#txtContactNo").val().trim();
      const txtEmailAddress = $("#txtEmailAddress").val().trim();
      const txtAge = $("#txtAge").val().trim();
      const txtDateOfBirth = $("#txtDateOfBirth").val().trim();
      const txtSex = $("#txtSex").val().trim();
      const txtCivilStatus = $("#txtCivilStatus").val().trim();
      const txtReligion = $("#txtReligion").val().trim();
      const txtStudnetno = $('#txtStudnetno').val().trim();
      const txtDateEdit = $('#txtDateEdit').val().trim();
      const txtTimedEdit = $('#txtTimedEdit').val().trim();
      const txtDateRferred = $('#txtDateRferred').val().trim();
      const txtReferredBy = $('#txtReferredBy').val().trim();
      const isValidInputs =txtClient.length > 2 && 
                           txtCourseYear.length > 2 && 
                           txtHmeAddress.length > 2 && 
                           txtContactNo.length > 2 && 
                           txtEmailAddress.length > 2 && 
                           txtAge > 2 && 
                           txtDateOfBirth.length > 2 && 
                           txtSex.length > 2 && 
                           txtCivilStatus.length > 2 && 
                           txtReligion.length > 2 && 
                           txtStudnetno.length > 2 && 
                           txtDateEdit.length > 2 && 
                           txtTimedEdit.length > 2 && 
                           txtDateRferred.length > 2 && 
                           txtReferredBy.length > 2;
      $('#btn-save-intake').prop('disabled', !isValidInputs);
   }
   $("#studentno").on("input", function() {
      $('#btn-search-studentno').click(() => {
         const y = $(`#list-of-student-no option[value=${$("#studentno").val()}]`);
         // get fullname form data list 
         $("#txtClientName").val(y.attr("fullName"));
         $("#txtCourseYear").val(y.attr("courseYear"));
         $("#txtHmeAddress").val(y.attr("homeAddres"));
         $("#txtContactNo").val(y.attr("homeContct"));
         $("#txtEmailAddress").val(y.attr("emailAdres"));
         $("#txtAge").val(y.attr("studentAge"));
         $("#txtDateOfBirth").val(y.attr("dateOfBrth"));
         $("#txtSex").val(y.attr("studentSex"));
         $("#txtCivilStatus").val(y.attr("civilstats"));
         $("#txtReligion").val(y.attr("studRelign"));
         $('#txtStudnetno').val(y.attr("studentNo"));
         $('#txtDateEdit').val(y.attr("intakeDate"));
         $('#txtTimedEdit').val(y.attr("intakeTime"));
         $('#txtDateRferred').val(y.attr("DteRefered"));
         $('#txtReferredBy').val(y.attr("ReferredBy"));
         const x = y.attr("TypeOfCsel");
         x == "Counselor Initiated" ? $('#CselIntiate').attr("checked", true) : 
         x == "Walk-In" ? $('#WalkIn').attr("checked", true) : $('#Referred').attr("checked", true);
         $('#txtOthersOne').val(y.attr('OthersOne'));
         const l = y.attr('PlanOfAction');
         if (l) {
            const actions = l.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="PlanActionAdd[]"][value="${action}"]`);

               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         const r = y.attr("RForCounsl");
         if (r) {
            const actions = r.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="PersonalIssuess[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         const c = y.attr('CounselStatus');
         if (c) {
            const actions = c.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="CounselStat[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         $('#txtOthersTwo').val(y.attr('OthersTwo'));
         const txtClientName = $("#txtClientName").val().trim();
         if (txtClientName.length <= 0) {
            $('#errTxtClientName').text("Client name is required.");
            $('#txtClientNameReq').text('*');
            $("#txtClientName").removeClass('bg-white').addClass('is-invalid border-0');
         } else { 
            $('#errTxtClientName').text("");
            $("#txtClientName").removeClass('is-invalid bg-white').addClass('is-valid border-0');
            $('#txtClientNameReq').text('');
         }
         const txtCourseYear = $("#txtCourseYear").val().trim();
         if (txtCourseYear.length <=0) {
            $('#errtTxtCourseYear').text("Course & Year are required.");
            $('txtCourseYearReq').text('*');
            $("#txtCourseYear").removeClass('bg-white').addClass('is-invalid border-0');
         } else {
            $('#errtTxtCourseYear').text("");
            $('txtCourseYearReq').text('');
            $("#txtCourseYear").removeClass('is-invalid bg-white').addClass('is-valid border-0');
         }
         const txtDateEdit = $('#txtDateEdit').val().trim();
         if (txtDateEdit.length <= 0) {
            $('#errTxtDateEdit').text("Date is required.");
            $('#txtDateEditReq').text("*");
            $('#txtDateEdit').addClass('is-invalid');
         } else {
            $('#errTxtDateEdit').text("");
            $('#txtDateEditReq').text("");
            $('#txtDateEdit').removeClass('is-invalid').addClass('is-valid');
         }
         const txtTimedEdit = $('#txtTimedEdit').val().trim();
         if (txtTimedEdit.length <= 0) {
            $('#errTxtTimedEdit').text("Time is required.");
            $('#txtTimedEditReq').text("*");
            $('#txtTimedEdit').addClass('is-invalid');
         } else {
            $('#errTxtTimedEdit').text("");
            $('#txtTimedEditReq').text("");
            $('#txtTimedEdit').removeClass('is-invalid').addClass('is-valid');
         }
         const txtHmeAddress = $("#txtHmeAddress").val().trim();
         if (txtHmeAddress.length <= 0) {
            $('#errTxtHmeAddress').text("Home address is required.");
            $('#txtHmeAddressReq').text("*");
            $('#txtHmeAddress').removeClass('bg-white').addClass('is-invalid border-0');
         }else {
            $('#errTxtHmeAddress').text("");
            $('#txtHmeAddressReq').text("");
            $('#txtHmeAddress').removeClass('is-invalid bg-white').addClass('is-valid border-0');
         }
         const txtContactNo = $("#txtContactNo").val().trim();
         if (txtContactNo.length <= 0) {
            $('#errTxtContactNo').text("Contact number is required.");
            $('#txtContactNoReq').text("*");
            $('#txtContactNo').removeClass('bg-white').addClass('is-invalid border-0');
         } else {
            $('#errTxtContactNo').text("");
            $('#txtContactNoReq').text("");
            $('#txtContactNo').removeClass('is-invalid bg-white').addClass('is-valid border-0');
         }
         const txtEmailAddress = $("#txtEmailAddress").val().trim();
         if (txtEmailAddress.length <= 0) {
            $('#errTxtEmailAddress').text("Email address is required.");
            $('#txtEmailAddressReq').text("*");
            $('#txtEmailAddress').removeClass('bg-white').addClass('is-invalid border-0');
         } else {
            $('#errTxtEmailAddress').text("");
            $('#txtEmailAddressReq').text("");
            $('#txtEmailAddress').removeClass('is-invalid bg-white').addClass('is-valid border-0');
         }
         const txtAge = $("#txtAge").val().trim();
         if (txtAge.length <= 0) {
            $('#errTxtAge').text("Age is required.");
            $('#txtAgeReq').text("*");
            $('#txtAge').removeClass('bg-white').addClass('is-invalid border-0');
         } else {
            $('#errTxtAge').text("");
            $('#txtAgeReq').text("");
            $('#txtAge').removeClass('is-invalid bg-white').addClass('is-valid border-0');
         }
         const txtDateOfBirth = $("#txtDateOfBirth").val().trim();
         if (txtDateOfBirth.length <= 0) {
            $('#errTxtDateOfBirth').text("Date of Birth is required.");
            $('#txtDateOfBirthReq').text("*");
            $('#txtDateOfBirth').removeClass('bg-white').addClass('is-invalid border-0');
         } else {
            $('#errTxtDateOfBirth').text("");
            $('#txtDateOfBirthReq').text("");
            $('#txtDateOfBirth').removeClass('is-invalid bg-white').addClass('is-valid border-0');
         }
         const txtSex = $("#txtSex").val().trim();
         if (txtSex.length <= 0) {
            $('#errTxtSex').text("Sex is required.");
            $('#txtSexReq').text("*");
            $('#txtSex').removeClass('bg-white').addClass('is-invalid border-0');
         } else {
            $('#errTxtSex').text("");
            $('#txtSexReq').text("");
            $('#txtSex').removeClass('is-invalid bg-white').addClass('is-valid border-0');
         }
         const txtCivilStatus = $("#txtCivilStatus").val().trim();
         if (txtCivilStatus.length <= 0) {
            $('#errTxtCivilStatus').text("Civil Status is required.");
            $('#txtCivilStatusReq').text("*");
            $('#txtCivilStatus').removeClass('bg-white').addClass('is-invalid border-0');
         } else {
            $('#errTxtCivilStatus').text("");
            $('#txtCivilStatusReq').text("");
            $('#txtCivilStatus').removeClass('is-invalid bg-white').addClass('is-valid border-0');
         }
         const txtReligion = $("#txtReligion").val().trim();
         if (txtReligion.length <= 0) {
            $('#errTxtReligion').text("Religion is required.");
            $('#txtReligionReq').text("*");
            $('#txtReligion').removeClass('bg-white').addClass('is-invalid border-0');
         } else {
            $('#errTxtReligion').text("");
            $('#txtReligionReq').text("");
            $('#txtReligion').removeClass('is-invalid bg-white').addClass('is-valid border-0');
         }
         const txtDateRferred = $("#txtDateRferred").val().trim();
         if (txtDateRferred.length <= 0) {
            $('#errTxtDateRferred').text("Date Referred is required.");
            $('#txtDateRferredReq').text("*");
            $('#txtDateRferred').addClass('is-invalid');
         } else {
            $('#errTxtDateRferred').text("");
            $('#txtDateRferredReq').text("");
            $('#txtDateRferred').removeClass('is-invalid').addClass('is-valid');
         }
         const txtReferredBy = $("#txtReferredBy").val().trim();
         if (txtReferredBy.length <= 0) {
            $('#errTxtReferredBy').text("Referredm By is required.");
            $('#txtReferredByReq').text("*");
            $('#txtReferredBy').addClass('is-invalid');
         } else {
            $('#errTxtReferredBy').text("");
            $('#txtReferredByReq').text("");
            $('#txtReferredBy').removeClass('is-invalid').addClass('is-valid');
         }
         verifyInpust();
      });
      $("#txtClientName").val('');
      $("#txtCourseYear").val('');
      $("#txtHmeAddress").val('');
      $("#txtContactNo").val('');
      $("#txtEmailAddress").val('');
      $("#txtAge").val('');
      $("#txtDateOfBirth").val('');
      $("#txtSex").val('');
      $("#txtCivilStatus").val('');
      $("#txtReligion").val('');
      $('#txtStudnetno').val('');
      $('#txtDateEdit').val('');
      $('#txtTimedEdit').val('');
      $('#txtDateRferred').val('');
      $('#txtReferredBy').val('');
      $('#errTxtClientName').text("");
      $('#txtClientNameReq').text('');
      $("#txtClientName").removeClass('is-invalid is-valid border-0').addClass('bg-white');
      $('#errtTxtCourseYear').text("");
      $('txtCourseYearReq').text('');
      $("#txtCourseYear").removeClass('is-invalid is-valid border-0').addClass('bg-white');
      $('#errTxtDateEdit').text("");
      $('#txtDateEditReq').text("");
      $('#txtDateEdit').removeClass("is-invalid is-valid").addClass('bg-white');
      $('#errTxtTimedEdit').text("");
      $('#txtTimedEditReq').text("");
      $('#txtTimedEdit').removeClass("is-invalid is-valid").addClass('bg-white');
      $('#errTxtHmeAddress').text("");
      $('#txtHmeAddressReq').text("");
      $('#txtHmeAddress').removeClass("is-invalid is-valid border-0").addClass('bg-white');
      $('#errTxtContactNo').text("");
      $('#txtContactNoReq').text("");
      $('#txtContactNo').removeClass("is-invalid is-valid border-0").addClass('bg-white');
      $('#errTxtEmailAddress').text("");
      $('#txtEmailAddressReq').text("");
      $('#txtEmailAddress').removeClass("is-invalid is-valid border-0").addClass('bg-white');
      $('#errTxtAge').text("");
      $('#txtAgeReq').text("");
      $('#txtAge').removeClass("is-invalid is-valid border-0").addClass('bg-white');
      $('#errTxtDateOfBirth').text("");
      $('#txtDateOfBirthReq').text("");
      $('#txtDateOfBirth').removeClass("is-invalid is-valid border-0").addClass('bg-white');
      $('#errTxtSex').text("");
      $('#txtSexReq').text("");
      $('#txtSex').removeClass("is-invalid is-valid border-0").addClass('bg-white');
      $('#errTxtCivilStatus').text("");
      $('#txtCivilStatusReq').text("");
      $('#txtCivilStatus').removeClass("is-invalid is-valid border-0").addClass('bg-white');
      $('#errTxtReligion').text("");
      $('#txtReligionReq').text("");
      $('#txtReligion').removeClass("is-invalid is-valid border-0").addClass('bg-white');
      $('#errTxtDateRferred').text("");
      $('#txtDateRferredReq').text("");
      $('#txtDateRferred').removeClass("is-invalid is-valid").addClass('bg-white');
      $('#errTxtReferredBy').text("");
      $('#txtReferredByReq').text("");
      $('#txtReferredBy').removeClass("is-invalid is-valid").addClass('bg-white');
      $('#btn-save-intake').attr('disabled',true);
      $(`input[name="PlanActionAdd[]"]:checked`).each((_, checkbox) => {
         $(checkbox).prop('checked', false); // Uncheck the checkbox
      });
      $(`input[name="PersonalIssuess[]"]:checked`).each((_, checkbox) => {
         $(checkbox).prop('checked', false); // Uncheck the checkbox
      });
      $(`input[name="CounselStat[]"]:checked`).each((_, checkbox) => {
         $(checkbox).prop('checked', false); // Uncheck the checkbox
      });
      $('#txtOthersTwo').val('');
      $('#txtOthersOne').val('');
   });
   $('#txtDateEdit').on('input',()=>{
      const txtDateEdit = $('#txtDateEdit').val().trim();
      if (txtDateEdit.length <= 0) {
         $('#errTxtDateEdit').text("Date is required.");
         $('#txtDateEditReq').text("*");
         $('#txtDateEdit').addClass("is-invalid");
      } else {
         $('#errTxtDateEdit').text("");
         $('#txtDateEditReq').text("");
         $('#txtDateEdit').removeClass("is-invalid").addClass("is-valid");
      }
      verifyInpust();
   });
   $('#txtTimedEdit').on('input',() => {
      const txtTimedEdit = $('#txtTimedEdit').val().trim();
      if (txtTimedEdit.length <= 0) {
         $('#errTxtTimedEdit').text("Time is required.");
         $('#txtTimedEditReq').text("*");
         $('#txtTimedEdit').addClass("is-invalid");
      } else {
         $('#errTxtTimedEdit').text("");
         $('#txtTimedEditReq').text("");
         $('#txtTimedEdit').removeClass("is-invalid").addClass("is-valid");
      }
      verifyInpust();
   });
   $("#txtDateRferred").on('input',()=>{
      const txtDateRferred = $("#txtDateRferred").val().trim();
      if (txtDateRferred.length <= 0) {
         $('#errTxtDateRferred').text("Date Referred is required.");
         $('#txtDateRferredReq').text("*");
         $('#txtDateRferred').addClass("is-invalid");
      } else {
         $('#errTxtDateRferred').text("");
         $('#txtDateRferredReq').text("");
         $('#txtDateRferred').removeClass("is-invalid").addClass('is-valid');
      }
      verifyInpust()
   });
   $("#txtReferredBy").on('input',()=>{
      const txtReferredBy = $("#txtReferredBy").val().trim();
      if (txtReferredBy.length <= 0) {
         $('#errTxtReferredBy').text("Referred By is required.");
         $('#txtReferredByReq').text("*");
         $('#txtReferredBy').addClass("is-invalid");
      } else {
         $('#errTxtReferredBy').text("");
         $('#txtReferredByReq').text("");
         $('#txtReferredBy').removeClass("is-invalid").addClass('is-valid');
      }
      verifyInpust();
   });
</script>