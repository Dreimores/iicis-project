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
                  <input type="search" name="Student-No" id="Student-No" list="ListOfStudentNo" class="form-control" placeholder="Search for...">
                  <div class="input-group-append">
                     <button type="button" class="btn btn-primary" title="Search student no." id="Btn-Search-Student-No">
                        <i class="fas fa-search fa-sm"></i>
                     </button>
                  </div>
               </div>
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
         <label class="col-sm-12 col-form-label text-gray-900" for="SmstrSchool"> Semester/School Year Last Attended </label>
         <div class="col-sm-12">
            <input type="text" id="SmstrSchool" name="SmstrSchool" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
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
                     <label class="col-sm-1 col-form-label text-gray-900" for="CourseOne"> Course </label>
                     <div class="col-sm-11">
                        <input type="text" id="CourseOne" name="CourseOne" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-1 col-form-label text-gray-900" for="School"> School </label>
                     <div class="col-sm-11">
                        <input type="text" id="School" name="School" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
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