<?php
   $includeAdminController = new includeAdminController();
   $includeAdminController->header();
   $includeAdminController->navbar();
?>
<div class="container-fluid">
   <div class="card">
      <div class="card-header d-sm-flex justify-content-center">
         <img class="d-lg-inline-block d-none" src="img/csu_lasam_logo.webp" width="130" height="130"/>
         <div class="text-gray-900">
            <div class="h5 text-center"> Republic of the Philippines </div>
            <div class="h4 text-uppercase text-center font-weight-bold"> cagayan state university </div>
            <div class="h5 text-capitalize text-center"> lasam campus </div>
            <div class="h4 text-uppercase text-center mb-4"> guidance and counseling center </div>
            <div class="h4 text-uppercase text-center font-weight-bold"> terminal interview form </div>
         </div>
         <div class="mx-5"></div>
      </div>
      <form action="?route=submit-terminal-Interview" method="post">
         <div class="card-body">
            <!-- <span class="card bg-danger text-white p-2 mb-3">sample</span> -->
            <div class="form-group d-sm-flex mb-4">
               <label class="my-1 mr-3"> Student number : </label>
               <div class="form-inline">
                  <div class="input-group">
                     <input type="search" name="student-no" id="student-no" list="list-of-studentNo" class="form-control" placeholder="Search for...">
                     <div class="input-group-append">
                        <button type="button" class="btn btn-primary" title="Search student no." id="btn-search-student-no">
                           <i class="fas fa-search fa-sm"></i>
                        </button>
                     </div>
                  </div>
                  <datalist id="list-of-studentNo">
                     <?php $studentFormsModel = new studentFormsModel();
                        foreach ($studentFormsModel->view_account_student() as $row) { ?>
                           <option value="<?=$row['studentno']?>"
                           studentNo ="<?=$row['studentno']?>" 
                           firstName ="<?=$row['p_firstname']?>"
                           nickName  ="<?=$row['p_nickname']?>"
                           middleName="<?= substr($row['p_middlename'],0,1). "."?>"
                           SurName   ="<?= $row['p_surname']?>"
                           courseYear="<?=$row['coursecode']?>"
                           civilstats="<?=$row['p_cilvilstatus']?>"
                           homeAddres="<?=$row['p_homeaddress']?>"
                           email     ="<?=$row['email']?>"
                           haddTelno ="<?=$row['p_homeadd_telno']?>"
                           boardtelno="<?=$row['p_boardhousetelno']?>"
                           fathername="<?=$row['f_fathername']?>"
                           mothername="<?=$row['m_mothername']?>"
                           whyenrollcsu="<?=$row['WhyEnrollCsu']?>"
                           IfNoWhy="<?=$row['IfNoWhy']?>"
                           HowFeelGraduate="<?=$row['HowFeelGraduate']?>"
                           WhatDoAfterGrad="<?=$row['WhatDoAfterGrad']?>"
                           WhatDiffUniversity="<?=$row['WhatDiffUniversity']?>"
                           WhatGreatLearn="<?=$row['WhatGreatLearn']?>"
                           WouldYouEncourRel="<?=$row['WouldYouEncourRel']?>"
                           FinishCrsEnrolled="<?=$row['FinishCrsEnrolled']?>"
                           >
                     <?php }?>
                  </datalist>
               </div>
            </div>
            <div class="mt-4">
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
            </div>
            <div class="row">
               <div class="form-group col-sm-3">
                  <label for="txtCourse" class="text-gray-900"> 
                     Course: <span class="text-danger" id="txtCourseReq"></span>
                  </label>
                  <input type="text" id="txtCourse" name="txtCourse" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtCourse"></span>
               </div>
               <div class="form-group col-sm-3">
                  <label for="textCivilStatus" class="text-gray-900"> 
                     Civil Status: <span class="text-danger" id="textCivilStatusReq"></span>
                  </label>
                  <input type="text" id="textCivilStatus" name="textCivilStatus" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTextCivilStatus"></span>
               </div>
               <div class="form-group col-sm-3">
                  <label for="txtHomeAddress" class="text-gray-900"> 
                     Complete Home Address: <span class="text-danger" id="txtHomeAddressReq"></span> 
                  </label>
                  <input type="text" id="txtHomeAddress" name="txtHomeAddress" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtHomeAddress"></span>
               </div>
               <div class="form-group col-sm-3">
                  <label for="txtEmailAddress" class="text-gray-900"> 
                     E-mail Address <span class="text-danger" id="txtEmailAddressReq"></span>
                  </label>
                  <input type="text" id="txtEmailAddress" name="txtEmailAddress" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtEmailAddress"></span>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-sm-3">
                  <label for="txtTelphone" class="text-gray-900"> 
                     Telephone <span class="text-danger" id="txtTelphoneReq"></span> 
                  </label>
                  <input type="text" id="txtTelphone" name="txtTelphone" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtTelphone"></span>
               </div>
               <div class="form-group col-sm-3">
                  <label for="txtCellphone" class="text-gray-900"> 
                     Cellphone <span class="text-danger" id="txtCellphoneReq"></span>
                  </label>
                  <input type="text" id="txtCellphone" name="txtCellphone" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtCellphone"></span>
               </div>
               <div class="form-group col-sm-3">
                  <label for="txtFather" class="text-gray-900"> 
                     Father: <span class="text-danger" id="txtFatherReq"></span> 
                  </label>
                  <input type="text" id="txtFather" name="txtFather" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtFather"></span>
               </div>
               <div class="form-group col-sm-3">
                  <label for="txtMother" class="text-gray-900"> 
                     Mother: <span class="text-danger" id="txtMotherReq"></span>
                  </label>
                  <input type="text" id="txtMother" name="txtMother" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" role="button" readonly/>
                  <span class="text-danger" id="errTxtMother"></span>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-sm-3">
                  <label for="txtFacebookAccount" class="text-gray-900"> 
                     Facebook Account <span class="text-danger" id="txtFacebookAccountReq"></span>
                  </label>
                  <input type="text" id="txtFacebookAccount" name="txtFacebookAccount" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" title="Special character is not allowed." />
                  <span class="text-danger" id="errTxtFacebookAccount"></span>
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
                              <input type="text" id="OthersOne" name="OthersOne" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
                           </div>
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <div class="form-group row mb-4">
                        <label class="col-sm-4 col-form-label text-gray-900" for="txtFirstEnroll"> 
                           What school year did you first enroll? <span class="text-danger" id="txtFirstEnrollReq"></span>
                        </label>
                        <div class="col-sm-8">
                           <input type="text" id="txtFirstEnroll" name="txtFirstEnroll" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" title="Special character is not allowed." />
                           <span class="text-danger" id="errTxtFirstEnroll"></span>
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <div class="custom-checkbox">
                        <div class="d-flex justify-content-start">
                           <label for="Yes" class="mb-2 pr-2">
                              Are you finishing the same course you first enrolled?
                           </label>
                           <div class="custom-control">
                              <input type="radio" id="Yes" name="FinishCrsEnrolled" value="Yes" class="custom-control-input" checked />
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
                              <input type="checkbox" id="FamilyProblem" name="IfNoWhy[]" value="Family problem" class="custom-control-input"/>
                              <label class="custom-control-label text-gray-900" for="FamilyProblem"> Family problem </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="ParentsChoice" name="IfNoWhy[]" value="Parents choice" class="custom-control-input"/>
                              <label class="custom-control-label text-gray-900" for="ParentsChoice"> Parents's choice </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" id="HealthCondition" name="IfNoWhy[]" value="Health condition" class="custom-control-input"/>
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
                              <label for="txtOtherIfNo"> Others (specify) </label>
                              <input type="text" id="txtOtherIfNo" name="txtOtherIfNo" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
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
                           <label for="txtOthersThree"> Others (specify) </label>
                           <input type="text" id="txtOthersThree" name="txtOthersThree" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
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
                              <select id="PhilippinesAbroad" name="WhatDoAfterGrad[]" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
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
                              <input type="text" id="OthersFour" name="OthersFour" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white">
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
                              <input type="text" id="OthersFive" name="OthersFive" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
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
                              <label class="text-gray-900 pr-2" for="txtOthersSix"> Others(pls.Specify) </label>
                              <input type="text" id="txtOthersSix" name="txtOthersSix" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
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
                           <label class="text-gray-900 pr-2" for="txtOthersSeven"> Others(pls.Specify) </label>
                           <input type="text" id="txtOthersSeven" name="txtOthersSeven" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white"/>
                        </div>
                     </div>
                  </li>
               </div>
               <div>
                  <li>
                     <h1 class="h6 text-gray-900"> What can you suggest/recommend to inprove the student services of CSU? </h1>
                     <input type="text" id="txtWhatCanSugServ" name="txtWhatCanSugServ" class="form-control border-top-0 border-left-0 border-right-0 col-sm-6 rounded-0 shadow-none bg-white"/>
                  </li>
               </div>
            </ol>
         </div>
         <div class="card-footer">
            <button type="submit" name="Btn-Terminalform-Save" title="Save record." class="btn btn-success">
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
   $('#student-no').on('input',function(){
      $('#btn-search-student-no').click(()=>{
         const y = $(`#list-of-studentNo option[value=${$("#student-no").val()}]`);
         $("#txtFirstName").val(y.attr("firstName"));
         $("#txtMiddleName").val(y.attr("middleName"));
         $("#txtSureName").val(y.attr("SurName"));
         $("#txtNickName").val(y.attr("nickName"));
         $("#txtCourse").val(y.attr("courseYear"));
         $("#textCivilStatus").val(y.attr("civilstats"));
         $("#txtHomeAddress").val(y.attr("homeAddres"));
         $("#txtEmailAddress").val(y.attr("email"));
         $("#txtTelphone").val(y.attr("haddTelno"));
         $("#txtCellphone").val(y.attr("boardtelno"));
         $("#txtFather").val(y.attr("fathername"));
         $("#txtMother").val(y.attr("mothername"));
         const txtSureName = $("#txtSureName").val().trim();
         if (txtSureName.length <= 0) {
            $('#txtSureNameReq').text('*');
            $("#txtSureName").addClass('is-invalid');
            $('#errTxtSureName').text('First Name is Required.');
         } else {
            $('#txtSureNameReq').text('');
            $("#txtSureName").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtSureName').text('');
         }
         const txtFirstName = $("#txtFirstName").val().trim();
         if (txtFirstName.length <= 0) {
            $('#txtFirstNameReq').text('*');
            $("#txtFirstName").addClass('is-invalid');
            $('#errtxtFirstName').text('First Name is Required.');
         } else {
            $('#txtFirstNameReq').text('');
            $("#txtFirstName").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errtxtFirstName').text('');
         }
         const txtMiddleName = $("#txtMiddleName").val().trim();
         if (txtMiddleName.length <= 0) {
            $('#txtMiddleNameReq').text('*');
            $("#txtMiddleName").addClass('is-invalid');
            $('#errTxtMiddleName').text('First Name is Required.');
         } else {
            $('#txtMiddleNameReq').text('');
            $("#txtMiddleName").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtMiddleName').text('');
         }
         const txtNickName = $("#txtNickName").val().trim();
         if (txtNickName.length <= 0) {
            $('#txtNickNameReq').text('*');
            $("#txtNickName").addClass('is-invalid');
            $('#errTxtNickName').text('First Name is Required.');
         } else {
            $('#txtNickNameReq').text('');
            $("#txtNickName").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtNickName').text('');
         }
         const txtCourse = $("#txtCourse").val().trim();
         if (txtCourse.length <= 0) {
            $('#txtCourseReq').text('*');
            $("#txtCourse").addClass('is-invalid');
            $('#errTxtCourse').text('First Name is Required.');
         } else {
            $('#txtCourseReq').text('');
            $("#txtCourse").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtCourse').text('');
         }
         const textCivilStatus = $("#textCivilStatus").val().trim();
         if (textCivilStatus.length <= 0) {
            $('#textCivilStatusReq').text('*');
            $("#textCivilStatus").addClass('is-invalid');
            $('#errTextCivilStatus').text('First Name is Required.');
         } else {
            $('#textCivilStatusReq').text('');
            $("#textCivilStatus").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTextCivilStatus').text('');
         }
         const txtHomeAddress = $("#txtHomeAddress").val().trim();
         if (txtHomeAddress.length <= 0) {
            $('#txtHomeAddressReq').text('*');
            $("#txtHomeAddress").addClass('is-invalid');
            $('#errTxtHomeAddress').text('First Name is Required.');
         } else {
            $('#txtHomeAddressReq').text('');
            $("#txtHomeAddress").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtHomeAddress').text('');
         }
         const txtEmailAddress = $("#txtEmailAddress").val().trim();
         if (txtEmailAddress.length <= 0) {
            $('#txtEmailAddressReq').text('*');
            $("#txtEmailAddress").addClass('is-invalid');
            $('#errTxtEmailAddress').text('First Name is Required.');
         } else {
            $('#txtEmailAddressReq').text('');
            $("#txtEmailAddress").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtEmailAddress').text('');
         }
         const txtTelphone = $("#txtTelphone").val().trim();
         if (txtTelphone.length <= 0) {
            $('#txtTelphoneReq').text('*');
            $("#txtTelphone").addClass('is-invalid');
            $('#errTxtTelphone').text('First Name is Required.');
         } else {
            $('#txtTelphoneReq').text('');
            $("#txtTelphone").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtTelphone').text('');
         }
         const txtCellphone = $("#txtCellphone").val().trim();
         if (txtCellphone.length <= 0) {
            $('#txtCellphoneReq').text('*');
            $("#txtCellphone").addClass('is-invalid');
            $('#errTxtCellphone').text('First Name is Required.');
         } else {
            $('#txtCellphoneReq').text('');
            $("#txtCellphone").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtCellphone').text('');
         }
         const txtFather = $("#txtFather").val().trim();
         if (txtFather.length <= 0) {
            $('#txtFatherReq').text('*');
            $("#txtFather").addClass('is-invalid');
            $('#errTxtFather').text('First Name is Required.');
         } else {
            $('#txtFatherReq').text('');
            $("#txtFather").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtFather').text('');
         }
         const txtMother = $("#txtMother").val().trim();
         if (txtMother.length <= 0) {
            $('#txtMotherReq').text('*');
            $("#txtMother").addClass('is-invalid');
            $('#errTxtMother').text('First Name is Required.');
         } else {
            $('#txtMotherReq').text('');
            $("#txtMother").removeClass('is-invalid bg-white').addClass('is-valid border-bottom-0');
            $('#errTxtMother').text('');
         }

         const txtFacebookAccount = $("#txtFacebookAccount").val().trim();
         if (txtFacebookAccount.length <= 0) {
            $('#txtFacebookAccountReq').text('*');
            $("#txtFacebookAccount").addClass('is-invalid');
            $('#errTxtFacebookAccount').text('Facebook acount is Required.');
         } else {
            $('#txtFacebookAccountReq').text('');
            $("#txtFacebookAccount").removeClass('is-invalid').addClass('is-valid');
            $('#errTxtFacebookAccount').text('');
         }

         const txtFirstEnroll = $("#txtFirstEnroll").val().trim();
         if (txtFirstEnroll.length <= 0) {
            $('#txtFirstEnrollReq').text('*');
            $("#txtFirstEnroll").addClass('is-invalid');
            $('#errTxtFirstEnroll').text('What school year did you first enroll is Required.');
         } else {
            $('#txtFirstEnrollReq').text('');
            $("#txtFirstEnroll").removeClass('is-invalid').addClass('is-valid');
            $('#errTxtFirstEnroll').text('');
         }
         const l = y.attr('whyenrollcsu');
         if (l) {
            const actions = l.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="WhyEnrollCsu[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         const r = y.attr('IfNoWhy');
         if (r) {
            const actions = r.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="IfNoWhy[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         const h = y.attr('HowFeelGraduate');
         if (h) {
            const actions = h.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="HowFeelGraduate[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         const w = y.attr('WhatDiffUniversity');
         if (w) {
            const actions = r.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="WhatDiffUniversity[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         const d = y.attr('WhatDiffUniversity');
         if (d) {
            const actions = d.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="WhatDiffUniversity[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         const g = y.attr('WhatGreatLearn');
         if (g) {
            const actions = g.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="WhatGreatLearn[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         const e = y.attr('WouldYouEncourRel');
         if (e) {
            const actions = e.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="WouldYouEncourRel[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         const i = y.attr('Why');
         if (i) {
            const actions = i.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="Why[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         const f = y.attr('FinishCrsEnrolled');
         if (f) {
            const actions = f.split(',').map(action => action.trim()); // Ensure all actions are trimmed
            // Avoid duplicates by creating a Set
            const uniqueActions = [...new Set(actions)];
            uniqueActions.forEach(action => {
               // Use jQuery to select checkboxes with the same value as the action
               const checkbox = $(`input[name="FinishCrsEnrolled[]"][value="${action}"]`);
               if (checkbox.length) {
                  checkbox.prop('checked', true); // Check the checkbox if it exists
               }
            });
         }
         $("#OthersOne").addClass('is-valid');
         $("#txtOtherIfNo").addClass('is-valid');
         $("#txtOthersThree").addClass('is-valid');
         $("#OthersFour").addClass('is-valid');
         $("#OthersFive").addClass('is-valid');
         $("#txtOthersSix").addClass('is-valid');
         $("#txtOthersSeven").addClass('is-valid');
         $("#txtWhatCanSugServ").addClass('is-valid');
         $("#txtFirstEnroll").addClass('is-valid');
      });
      $("#txtFirstName").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtMiddleName").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtSureName").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtNickName").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtCourse").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#textCivilStatus").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtHomeAddress").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtEmailAddress").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtTelphone").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtCellphone").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtFather").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtMother").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $('#txtSureNameReq').text('');
      $('#errTxtSureName').text('');
      $('#txtFirstNameReq').text('');
      $('#errtxtFirstName').text('');
      $('#txtMiddleNameReq').text('');
      $('#errTxtMiddleName').text('');
      $('#txtNickNameReq').text('');
      $('#errTxtNickName').text('');
      $('#txtCourseReq').text('');
      $('#errTxtCourse').text('');
      $('#textCivilStatusReq').text('');
      $('#errTextCivilStatus').text('');
      $('#txtHomeAddressReq').text('');
      $('#errTxtHomeAddress').text('');
      $('#txtEmailAddressReq').text('');
      $('#errTxtEmailAddress').text('');
      $('#txtTelphoneReq').text('');
      $('#errTxtTelphone').text('');
      $('#txtCellphoneReq').text('');
      $('#errTxtCellphone').text('');
      $('#txtFatherReq').text('');
      $('#errTxtFather').text('');
      $('#txtMotherReq').text('');
      $('#errTxtMother').text('');
      $('#errTxtFacebookAccount').text('');
      $('#txtFacebookAccountReq').text('');
      $("#txtFacebookAccount").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#OthersOne").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtOtherIfNo").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtOthersThree").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#OthersFour").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#OthersFive").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtOthersSix").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtOthersSeven").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtWhatCanSugServ").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $("#txtFirstEnroll").val('').removeClass('is-invalid is-valid border-bottom-0').addClass('bg-white');
      $('#errTxtFirstEnroll').text('');
   });
   $('#txtFacebookAccount').on('input',()=>{
      const txtFacebookAccount = $("#txtFacebookAccount").val().trim();
      if (txtFacebookAccount.length <= 0) {
         $('#txtFacebookAccountReq').text('*');
         $("#txtFacebookAccount").addClass('is-invalid');
         $('#errTxtFacebookAccount').text('Facebook acount is Required.');
      } else {
         $('#txtFacebookAccountReq').text('');
         $("#txtFacebookAccount").removeClass('is-invalid').addClass('is-valid');
         $('#errTxtFacebookAccount').text('');
      }
   })
   $('#txtFirstEnroll').on('input',()=>{
      const txtFirstEnroll = $("#txtFirstEnroll").val().trim();
      if (txtFirstEnroll.length <= 0) {
         $('#txtFirstEnrollReq').text('*');
         $("#txtFirstEnroll").addClass('is-invalid');
         $('#errTxtFirstEnroll').text('What school year did you first enroll is Required.');
      } else {
         $('#txtFirstEnrollReq').text('');
         $("#txtFirstEnroll").removeClass('is-invalid').addClass('is-valid');
         $('#errTxtFirstEnroll').text('');
      }
   })
</script>