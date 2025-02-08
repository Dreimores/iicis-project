<?php
$includeAdminController = new includeAdminController();
$includeAdminController->header();
$includeAdminController->navbar();
?>
<div class="container-fluid mb-4">
   <div class="card shadow-sm">
      <div class="card-header d-sm-flex justify-content-center">
         <div class="d-sm-inline-block d-none mx-5"></div>
         <div class="d-sm-inline-block d-none mx-4"></div>
         <img class="d-lg-inline-block d-none" src="img/CSULasam-Logo.webp" width="130" height="130" />
         <div class="text-gray-900">
            <div class="h5 text-center">Republic of the Philippines</div>
            <div class="h4 text-uppercase text-center font-weight-bold">cagayan state university</div>
            <div class="h5 text-capitalize text-center">lasam campus</div>
            <div class="h4 text-uppercase text-center mb-4">guidance and counseling center</div>
            <div class="h4 text-uppercase text-center font-weight-bold"> exit form (for transferring) </div>
         </div>
         <div class="mx-5"></div>
      </div>
      <div class="card-body">
         <label> Student no. </label>
         <div class="form-inline mr-auto my-2 mb-3 my-md-0 mw-100 navbar-search">
            <div class="input-group">
               <input type="text" name="studentno"
                  value="                       placeholder=" Search...">
               <div class="input-group-append">
                  <a href="#" title="Search student no." data-target="#StudentNumberExitTrans"
                     data-toggle="modal"
                     class="btn btn-primary">
                     <i class="fas fa-ellipsis-h text-xs"></i>
                  </a>
               </div>
            </div>
         </div>

         <form action="codes-exittransfer.php" method="POST">

            <div class="mt-4">
               <div class="row">
                  <div class="form-group col-sm-3">
                     <label class="text-gray-900">
                        Surname
                     </label>
                     <input type="text" value=""
                        placeholder="surname"
                        class="form-control" disabled />
                  </div>
                  <div class="form-group col-sm-3">
                     <label class="text-gray-900">
                        Firstname
                     </label>
                     <input type="text" value=""
                        placeholder="firstname"
                        class="form-control" disabled />
                  </div>
                  <div class="form-group col-sm-3">
                     <label class="text-gray-900">
                        Middlename
                     </label>
                     <input type="text" value=""
                        placeholder="middlename"
                        class="form-control" disabled />
                  </div>
                  <div class="form-group col-sm-3">
                     <label class="text-gray-900">
                        Nickname
                     </label>
                     <input type="text" value=""
                        placeholder="nickname"
                        class="form-control" disabled />
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-sm-3">
                  <label class="text-gray-900">
                     Year Level
                  </label>
                  <input type="text" value=""
                     placeholder="year level"
                     class="form-control" disabled />
               </div>
               <div class="form-group col-sm-3">
                  <label class="text-gray-900">
                     Course
                  </label>
                  <input type="text" value=""
                     placeholder="course"
                     class="form-control" disabled />
               </div>
               <div class="form-group col-sm-3">
                  <label class="text-gray-900">
                     Age
                  </label>
                  <input type="text" value=""
                     placeholder="age"
                     class="form-control" disabled />
               </div>
               <div class="form-group col-sm-3">
                  <label class="text-gray-900">
                     Civil Status
                  </label>
                  <input type="text" value=""
                     placeholder="civil status"
                     class="form-control" disabled />
               </div>
            </div>

            <div class="row">
               <div class="form-group col-sm-3">
                  <label class="text-gray-900">
                     Complete Home Address
                  </label>
                  <input type="text" value=""
                     placeholder="complete home address"
                     class="form-control" disabled />
               </div>

               <div class="form-group col-sm-3">
                  <label class="text-gray-900">
                     Contact Number
                  </label>
                  <input type="text" value=""
                     placeholder="contact number"
                     class="form-control" disabled />
               </div>
               <div class="form-group col-sm-3">
                  <label class="text-gray-900">
                     Father
                  </label>
                  <input type="text" value=""
                     placeholder="father"
                     class="form-control" disabled />
               </div>
               <div class="form-group col-sm-3">
                  <label class="text-gray-900">
                     Mother
                  </label>
                  <input type="text" value=""
                     placeholder="mother"
                     class="form-control" disabled />
               </div>
            </div>
            <input type="hidden" name="StudentNoexitTrs" value="" class="form-group row mb-4">
            <label class="col-sm-12 col-form-label text-gray-900" for="SmstrSchool">
               Semester/School Year Last Attended
            </label>
            <div class="col-sm-12">
               <input type="text" id="SmstrSchool" name="SmstrSchool"
                  value="" class="form-control"
                  placeholder="semester school year last attended" required />
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
                        <input type="checkbox" id="ScreenedOut" name="ReasonTransfer[]"
                           value="">
                        class="custom-control-input"/>
                        <label class="custom-control-label text-gray-900" for="ScreenedOut">
                           Screened out
                        </label>
                     </div>
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="ChangeOfCourse" name="ReasonTransfer[]"
                           value="">
                        class="custom-control-input"/>
                        <label class="custom-control-label text-gray-900" for="ChangeOfCourse">
                           Change of course
                        </label>
                     </div>
                  </div>
                  <div class="d-flex flex-column">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="FamilyProblem" name="ReasonTransfer[]"
                           value="">
                        class="custom-control-input"/>
                        <label class="custom-control-label text-gray-900" for="FamilyProblem">
                           Family problem
                        </label>
                     </div>
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="ParentChoice" name="ReasonTransfer[]"
                           value="">
                        class="custom-control-input"/>
                        <label class="custom-control-label text-gray-900" for="ParentChoice">
                           Parent's choice
                        </label>
                     </div>
                  </div>
                  <div class="d-flex flex-column">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="FinancialProblem" name="ReasonTransfer[]"
                           value="">
                        class="custom-control-input"/>
                        <label class="custom-control-label text-gray-900" for="FinancialProblem">
                           Financial problem
                        </label>
                     </div>
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="ChangeOfResidence" name="ReasonTransfer[]"
                           value="" class="custom-control-input" />
                        <label class="custom-control-label text-gray-900" for="ChangeOfResidence">
                           Change of residence
                        </label>
                     </div>
                  </div>
                  <div class="d-flex flex-column">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="Distance" name="ReasonTransfer[]"
                           value="" class="custom-control-input" />
                        <label class="custom-control-label text-gray-900" for="Distance">
                           Distance
                        </label>
                     </div>
                     <div class="d-sm-flex">
                        <label class="text-gray-900 pr-2" for="OthersOne">
                           Others(pls.Specify)
                        </label>
                        <input type="text" id="OthersOne" name="OthersOne"
                           value=""
                           placeholder="Enter others"
                           class="form-control form-control-sm">
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
                     <input type="checkbox" id="SadLonely" name="FeelAboutTransfer[]"
                        value="" class="custom-control-input" />
                     <label class="custom-control-label text-gray-900" for="SadLonely">
                        Sad/lonely
                     </label>
                  </div>
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox" id="HappyGreat" name="FeelAboutTransfer[]"
                        value="" class="custom-control-input" />
                     <label class="custom-control-label text-gray-900" for="HappyGreat">
                        Happy/great
                     </label>
                  </div>
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox" id="Excited" name="FeelAboutTransfer[]"
                        value="" class="custom-control-input" />
                     <label class="custom-control-label text-gray-900" for="Excited">
                        Excited
                     </label>
                  </div>
                  <div class="d-sm-flex">
                     <label class="text-gray-900 pr-2" for="OthersTwo">
                        Others(pls.Specify)
                     </label>
                     <input type="text" id="OthersTwo" name="OthersTwo"
                        value="" placeholder="Enter others"
                        class="form-control form-control-sm">
                  </div>
               </div>
            </li>
         </div>
         <div>
            <li>
               <h1 class="h6 text-gray-900"> Parents' Awareness </h1>
               <div class="d-sm-flex justify-content-start mb-3">
                  <div class="custom-control custom-checkbox pr-5 mr-5">
                     <input type="radio" id="ParentAware" name="ParentAwareness"
                        value="" class="custom-control-input" checked />
                     <label class="custom-control-label text-gray-900" for="ParentAware">
                        Aware
                     </label>
                  </div>
                  <div class="custom-control custom-checkbox">
                     <input type="radio" id="NotAware" name="ParentAwareness"
                        value="" class="custom-control-input" />
                     <label class="custom-control-label text-gray-900" for="NotAware">
                        Not Aware
                     </label>
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
                     <input type="checkbox" id="AgreedOk" name="PrntFeelAboutTransfer[]"
                        value="" class="custom-control-input" />
                     <label class="custom-control-label text-gray-900" for="AgreedOk">
                        Agreed/ok
                     </label>
                  </div>
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox" id="Sad" name="PrntFeelAboutTransfer[]"
                        value="" class="custom-control-input" />
                     <label class="custom-control-label text-gray-900" for="Sad">
                        Sad
                     </label>
                  </div>
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox" id="Supportive" name="PrntFeelAboutTransfer[]"
                        value="" class="custom-control-input" />
                     <label class="custom-control-label text-gray-900" for="Supportive">
                        Supportive
                     </label>
                  </div>
                  <div class="d-sm-flex">
                     <label class="text-gray-900 pr-2" for="OthersThree">
                        Others(pls.Specify)
                     </label>
                     <input type="text" id="OthersThree" name="OthersThree"
                        value=""
                        placeholder="Enter others"
                        class="form-control form-control-sm">
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
                  <label class="col-sm-1 col-form-label text-gray-900" for="CourseOne">
                     Course
                  </label>
                  <div class="col-sm-11">
                     <input type="text" id="CourseOne" name="CourseOne"
                        value=""
                        class="form-control"
                        placeholder="Enter course" />
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-1 col-form-label text-gray-900" for="School">
                     School
                  </label>
                  <div class="col-sm-11">
                     <input type="text" id="School" name="School"
                        class="form-control"
                        value=""
                        placeholder="Enter School" />
                  </div>
               </div>
               <label for="QualityEducation">
                  Reasons for choosing the school.
               </label>
               <div class="d-sm-flex justify-content-between mb-3">
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox" id="QualityEducation" name="RsnsChoosTheSchl[]"
                        value="" class="custom-control-input" />
                     <label class="custom-control-label text-gray-900" for="QualityEducation">
                        Quality education
                     </label>
                  </div>
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox" id="CourseAvailability" name="RsnsChoosTheSchl[]"
                        value=""
                        class="custom-control-input" />
                     <label class="custom-control-label text-gray-900" for="CourseAvailability">
                        Course Availability
                     </label>
                  </div>
                  <div class="d-sm-flex">
                     <label class="text-gray-900 pr-2" for="OthersFour">
                        Others(pls.Specify)
                     </label>
                     <input type="text" id="OthersFour" name="OthersFour"
                        value=""
                        placeholder="Enter others"
                        class="form-control form-control-sm">
                  </div>
               </div>
            </li>
         </div>
         <div>
            <li>
               <h1 class="h6 text-gray-900">
                  Any comment regarding your stay with CSU Lasam Campus.
               </h1>
               <textarea name="Regarding" cols="30" rows="5"
                  placeholder="Enter any comment ragarding your stay with CSU Lasam Campus."
                  class="form-control"></textarea>
            </li>
         </div>
      </ol>
      <div class="d-sm-flex justify-content-center">
         <button type="submit" name="SaveTransferringBtn"
            title="Save record."
            class="btn btn-success">
            <i class="fas fa-save"></i>
            Save
         </button>
      </div>
      </form>
   </div>
</div>
</div>
<?php
$includeAdminController->footer();
$includeAdminController->script();
?>