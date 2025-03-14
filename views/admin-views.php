<?php
   # initialize the login controller to fetch all the data
   $loginController = new studentFormsModel();
   $courseModel         = new courseModel();
   $majorModel          = new majorModel();
   # end
   $includeAdminController = new includeAdminController();
   $includeAdminController->header();
   $includeAdminController->navbar();
?>
<div class="container-fluid p-3 animate__animated animate__fadeIn">
   <div class="card text-gray-800">
      <?php 
         foreach ($loginController->session_studentno($_POST['studentno']) as $row) {
         $f_arragement              = explode(',', $row['f_arragement']);
         $h_health_problems         = explode(",", $row['h_health_problems']);
         $ip_If_yes                 = explode(",", $row['ip_If_yes']);
         $ip_chronic_illness        = explode(",", $row['ip_chronic_illness']);
         $ip_learning_disability    = explode(",", $row['ip_learning_disability']);
         $ip_visual_disability      = explode(",", $row['ip_visual_disability']);
         $ip_hearing_disability     = explode(",", $row['ip_hearing_disability']);
         $ip_mental_psychosocial    = explode(",", $row['ip_mental_psychosocial']);
         $ip_intellectual_disability = explode(",", $row['ip_intellectual_disability']);
         $in_how_you_feel           = explode(",", $row['in_how_you_feel']);
         $in_why_choose_csu         = explode(",", $row['in_why_choose_csu']);
         $in_why                    = explode(",", $row['in_why']);
         $in_problems_concerns      = explode(",", $row['in_problems_concerns']);
         $in_academics              = explode(",", $row['in_academics']);
         $in_professors             = explode(",", $row['in_professors']);
         $in_administration         = explode(",", $row['in_administration']);
         $in_plans_after_college    = explode(",", $row['in_plans_after_college']);
         $e_fraternity              = explode(",", $row['e_fraternity']);
      ?>
         <form action="?route=submit-form" method="post">
            <div class="tab-content">
               <!-- Personal Data -->
               <div class="tab-pane fade show active animate__animated animate__fadeIn" id="Personal">
                  <div class="card-header">
                     <div class="sidebar-brand d-flex align-items-center flex-column flex-md-row text-center text-md-left">
                        <div class="mb-3 mb-md-0">
                           <i class="fas fa-folder fa-4x text-warning"></i>
                        </div>
                        <div class="text-center mx-md-2">
                           <h4 class="my-1 text-gray-900 text-center font-weight-bold text-uppercase">
                              Guidance and Counseling Center Individual Record File
                           </h4>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <!-- Start get foreign key -->
                     <div class="row">
                        <div class="form-group col-md-6 col-lg-3">
                           <label for="personal-course" class="text-capitalize m-0">Course</label>
                           <select id="personal-course" onchange="selectedCourse()" class="form-control mb-4 border-top-0 border-left-0 border-right-0 rounded-0 shadow-none">
                              <option value="">Choose...</option>
                              <option value="<?=$row['course']?>" class="d-none" selected><?=$row['course']?></option>
                              <?php foreach ($courseModel->read_courses() as $crrow) {?>
                                 <option value="<?=$crrow['course']?>"><?=$crrow['course']?></option>
                              <?php }?>
                           </select>
                           <input type="hidden" name="personal-courseid" id="personal-courseid" value="<?=$row['courseid']?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-lg-3">
                           <label for="personal-yearlevel" class="text-capitalize m-0">Year Level</label>
                           <select name="personal-yearlevel" id="personal-yearlevel" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none">
                              <option value="">Choose...</option>
                              <option value="1" <?=$row['ylevel']==='1'?'selected':''?>>1</option>
                              <option value="2" <?=$row['ylevel']==='2'?'selected':''?>>2</option>
                              <option value="3" <?=$row['ylevel']==='3'?'selected':''?>>3</option>
                              <option value="4" <?=$row['ylevel']==='4'?'selected':''?>>4</option>
                           </select>
                        </div>
                        <div class="form-group col-md-6 col-lg-3">
                           <label for="personal-major" class="text-capitalize m-0">Major</label>
                           <select id="personal-major" onchange="selectedMajor()" class="form-control mb-4 border-top-0 border-left-0 border-right-0 rounded-0 shadow-none">
                              <option value="">Choose...</option>
                              <option value="<?=$row['major']?>" class="d-none" selected><?=$row['major']?></option>
                              <?php foreach ($majorModel->read_majors() as $mrow) {?>
                                 <option value="<?=$mrow['major']?>"><?=$mrow['major']?></option>
                              <?php }?>
                           </select>
                           <input type="hidden" name="personal-majorid" id="personal-majorid" value="<?=$row['majorid']?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-lg-3">
                           <label for="personal-studentnumber" class="text-capitalize m-0">Student Number</label>
                           <input type="text" id="personal-studentnumber" name="personal-studentnumber" value="<?=$row['studentno']?>" class="form-control border-top-0 border-left-0 border-right-0 shadow-none bg-white" role="button" readonly>
                        </div>
                     </div>
                     <!-- end -->
                     <hr>
                     <div class="mb-4">
                        <div class="h5 font-weight-botext-gray-900 mb-4">
                           <b>DIRECTION:</b> Fill in the form carefully and honestly. The Information you give will become one of your personal student files in the University. Fill legibly and neatly.
                        </div>
                        <h1 class="h5 font-weight-bold text-uppercase text-primary">A. Personal Data</h1>
                     </div>
                     <hr>
                     <label class="text-gray-900 font-weight-bold p-2 my-2 m-2"> Name: </label>
                     <!-- First row -->
                     <div class="row mb-4">
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtSurname" class="text-capitalize m-0">
                              Surname <span class="text-danger" id="surNameReq"></span>
                           </label>
                           <input type="text" id="txtSurname" name="personal-surname" value="<?= $row['p_surname'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errSurname" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtFirstname" class="text-capitalize m-0">
                              First Name <span class="text-danger" id="firstNameReq"></span>
                           </label>
                           <input type="text" id="txtFirstname" name="personal-firstname" value="<?= $row['p_firstname'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errFirstname" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtMiddlename" class="text-capitalize m-0">
                              Middle Name (full) <span class="text-danger" id="middleNameReq"></span>
                           </label>
                           <input type="text" id="txtMiddlename" name="personal-middlename" value="<?= $row['p_middlename'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errMiddlename" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtNickname" class="text-capitalize m-0">
                              Nickname <span class="text-danger" id="nickNameReq"></span>
                           </label>
                           <input type="text" id="txtNickname" name="personal-nickname" value="<?= $row['p_nickname'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errNickname" class="text-danger"></span>
                        </div>
                     </div>
                     <!-- End row -->

                     <!-- Second row -->
                     <div class="row">
                        <input type="hidden" name="studentno" value="<?= $row['studentno'] ?>">
                     </div>
                     <div class="row mb-4">
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtDateOfBirth" class="text-capitalize m-0">
                              Date of Birth <span class="text-danger" id="dateOfBirthReq"></span>
                           </label>
                           <input type="date" id="txtDateOfBirth" name="personal-date-of-birth" value="<?= $row['p_datebirth'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errDatebirth" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtAge" class="text-capitalize m-0">
                              age <span class="text-danger" id="ageReq"></span>
                           </label>
                           <input type="text" id="txtAge" name="personal-age" value="<?= $row['p_age'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errAge" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtSex" class="text-capitalize m-0">
                              sex <span class="text-danger" id="sexReq"></span>
                           </label>
                           <select id="txtSex" name="personal-sex" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none">
                              <option value="">Choose...</option>
                              <option value="Male" <?php if ($row['p_sex'] === "Male")  echo "selected"; ?>> Male </option>
                              <option value="Female" <?php if ($row['p_sex'] === "Female") echo "selected"; ?>> Female </option>
                           </select>
                           <span id="errSex" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtNationality" class="text-capitalize m-0">
                              Nationality <span class="text-danger" id="nationalityReq"></span>
                           </label>
                           <input type="text" id="txtNationality" name="personal-nationality" value="<?= $row['p_nationality'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errNationality" class="text-danger"></span>
                        </div>
                     </div>
                     <!-- End row -->

                     <!-- Third row -->
                     <div class="row mb-4">
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtPlaceOfBirth" class="text-capitalize m-0">
                              Place of Birth <span class="text-danger" id="placeOfBirthReq"></span>
                           </label>
                           <input type="text" id="txtPlaceOfBirth" name="personal-place-of-birth" value="<?= $row['p_placebirth'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errPlaceOfBirth" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtCivilStatus" class="text-capitalize m-0">
                              civil status <span class="text-danger" id="civilSatusReq"></span>
                           </label>
                           <input type="text" id="txtCivilStatus" name="personal-civil-status" value="<?= $row['p_cilvilstatus'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errCivilStatus" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtReligion" class="text-capitalize m-0">
                              religion <span class="text-danger" id="religionReq"></span>
                           </label>
                           <input type="text" id="txtReligion" name="personal-religion" value="<?= $row['p_religion'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errReligion" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtHomeAddress" class="text-capitalize m-0">
                              home address <span class="text-danger" id="homeAddressReq"></span>
                           </label>
                           <input type="text" id="txtHomeAddress" name="personal-home-address" value="<?= $row['p_homeaddress'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errHomeAddress" class="text-danger"></span>
                        </div>
                     </div>
                     <!-- End row -->

                     <!-- Fourth row -->
                     <div class="row mb-4">
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtHomeAddessTelNo" class="text-capitalize m-0">
                              home address tel./cell no. <span class="text-danger" id="homeAddresstelReq"></span>
                           </label>
                           <input type="text" id="txtHomeAddessTelNo" name="personal-home-addess-tel-no" value="<?= $row['p_homeadd_telno'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errHomeAddresstel" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtBoardingHouseAddress" class="text-capitalize m-0">
                              boarding house address <span class="text-danger" id="boardHouseAddReq"></span>
                           </label>
                           <input type="text" id="txtBoardingHouseAddress" name="personal-boarding-house-address" value="<?= $row['p_boardhouseadd'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errBoardHouseAdd" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtBoardingAddressTelNo" class="text-capitalize m-0">
                              boarding house tel./cell no. <span class="text-danger" id="boardHouseAddTelReq"></span>
                           </label>
                           <input type="text" id="txtBoardingAddressTelNo" name="personal-boarding-address-tel-no" value="<?= $row['p_boardhousetelno'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errBoardHouseAddTel" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtNameOfLandloard" class="text-capitalize m-0">
                              Name of Landlord <span class="text-danger" id="nameOfLandlordReq"></span>
                           </label>
                           <input type="text" id="txtNameOfLandloard" name="personal-name-of-landloard" value="<?= $row['p_namelandlord'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errNameOfLandlord" class="text-danger"></span>
                        </div>
                     </div>
                     <!-- End row -->

                     <!-- Fith row -->
                     <div class="row mb-4">
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtLandlordRelation" class="text-capitalize m-0">
                              Landlord relation <span class="text-danger" id="landlordrelationReq"></span>
                           </label>
                           <input type="text" id="txtLandlordRelation" name="personal-landlord-relation" value="<?= $row['p_landlordrelation'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errLandlordrelation" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label for="txtHobbies" class="text-capitalize m-0">
                              hobbies/talents/interest/skills <span class="text-danger" id="hobbiesReq"></span>
                           </label>
                           <input type="text" id="txtHobbies" name="personal-hobbies" value="<?= $row['p_hobbies'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errhobbies" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-12 col-xl-6">
                           <label for="txtDescribeYourself" class="text-capitalize m-0">
                              describe yourself <span class="text-danger" id="describeYourselfReq"></span>
                           </label>
                           <input type="text" id="txtDescribeYourself" name="personal-describe-yourself" value="<?= $row['p_describeyourself'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errDescribeYourself" class="text-danger"></span>
                        </div>
                     </div>
                     <!-- End row -->
                  </div>
               </div>
               <!-- End row -->
               <!-- Family Data -->
               <div class="tab-pane fade show animate__animated animate__fadeIn" id="Familydata">
                  <div class="card-header">
                     <div class="sidebar-brand d-flex align-items-center flex-column flex-md-row text-center text-md-left">
                        <div class="mb-3 mb-md-0">
                           <i class="fas fa-users fa-4x text-primary"></i>
                        </div>
                        <div class="mx-md-2">
                           <h4 class="my-1 text-gray-900 text-center font-weight-bold text-uppercase">
                              b. family data
                           </h4>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="row justify-content-between mb-4">
                        <!-- Family data inputs filed for Father -->
                        <div class="form-group col-md-6 col-xl-6">
                           <div class="h6 font-weight-bold text-uppercase text-center mb-4">
                              father
                           </div>
                           <div class="custom-checkbox d-flex justify-content-around mb-4">
                              <div class="custom-control">
                                 <input type="radio" id="living_f" name="family_father_f" value="Living" <?php if ($row['f_father'] === "Living") echo "checked"; ?> class="custom-control-input" checked />
                                 <label class="custom-control-label text-gray-900" for="living_f"> Living </label>
                              </div>
                              <div class="custom-control">
                                 <input type="radio" id="deceased_f" name="family_father_f" value="Deceased" <?php if ($row['f_father'] === "Deceased") echo "checked"; ?> class="custom-control-input" />
                                 <label class="custom-control-label text-gray-900" for="deceased_f"> Deceased </label>
                              </div>
                           </div>
                           <div class="mb-2">
                              <label for="txtFather_f" class="text-capitalize m-0">
                                 father's name <span class="text-danger" id="fatherNameReq_f"></span>
                              </label>
                              <input type="text" id="txtFather_f" name="family_father_name_f" value="<?php echo $row['f_fathername'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errFatherName_f"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtAddress_f" class="text-capitalize m-0">
                                 address <span class="text-danger" id="addressReq_f"></span>
                              </label>
                              <input type="text" id="txtAddress_f" name="family_address_f" value="<?php echo $row['f_addess'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errAddress_f"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtCellphoneNumber_f" class="text-capitalize m-0">
                                 cellphone Number <span class="text-danger" id="cellphoneNumberReq_1_f"></span>
                              </label>
                              <input type="text" id="txtCellphoneNumber_f" name="family_cellphone_numberone_f" value="<?php echo $row['f_phone_number_one'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errCellphoneNumber_1_f"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtNationality_f" class="text-capitalize m-0">
                                 nationality <span class="text-danger" id="nationalityReq_f"></span>
                              </label>
                              <input type="text" id="txtNationality_f" name="family_nationality_f" value="<?php echo $row['f_nationality'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errNationality_f"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtEducationalEttainment_f" class="text-capitalize m-0">
                                 educational ettaiment <span class="text-danger" id="educationalettainmentReq_f"></span>
                              </label>
                              <input type="text" id="txtEducationalEttainment_f" name="family_educationaly_ettaiment_f" value="<?php echo $row['f_educational'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errEducationalEttainment_f"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtOccupationPosition_f" class="text-capitalize m-0">
                                 occupation / position <span class="text-danger" id="occupationPositionReq_1_f"></span>
                              </label>
                              <input type="text" id="txtOccupationPosition_f" name="family_occupation_positionone_f" value="<?php echo $row['f_occupation_one'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errOccupationPosition_1_f"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtBusinessOfficeAddress_f" class="text-capitalize m-0">
                                 business office address <span class="text-danger" id="businessOfficeAddressReq_f"></span>
                              </label>
                              <input type="text" id="txtBusinessOfficeAddress_f" name="family_business_office_address_f" value="<?php echo $row['f_business'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errBusinessOfficeAddress_f"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtCellphoneNumber_2_f" class="text-capitalize m-0">
                                 cellphone number <span class="text-danger" id="cellphoneNumberReq_2_f"></span>
                              </label>
                              <input type="text" id="txtCellphoneNumber_2_f" name="family_cellphone_number_f" value="<?php echo $row['f_phone_number_two'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errCellphoneNumber_2_f"></span>
                           </div>
                           <div class="custom-checkbox">
                              <div class="d-flex justify-content-start">
                                 <label for="yes_f" class="mb-2 pr-2"> Working abroad?
                                 </label>
                                 <div class="custom-control">
                                    <input type="radio" id="yes_f" name="family_working_abroad_f" value="Yes" <?php if ($row['f_work_abroad'] === "Yes") echo "checked"; ?> class="custom-control-input" checked />
                                    <label class="custom-control-label pr-2" for="yes_f"> Yes </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="radio" id="no_f" name="family_working_abroad_f" value="No" <?php if ($row['f_work_abroad'] === "No") echo "checked"; ?> class="custom-control-input" />
                                    <label class="custom-control-label" for="no_f"> No </label>
                                 </div>
                              </div>
                           </div>
                           <div class="mb-2">
                              <label for="txtWhere_f" class="text-capitalize m-0">
                                 where? <span class="text-danger" id="whereReq_f"></span>
                              </label>
                              <input type="text" id="txtWhere_f" name="family_where_f" value="<?php echo $row['f_where'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none input-disabled-father" />
                              <span class="text-danger" id="errWhere_f"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtNatureOfWork_f" class="text-capitalize m-0">
                                 nature of work? <span class="text-danger" id="natureOfWorkReq_f"></span>
                              </label>
                              <input type="text" id="txtNatureOfWork_f" name="family_nature_work_f" value="<?php echo $row['f_nature_of_work'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none input-disabled-father" />
                              <span class="text-danger" id="errNatureOfWork_f"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtOccupationPosition_f" class="text-capitalize m-0">
                                 occupation / position <span class="text-danger" id="occupationPositionReq_2_f"></span>
                              </label>
                              <input type="text" id="txtOccupationPosition_2_f" name="family_occupation_position_f" value="<?php echo $row['f_occupation_two'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none input-disabled-father" />
                              <span class="text-danger" id="errOccupationPosition_2_f"></span>
                           </div>
                        </div>
                        <!-- Family data inputs filed for Mother -->
                        <div class="form-group col-md-6 col-xl-6">
                           <div class="h6 font-weight-bold text-uppercase text-center mb-4">
                              mother
                           </div>
                           <div class="custom-checkbox d-flex justify-content-around mb-4">
                              <div class="custom-control">
                                 <input type="radio" id="living_m" name="family_mother_m" value="Living" <?php if ($row['m_mother'] === "Living") echo "checked" ?> class="custom-control-input" checked />
                                 <label class="custom-control-label text-gray-900" for="living_m"> Living </label>
                              </div>
                              <div class="custom-control">
                                 <input type="radio" id="deceased_m" name="family_mother_m" value="Deceased" <?php if ($row['m_mother'] === "Deceased") echo "checked" ?> class="custom-control-input" />
                                 <label class="custom-control-label text-gray-900" for="deceased_m"> Deceased </label>
                              </div>
                           </div>
                           <div class="mb-2">
                              <label for="txtMother_m" class="text-capitalize m-0">
                                 mother's name <span class="text-danger" id="motherNameReq_m"></span>
                              </label>
                              <input type="text" id="txtMother_m" name="family_mother_name_m" value="<?php echo $row['m_mothername'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errMotherName_m"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtAddress_m" class="text-capitalize m-0">
                                 address <span class="text-danger" id="addressReq_m"></span>
                              </label>
                              <input type="text" id="txtAddress_m" name="family_address_m" value="<?php echo $row['m_addess'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errAddress_m"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtCellphoneNumber_m" class="text-capitalize m-0">
                                 cellphone Number <span class="text-danger" id="cellphoneNumberReq_1_m"></span>
                              </label>
                              <input type="text" id="txtCellphoneNumber_m" name="family_cellphone_numberone_m" value="<?php echo $row['m_phone_number_one'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errCellphoneNumber_1_m"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtNationality_m" class="text-capitalize m-0">
                                 nationality <span class="text-danger" id="nationalityReq_m"></span>
                              </label>
                              <input type="text" id="txtNationality_m" name="family_nationality_m" value="<?php echo $row['m_nationality'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errNationality_m"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtEducationalEttainment_m" class="text-capitalize m-0">
                                 educational ettaiment <span class="text-danger" id="educationalettainmentReq_m"></span>
                              </label>
                              <input type="text" id="txtEducationalEttainment_m" name="family_educationaly_ettaiment_m" value="<?php echo $row['m_educational'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errEducationalEttainment_m"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtOccupationPosition_m" class="text-capitalize m-0">
                                 occupation / position <span class="text-danger" id="occupationPositionReq_1_m"></span>
                              </label>
                              <input type="text" id="txtOccupationPosition_m" name="family_occupation_position_1_m" value="<?php echo $row['m_occupation_one'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errOccupationPosition_1_m"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtBusinessOfficeAddress_m" class="text-capitalize m-0">
                                 business office address <span class="text-danger" id="businessOfficeAddressReq_m"></span>
                              </label>
                              <input type="text" id="txtBusinessOfficeAddress_m" name="family_business_office_address_m" value="<?php echo $row['m_business'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errBusinessOfficeAddress_m"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtCellphoneNumber_2_m" class="text-capitalize m-0">
                                 cellphone number <span class="text-danger" id="cellphoneNumberReq_2_m"></span>
                              </label>
                              <input type="text" id="txtCellphoneNumber_2_m" name="family_cellphone_number_m" value="<?php echo $row['m_phone_number_two'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errCellphoneNumber_2_m"></span>
                           </div>
                           <div class="custom-checkbox">
                              <div class="d-flex justify-content-start">
                                 <label for="yes_m" class="mb-2 pr-2"> Working abroad?
                                 </label>
                                 <div class="custom-control">
                                    <input type="radio" id="yes_m" name="family_working_abroad_m" value="Yes" <?php if ($row['m_work_abroad'] === "Yes") echo "checked" ?> class="custom-control-input" checked />
                                    <label class="custom-control-label pr-2" for="yes_m"> Yes </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="radio" id="no_m" name="family_working_abroad_m" value="No" <?php if ($row['m_work_abroad'] === "No") echo "checked" ?> class="custom-control-input" />
                                    <label class="custom-control-label" for="no_m"> No </label>
                                 </div>
                              </div>
                           </div>
                           <div class="mb-2">
                              <label for="txtWhere_m" class="text-capitalize m-0">
                                 where? <span class="text-danger" id="whereReq_m"></span>
                              </label>
                              <input type="text" id="txtWhere_m" name="family_where_m" value="<?php echo $row['m_where'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none input-disabled-mother" />
                              <span class="text-danger" id="errWhere_m"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtNatureOfWork_m" class="text-capitalize m-0">
                                 nature of work? <span class="text-danger" id="natureOfWorkReq_m"></span>
                              </label>
                              <input type="text" id="txtNatureOfWork_m" name="family_nature_work_m" value="<?php echo $row['m_nature_of_work'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none input-disabled-mother" />
                              <span class="text-danger" id="errNatureOfWork_m"></span>
                           </div>
                           <div class="mb-2">
                              <label for="txtOccupationPosition_2_m" class="text-capitalize m-0">
                                 occupation / position <span class="text-danger" id="occupationPositionReq_2_m"></span>
                              </label>
                              <input type="text" id="txtOccupationPosition_2_m" name="family_occupation_position_2_m" value="<?php echo $row['m_occupation_two'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none input-disabled-mother" />
                              <span class="text-danger" id="errOccupationPosition_2_m"></span>
                           </div>
                        </div>
                     </div>
                     <button type="button" id="add_family_data_btn" class="btn btn-primary text-white mb-2">
                        <i class="fa fa-plus"></i>
                        Add more...
                     </button>
                     <div class="table-responsive">
                        <table class="table table-bordered" id="table_field">
                           <thead>
                              <tr>
                                 <th class="text-nowrap">Brothers & Sisters(including yourself)arrange form eldest to youngest</th>
                                 <th class="text-nowrap">Age</th>
                                 <th class="text-nowrap">School</th>
                                 <th class="text-nowrap">Educational Ettainment</th>
                                 <th class="text-nowrap">Employment/Business Agency</th>
                                 <th class="text-nowrap">Remove</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $i = 0;
                              if (empty($row['f_arragement'])) { ?>
                                 <tr id="table-d-none">
                                    <td class="text-center" colspan="6">No data available</td>
                                 </tr>
                                 <?php } else {
                                 foreach ($f_arragement as $value) { ?>
                                    <?php $i % 5 === 0 ? '<tr>' : ''; ?>
                                    <td class="align-middle p-0 text-nowrap">
                                       <input type="text" name="txtBrotherSister[]" value="<?= $value ?>" class="form-control rounded-0 shadow-none border-0">
                                    </td>
                                    <?php if ($i % 5 === 4) { ?>
                                       <td class="align-middle p-0">
                                          <div class="btn-group d-sm-flex justify-content-center align-items-center">
                                             <button type="button" class="btn" id="deletebros">
                                                <i class="fa text-danger">&#xf00d;</i>
                                             </button>
                                          </div>
                                       </td>
                                       </tr>
                              <?php }
                                    $i++;
                                 }
                              }
                              ?>
                           </tbody>
                        </table>
                     </div>
                     <!-- End row -->
                     <!-- Start estimate monthly income of parents-->
                     <div class="mb-2 pr-2"> Estimated Monthly Income of Parents </div>
                     <div class="d-lg-flex mb-3">
                        <div class=" pr-2">
                           <div class="custom-checkbox">
                              <div class="flex-column">
                                 <div class="custom-control">
                                    <input type="radio" id="3000andbelow" name="parentsMonthlyIncome" value="P3,000 and below" <?php if ($row['f_income_parent'] === "P3,000 and below") echo "checked" ?> class="custom-control-input" checked />
                                    <label for="3000andbelow" class="custom-control-label pr-2"> &#x20B1; 3,000 and below </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="radio" id="3000toP5000" name="parentsMonthlyIncome" value="P3,000 to P5,000" <?php if ($row['f_income_parent'] === "P3,000 to P5,000") echo "checked" ?> class="custom-control-input" />
                                    <label for="3000toP5000" class="custom-control-label"> &#x20B1;3,000 to P5,000 </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=" pr-2">
                           <div class="custom-checkbox">
                              <div class="flex-column">
                                 <div class="custom-control">
                                    <input type="radio" id="5000toP8000" name="parentsMonthlyIncome" value="P5,000 to P8,000" <?php if ($row['f_income_parent'] === "P5,000 to P8,000") echo "checked" ?> class="custom-control-input" />
                                    <label for="5000toP8000" class="custom-control-label pr-2"> &#x20B1;5,000 to P8,000 </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="radio" id="8000toP12000" name="parentsMonthlyIncome" value="P8,000 to P12,000" <?php if ($row['f_income_parent'] === "P8,000 to P12,000") echo "checked" ?> class="custom-control-input" />
                                    <label for="8000toP12000" class="custom-control-label"> &#x20B1;8,000 to P12,000 </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="pr-2">
                           <div class="custom-checkbox">
                              <div class="flex-column">
                                 <div class="custom-control">
                                    <input type="radio" id="12000toP15000" name="parentsMonthlyIncome" value="P12,000 to P15,000" <?php if ($row['f_income_parent'] === "P12,000 to P15,000") echo "checked" ?> class="custom-control-input" />
                                    <label for="12000toP15000" class="custom-control-label pr-2"> &#x20B1;12,000 to P15,000 </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="radio" id="15000andabove" name="parentsMonthlyIncome" value="P15,000 and above" <?php if ($row['f_income_parent'] === "P15,000 and above") echo "checked" ?> class="custom-control-input" />
                                    <label for="15000andabove" class="custom-control-label"> &#x20B1;15,000 and above </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End -->
                     <div class="row justify-content-between">
                        <div class="form-group col-md-6 col-xl-6">
                           <div class="mb-2">
                              <label for="txtNumbersofchildern" class="text-capitalize m-0">
                                 numbers of childern in the family <span class="text-danger" id="numbersOfChildernReq"></span>
                              </label>
                              <input type="text" id="txtNumbersofchildern" name="txtNumbersofchildern" value="<?php echo $row['f_number_child_parents'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errNumbersofchildern"></span>
                           </div>
                        </div>
                        <div class="form-group col-md-6 col-xl-6">
                           <div class="mb-0">
                              <label for="txtStudentsBirthUrder" class="m-0">
                                 Student's birth order in the family <span class="text-danger" id="studBirthOrderReq"></span>
                              </label>
                              <input type="text" id="txtStudentsBirthUrder" name="txtStudentsBirthUrder" value="<?php echo $row['f_birth_order'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errStudBirthOrder"></span>
                           </div>
                        </div>
                     </div>
                     <div class="mb-2 pr-2"> Are you living with your parents? </div>
                     <div class="form-group">
                        <div class="custom-checkbox">
                           <div class="flex-column">
                              <div class="custom-control">
                                 <input type="radio" id="yes_living" name="are_you_living_parents" value="Yes" <?php if ($row['f_living_parents'] === "Yes") echo "checked" ?> class="custom-control-input" checked />
                                 <label for="yes_living" class="custom-control-label pr-2"> Yes </label>
                              </div>
                              <div class="custom-control">
                                 <input type="radio" id="no_living" name="are_you_living_parents" value="No" <?php if ($row['f_living_parents'] === "No") echo "checked" ?> class="custom-control-input" />
                                 <label for="no_living" class="custom-control-label"> No </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-between">
                        <div class="form-group col-md-6 col-xl-4">
                           <div class="mb-2">
                              <label for="txtIfNoWhy" class="text-capitalize m-0">
                                 If no, why? <span class="text-danger" id="ifNoWhyReq"></span>
                              </label>
                              <input id="txtIfNoWhy" name="family_if_no_why" type="text" value="<?php echo $row['f_if_no_why'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none input-disabled-living" />
                              <span class="text-danger" id="errIfNoWhy"></span>
                           </div>
                        </div>
                        <div class="form-group col-md-6 col-xl-4">
                           <div class="mb-2">
                              <label for="txtWithWhom" class="m-0">
                                 With whom are you staying? <span class="text-danger" id="withWhomReq"></span>
                              </label>
                              <input type="text" id="txtWithWhom" name="txtWhomStaying" value="<?php echo $row['f_who_staying'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none input-disabled-living" />
                              <span class="text-danger" id="errwithWhom"></span>
                           </div>
                        </div>
                        <div class="form-group col-md-6 col-xl-4">
                           <div class="mb-2">
                              <label for="txtWhatLanguages" class="m-0">
                                 What languages and dialets do you speak at home? <span class="text-danger" id="languagesDialetsReq"></span>
                              </label>
                              <input type="text" id="txtWhatLanguages" name="family_what_languages_dialets" value="<?php echo $row['f_languages_speak'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none input-disabled-living" />
                              <span class="text-danger" id="errLanguagesDialets"></span>
                           </div>
                        </div>
                     </div>
                     <!-- Start how much is your daily allowance -->
                     <div class="mb-2 pr-2"> How much is your daily allowance? </div>
                     <div class="d-lg-flex">
                        <div class="pr-2">
                           <div class="custom-checkbox">
                              <div class="flex-column">
                                 <div class="custom-control">
                                    <input type="radio" id="20-00" value="Below P20.00" name="how_much_daily_allowance" <?php if ($row['f_daily_allowance'] === "Below P20.00") echo "checked" ?> class="custom-control-input" checked />
                                    <label for="20-00" class="custom-control-label pr-2"> Below &#x20B1;20.00 </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="radio" id="20-30" value="P20-P30" name="how_much_daily_allowance" <?php if ($row['f_daily_allowance'] === "P20-P30") echo "checked" ?> class="custom-control-input" />
                                    <label for="20-30" class="custom-control-label"> &#x20B1;20-30 </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="pr-2">
                           <div class="custom-checkbox">
                              <div class="flex-column">
                                 <div class="custom-control">
                                    <input type="radio" id="30-40" value="P30-40" name="how_much_daily_allowance" <?php if ($row['f_daily_allowance'] === "P30-40") echo "checked" ?> class="custom-control-input" />
                                    <label for="30-40" class="custom-control-label pr-2"> &#x20B1;30-40 </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="radio" id="50-above" value="P50 and above" name="how_much_daily_allowance" <?php if ($row['f_daily_allowance'] === "P50 and above") echo "checked" ?> class="custom-control-input" />
                                    <label for="50-above" class="custom-control-label"> &#x20B1;50 and above </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end -->
                  </div>
               </div>
               <!-- End row -->

               <!-- Educational Data -->
               <div class="tab-pane fade show animate__animated animate__fadeIn" id="Educationaldata">
                  <div class="card-header">
                     <div class="sidebar-brand d-flex align-items-center flex-column flex-md-row text-center text-md-left">
                        <div class="mb-3 mb-md-0">
                           <i class="fas fa-book fa-4x text-danger"></i>
                        </div>
                        <div class="mx-md-2">
                           <h4 class="my-1 text-gray-900 text-center font-weight-bold text-uppercase">
                              c. educational data
                           </h4>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="h4 text-gray-800 text-center">Membership in clubs, fraternities, civic and religious organizations are you a member or have been a member of.</div>
                     <hr>
                     <button type="button" id="btn_educational_data" class="btn btn-primary mb-3">
                        <i class="fa fa-plus"></i>
                        Add more...
                     </button>
                     <div class="table-responsive">
                        <table class="table table-bordered" id="table_educational_data">
                           <thead>
                              <tr>
                                 <th class="text-nowrap">Name Of Organization</th>
                                 <th class="text-nowrap">Position</th>
                                 <th class="text-nowrap">Remove</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $x = 0;
                              if (empty($row['e_fraternity'])) { ?>
                                 <tr id="table-educ-d-none">
                                    <td class="text-center" colspan="6">No data available</td>
                                 </tr>
                                 <?php } else {
                                 foreach ($e_fraternity as $row_val) {
                                    $x % 2 === 0 ? "<tr>" : ""; ?>
                                    <td class="align-middle p-0 text-nowrap"><input type="text" name="txtFraternity[]" value="<?= $row_val ?>" class="form-control rounded-0 shadow-none border-0"></td>
                                    <?php if ($x % 2 === 1) { ?>
                                       <td class="align-middle p-0">
                                          <div class="btn-group d-sm-flex justify-content-center align-items-center">
                                             <div>
                                                <button class="btn" id="remove_tr_educational_data"><i class="fa text-danger">&#xf00d;</i></button>
                                             </div>
                                          </div>
                                       </td>
                                       </tr>
                                    <?php }
                                    $x++; ?>
                              <?php }
                              }
                              ?>
                           </tbody>
                        </table>
                     </div>
                     <hr>
                     <div class="row justify-content-between mb-2">
                        <div class="form-group col-md-6 col-xl-6">
                           <label for="txtWhatYourHighSchoolAverage" class="m-0">
                              what was your High School Average grade? <span class="text-danger" id="whatYourHighSchoolAverageReq"></span>
                           </label>
                           <input type="text" id="txtWhatYourHighSchoolAverage" name="educational_high_school_average" value="<?php echo $row['e_average_grade'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span class="text-danger" id="errWhatYourHighSchoolAverage"></span>
                        </div>
                        <div class="form-group col-md-6 col-xl-6">
                           <label for="txtHonorAwardsDidRecieve" class="m-0">
                              What honor/awards did you receive in High School? <span class="text-danger" id="honorAwardsDidRecieveReq"></span>
                           </label>
                           <input type="text" id="txtHonorAwardsDidRecieve" name="educational_honor_did_high_school" value="<?php echo $row['e_honor_awards'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span class="text-danger" id="errHonorAwardsDidRecieve"></span>
                        </div>
                     </div>
                     <div class="row justify-content-between mb-2">
                        <div class="form-group col-md-3 col-xl-3">
                           <label for="txtWhatLikeMost" class="m-0">
                              What subject do you like most? <span class="text-danger" id="whatLikeMostReq"></span>
                           </label>
                           <input type="text" id="txtWhatLikeMost" name="educational_like_most" value="<?php echo $row['e_subject_like_most'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span class="text-danger" id="errWhatLikeMost"></span>
                        </div>
                        <div class="form-group col-md-3 col-xl-3">
                           <label for="txtWhyMost" class="m-0">
                              Why? <span class="text-danger" id="whyMostReq"></span>
                           </label>
                           <input type="text" id="txtWhyMost" name="educational_why_one" value="<?php echo $row['e_why_like_most'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span class="text-danger" id="errWhyMost"></span>
                        </div>
                        <div class="form-group col-md-3 col-xl-3">
                           <label for="txtLikeLeast" class="m-0">
                              What subject do you like least? <span class="text-danger" id="likeLeastReq"></span>
                           </label>
                           <input type="text" id="txtLikeLeast" name="educational_like_least" value="<?php echo $row['e_subject_like_least'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span class="text-danger" id="errLikeLeast"></span>
                        </div>
                        <div class="form-group col-md-3 col-xl-3">
                           <label for="txtWhyLeast" class="m-0">
                              Why? <span class="text-danger" id="whyLeastReq"></span>
                           </label>
                           <input type="text" id="txtWhyLeast" name="educational_why_least" value="<?php echo $row['e_why_like_least'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span class="text-danger" id="errWhyLeast"></span>
                        </div>
                     </div>
                     <div>
                        <div class="custom-checkbox">
                           <div class="d-flex justify-content-start">
                              <label for="YesEducational" class="mb-2 pr-2">
                                 Are you a scholar?
                              </label>
                              <div class="custom-control">
                                 <input type="radio" id="YesEducational" name="educational_scholar" value="Yes" <?php if ($row['e_are_you_scholar'] === "Yes") echo "checked"; ?> class="custom-control-input" checked />
                                 <label class="custom-control-label pr-2" for="YesEducational"> Yes </label>
                              </div>
                              <div class="custom-control">
                                 <input type="radio" id="NoEducational" name="educational_scholar" value="No" <?php if ($row['e_are_you_scholar'] === "No") echo "checked"; ?> class="custom-control-input" />
                                 <label class="custom-control-label" for="NoEducational"> No </label>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-2">
                           <div class="form-group col-md-3 col-xl-6">
                              <label for="txtIfyesScholarShip" class="text-capitalize m-0">
                                 If yes,what scholarship program? <span class="text-danger" id="ifYesscholarShipReq"></span>
                              </label>
                              <input type="text" id="txtIfyesScholarShip" name="educational_scholarship_program" value="<?php echo $row['e_scholarship_program'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none educational-scholarship-program" />
                              <span class="text-danger" id="errIfYesscholarShip"></span>
                           </div>
                           <div class="form-group col-md-3 col-xl-6">
                              <label for="txtWhoSupportsStudies" class="text-capitalize m-0">
                                 Who supports you in your studies? <span class="text-danger" id="whoSupportsStudiesReq"></span>
                              </label>
                              <input type="text" id="txtWhoSupportsStudies" name="educational_supports_studies" value="<?php echo $row['e_supports_studies'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errWhoSupportsStudies"></span>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="custom-checkbox">
                           <div class="d-flex justify-content-start">
                              <label class="mb-2 pr-2">
                                 Are you a transferee?
                              </label>
                              <div class="custom-control">
                                 <input type="radio" id="YesTransferee" name="educational_transferee" value="Yes" <?php if ($row['e_transferee'] === "No") echo "checked"; ?> class="custom-control-input" checked />
                                 <label class="custom-control-label pr-2" for="YesTransferee"> Yes </label>
                              </div>
                              <div class="custom-control">
                                 <input type="radio" id="NoTransferee" name="educational_transferee" value="No" <?php if ($row['e_transferee'] === "No") echo "checked"; ?> class="custom-control-input" />
                                 <label class="custom-control-label" for="NoTransferee"> No </label>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-2">
                           <div class="form-group col-md-3 col-xl-6">
                              <label for="txtFormWhatSchool" class="text-capitalize m-0">
                                 From what school? <span class="text-danger" id="formWhatSchoolReq"></span>
                              </label>
                              <input type="text" id="txtFormWhatSchool" name="educational_from_what_school" value="<?php echo $row['e_from_what_school'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none from-what-school" />
                              <span class="text-danger" id="errformWhatSchool"></span>
                           </div>
                           <div class="form-group col-md-3 col-xl-6">
                              <label for="txtWhatCourseTakeThere" class="text-capitalize m-0">
                                 What course did you take there? <span class="text-danger" id="whatCourseTakeThereReq"></span>
                              </label>
                              <input type="text" id="txtWhatCourseTakeThere" name="educational_what_course_take_there" value="<?php echo $row['e_course_there'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                              <span class="text-danger" id="errWhatCourseTakeThere"></span>
                           </div>
                        </div>
                     </div>
                     <div class="table-responsive">
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th class="text-nowrap">SCHOOLS</th>
                                 <th class="text-nowrap">NAME OF SCHOOL</th>
                                 <th class="text-nowrap">YEAR</th>
                                 <th class="text-nowrap">HONORS/AWARDS</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="align-middle text-uppercase">preparatory/kindergarden</td>
                                 <td class="align-middle p-0"><input type="text" name="PrKnNameOfSchool" value="<?= $row['e_prknnameofschool'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                                 <td class="align-middle p-0"><input type="text" name="PrearatoryKiYear" value="<?= $row['e_prearatorykiyear'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                                 <td class="align-middle p-0"><input type="text" name="PrKnHonorsAwards" value="<?= $row['e_prknhonorsawards'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                              </tr>
                              <tr>
                                 <td class="align-middle text-uppercase">elementary</td>
                                 <td class="align-middle p-0"><input type="text" name="ElemNameOfSchool" value="<?= $row['e_elemnameofschool'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                                 <td class="align-middle p-0"><input type="text" name="ElemYearOfSchool" value="<?= $row['e_elemyearofschool'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                                 <td class="align-middle p-0"><input type="text" name="ElemHonorsSchool" value="<?= $row['e_elemhonorsschool'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                              </tr>
                              <tr>
                                 <td class="align-middle text-uppercase">high school</td>
                                 <td class="align-middle p-0"><input type="text" name="HighSchoolSchool" value="<?= $row['e_highschoolschool'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                                 <td class="align-middle p-0"><input type="text" name="HighsYearsSchool" value="<?= $row['e_highsyearsschool'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                                 <td class="align-middle p-0"><input type="text" name="HighsHonorSchool" value="<?= $row['e_highshonorschool'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                              </tr>
                              <tr>
                                 <td class="align-middle text-uppercase">vocational/technical</td>
                                 <td class="align-middle p-0"><input type="text" name="VocationalShool" value="<?= $row['e_vocationalshool'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                                 <td class="align-middle p-0"><input type="text" name="VoctonYearShool" value="<?= $row['e_voctonyearshool'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                                 <td class="align-middle p-0"><input type="text" name="VocationlHonors" value="<?= $row['e_vocationlhonors'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                              </tr>
                              <tr>
                                 <td class="align-middle text-uppercase">college</td>
                                 <td class="align-middle p-0"><input type="text" name="CollegesSchool" value="<?= $row['e_collegesschool'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                                 <td class="align-middle p-0"><input type="text" name="CollYearSchool" value="<?= $row['e_collyearschool'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                                 <td class="align-middle p-0"><input type="text" name="CollHonorSchol" value="<?= $row['e_collhonorschool'] ?>" class="form-control rounded-0 shadow-none border-0"></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <!-- End row -->

               <!-- Healt Data -->
               <div class="tab-pane fade show animate__animated animate__fadeIn" id="Healthdata">
                  <div class="card-header">
                     <div class="sidebar-brand d-flex align-items-center flex-column flex-md-row text-center text-md-left">
                        <div class="mb-3 mb-md-0">
                           <i class="fas fa-hospital-user fa-4x text-secondary"></i>
                        </div>
                        <div class="mx-md-2">
                           <h4 class="my-1 text-gray-900 text-center font-weight-bold text-uppercase">
                              d. health data
                           </h4>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="custom-checkbox mb-4 text-gray-900">
                        <label for="Yes" class="form-control-label">
                           Do you often get sick?
                        </label>
                        <div class="d-sm-flex flex-column pl-2 pr-2">
                           <div class="custom-control">
                              <input type="radio" id="yesSick" name="h_sick" value="Yes" <?php if ($row['h_often_get_sick'] === "Yes") echo "checked" ?> class="custom-control-input" checked />
                              <label class="custom-control-label" for="yesSick"> Yes </label>
                           </div>
                           <div class="custom-control">
                              <input type="radio" id="noSick" name="h_sick" value="No" <?php if ($row['h_often_get_sick'] === "No") echo "checked" ?> class="custom-control-input" />
                              <label class="custom-control-label" for="noSick">
                                 No
                              </label>
                           </div>
                           <div class="custom-control">
                              <input type="radio" id="seldomSick" name="h_sick" value="Seldom" <?php if ($row['h_often_get_sick'] === "Seldom") echo "checked" ?> class="custom-control-input" />
                              <label class="custom-control-label" for="seldomSick">
                                 Seldom
                              </label>
                           </div>
                           <div class="custom-control">
                              <input type="radio" id="sometimesSi8ck" name="h_sick" value="Sometimes" <?php if ($row['h_often_get_sick'] === "Sometimes") echo "checked" ?> class="custom-control-input" />
                              <label class="custom-control-label" for="sometimesSi8ck">
                                 Sometimes
                              </label>
                           </div>
                           <div class="custom-control">
                              <input type="radio" id="neverSick" name="h_sick" value="Never" <?php if ($row['h_often_get_sick'] === "Never") echo "checked" ?> class="custom-control-input" />
                              <label class="custom-control-label" for="neverSick">
                                 Never
                              </label>
                           </div>
                        </div>
                     </div>
                     <label class="text-gray-900">
                        Usual health problems (you can check more than one)
                     </label>
                     <div class="d-sm-flex flex-column pr-2 pl-2 mb-4">
                        <div class="custom-checkbox">
                           <div class="custom-control">
                              <input type="checkbox" id="cDysmenorrhea" name="health_data_health_problems[]" <?php foreach ($h_health_problems as $value) {
                                                                                                                  if ($value === "Dysmenorrhea") {
                                                                                                                     echo "checked";
                                                                                                                  }
                                                                                                               } ?> value="Dysmenorrhea" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="cDysmenorrhea">
                                 Dysmenorrhea
                              </label>
                           </div>
                           <div class="custom-control">
                              <input type="checkbox" id="cHeadache" name="health_data_health_problems[]" <?php foreach ($h_health_problems as $value) {
                                                                                                            if ($value === "Headache") {
                                                                                                               echo "checked";
                                                                                                            }
                                                                                                         } ?> value="Headache" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="cHeadache">
                                 Headache
                              </label>
                           </div>
                           <div class="custom-control">
                              <input type="checkbox" id="cAsthma_one" name="health_data_health_problems[]" <?php foreach ($h_health_problems as $value) {
                                                                                                               if ($value === "Asthma") {
                                                                                                                  echo "checked";
                                                                                                               }
                                                                                                            } ?> value="Asthma" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="cAsthma_one">
                                 Asthma
                              </label>
                           </div>
                        </div>
                        <div class="custom-checkbox">
                           <div class="custom-control">
                              <input type="checkbox" id="cHeartproblems" name="health_data_health_problems[]" <?php foreach ($h_health_problems as $value) {
                                                                                                                  if ($value === "Heart problems") {
                                                                                                                     echo "checked";
                                                                                                                  }
                                                                                                               } ?> value="Heart problems" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="cHeartproblems">
                                 Heart problems
                              </label>
                           </div>
                           <div class="custom-control">
                              <input type="checkbox" id="cStomachache" name="health_data_health_problems[]" <?php foreach ($h_health_problems as $value) {
                                                                                                               if ($value === "Stomachache") {
                                                                                                                  echo "checked";
                                                                                                               }
                                                                                                            } ?> value="Stomachache" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="cStomachache">
                                 Stomachache
                              </label>
                           </div>
                           <div class="custom-control">
                              <input type="checkbox" id="cColdsFlu" name="health_data_health_problems[]" <?php foreach ($h_health_problems as $value) {
                                                                                                            if ($value === "Colds/Flu") {
                                                                                                               echo "checked";
                                                                                                            }
                                                                                                         } ?> value="Colds/Flu" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="cColdsFlu">
                                 Colds/Flu
                              </label>
                           </div>
                        </div>
                        <div class="custom-checkbox">
                           <div class="custom-control">
                              <input type="checkbox" id="cAbdominalpain" name="health_data_health_problems[]" <?php foreach ($h_health_problems as $value) {
                                                                                                                  if ($value === "Abdominal pain") {
                                                                                                                     echo "checked";
                                                                                                                  }
                                                                                                               } ?> value="Abdominal pain" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="cAbdominalpain">
                                 Abdominal pain
                              </label>
                           </div>
                           <div class="custom-control">
                              <input type="checkbox" id="cSeizure" name="health_data_health_problems[]" <?php foreach ($h_health_problems as $value) {
                                                                                                            if ($value === "Seizure disorders") {
                                                                                                               echo "checked";
                                                                                                            }
                                                                                                         } ?> value="Seizure disorders" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="cSeizure">
                                 Seizure disorders
                              </label>
                           </div>
                           <div class="custom-control">
                              <input type="checkbox" id="cEyeProblems" name="health_data_health_problems[]" <?php foreach ($h_health_problems as $value) {
                                                                                                               if ($value === "Eye problems") {
                                                                                                                  echo "checked";
                                                                                                               }
                                                                                                            } ?> value="Eye problems" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="cEyeProblems">
                                 Eye problems
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="form-group col-md-6 col-xl-6">
                        <label for="txtOthersPleaseSpecify" class="text-capitalize m-0"> Others (please specify) </label>
                        <input type="text" id="txtOthersPleaseSpecify" name="health_data_others_please_specify" value="<?php echo $row['h_Others'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                     </div>
                  </div>
               </div>
               <!-- End row -->

               <!-- IP and PWD checklist Data -->
               <div class="tab-pane fade show animate__animated animate__fadeIn" id="IPandPWDchecklist">
                  <div class="card-header">
                     <div class="sidebar-brand d-flex align-items-center flex-column flex-md-row text-center text-md-left">
                        <div class="mb-3 mb-md-0">
                           <i class="fas fa-wheelchair fa-4x text-primary"></i>
                        </div>
                        <div class="mx-md-2">
                           <h4 class="my-1 text-gray-900 text-center font-weight-bold text-uppercase">
                              ip and pwd checklist
                           </h4>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="custom-checkbox mb-3">
                        <label class="form-check-label text-gray-900 pr-2"> Do you belong in any Indigenous Group? </label>
                        <div class="custom-control custom-checkbox">
                           <input type="radio" id="YesIndigenous" name="pwd_checklist_indigenous" value="Yes" <?php if ($row['ip_indigenous_group'] === "Yes") echo "checked"; ?> class="custom-control-input" checked />
                           <label class="custom-control-label text-gray-900 pr-2" for="YesIndigenous"> Yes </label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="radio" id="NoIndigenous" name="pwd_checklist_indigenous" value="No" <?php if ($row['ip_indigenous_group'] === "No") echo "checked"; ?> class="custom-control-input" />
                           <label class="custom-control-label text-gray-900" for="NoIndigenous"> No </label>
                        </div>
                     </div>
                     <label class="text-gray-900" for="Agta"> If yes, Please Check: </label>
                     <div class="d-sm-flex flex-column custom-checkbox mb-3">
                        <div class="flex-column">
                           <div class="custom-control custom-checkbox d-sm-flex justify-content-between">
                              <input type="checkbox" id="Agta" name="pwd_checklist_if_yes[]" value="Agta" <?php foreach ($ip_If_yes as $row_y) {
                                                                                                               if ($row_y === "Agta") echo "checked";
                                                                                                            } ?> class="custom-control-input pwd-disabled-indigenous" />
                              <label class="custom-control-label text-gray-900" for="Agta"> Agta </label>
                           </div>
                           <div class="custom-control custom-checkbox d-sm-flex justify-content-between">
                              <input type="checkbox" id="Malaueg" name="pwd_checklist_if_yes[]" value="Malaueg" <?php foreach ($ip_If_yes as $row_y) {
                                                                                                                     if ($row_y === "Malaueg") echo "checked";
                                                                                                                  } ?> class="custom-control-input pwd-disabled-indigenous" />
                              <label class="custom-control-label text-gray-900" for="Malaueg"> Malaueg </label>
                           </div>
                           <div class="custom-control custom-checkbox d-sm-flex justify-content-between">
                              <input type="checkbox" id="Ibanag" name="pwd_checklist_if_yes[]" value="Ibanag" <?php foreach ($ip_If_yes as $row_y) {
                                                                                                                  if ($row_y === "Ibanag") echo "checked";
                                                                                                               } ?> class="custom-control-input pwd-disabled-indigenous" />
                              <label class="custom-control-label text-gray-900" for="Ibanag"> Ibanag </label>
                           </div>
                           <div class="custom-control custom-checkbox d-sm-flex justify-content-between">
                              <input type="checkbox" id="Yapayao" name="pwd_checklist_if_yes[]" value="Yapayao" <?php foreach ($ip_If_yes as $row_y) {
                                                                                                                     if ($row_y === "Yapayao") echo "checked";
                                                                                                                  } ?> class="custom-control-input pwd-disabled-indigenous" />
                              <label class="custom-control-label text-gray-900" for="Yapayao"> Yapayao </label>
                           </div>
                           <div class="custom-control custom-checkbox d-sm-flex justify-content-between">
                              <input type="checkbox" id="Ibatan" name="pwd_checklist_if_yes[]" value="Ibatan" <?php foreach ($ip_If_yes as $row_y) {
                                                                                                                  if ($row_y === "Ibatan") echo "checked";
                                                                                                               } ?> class="custom-control-input pwd-disabled-indigenous" />
                              <label class="custom-control-label text-gray-900" for="Ibatan"> Ibatan </label>
                           </div>
                           <div class="custom-control custom-checkbox d-sm-flex justify-content-between">
                              <input type="checkbox" id="Itawes" name="pwd_checklist_if_yes[]" value="Itawes" <?php foreach ($ip_If_yes as $row_y) {
                                                                                                                  if ($row_y === "Itawes") echo "checked";
                                                                                                               } ?> class="custom-control-input pwd-disabled-indigenous" />
                              <label class="custom-control-label text-gray-900" for="Itawes"> Itawes </label>
                           </div>
                        </div>
                        <div class="col-sm-6 pl-0">
                           <label for="txtPwdChecklistPleaseSpecify" class="text-capitalize m-0">
                              Others (please specify) <span class="text-danger" id="pwdChecklistPleaseSpecifyReq"></span>
                           </label>
                           <input type="text" id="txtPwdChecklistPleaseSpecify" name="pwd_checklist_others_please_specify" value="<?php echo $row['ip_others_one']; ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span class="text-danger" id="errPwdChecklistPleaseSpecify"></span>
                        </div>
                     </div>
                     <hr>
                     <div class="d-flex justify-content-center">
                        <label class="text-gray-900 text-center"> NOTE: Submit any proof/document that you belong in an Indigenous Group. </label>
                     </div>
                     <hr>
                     <div class="mb-3">
                        <div class="d-sm-flex justify-content-start mb-3 custom-checkbox">
                           <label class="form-check-label text-gray-900"> Are you suffering or experiencing any illness/es or disabilities?&nbsp; </label>
                           <div class="custom-control custom-checkbox pr-2">
                              <input type="radio" name="pwd_checklist_disabilities" id="rDisabilitiesYes" <?php if ($row['ip_suffer_experience'] === "Yes") echo "checked"; ?> value="Yes" class="custom-control-input" checked />
                              <label class="custom-control-label text-gray-900" for="rDisabilitiesYes"> Yes </label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="radio" name="pwd_checklist_disabilities" id="rDisabilitiesNo" <?php if ($row['ip_suffer_experience'] === "No") echo "checked"; ?> value="No" class="custom-control-input" />
                              <label class="custom-control-label text-gray-900" for="rDisabilitiesNo"> No </label>
                           </div>
                        </div>
                        <label class="text-gray-900"> If yes, Please Check: </label>
                     </div>
                     <div class="d-sm-flex justify-content-between text-gray-900">
                        <div class="form-group">
                           <div class="custom-checkbox">
                              <label class="font-weight-bold text-uppercase"> chronic illness </label>
                              <div class="custom-control">
                                 <input type="checkbox" id="cAlzheimerDisease" name="pwd_checklist_chronic_illness[]" <?php foreach ($ip_chronic_illness as $crow) {
                                                                                                                           if ($crow === "Alzheimer's Disease") echo "checked";
                                                                                                                        } ?> value="Alzheimer's Disease" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cAlzheimerDisease"> Alzheimer's Disease </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cArthritis" name="pwd_checklist_chronic_illness[]" <?php foreach ($ip_chronic_illness as $crow) {
                                                                                                                  if ($crow === "Arthritis") echo "checked";
                                                                                                               } ?> value="Arthritis" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cArthritis"> Arthritis </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cAsthma_two" name="pwd_checklist_chronic_illness[]" <?php foreach ($ip_chronic_illness as $crow) {
                                                                                                                     if ($crow === "Asthma") echo "checked";
                                                                                                                  } ?> value="Asthma" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cAsthma_two"> Asthma </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cCancer" name="pwd_checklist_chronic_illness[]" <?php foreach ($ip_chronic_illness as $crow) {
                                                                                                               if ($crow === "Cancer") echo "checked";
                                                                                                            } ?> value="Cancer" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cCancer"> Cancer </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cCrohnDisease" name="pwd_checklist_chronic_illness[]" <?php foreach ($ip_chronic_illness as $crow) {
                                                                                                                     if ($crow === "Crohn Disease") echo "checked";
                                                                                                                  } ?> value="Crohn Disease" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cCrohnDisease"> Crohn Disease </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cCysticFibrosis" name="pwd_checklist_chronic_illness[]" <?php foreach ($ip_chronic_illness as $crow) {
                                                                                                                        if ($crow === "Cystic Fibrosis") echo "checked";
                                                                                                                     } ?> value="Cystic Fibrosis" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cCysticFibrosis"> Cystic Fibrosis </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cDiabetes" name="pwd_checklist_chronic_illness[]" <?php foreach ($ip_chronic_illness as $crow) {
                                                                                                                  if ($crow === "Diabetes") echo "checked";
                                                                                                               } ?> value="Diabetes" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cDiabetes"> Diabetes </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cEpilepsy" name="pwd_checklist_chronic_illness[]" <?php foreach ($ip_chronic_illness as $crow) {
                                                                                                                  if ($crow === "Epilepsy") echo "checked";
                                                                                                               } ?> value="Epilepsy" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cEpilepsy"> Epilepsy </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cHeartDisease" name="pwd_checklist_chronic_illness[]" <?php foreach ($ip_chronic_illness as $crow) {
                                                                                                                     if ($crow === "Heart Disease") echo "checked";
                                                                                                                  } ?> value="Heart Disease" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cHeartDisease"> Heart Disease </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cMitipleSclerosis" name="pwd_checklist_chronic_illness[]" <?php foreach ($ip_chronic_illness as $crow) {
                                                                                                                           if ($crow === "Mitiple Sclerosis") echo "checked";
                                                                                                                        } ?> value="Mitiple Sclerosis" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cMitipleSclerosis"> Mitiple Sclerosis </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cParkinsonsDisease" name="pwd_checklist_chronic_illness[]" <?php foreach ($ip_chronic_illness as $crow) {
                                                                                                                           if ($crow === "Parkinsons Disease") echo "checked";
                                                                                                                        } ?> value="Parkinsons Disease" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cParkinsonsDisease"> Parkinson's Disease </label>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="custom-checkbox">
                              <label for="Auditory" class="font-weight-bold text-uppercase">
                                 learning disability
                              </label>
                              <div class="custom-control">
                                 <input type="checkbox" id="cAuditoryProcessingDisorder" name="pwd_checklist_learning_disability[]" <?php foreach ($ip_learning_disability as $lrow) {
                                                                                                                                       if ($lrow === "Auditory Processing Disorder") echo "checked";
                                                                                                                                    } ?> value="Auditory Processing Disorder" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cAuditoryProcessingDisorder"> Auditory Processing Disorder </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cDyscalcuilia" name="pwd_checklist_learning_disability[]" <?php foreach ($ip_learning_disability as $lrow) {
                                                                                                                           if ($lrow === "Dyscalcuilia") echo "checked";
                                                                                                                        } ?> value="Dyscalcuilia" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cDyscalcuilia"> Dyscalcuilia </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cDysgraphia" name="pwd_checklist_learning_disability[]" <?php foreach ($ip_learning_disability as $lrow) {
                                                                                                                        if ($lrow === "Dysgraphia") echo "checked";
                                                                                                                     } ?> value="Dysgraphia" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cDysgraphia"> Dysgraphia </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cDyslexia" name="pwd_checklist_learning_disability[]" <?php foreach ($ip_learning_disability as $lrow) {
                                                                                                                     if ($lrow === "Dyslexia") echo "checked";
                                                                                                                  } ?> value="Dyslexia" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cDyslexia"> Dyslexia </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cLanguageProcessing" name="pwd_checklist_learning_disability[]" <?php foreach ($ip_learning_disability as $lrow) {
                                                                                                                                 if ($lrow === "Language Processing") echo "checked";
                                                                                                                              } ?> value="Language Processing" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cLanguageProcessing"> Language Processing </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cNoneVerballearningdisabilities_" name="pwd_checklist_learning_disability[]" <?php foreach ($ip_learning_disability as $lrow) {
                                                                                                                                             if ($lrow === "None-Verbal learning disabilities") echo "checked";
                                                                                                                                          } ?> value="None-Verbal learning disabilities" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cNoneVerballearningdisabilities_"> None-Verbal learning disabilities </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cVisualPerceptualMotorDeficit" name="pwd_checklist_learning_disability[]" <?php foreach ($ip_learning_disability as $lrow) {
                                                                                                                                          if ($lrow === "Visual Perceptual/Visual Motor Deficit") echo "checked";
                                                                                                                                       } ?> value="Visual Perceptual/Visual Motor Deficit" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cVisualPerceptualMotorDeficit"> Visual Perceptual/Visual Motor Deficit </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cAttentionHyperactivityDisorder" name="pwd_checklist_learning_disability[]" <?php foreach ($ip_learning_disability as $lrow) {
                                                                                                                                             if ($lrow === "Attention Deficit Hyperactivity Deficit Disorder") echo "checked";
                                                                                                                                          } ?> value="Attention Deficit Hyperactivity Deficit Disorder" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cAttentionHyperactivityDisorder"> Attention Deficit Hyperactivity Deficit Disorder </label>
                              </div>
                              <div class="custom-control">
                                 <input type="checkbox" id="cDyspraxia" name="pwd_checklist_learning_disability[]" <?php foreach ($ip_learning_disability as $lrow) {
                                                                                                                        if ($lrow === "Dyspraxia") echo "checked";
                                                                                                                     } ?> value="Dyspraxia" class="custom-control-input pwd-checklist-disabilities" />
                                 <label class="custom-control-label" for="cDyspraxia"> Dyspraxia </label>
                              </div>
                           </div>
                        </div>
                        <div class="d-sm-flex flex-column">
                           <div class="form-group">
                              <div class="custom-checkbox">
                                 <label for="" class="font-weight-bold text-uppercase"> visual disability </label>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cChataracts" name="pwd_checklist_visual_disability[]" <?php foreach ($ip_visual_disability as $vdrow) {
                                                                                                                        if ($vdrow === "Chataracts") echo "checked";
                                                                                                                     } ?> value="Chataracts" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cChataracts"> Chataracts </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cDiabetesVisual" name="pwd_checklist_visual_disability[]" <?php foreach ($ip_visual_disability as $vdrow) {
                                                                                                                              if ($vdrow === "Diabetes") echo "checked";
                                                                                                                           } ?> value="Diabetes" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cDiabetesVisual"> Diabetes </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cGlaumoca" name="pwd_checklist_visual_disability[]" <?php foreach ($ip_visual_disability as $vdrow) {
                                                                                                                        if ($vdrow === "Glaumoca") echo "checked";
                                                                                                                     } ?> value="Glaumoca" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cGlaumoca"> Glaumoca </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cMacularDegeneration" name="pwd_checklist_visual_disability[]" <?php foreach ($ip_visual_disability as $vdrow) {
                                                                                                                                 if ($vdrow === "Macular Degeneration") echo "checked";
                                                                                                                              } ?> value="Macular Degeneration" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cMacularDegeneration"> Macular Degeneration </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cRetenalDetachment" name="pwd_checklist_visual_disability[]" <?php foreach ($ip_visual_disability as $vdrow) {
                                                                                                                                 if ($vdrow === "Retenal Detachment") echo "checked";
                                                                                                                              } ?> value="Retenal Detachment" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cRetenalDetachment"> Retenal Detachment </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cRetinitisPigmentosa" name="pwd_checklist_visual_disability[]" <?php foreach ($ip_visual_disability as $vdrow) {
                                                                                                                                 if ($vdrow === "Retinitis Pigmentosa") echo "checked";
                                                                                                                              } ?> value="Retinitis Pigmentosa" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cRetinitisPigmentosa">
                                       Retinitis Pigmentosa
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="custom-checkbox">
                                 <label for="" class="font-weight-bold text-uppercase"> hearing disability </label>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cConductive" name="pwd_checklist_hearing_disability[]" <?php foreach ($ip_hearing_disability as $hdrow) {
                                                                                                                           if ($hdrow === "Conductive Hearing Loss") echo "checked";
                                                                                                                        } ?> value="Conductive Hearing Loss" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cConductive"> Conductive Hearing Loss </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="Sensorineuaral" name="pwd_checklist_hearing_disability[]" <?php foreach ($ip_hearing_disability as $hdrow) {
                                                                                                                              if ($hdrow === "Sensorineuaral Hearing Loss") echo "checked";
                                                                                                                           } ?> value="Sensorineuaral Hearing Loss" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="Sensorineuaral"> Sensorineuaral Hearing Loss </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cMixed" name="pwd_checklist_hearing_disability[]" <?php foreach ($ip_hearing_disability as $hdrow) {
                                                                                                                     if ($hdrow === "Mixed Hearing Loss") echo "checked";
                                                                                                                  } ?> value="Mixed Hearing Loss" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cMixed"> Mixed Hearing Loss </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="d-sm-flex flex-column">
                           <div class="form-group">
                              <div class="custom-checkbox">
                                 <label for="" class="font-weight-bold text-uppercase"> Mental psychosocial disability </label>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cSchizophrenia" name="pwd_checklist_mental_psychosocial_disability[]" <?php foreach ($ip_mental_psychosocial as $mdrow) {
                                                                                                                                          if ($mdrow === "Schizophrenia") echo "checked";
                                                                                                                                       } ?> value="Schizophrenia" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cSchizophrenia"> Schizophrenia </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cMood" name="pwd_checklist_mental_psychosocial_disability[]" <?php foreach ($ip_mental_psychosocial as $mdrow) {
                                                                                                                                 if ($mdrow === "Mood Disorder") echo "checked";
                                                                                                                              } ?> value="Mood Disorder" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cMood"> Mood Disorder </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cAnxiety" name="pwd_checklist_mental_psychosocial_disability[]" <?php foreach ($ip_mental_psychosocial as $mdrow) {
                                                                                                                                    if ($mdrow === "Anxiety Disorder") echo "checked";
                                                                                                                                 } ?> value="Anxiety Disorder" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cAnxiety"> Anxiety Disorder </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cEating" name="pwd_checklist_mental_psychosocial_disability[]" <?php foreach ($ip_mental_psychosocial as $mdrow) {
                                                                                                                                 if ($mdrow === "Eating Disorder") echo "checked";
                                                                                                                              } ?> value="Eating Disorder" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cEating"> Eating Disorder </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cPersonality" name="pwd_checklist_mental_psychosocial_disability[]" <?php foreach ($ip_mental_psychosocial as $mdrow) {
                                                                                                                                       if ($mdrow === "Personality Disorder") echo "checked";
                                                                                                                                    } ?> value="Personality Disorder" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cPersonality"> Personality Disorder </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cOrganicBrain" name="pwd_checklist_mental_psychosocial_disability[]" <?php foreach ($ip_mental_psychosocial as $mdrow) {
                                                                                                                                       if ($mdrow === "Organic Brain Disorder") echo "checked";
                                                                                                                                    } ?> value="Organic Brain Disorder" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cOrganicBrain"> Organic Brain Disorder </label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="custom-checkbox">
                                 <label class="font-weight-bold text-uppercase"> intellectual disability </label>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cDownSyndrome" name="pwd_checklist_intellectual_disability[]" <?php foreach ($ip_intellectual_disability as $idrow) {
                                                                                                                                 if ($idrow === "Down Syndrome") echo "checked";
                                                                                                                              } ?> value="Down Syndrome" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cDownSyndrome"> Down Syndrome </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cDevelopmentDelay" name="pwd_checklist_intellectual_disability[]" <?php foreach ($ip_intellectual_disability as $idrow) {
                                                                                                                                    if ($idrow === "Development Delay") echo "checked";
                                                                                                                                 } ?> value="Development Delay" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cDevelopmentDelay"> Development Delay </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cPraderWilli" name="pwd_checklist_intellectual_disability[]" <?php foreach ($ip_intellectual_disability as $idrow) {
                                                                                                                                 if ($idrow === "Prader-willi Syndrome") echo "checked";
                                                                                                                              } ?> value="Prader-willi Syndrome" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cPraderWilli"> Prader-willi Syndrome </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cFetalAlchohol" name="pwd_checklist_intellectual_disability[]" <?php foreach ($ip_intellectual_disability as $idrow) {
                                                                                                                                 if ($idrow === "Fetal Alchohol Spectrum") echo "checked";
                                                                                                                              } ?> value="Fetal Alchohol Spectrum" class="custom-control-input pwd-checklist-disabilities" />
                                    <label class="custom-control-label" for="cFetalAlchohol"> Fetal Alchohol Spectrum </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6 col-xl-6">
                           <label for="txtIpPWDOthersPlease" class="text-capitalize m-0">
                              Others (please specify) <span id="pwdChecklistOthersReq" class="text-danger"></span>
                           </label>
                           <input type="text" id="txtIpPWDOthersPlease" name="pwd_checklist_other_specify" value="<?php echo $row['ip_others_two'] ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                           <span id="errPwdChecklistOthers" class="text-danger"></span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End row -->

               <!-- Initial Interview -->
               <div class="tab-pane fade show animate__animated animate__fadeIn" id="initialinterview">
                  <div class="card-header">
                     <div class="sidebar-brand d-flex align-items-center flex-column flex-md-row text-center text-md-left">
                        <div class="mb-3 mb-md-0">
                           <i class="fas fa-inbox fa-4x text-info"></i>
                        </div>
                        <div class="mx-md-2">
                           <h4 class="my-1 text-gray-900 text-center font-weight-bold text-uppercase">
                              initial interview
                           </h4>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <label class="h6 text-uppercase text-gray-900 font-weight-bold mb-3">
                        name:
                     </label>
                     <div class="row mb-4">
                        <div class="form-group col-md-6 col-xl-3">
                           <label class="text-capitalize m-0">Surname</label>
                           <input type="text" value="<?php echo $row['p_surname']; ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" readonly role="button" />
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label class="text-capitalize m-0">First Name</label>
                           <input type="text" value="<?php echo $row['p_firstname']; ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" readonly role="button" />
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label class="text-uppercase m-0">mi</label>
                           <input type="text" value="<?php echo $row['p_middlename']; ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" readonly role="button" />
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                           <label class="text-capitalize m-0">Nickname</label>
                           <input type="text" value="<?php echo $row['p_nickname']; ?>" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none bg-white" readonly role="button" />
                        </div>
                     </div>
                     <div>
                        <h1 class="h6 text-gray-900 font-weight-bold text-capitalize mb-4">
                           <i>dear freshman</i>
                        </h1>
                        <div class="d-flex mb-3">
                           <h1 class="h6 text-gray-900" style="text-indent:25px;">
                              <i>As we start the school year, the Guidance and Counseling Center warmly welcomes you
                                 to Cagayan State University, Lasam Campus!
                              </i>
                           </h1>
                        </div>
                        <h1 class="h6 text-gray-900 mb-3" style="text-indent: 25px;">
                           <i>
                              We know that you are excited to attend your classes, meet your professors, classmates and new friends.
                              With this initial Interview Form, the Guidance Center would like to know your feelings and thoughts
                              on your first month of stay at the University. This is also to determine how the Guindance Center will
                              be of help to you as you cope with all the demands of college life.
                           </i>
                        </h1>
                        <h1 class="h6  text-gray-900 mb-5">
                           <i>
                              Please answer the following question/ statements honestly by putting a
                              check(<i class="fa text-lg text-primary"> &#x2714; </i>)
                              mark on the boxes.
                           </i>
                        </h1>
                        <div class="d-flex justify-content-center">
                           <h1 class="h4 text-gray-900 mb-4">
                              <i>
                                 Welcome once again and have a meaningful stay at Cagayan State University
                              </i>
                           </h1>
                        </div>
                     </div>
                     <ol class="text-gray-900 p-3">
                        <li>
                           <h1 for="Happy" class="h6 text-gray-900">
                              How do you feel right now?
                           </h1>
                           <div class="d-sm-flex justify-content-between custom-checkbox">
                              <div class="flex-column">
                                 <div class="custom-control">
                                    <input type="checkbox" id="cHappay" name="interview_feel_right_now[]" value="Happy" <?php foreach ($in_how_you_feel as $hfrow) {
                                                                                                                           if ($hfrow === "Happy") echo "checked";
                                                                                                                        } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cHappay"> Happy </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cSad" name="interview_feel_right_now[]" value="Sad" <?php foreach ($in_how_you_feel as $hfrow) {
                                                                                                                        if ($hfrow === "Sad") echo "checked";
                                                                                                                     } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cSad"> Sad </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cExcited" name="interview_feel_right_now[]" value="Excited" <?php foreach ($in_how_you_feel as $hfrow) {
                                                                                                                              if ($hfrow === "Excited") echo "checked";
                                                                                                                           } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cExcited"> Excited </label>
                                 </div>
                              </div>
                              <div class="flex-column">
                                 <div class="custom-control">
                                    <input type="checkbox" id="cFine" name="interview_feel_right_now[]" value="Fine" <?php foreach ($in_how_you_feel as $hfrow) {
                                                                                                                        if ($hfrow === "Fine") echo "checked";
                                                                                                                     } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cFine"> Fine </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cStressed" name="interview_feel_right_now[]" value="Stressed" <?php foreach ($in_how_you_feel as $hfrow) {
                                                                                                                                 if ($hfrow === "Stressed") echo "checked";
                                                                                                                              } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cStressed"> Stressed </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cNervous" name="interview_feel_right_now[]" value="Nervous" <?php foreach ($in_how_you_feel as $hfrow) {
                                                                                                                              if ($hfrow === "Nervous") echo "checked";
                                                                                                                           } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cNervous"> Nervous </label>
                                 </div>
                              </div>
                              <div class="flex-column">
                                 <div class="custom-control">
                                    <input type="checkbox" id="cTired" name="interview_feel_right_now[]" value="Tired" <?php foreach ($in_how_you_feel as $hfrow) {
                                                                                                                           if ($hfrow === "Tired") echo "checked";
                                                                                                                        } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cTired"> Tired </label>
                                 </div>
                                 <div>
                                    <span> Others (pls. Specify) <span id="InterviewOthersOneReq" class="text-danger"></span> </span>
                                    <input type="text" value="<?php echo $row['in_others_one']; ?>" id="txtInterviewOthersOne" name="txtInterviewOthersOne" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                                    <span id="errInterviewOthersOne" class="text-danger"></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <h1 for="Quality" class="h6 text-gray-900">
                              Why did you choose to enroll at CSU?
                           </h1>
                           <div class="d-sm-flex justify-content-between custom-checkbox mb-3">
                              <div class="flex-column pr-4">
                                 <div class="custom-control">
                                    <input type="checkbox" id="cQualityEducation" name="interview_why_choose_enroll_csu[]" value="Quality education" <?php foreach ($in_why_choose_csu as $cerow) {
                                                                                                                                                         if ($cerow === "Quality education") echo "checked";
                                                                                                                                                      } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cQualityEducation"> Quality education </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cFreeTuition" name="interview_why_choose_enroll_csu[]" value="Free tuition/miscellanrous fee" <?php foreach ($in_why_choose_csu as $cerow) {
                                                                                                                                                                  if ($cerow === "Free tuition/miscellanrous fee") echo "checked";
                                                                                                                                                               } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cFreeTuition"> Free tuition/miscellanous fee </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cBrothresAndSister" name="interview_why_choose_enroll_csu[]" value="Brothres and sister are studying here" <?php foreach ($in_why_choose_csu as $cerow) {
                                                                                                                                                                              if ($cerow === "Brothres and sister are studying here") echo "checked";
                                                                                                                                                                           } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cBrothresAndSister"> Brothres and sister are studying here </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cPersonalChoiceOne" name="interview_why_choose_enroll_csu[]" value="Personal Choice" <?php foreach ($in_why_choose_csu as $cerow) {
                                                                                                                                                         if ($cerow === "Personal Choice") echo "checked";
                                                                                                                                                      } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cPersonalChoiceOne"> Personal Choice </label>
                                 </div>
                              </div>
                              <div class="flex-column">
                                 <div class="custom-control">
                                    <input type="checkbox" id="cSchoolNearResident" name="interview_why_choose_enroll_csu[]" value="The school is near in our resident" <?php foreach ($in_why_choose_csu as $cerow) {
                                                                                                                                                                           if ($cerow === "The school is near in our resident") echo "checked";
                                                                                                                                                                        } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cSchoolNearResident"> The school is near in our resident </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cParentsChoice" name="interview_why_choose_enroll_csu[]" value="Parent's choice" <?php foreach ($in_why_choose_csu as $cerow) {
                                                                                                                                                   if ($cerow === "Parent's choice") echo "checked";
                                                                                                                                                } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cParentsChoice"> Parent's choice </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cInterviewInfluenceFriends" name="interview_why_choose_enroll_csu[]" value="Influence of friends" <?php foreach ($in_why_choose_csu as $cerow) {
                                                                                                                                                                     if ($cerow === "Influence of friends") echo "checked";
                                                                                                                                                                  } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cInterviewInfluenceFriends"> Influence of friends </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cCourseWantOffered" name="interview_why_choose_enroll_csu[]" value="The course that I want is offered here only" <?php foreach ($in_why_choose_csu as $cerow) {
                                                                                                                                                                                    if ($cerow === "The course that I want is offered here only") echo "checked";
                                                                                                                                                                                 } ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cCourseWantOffered"> The course that I want is offered here only </label>
                                 </div>
                              </div>
                              <div>
                                 <span> Others (pls. Specify) <span id="interviewOthersTwoReq" class="text-danger"></span></span>
                                 <input type="text" value="<?php echo $row['in_others_two']; ?>" id="txtInterviewOthersTwo" name="txtInterviewOthersTwo" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                                 <span id="errInterviewOthersTwo" class="text-danger"></span>
                              </div>
                           </div>
                        </li>
                        <li>
                           <h1 class="h6 text-gray-900">
                              What course will you enroll?
                           </h1>
                           <div class="custom-checkbox">
                              <div class="mb-2">
                                 <div class="custom-control">
                                    <input type="radio" id="cCICS" name="interview_college_course_will_enroll" value="College of Information and computing sciences" <?php if ($row['in_course_enroll'] === "College of Information and computing sciences") echo "checked"; ?> class="custom-control-input" checked />
                                    <label class="custom-control-label text-gray-900" for="cCICS"> College of Information and computing sciences </label>
                                 </div>
                              </div>
                              <div class="mb-2">
                                 <div class="custom-control">
                                    <input type="radio" id="cCIT" name="interview_college_course_will_enroll" value="College of Industrial Technology" <?php if ($row['in_course_enroll'] === "College of Industrial Technology") echo "checked"; ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cCIT"> College of Industrial Technology </label>
                                 </div>
                              </div>
                              <div class="mb-2">
                                 <div class="custom-control">
                                    <input type="radio" id="cCTED" name="interview_college_course_will_enroll" value="Collge of Teacher Education" <?php if ($row['in_course_enroll'] === "Collge of Teacher Education") echo "checked"; ?> class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cCTED"> Collge of Teacher Education </label>
                                 </div>
                              </div>
                              <div class="col-sm-5 p-0 mb-3">
                                 <label class="text-gray-900 p-0 m-0" for="txtMajorOne"> Major <span class="text-danger" id="majorOneReq"></span> </label>
                                 <input type="text" value="<?php echo $row['in_major']; ?>" id="txtMajorOne" name="txtMajorOne" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                                 <span class="text-danger" id="errMajorOne"></span>
                              </div>
                              <div class="custom-control">
                                 <input type="radio" id="cCertificateDiploma" name="interview_college_course_will_enroll" value="Certificate/Diploma" <?php if ($row['in_course_enroll'] === "Certificate/Diploma") echo "checked"; ?> class="custom-control-input" />
                                 <label class="custom-control-label text-gray-900" for="cCertificateDiploma"> Certificate/Diploma </label>
                              </div>
                              <div class="col-sm-5 p-0 mb-3">
                                 <label class="text-gray-900 p-0 m-0" for="txtSpecialization"> Specialization <span class="text-danger" id="specializationReq"></span> </label>
                                 <input type="text" value="<?php echo $row['in_specialization']; ?>" id="txtSpecialization" name="txtSpecialization" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                                 <span class="text-danger" id="errSpecialization"></span>
                              </div>
                           </div>
                        </li>
                        <li>
                           <h1 class="h6 text-gray-900">
                              Why?
                           </h1>
                           <div class="d-sm-flex justify-content-between custom-checkbox">
                              <div class="flex-column">
                                 <div class="custom-control">
                                    <input type="checkbox" id="cParentsChoiceTwo" name="interview_why[]" <?php foreach ($in_why as $wrow) {
                                                                                                            if ($wrow === "Parents's choice") echo "checked";
                                                                                                         } ?> value="Parents's choice" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cParentsChoiceTwo"> Parents's choice </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cPersonalChoice" name="interview_why[]" <?php foreach ($in_why as $wrow) {
                                                                                                            if ($wrow === "Personal choice") echo "checked";
                                                                                                         } ?> value="Personal choice" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cPersonalChoice"> Personal choice </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cPeerInfluence" name="interview_why[]" <?php foreach ($in_why as $wrow) {
                                                                                                         if ($wrow === "Peer influence") echo "checked";
                                                                                                      } ?> value="Peer influence" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cPeerInfluence"> Peer influence </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cHighSalary" name="interview_why[]" <?php foreach ($in_why as $wrow) {
                                                                                                      if ($wrow === "High Salary") echo "checked";
                                                                                                   } ?> value="High Salary" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cHighSalary"> High Salary </label>
                                 </div>
                              </div>
                              <div class="flex-column">
                                 <div class="custom-control">
                                    <input type="checkbox" id="cInDemandAboard" name="interview_why[]" <?php foreach ($in_why as $wrow) {
                                                                                                            if ($wrow === "In demand aboard") echo "checked";
                                                                                                         } ?> value="In demand aboard" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cInDemandAboard"> In demand aboard </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cInlineWithInterest" name="interview_why[]" <?php foreach ($in_why as $wrow) {
                                                                                                               if ($wrow === "In line with interest") echo "checked";
                                                                                                            } ?> value="In line with interest" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cInlineWithInterest"> In line with interest </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cChildhoodDream" name="interview_why[]" <?php foreach ($in_why as $wrow) {
                                                                                                            if ($wrow === "Childhood Dream") echo "checked";
                                                                                                         } ?> value="Childhood Dream" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cChildhoodDream"> Childhood Dream </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cSkillRelated" name="interview_why[]" <?php foreach ($in_why as $wrow) {
                                                                                                         if ($wrow === "Skill related") echo "checked";
                                                                                                      } ?> value="Skill related" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cSkillRelated"> Skill related </label>
                                 </div>
                              </div>
                              <div class="flex-column">
                                 <div class="custom-control">
                                    <input type="checkbox" id="cAppealGranted" name="interview_why[]" <?php foreach ($in_why as $wrow) {
                                                                                                         if ($wrow === "Appeal granted") echo "checked";
                                                                                                      } ?> value="Appeal granted" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cAppealGranted"> Appeal granted </label>
                                 </div>
                                 <div>
                                    <span> Others (pls. Specify) <span class="text-danger" id="interviewFourReq"></span></span>
                                    <input type="text" value="<?php echo $row['in_others_three']; ?>" id="txtInterviewFour" name="txtInterviewFour" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                                    <span class="text-danger" id="errInterviewFour"></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <h1 class="h6 text-gray-900">
                              If you have problems/concerns, to whom do you seek advice or run to?
                           </h1>
                           <div class="d-sm-flex justify-content-between custom-checkbox">
                              <div class="flex-column pr-3">
                                 <div class="custom-control">
                                    <input type="checkbox" id="cParents" name="interview_problems_concerns[]" <?php foreach ($in_problems_concerns as $pcrow) {
                                                                                                                  if ($pcrow === "Parents") echo "checked";
                                                                                                               } ?> value="Parents" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cParents"> Parents </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cProfessors" name="interview_problems_concerns[]" <?php foreach ($in_problems_concerns as $pcrow) {
                                                                                                                     if ($pcrow === "Professors") echo "checked";
                                                                                                                  } ?> value="Professors" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cProfessors"> Professors </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cRelatives" name="interview_problems_concerns[]" <?php foreach ($in_problems_concerns as $pcrow) {
                                                                                                                     if ($pcrow === "Relatives") echo "checked";
                                                                                                                  } ?> value="Relatives" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cRelatives"> Relatives </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cBoyfriendGirlfriend" name="interview_problems_concerns[]" <?php foreach ($in_problems_concerns as $pcrow) {
                                                                                                                              if ($pcrow === "Boyfriend/girlfriend") echo "checked";
                                                                                                                           } ?> value="Boyfriend/girlfriend" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cBoyfriendGirlfriend"> Boyfriend/girlfriend </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cGuidanceCounselor" name="interview_problems_concerns[]" <?php foreach ($in_problems_concerns as $pcrow) {
                                                                                                                           if ($pcrow === "Guidance Counselor") echo "checked";
                                                                                                                        } ?> value="Guidance Counselor" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cGuidanceCounselor"> Guidance Counselor </label>
                                 </div>
                              </div>
                              <div class="d-flex flex-column">
                                 <div class="custom-control">
                                    <input type="checkbox" id="cSiblingsBrotherSisters" name="interview_problems_concerns[]" <?php foreach ($in_problems_concerns as $pcrow) {
                                                                                                                                 if ($pcrow === "Siblings (brother/ sisters)") echo "checked";
                                                                                                                              } ?> value="Siblings (brother/ sisters)" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cSiblingsBrotherSisters"> Siblings (brother/ sisters) </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cCollegeDeans" name="interview_problems_concerns[]" <?php foreach ($in_problems_concerns as $pcrow) {
                                                                                                                        if ($pcrow === "College Deans") echo "checked";
                                                                                                                     } ?> value="College Deans" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cCollegeDeans"> College Deans </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cBoardMates" name="interview_problems_concerns[]" <?php foreach ($in_problems_concerns as $pcrow) {
                                                                                                                     if ($pcrow === "Board mates") echo "checked";
                                                                                                                  } ?> value="Board mates" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cBoardMates"> Board mates </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cFriends" name="interview_problems_concerns[]" <?php foreach ($in_problems_concerns as $pcrow) {
                                                                                                                  if ($pcrow === "Friends") echo "checked";
                                                                                                               } ?> value="Friends" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cFriends"> Friends </label>
                                 </div>
                                 <div class="custom-control">
                                    <input type="checkbox" id="cNoOne" name="interview_problems_concerns[]" <?php foreach ($in_problems_concerns as $pcrow) {
                                                                                                               if ($pcrow === "No one") echo "checked";
                                                                                                            } ?> value="No one" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cNoOne"> No one </label>
                                 </div>
                              </div>
                              <div class="d-flex flex-column">
                                 <span> Others (pls. Specify) <span class="text-danger" id="interviewFiveReq"></span></span>
                                 <input type="text" value="<?php echo $row['in_others_four']; ?>" id="txtInterviewFive" name="txtInterviewFive" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                                 <span class="text-danger" id="errInterviewFive"></span></span>
                              </div>
                           </div>
                        </li>
                        <li>
                           <h1 class="h6 text-gray-900">
                              What are your expectations on the following:
                           </h1>
                           <label for="" class="h6 text-capitalize text-gray-900">
                              <i> a. academics </i>
                           </label>
                           <div class="d-sm-flex justify-content-between pl-3 mb-3">
                              <div class="d-flex flex-column">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="cchallenging" name="interview_academics[]" <?php foreach ($in_academics as $acadrow) {
                                                                                                               if ($acadrow === "Challenging") echo "checked";
                                                                                                            } ?> value="Challenging" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cchallenging"> Challenging </label>
                                 </div>
                              </div>
                              <div class=" d-flex flex-column">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="cEasy" name="interview_academics[]" <?php foreach ($in_academics as $acadrow) {
                                                                                                      if ($acadrow === "Easy") echo "checked";
                                                                                                   } ?> value="Easy" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cEasy"> Easy </label>
                                 </div>
                              </div>
                              <div class=" d-flex flex-column">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="cExciting" name="interview_academics[]" <?php foreach ($in_academics as $acadrow) {
                                                                                                            if ($acadrow === "Exciting") echo "checked";
                                                                                                         } ?> value="Exciting" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cExciting"> Exciting </label>
                                 </div>
                              </div>
                              <div class=" d-flex flex-column">
                                 <div class="d-sm-flex">
                                    Others(pls.Specify) <span class="text-danger" id="interviewOthersFiveReq"></span>
                                    <input type="text" value="<?php echo $row['in_others_five']; ?>" id="txtInterviewOthersFive" name="txtInterviewOthersFive" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                                 </div>
                                 <span class="text-danger" id="errInterviewOthersFive"></span>
                              </div>
                           </div>
                           <label for="Considerate" class="h6 text-capitalize text-gray-900">
                              <i> b. professors </i>
                           </label>
                           <div class="d-sm-flex justify-content-between pl-3 mb-3">
                              <div class="d-flex flex-column">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="cConsiderate" name="interview_professors[]" <?php foreach ($in_professors as $pfadrow) {
                                                                                                               if ($pfadrow === "Considerate") echo "checked";
                                                                                                            } ?> value="Considerate" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cConsiderate"> Considerate </label>
                                 </div>
                              </div>
                              <div class=" d-flex flex-column">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="cTerror" name="interview_professors[]" <?php foreach ($in_professors as $pfadrow) {
                                                                                                         if ($pfadrow === "Terror") echo "checked";
                                                                                                      } ?> value="Terror" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cTerror"> Terror </label>
                                 </div>
                              </div>
                              <div class=" d-flex flex-column">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="cExcellent" name="interview_professors[]" <?php foreach ($in_professors as $pfadrow) {
                                                                                                            if ($pfadrow === "Excellent") echo "checked";
                                                                                                         } ?> value="Excellent" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cExcellent"> Excellent </label>
                                 </div>
                              </div>
                              <div class=" d-flex flex-column">
                                 <div class="d-sm-flex">
                                    Others(pls.Specify) <span class="text-danger" id="interviewOthersSixReq"></span>
                                    <input type="text" value="<?php echo $row['in_others_six']; ?>" id="txtInterviewOthersSix" name="txtInterviewOthersSix" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                                 </div>
                                 <span class="text-danger" id="errInterviewOthersSix"></span>
                              </div>
                           </div>
                           <label for="ServiceOrientation" class="h6 text-capitalize text-gray-900">
                              <i> c. administration </i>
                           </label>
                           <div class="d-sm-flex justify-content-between pl-3 mb-3">
                              <div class="flex-column">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="cServiceOrientation" name="interview_administration[]" <?php foreach ($in_administration as $admrow) {
                                                                                                                           if ($admrow === "Service-orientation") echo "checked";
                                                                                                                        } ?> value="Service-orientation" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cServiceOrientation"> Service-orientation </label>
                                 </div>
                              </div>
                              <div class="flex-column">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="cSupportive" name="interview_administration[]" <?php foreach ($in_administration as $admrow) {
                                                                                                                  if ($admrow === "Supportive") echo "checked";
                                                                                                               } ?> value="Supportive" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cSupportive"> Supportive </label>
                                 </div>
                              </div>
                              <div class="flex-column">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="cApproachable" name="interview_administration[]" <?php foreach ($in_administration as $admrow) {
                                                                                                                     if ($admrow === "Approachable") echo "checked";
                                                                                                                  } ?> value="Approachable" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cApproachable"> Approachable </label>
                                 </div>
                              </div>
                              <div class="flex-column">
                                 <div class="d-sm-flex">
                                    Others(pls.Specify) <span class="text-danger" id="interviewSevenReq"></span>
                                    <input type="text" value="<?php echo $row['in_others_seven']; ?>" id="txtInterviewSeven" name="txtInterviewSeven" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                                 </div>
                                 <span class="text-danger" id="errInterviewSeven"></span>
                              </div>
                           </div>
                        </li>
                        <li>
                           <h1 for="immediately" class="h6 text-gray-900">
                              What are your plans after college?
                           </h1>
                           <div class="d-sm-flex justify-content-start mb-3">
                              <div class="flex-column custom-checkbox">
                                 <div class="custom-control">
                                    <input type="checkbox" id="cWithinPhilippines" value="Find work immediately" <?php foreach ($in_plans_after_college as $pacrow) {
                                                                                                                     if ($pacrow === "Find work immediately") echo "checked";
                                                                                                                  } ?> name="interview_plans_after_college[]" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cWithinPhilippines"> Find work immediately </label>
                                 </div>
                                 <select class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" id="cWithinPhilippines" name="interview_plans_after_college[]">
                                    <option value=""> Choose... </option>
                                    <option value="Within Philippines" <?php foreach ($in_plans_after_college as $pacrow) {
                                                                           if ($pacrow === "Within Philippines") echo "selected";
                                                                        } ?>> Within Philippines </option>
                                    <option value="Abroad" <?php foreach ($in_plans_after_college as $pacrow) {
                                                               if ($pacrow === "Abroad") echo "selected";
                                                            } ?>> Abroad </option>
                                 </select>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="cEnrollGraduateStudies" name="interview_plans_after_college[]" <?php foreach ($in_plans_after_college as $pacrow) {
                                                                                                                                 if ($pacrow === "Enroll in graduate studies") echo "checked";
                                                                                                                              } ?> value="Enroll in graduate studies" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cEnrollGraduateStudies"> Enroll in graduate studies </label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="cReviewExamination" name="interview_plans_after_college[]" <?php foreach ($in_plans_after_college as $pacrow) {
                                                                                                                              if ($pacrow === "Review and take the board examination") echo "checked";
                                                                                                                           } ?> value="Review and take the board examination" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cReviewExamination"> Review and take the board examination </label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="cPutUpBusiness" name="interview_plans_after_college[]" <?php foreach ($in_plans_after_college as $pacrow) {
                                                                                                                           if ($pacrow === "Put up my own business") echo "checked";
                                                                                                                        } ?> value="Put up my own business" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cPutUpBusiness"> Put up my own business </label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="cToGetMarried" name="interview_plans_after_college[]" <?php foreach ($in_plans_after_college as $pacrow) {if ($pacrow === "To get married") echo "checked";} ?> value="To get married" class="custom-control-input" />
                                    <label class="custom-control-label text-gray-900" for="cToGetMarried"> To get married </label>
                                 </div>
                                 <div class="flex-column">
                                    <div class="d-sm-flex">
                                       Others(pls.Specify) <span class="text-danger" id="interviewEightReq"></span>
                                       <input type="text" value="<?php echo $row['in_others_eight']; ?>" id="txtInterviewEight" name="txtInterviewEight" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 shadow-none" />
                                    </div>
                                    <span class="text-danger" id="errInterviewEight"></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ol>
                  </div>
               </div>
               <!-- End row -->
               <div class="card-footer">
                  <div class="d-sm-flex justify-content-between">
                     <div class="row justify-content-center d-none d-lg-inline-block">
                        <ul class="nav nav-pills">
                           <li class="nav-item small">
                              <a class="nav-link active " id="Personal-tab" href="#Personal" data-bs-toggle="pill">
                                 Personal Data
                              </a>
                           </li>
                           <li class="nav-item small">
                              <a class="nav-link " id="Familydata-tab" href="#Familydata" data-bs-toggle="pill">
                                 Family Data
                              </a>
                           </li>
                           <li class="nav-item small">
                              <a class="nav-link " id="Educationaldata-tab" href="#Educationaldata" data-bs-toggle="pill">
                                 Educational Data
                              </a>
                           </li>
                           <li class="nav-item small">
                              <a class="nav-link " id="Healthdata-tab" href="#Healthdata" data-bs-toggle="pill">
                                 Health Data
                              </a>
                           </li>
                           <li class="nav-item small">
                              <a class="nav-link " id="IPandPWDchecklist-tab" href="#IPandPWDchecklist" data-bs-toggle="pill">
                                 IP and PWD checklist
                              </a>
                           </li>
                           <li class="nav-item small">
                              <a class="nav-link " id="initialinterview-tab" href="#initialinterview" data-bs-toggle="pill">
                                 Initialm Interview
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary text-white mr-2 prev-tab btn-circle d-none" title="Preview">
                           <i class="fas fa-undo"></i>
                        </button>
                        <?php if ($_GET['route'] === 'views') { ?>
                           <button type="button" class="btn btn-primary btn-md btn-circle next-tab" name="btn-views">
                              <i class="fas fa-arrow-right"></i>
                           </button>
                        <?php } else { ?>
                           <button type="button" class="btn btn-primary btn-md btn-circle next-tab">
                              <i class="fas fa-arrow-right"></i>
                           </button>
                        <?php } ?>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      <?php } ?>
   </div>
</div>
<?php
   $includeAdminController->footer();
   $includeAdminController->script();
?>
<script src="js/forms-validation.js"></script>
<script>
   function selectedCourse(){
      const crs = document.getElementById('personal-course');
      const selectedcrs = crs.options[crs.selectedIndex].text;
      $.ajax({
         type:'post',
         url: '?route=submit-courses',
         data: {
            "course-btn": 1,
            "seleted-course":selectedcrs
         },
         success: (x)=>{
            document.getElementById('personal-courseid').value = x;
         }
      })
   }

   function selectedMajor()
   {
      const m = document.getElementById('personal-major');
      const selMajor = m.options[m.selectedIndex].text;
      $.ajax({
         type: 'post',
         url: '?route=submit-majors',
         data: {
            'major-btn': 1,
            'selected-major': selMajor
         },
         success: (x) => {
            document.getElementById('personal-majorid').value = x;
         }
      })
   }
</script>