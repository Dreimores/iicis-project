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
            <div class="h5 text-center">Republic of the Philippines</div>
            <div class="h4 text-uppercase text-center font-weight-bold">cagayan state university</div>
            <div class="h5 text-capitalize text-center">lasam campus</div>
            <div class="h4 text-uppercase text-center mb-4">guidance and counseling center</div>
            <div class="h4 text-uppercase text-center font-weight-bold"> terminal interview form </div>
         </div>
      </div>
      <div class="card-body">
         <label for="" class="mr-2"> Student no. </label>
         <div class="form-inline mr-auto my-2 mb-3 my-md-0 mw-100 navbar-search">
            <div class="input-group">
               <input type="text" name="studentno" class="form-control small" placeholder="Search...">
               <div class="input-group-append">
                  <a href="#" title="Search student no." data-target="#StudentNumberTerminal" data-toggle="modal" class="btn btn-primary">
                     <i class="fas fa-ellipsis-h text-xs"></i>
                  </a>
               </div>
            </div>
         </div>
         <form action="" method="post">
            <div class="mt-4">
               <div class="row">
                  <div class="form-group col-sm-3">
                     <label for="Surname" class="text-gray-900"> Surname </label>
                     <input type="text" class="form-control">
                  </div>
                  <div class="form-group col-sm-3">
                     <label for="Firstname" class="text-gray-900"> Firstname </label>
                     <input type="text" class="form-control">
                  </div>
                  <div class="form-group col-sm-3">
                     <label for="Middlename" class="text-gray-900"> Middlename
                     </label>
                     <input type="text" class="form-control">
                  </div>
                  <div class="form-group col-sm-3">
                     <label for="Nickname" class="text-gray-900"> Nickname </label>
                     <input type="text" class="form-control">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-sm-3">
                  <label for="Course" class="text-gray-900"> Course: </label>
                  <input type="text" class="form-control">
               </div>
               <div class="form-group col-sm-3">
                  <label for="CivilStatus" class="text-gray-900"> Civil Status: </label>
                  <input type="text" class="form-control">
               </div>
               <div class="form-group col-sm-3">
                  <label for="HomeAddress" class="text-gray-900"> Complete Home Address: </label>
                  <input type="text" class="form-control">
               </div>
               <div class="form-group col-sm-3">
                  <label for="EmailAddress" class="text-gray-900"> E-mail Address </label>
                  <input type="text" class="form-control">
               </div>
            </div>
            <div class="row">
               <div class="form-group col-sm-3">
                  <label for="Telephone" class="text-gray-900"> Telephone </label>
                  <input type="text" class="form-control">
               </div>
               <div class="form-group col-sm-3">
                  <label for="Cellphone" class="text-gray-900"> Cellphone </label>
                  <input type="text" class="form-control">
               </div>
               <div class="form-group col-sm-3">
                  <label for="Father" class="text-gray-900"> Father: </label>
                  <input type="text" class="form-control">
               </div>
               <div class="form-group col-sm-3">
                  <label for="Mother" class="text-gray-900"> Mother: </label>
                  <input type="text" class="form-control">
               </div>
            </div>
            <div class="row">
               <div class="form-group col-sm-3">
                  <label for="FacebookAccount" class="text-gray-900"> Facebook Account
                  </label>
                  <input type="text" id="FacebookAccount" name="FacebookAccount" class="form-control" title="Special character is not allowed." />
               </div>
            </div>
            <label for="QualityEducation" class="text-gray-900"> Direction: Please check your choices below. </label>
            <ol class="text-gray-900 p-3">
               <div>
                  <li>
                     <h1 class="h6 text-gray-900"> Why did you enroll at CSU? </h1>
                     <div class="d-sm-flex justify-content-between mb-4">
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="QualityEducation" name="WhyEnrollCsu[]" value="Quality Eucation" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="QualityEducation"> Quality Eucation </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="NoTuitionFee" name="WhyEnrollCsu[]" value="No tuition fee" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="NoTuitionFee"> No tuition fee </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="PersonalChoice" name="WhyEnrollCsu[]" value="Personal choice" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="PersonalChoice"> Personal choice </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="Parentschoices" name="WhyEnrollCsu[]" value="Parents choice" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="Parentschoices"> Parents's choice </label>
                           </div>
                        </div>
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="Advertisement" name="WhyEnrollCsu[]" value="Due to campaign or school advertisement" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="Advertisement"> Due to campaign or school advertisement </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="SameCourseWFriends" name="WhyEnrollCsu[]" value="Same course with friends" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="SameCourseWFriends"> Same course with friends </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="BrotherSisters" name="WhyEnrollCsu[]" value="Brothers and sisters are studying here" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="BrotherSisters"> Brothers and sisters are studying here </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="SchoolNearResidence" name="WhyEnrollCsu[]" value="The school is near our residence" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="SchoolNearResidence"> The school is near our residence </label>
                           </div>
                        </div>
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="CourseWantHere" name="WhyEnrollCsu[]" value="The course I want is offered here only" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="CourseWantHere"> The course I want is offered here only </label>
                           </div>
                           <div class="form-group">
                              <label for="OthersOne"> Others (specify) </label>
                              <input type="text" id="OthersOne" name="OthersOne" placeholder="Enter others" class="form-control form-control-sm">
                           </div>
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <div class="form-group row mb-4">
                        <label class="col-sm-4 col-form-label text-gray-900" for="FirstEnroll"> What school year did you first enroll? </label>
                        <div class="col-sm-8">
                           <input type="text" id="FirstEnroll" name="WhatSchlFirstEnroll" class="form-control" title="Special character is not allowed." />
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <div class="custom-checkbox">
                        <div class="d-flex justify-content-start">
                           <label for="Finishing" class="mb-2 pr-2">
                              Are you finishing the same course you first enrolled?
                           </label>
                           <div class="custom-control">
                              <input type="radio" id="Finishing" name="FinishCrsEnrolled" value="Yes" class="custom-control-input" checked />
                              <label class="custom-control-label pr-2" for="Yes"> Yes </label>
                           </div>
                           <div class="custom-control">
                              <input type="radio" id="No" name="FinishCrsEnrolled" value="No" class="custom-control-input" />
                              <label class="custom-control-label" for="No"> No </label>
                           </div>
                        </div>
                     </div>
                     <label for="FamilyProblem"> If no, Why? </label>
                     <div class="d-sm-flex justify-content-between mb-3">
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="FamilyProblem" name="IfNoWhy[]" value="Family problem" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="FamilyProblem"> Family problem </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="ParentsChoice" name="IfNoWhy[]" value="Parents choice" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="ParentsChoice"> Parents's choice </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="HealthCondition" name="IfNoWhy[]" value="Health condition" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="HealthCondition"> Health condition </label>
                           </div>
                        </div>
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="ScreenedOut" name="IfNoWhy[]" value="Screened out" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="ScreenedOut"> Screened out </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="LateRegistration" name="IfNoWhy[]" value="Late registration" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="LateRegistration">
                                 Late registration
                              </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="ChangeOfInterest" name="IfNoWhy[]" value="Change of interest" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="ChangeOfInterest">
                                 Change of interest
                              </label>
                           </div>
                        </div>
                        <div class="d-flex flex-column">
                           <div class="form-group">
                              <label for="OtherIfNo"> Others (specify) </label>
                              <input type="text" id="OthersTwo" name="OthersTwo" class="form-control form-control-sm">
                           </div>
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <h1 for="Excited" class="h6 text-gray-900"> How do you feel now that you are abaout to graduate? </h1>
                     <div class="d-sm-flex justify-content-between mb-1">
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="Excited" name="HowFeelGraduate[]" value="Excited"
                                 class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="Excited">
                                 Excited
                              </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="Happy" name="HowFeelGraduate[]" value="Happy"
                                 class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="Happy">
                                 Happy
                              </label>
                           </div>
                        </div>
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="Pressured" name="HowFeelGraduate[]" value="Pressured"
                                 class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="Pressured">
                                 Pressured
                              </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="Nervous" name="HowFeelGraduate[]" value="Nervous"
                                 class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="Nervous">
                                 Nervous
                              </label>
                           </div>
                        </div>
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="Sad" name="HowFeelGraduate[]" value="Sad"
                                 class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="Sad">
                                 Sad
                              </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="Stressed" name="HowFeelGraduate[]" value="Stressed"
                                 class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="Stressed">
                                 Stressed
                              </label>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="OtherFive">
                              Others (specify)
                           </label>
                           <input type="text" id="OtherFive" name="OthersThree"

                              placeholder="Enter others"
                              class="form-control form-control-sm">
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <h1 for="WithinPhilippines" class="h6 text-gray-900"> What do you intend to do after graduation? </h1>
                     <div class="d-sm-flex justify-content-start mb-3">
                        <div class=" d-flex flex-column custom-checkbox">
                           <div class="custom-control">
                              <input type="checkbox" id="WithinPhilippines" name="WhatDoAfterGrad[]" value="Find work immediately" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="WithinPhilippines"> Find work immediately </label>
                              <select id="PhilippinesAbroad" name="WhatDoAfterGrad[]" class="form-control form-control-sm">
                                 <option value=""> Choose... </option>
                                 <option value="Within Philippines"> Within Philippines </option>
                                 <option value="Abroad"> Abroad </option>
                              </select>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="Graduate" name="WhatDoAfterGrad[]" value="Enroll in graduate studies" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="Graduate"> Enroll in graduate studies </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="Review" name="WhatDoAfterGrad[]" value="Review and take the board examination" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="Review"> Review and take the board examination </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="Business" name="WhatDoAfterGrad[]" value="Put up my own business" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="Business"> Put up my own business </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="Married" name="WhatDoAfterGrad[]" value="To get married" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="Married"> To get married </label>
                           </div>
                           <div class="d-sm-flex">
                              <label class="text-gray-900 pr-2" for="OthersFour"> Others(pls.Specify) </label>
                              <input type="text" id="OthersFour" name="OthersFour" placeholder="Enter others" class="form-control form-control-sm">
                           </div>
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <h1 for="LackOfFacilities" class="h6 text-gray-900">
                        What are the difficulties/problems that you encountered during your stay in the university?
                     </h1>
                     <div class="d-sm-flex justify-content-between mb-3">
                        <div class="d-flex flex-column pr-3">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="LackOfFacilities" name="WhatDiffUniversity[]" value="Lack of facilities" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="LackOfFacilities"> Lack of facilities </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="LackOfClassrooms" name="WhatDiffUniversity[]" value="Lack of classrooms" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="LackOfClassrooms"> Lack of classrooms </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="DirtyComfortRooms" name="WhatDiffUniversity[]" value="Dirty comfort rooms" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="DirtyComfortRooms"> Dirty comfort rooms </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="DifficultiesFees" name="WhatDiffUniversity[]" value="Difficulties in paying fees and issuance of permits" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="DifficultiesFees"> Difficulties in paying fees and issuance of permits </label>
                           </div>
                        </div>
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="EnrollProcedure" name="WhatDiffUniversity[]" value="Poor enrollment procedure" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="EnrollProcedure"> Poor enrollment procedure </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="IncomTeachers" name="WhatDiffUniversity[]" value="Incompetent Teachers" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="IncomTeachers"> Incompetent Teachers </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="SomeProffessors" name="WhatDiffUniversity[]" value="Some professors are always absent" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="SomeProffessors"> Some professors are always absent </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="ProfFavoritism" name="WhatDiffUniversity[]" value="Professors are unapproachabale favoritism prevails" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="ProfFavoritism"> Professors are unapproachabale, favoritism prevails </label>
                           </div>
                        </div>
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="UnprofTreatmant" name="WhatDiffUniversity[]" value="Unprofessional treatment of professors" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="UnprofTreatmant"> Unprofessional treatment of professors </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="GradesMissing" name="WhatDiffUniversity[]" value="Some grades are missing" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="GradesMissing"> Some grades are missing </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="TooManyProf" name="WhatDiffUniversity[]" value="Too many projects" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="TooManyProf"> Too many projects </label>
                           </div>
                           <div class="d-sm-flex">
                              <label class="text-gray-900 pr-2" for="OthersFive"> Others(pls.Specify) </label>
                              <input type="text" id="OthersFive" name="OthersFive" class="form-control form-control-sm" />
                           </div>
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <h1 for="being_more_competent" class="h6 text-gray-900"> What is your greatest "learning experience" during your stay at CSU? </h1>
                     <div class="d-sm-flex justify-content-between mb-3">
                        <div class="d-flex flex-column pr-3">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="BeMoreComptnt" name="WhatGreatLearn[]" value="Being more competent" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="BeMoreComptnt"> Being more competent </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="BePatientRsbl" name="WhatGreatLearn[]" value="Being patient and resposible" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="BePatientRsbl"> Being patient and resposible </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="BeMoreCopeRatve" name="WhatGreatLearn[]" value="Being more cooperative" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="BeMoreCopeRatve"> Being more cooperative </label>
                           </div>
                        </div>
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="SkWereDev" name="WhatGreatLearn[]" value="Skills were developed" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="SkWereDev"> Skills were developed </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="SlfConfidDev" name="WhatGreatLearn[]" value="Self confidence was developed" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="SlfConfidDev"> Self confidence was developed </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="LearnManageTime" name="WhatGreatLearn[]" value="Learn to manage time" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="LearnManageTime"> Learn to manage time </label>
                           </div>
                        </div>
                        <div class="d-flex flex-column">
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="BecmGoodLead" name="WhatGreatLearn[]" value="Became a good leader" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="BecmGoodLead"> Became a good leader </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="LearnValueEduc" name="WhatGreatLearn[]" value="Learned to value education & became positive always" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="LearnValueEduc"> Learned to value education & became positive always </label>
                           </div>
                           <div class="d-sm-flex">
                              <label class="text-gray-900 pr-2" for="OthersSix"> Others(pls.Specify) </label>
                              <input type="text" id="OthersSix" name="OthersSix" class="form-control form-control-sm">
                           </div>
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <div class="custom-checkbox">
                        <div class="d-flex justify-content-start">
                           <label for="YesOne" class="mb-2 pr-2"> Would you encourage your relatives/friends to also study at CSU? </label>
                           <div class="custom-control">
                              <input type="radio" id="YesOne" name="WouldYouEncourRel" value="Yes" class="custom-control-input" checked />
                              <label class="custom-control-label pr-2" for="YesOne"> Yes </label>
                           </div>
                           <div class="custom-control">
                              <input type="radio" id="NoOne" name="WouldYouEncourRel" value="No" class="custom-control-input" />
                              <label class="custom-control-label" for="NoOne"> No </label>
                           </div>
                        </div>
                     </div>
                     <label for="QualEduc"> Why? </label>
                     <div class="d-sm-flex justify-content-between mb-3">
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="QualEduc" name="Why[]" value="Quality education" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="QualEduc"> Quality education </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="NoTuitionFeeOne" name="Why[]" value="No tuition fee" class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="NoTuitionFeeOne"> No tuition fee </label>
                        </div>
                        <div class="d-sm-flex">
                           <label class="text-gray-900 pr-2" for="OthersSeven"> Others(pls.Specify) </label>
                           <input type="text" id="OthersSeven" name="OthersSeven" class="form-control form-control-sm">
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <h1 class="h6 text-gray-900"> What can you suggest/recommend to inprove the student services of CSU? </h1>
                     <textarea cols="30" rows="5" name="WhatCanSugServ" class="form-control"></textarea>
                  </li>
               </div>
            </ol>
            <div class="d-sm-flex justify-content-center">
               <button type="submit" name="Btn-Terminalform-Save" title="Save record." class="btn btn-success">
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