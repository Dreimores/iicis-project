<?php
$includeAdminController = new includeAdminController();
$includeAdminController->header();
$includeAdminController->navbar();
?>
<div class="container-fluid">
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
      <div class="card-body">
         <div class="form-group d-sm-flex mb-4">
            <label class="my-1 mr-3"> Student number : </label>
            <div class="form-inline">
               <div class="input-group">
                  <input type="search" name="student-no" id="student-no" list="ListOfStudentNo" class="form-control" placeholder="Search for...">
                  <div class="input-group-append">
                     <button type="button" class="btn btn-primary" title="Search student no." id="Btn-Search-Student-No">
                        <i class="fas fa-search fa-sm"></i>
                     </button>
                  </div>
               </div>
               <datalist id="ListOfStudentNo">
                  <option value="">
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
               <label class="text-gray-900"> Year Level </label>
               <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
            </div>

            <div class="form-group col-sm-3">
               <label for="txtCourse" class="text-gray-900"> 
                  Course: <span class="text-danger" id="txtCourseReq"></span>
               </label>
               <input type="text" id="txtCourse" name="txtCourse" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
               <span class="text-danger" id="errTxtCourse"></span>
            </div>

            <div class="form-group col-sm-3">
               <label class="text-gray-900"> Age </label>
               <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
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
               <label class="text-gray-900"> Complete Home Address </label>
               <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
            </div>

            <div class="form-group col-sm-3">
               <label class="text-gray-900"> Contact Number </label>
               <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
            </div>
            <div class="form-group col-sm-3">
               <label class="text-gray-900"> Father </label>
               <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
            </div>
            <div class="form-group col-sm-3">
               <label class="text-gray-900"> Mother </label>
               <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-sm-3">
               <label class="col-form-label text-gray-900" for="SmstrSchool"> Semester/School Year Last Attended </label>
               <input type="text" id="SmstrSchool" name="SmstrSchool" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
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
                        <label class="text-gray-900 pr-2" for="OthersOne"> Others(pls.Specify) </label>
                        <input type="text" id="OthersOne" name="OthersOne" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
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
                        <label class="text-gray-900 pr-2" for="OthersTwo"> Others(pls.Specify) </label>
                        <input type="text" id="OthersTwo" name="OthersTwo" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
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
                        <label class="text-gray-900 pr-2" for="OthersThree"> Others(pls.Specify) </label>
                        <input type="text" id="OthersThree" name="OthersThree" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
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
                        <label class="text-gray-900 pr-2" for="OthersFive"> Others(pls.Specify) </label>
                        <input type="text" id="OthersFive" name="OthersFive" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
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
                     <label class="col-sm-1 col-form-label text-gray-900" for="Course"> Course </label>
                     <div class="col-sm-11">
                        <input type="text" name="Course" id="Course" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-1 col-form-label text-gray-900" for="school"> School </label>
                     <div class="col-sm-11">
                        <input type="text" name="school" id="school" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
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
                        <label class="text-gray-900 pr-2" for="OthersSix"> Others(pls.Specify) </label>
                        <input type="text" id="OthersSix" name="OthersSix" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
                     </div>
                  </div>
               </li>
            </div>
            <div>
               <li>
                  <h1 class="h6 text-gray-900">
                     Any comment regarding your stay with CSU Lasam Campus.
                  </h1>
                  <textarea name="ComRegardStayCsuLasamCampus" cols="30" rows="5" placeholder="Enter any regarding your stay with CSU lasam campus." class="form-control"></textarea>
               </li>
            </div>
         </ol>
      </div>
      <div class="card-footer">
         <div class="d-sm-flex justify-content-start">
            <button type="submit" name="SaveExitDropping" title="Save record." class="btn btn-success"> <i class="fas fa-save"></i> Save </button>
         </div>
      </div>
   </div>
</div>
<?php
$includeAdminController->footer();
$includeAdminController->script();
?>
<script>

</script>