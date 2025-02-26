<?php

include_once('models/studentFormsModel.php');

class studentFormsController
{

   private $studentFormsModel;

   public function __construct()
   {
      $this->studentFormsModel = new studentFormsModel();
   }
   
   public function submit_stud_forms()
   {

      if($_SERVER['REQUEST_METHOD'] === 'POST')
      {
         # update personal data method post

         $personalcourseid     = $_POST['personal-courseid'];
         $personalyearlevel    = $_POST['personal-yearlevel'];
         $personalmajorid      = $_POST['personal-majorid'];
         $personal_surname     = $_POST['personal-surname'];
         $personal_firstname   = $_POST['personal-firstname'];
         $personal_middlename  = $_POST['personal-middlename'];
         $personal_nickname    = $_POST['personal-nickname'];
         $personal_date        = $_POST['personal-date-of-birth'];
         $personal_age         = $_POST['personal-age'];
         $personal_sex         = $_POST['personal-sex'];
         $personal_nationality = $_POST['personal-nationality'];
         $personal_place       = $_POST['personal-place-of-birth'];
         $personal_civil       = $_POST['personal-civil-status'];
         $personal_religion    = $_POST['personal-religion'];
         $personal_home        = $_POST['personal-home-address'];
         $personal_home_addess = $_POST['personal-home-addess-tel-no'];
         $personal_boarding    = $_POST['personal-boarding-house-address'];
         $personal_boarding_addess = $_POST['personal-boarding-address-tel-no'];
         $personal_name        = $_POST['personal-name-of-landloard'];
         $personal_landlord    = $_POST['personal-landlord-relation'];
         $personal_hobbies     = $_POST['personal-hobbies'];
         $personal_describe    = $_POST['personal-describe-yourself'];
         # end

         # Check student number based on route
         
         $studentno = [];
         isset($_POST['btn-views']) ? $studentno = $_POST['studentno'] : $studentno = $_SESSION['username'];

         $this->studentFormsModel->stud_info($personalcourseid,$personalyearlevel,$personalmajorid,$studentno);
         
         # update personal data query 
         $this->studentFormsModel->submit_stud_personal_data(
            $personal_surname,
            $personal_firstname,
            $personal_middlename,
            $personal_nickname,
            $personal_date,
            $personal_age,
            $personal_sex,
            $personal_nationality,
            $personal_place,
            $personal_civil,
            $personal_religion,
            $personal_home,
            $personal_home_addess,
            $personal_boarding,
            $personal_boarding_addess,
            $personal_name,
            $personal_landlord,
            $personal_hobbies,
            $personal_describe,
            $studentno
         );
         # end

         # update family data method post
         $family_father_f                 = $_POST['family_father_f'];
         $family_father_name_f            = $_POST['family_father_name_f'];
         $family_address_f                = $_POST['family_address_f'];
         $family_cellphone_numberone_f    = $_POST['family_cellphone_numberone_f'];
         $family_nationality_f            = $_POST['family_nationality_f'];
         $family_educationaly_ettaiment_f = $_POST['family_educationaly_ettaiment_f'];
         $family_occupation_positionone_f = $_POST['family_occupation_positionone_f'];
         $family_business_office_address_f= $_POST['family_business_office_address_f'];
         $family_cellphone_number_f       = $_POST['family_cellphone_number_f'];
         $family_working_abroad_f         = $_POST['family_working_abroad_f'];
         $family_where_f                  = $_POST['family_where_f'];
         $family_nature_work_f            = $_POST['family_nature_work_f'];
         $family_occupation_position_f    = $_POST['family_occupation_position_f'];
         $family_mother_m                 = $_POST['family_mother_m'];
         $family_mother_name_m            = $_POST['family_mother_name_m'];
         $family_address_m                = $_POST['family_address_m'];
         $family_cellphone_numberone_m    = $_POST['family_cellphone_numberone_m'];
         $family_nationality_m            = $_POST['family_nationality_m'];
         $family_educationaly_ettaiment_m = $_POST['family_educationaly_ettaiment_m'];
         $family_occupation_position_1_m  = $_POST['family_occupation_position_1_m'];
         $family_business_office_address_m= $_POST['family_business_office_address_m'];
         $family_cellphone_number_m       = $_POST['family_cellphone_number_m'];
         $family_working_abroad_m         = $_POST['family_working_abroad_m'];
         $family_where_m                  = $_POST['family_where_m'];
         $family_nature_work_m            = $_POST['family_nature_work_m'];
         $family_occupation_position_2_m  = $_POST['family_occupation_position_2_m'];
         $txtBrotherSister                = implode(',',$_POST['txtBrotherSister'] ?? []);
         $parentsMonthlyIncome            = $_POST['parentsMonthlyIncome'];
         $txtNumbersofchildern            = $_POST['txtNumbersofchildern'];
         $txtStudentsBirthUrder           = $_POST['txtStudentsBirthUrder'];
         $are_you_living_parents          = $_POST['are_you_living_parents'];
         $family_if_no_why                = $_POST['family_if_no_why'];
         $txtWhomStaying                  = $_POST['txtWhomStaying'];
         $family_what_languages_dialets   = $_POST['family_what_languages_dialets'];
         $how_much_daily_allowance        = $_POST['how_much_daily_allowance'];
         # end

         # update family data method query
         $this->studentFormsModel->submit_stud_family_data(
            $family_father_f,
            $family_father_name_f,
            $family_address_f,
            $family_cellphone_numberone_f,
            $family_nationality_f,
            $family_educationaly_ettaiment_f,
            $family_occupation_positionone_f,
            $family_business_office_address_f,
            $family_cellphone_number_f,
            $family_working_abroad_f,
            $family_where_f,
            $family_nature_work_f,
            $family_occupation_position_f,
            $family_mother_m,
            $family_mother_name_m,
            $family_address_m,
            $family_cellphone_numberone_m,
            $family_nationality_m,
            $family_educationaly_ettaiment_m,
            $family_occupation_position_1_m,
            $family_business_office_address_m,
            $family_cellphone_number_m,
            $family_working_abroad_m,
            $family_where_m,
            $family_nature_work_m,
            $family_occupation_position_2_m,
            $txtBrotherSister,
            $parentsMonthlyIncome,
            $txtNumbersofchildern,
            $txtStudentsBirthUrder,
            $are_you_living_parents,
            $family_if_no_why,
            $txtWhomStaying,
            $family_what_languages_dialets,
            $how_much_daily_allowance,
            $studentno
         );
         # end

         # update educational data method query
         $txtFraternity                     = implode(',',$_POST['txtFraternity'] ?? []);
         $educational_high_school_average   = $_POST['educational_high_school_average'];
         $educational_honor_did_high_school = $_POST['educational_honor_did_high_school'];
         $educational_like_most             = $_POST['educational_like_most'];
         $educational_why_one               = $_POST['educational_why_one'];
         $educational_like_least            = $_POST['educational_like_least'];
         $educational_why_least             = $_POST['educational_why_least'];
         $educational_scholar               = $_POST['educational_scholar'];
         $educational_scholarship_program   = $_POST['educational_scholarship_program'];
         $educational_supports_studies      = $_POST['educational_supports_studies'];
         $educational_transferee            = $_POST['educational_transferee'];
         $educational_from_what_school      = $_POST['educational_from_what_school'];
         $educational_what_course_take_there= $_POST['educational_what_course_take_there'];
         $PrKnNameOfSchool                  = $_POST['PrKnNameOfSchool'];
         $PrearatoryKiYear                  = $_POST['PrearatoryKiYear'];
         $PrKnHonorsAwards                  = $_POST['PrKnHonorsAwards'];
         $ElemNameOfSchool                  = $_POST['ElemNameOfSchool'];
         $ElemYearOfSchool                  = $_POST['ElemYearOfSchool'];
         $ElemHonorsSchool                  = $_POST['ElemHonorsSchool'];
         $HighSchoolSchool                  = $_POST['HighSchoolSchool'];
         $HighsYearsSchool                  = $_POST['HighsYearsSchool'];
         $HighsHonorSchool                  = $_POST['HighsHonorSchool'];
         $VocationalShool                   = $_POST['VocationalShool'];
         $VoctonYearShool                   = $_POST['VoctonYearShool'];
         $VocationlHonors                   = $_POST['VocationlHonors'];
         $CollegesSchool                    = $_POST['CollegesSchool'];
         $CollYearSchool                    = $_POST['CollYearSchool'];
         $CollHonorSchol                    = $_POST['CollHonorSchol'];
         # end

         $this->studentFormsModel->submit_stud_educatinal_data(
            $txtFraternity,
            $educational_high_school_average,   
            $educational_honor_did_high_school, 
            $educational_like_most,             
            $educational_why_one,               
            $educational_like_least,            
            $educational_why_least,             
            $educational_scholar,               
            $educational_scholarship_program,   
            $educational_supports_studies,      
            $educational_transferee,            
            $educational_from_what_school,      
            $educational_what_course_take_there,
            $PrKnNameOfSchool,
            $PrearatoryKiYear,
            $PrKnHonorsAwards,
            $ElemNameOfSchool,
            $ElemYearOfSchool,
            $ElemHonorsSchool,
            $HighSchoolSchool,
            $HighsYearsSchool,
            $HighsHonorSchool,
            $VocationalShool,
            $VoctonYearShool,
            $VocationlHonors,
            $CollegesSchool,
            $CollYearSchool,
            $CollHonorSchol,
            $studentno,
         );

         $h_sick                            = $_POST['h_sick'];
         $health_data_health_problems       = implode(',',$_POST['health_data_health_problems'] ?? []);
         $health_data_others_please_specify = $_POST['health_data_others_please_specify'];

         $this->studentFormsModel->submit_stud_health_data(
            $h_sick,                                    
            $health_data_health_problems,      
            $health_data_others_please_specify,
            $studentno,
         );

         $pwd_checklist_indigenous              = $_POST['pwd_checklist_indigenous'];
         $pwd_checklist_if_yes                  = implode(',',$_POST['pwd_checklist_if_yes'] ?? []);
         $pwd_checklist_others_please_specify   = $_POST['pwd_checklist_others_please_specify'];
         $pwd_checklist_disabilities            = $_POST['pwd_checklist_disabilities'];
         $pwd_checklist_chronic_illness         = implode(',',$_POST['pwd_checklist_chronic_illness'] ??  []);
         $pwd_checklist_learning_disability     = implode(',',$_POST['pwd_checklist_learning_disability'] ?? []);
         $pwd_checklist_visual_disability       = implode(',',$_POST['pwd_checklist_visual_disability'] ?? []);
         $pwd_checklist_hearing_disability      = implode(',',$_POST['pwd_checklist_hearing_disability'] ?? []);
         $pwd_checklist_mental_psychosocial_disability     = implode(',',$_POST['pwd_checklist_mental_psychosocial_disability'] ?? []);
         $pwd_checklist_intellectual_disability = implode(',',$_POST['pwd_checklist_intellectual_disability'] ?? []);
         $pwd_checklist_other_specify           = $_POST['pwd_checklist_other_specify'];

         $this->studentFormsModel->submit_stud_ippwd_data(
            $pwd_checklist_indigenous,             
            $pwd_checklist_if_yes,                 
            $pwd_checklist_others_please_specify,  
            $pwd_checklist_disabilities,           
            $pwd_checklist_chronic_illness,        
            $pwd_checklist_learning_disability,    
            $pwd_checklist_visual_disability,      
            $pwd_checklist_hearing_disability,     
            $pwd_checklist_mental_psychosocial_disability,    
            $pwd_checklist_intellectual_disability,
            $pwd_checklist_other_specify,
            $studentno       
         );

         $interview_feel_right_now     = implode(',',$_POST['interview_feel_right_now'] ?? []);
         $txtInterviewOthersOne        = $_POST['txtInterviewOthersOne'];
         $interview_choose_enroll_csu  = implode(',',$_POST['interview_why_choose_enroll_csu'] ?? []);
         $txtInterviewOthersTwo        = $_POST['txtInterviewOthersTwo'];
         $interview_course_will_enroll = $_POST['interview_college_course_will_enroll'];
         $txtMajorOne                  = $_POST['txtMajorOne'];
         $txtSpecialization            = $_POST['txtSpecialization'];
         $interview_why                = implode(',',$_POST['interview_why'] ?? []);
         $txtInterviewFour             = $_POST['txtInterviewFour'];
         $interview_problems_concerns  = implode(',',$_POST['interview_problems_concerns'] ?? []);
         $txtInterviewFive             = $_POST['txtInterviewFive'];
         $interview_academics          = implode(',',$_POST['interview_academics'] ?? []);
         $txtInterviewOthersFive       = $_POST['txtInterviewOthersFive'];
         $interview_professors         = implode(',',$_POST['interview_professors'] ?? []);
         $txtInterviewOthersSix        = $_POST['txtInterviewOthersSix'];
         $interview_administration     = implode(',',$_POST['interview_administration'] ?? []);
         $txtInterviewSeven            = $_POST['txtInterviewSeven'];
         $interview_plans_after        = implode(',',$_POST['interview_plans_after_college'] ?? []);
         $txtInterviewEight            = $_POST['txtInterviewEight'];

         $this->studentFormsModel->submit_stud_initial(
            $interview_feel_right_now,    
            $txtInterviewOthersOne,       
            $interview_choose_enroll_csu, 
            $txtInterviewOthersTwo,       
            $interview_course_will_enroll,
            $txtMajorOne,                 
            $txtSpecialization,           
            $interview_why,               
            $txtInterviewFour,            
            $interview_problems_concerns, 
            $txtInterviewFive,            
            $interview_academics,         
            $txtInterviewOthersFive,      
            $interview_professors,        
            $txtInterviewOthersSix,       
            $interview_administration,    
            $txtInterviewSeven,           
            $interview_plans_after,       
            $txtInterviewEight,
            $studentno       
         );
         # redirect into personal data 
         if (isset($_POST['btn-views'])) {

            header('Location: ?route=student-info');
         
         } else {
         
            header('Location: ?route=student-forms');
         
         }
         # end header
      
      }
   }
}