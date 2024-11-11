<?php

class studentFormsModel extends Connection
{
   # initialize the connection
   public function __construct() 
   {
      parent::__construct();
   }
   # end

   # submit students personal data forms
   public function submit_stud_personal_data(
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
   )
   {
      $stmp = $this->getConnection()->prepare(
         "UPDATE tbl_personal_data SET 
         p_surname=?,
         p_firstname=?,
         p_middlename=?,
         p_nickname=?,
         p_datebirth=?,
         p_age=?,
         p_sex=?,
         p_nationality=?,
         p_placebirth=?,
         p_cilvilstatus=?,
         p_religion=?,
         p_homeaddress=?,
         p_homeadd_telno=?,
         p_boardhouseadd=?,
         p_boardhousetelno=?,
         p_namelandlord=?,
         p_landlordrelation=?,
         p_hobbies=?,
         p_describeyourself=?
         WHERE studentno=?"
      );
      $stmp->execute([
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
      ]);
   }
   # end

   # submit students family data forms
   public function submit_stud_family_data(
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
      $txtBrotherSister,
      $family_business_office_address_m,
      $family_cellphone_number_m,
      $family_working_abroad_m,
      $family_where_m,
      $family_nature_work_m,
      $family_occupation_position_2_m,
      $parentsMonthlyIncome,
      $txtNumbersofchildern,
      $txtStudentsBirthUrder,
      $are_you_living_parents,
      $family_if_no_why,
      $txtWhomStaying,
      $family_what_languages_dialets,
      $how_much_daily_allowance,
      $studentno
   )
   {
      $stmp = $this->getConnection()->prepare(
         "UPDATE tbl_family_data SET 
         f_father=?,
         f_fathername=?,
         f_addess=?,
         f_phone_number_one=?,
         f_nationality=?,
         f_educational=?,
         f_occupation_one=?,
         f_business=?,
         f_phone_number_two=?,
         f_work_abroad=?,
         f_where=?,
         f_nature_of_work=?,
         f_occupation_two=?,
         m_mother=?,
         m_mothername=?,
         m_addess=?,
         m_phone_number_one=?,
         m_nationality=?,
         m_educational=?,
         m_occupation_one=?,
         m_business=?,
         m_phone_number_two=?,
         m_work_abroad=?,
         m_where=?,
         m_nature_of_work=?,
         m_occupation_two=?,
         f_arragement=?,
         f_income_parent=?,
         f_number_child_parents=?,
         f_birth_order=?,
         f_living_parents=?,
         f_if_no_why=?,
         f_who_staying=?,
         f_languages_speak=?,
         f_daily_allowance=?
         WHERE studentno=?"
      );
      $stmp->execute([
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
         $txtBrotherSister,
         $family_business_office_address_m,
         $family_cellphone_number_m,
         $family_working_abroad_m,
         $family_where_m,
         $family_nature_work_m,
         $family_occupation_position_2_m,
         $parentsMonthlyIncome,
         $txtNumbersofchildern,
         $txtStudentsBirthUrder,
         $are_you_living_parents,
         $family_if_no_why,
         $txtWhomStaying,
         $family_what_languages_dialets,
         $how_much_daily_allowance,
         $studentno
      ]);
   }
   # end

   # submit students educational data forms
   public function submit_stud_educatinal_data(
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
      $studentno
   )
   {
      $stmp = $this->getConnection()->prepare(
         "UPDATE tbl_educational_data SET 
         e_fraternity=?,
         e_average_grade=?,
         e_honor_awards=?,
         e_subject_like_most=?,
         e_why_like_most=?,
         e_subject_like_least=?,
         e_why_like_least=?,
         e_are_you_scholar=?,
         e_scholarship_program=?,
         e_supports_studies=?,
         e_transferee=?,
         e_from_what_school=?,
         e_course_there=?,
         e_prknnameofschool=?,
         e_prearatorykiyear=?,
         e_prknhonorsawards=?,
         e_elemnameofschool=?,
         e_elemyearofschool=?,
         e_elemhonorsschool=?,
         e_highschoolschool=?,
         e_highsyearsschool=?,
         e_highshonorschool=?,
         e_vocationalshool=?,
         e_voctonyearshool=?,
         e_vocationlhonors=?,
         e_collegesschool=?,
         e_collyearschool=?,
         e_collhonorschool=?
         WHERE studentno=?"
         
      );
      $stmp->execute([
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
         $studentno
      ]);
   }
   # end

   # submit students health data forms
   public function submit_stud_health_data(
      $studentno,
      $h_sick,
      $health_data_health_problems,
      $health_data_others_please_specify
   )
   {
      $stmp = $this->getConnection()->prepare(
         "UPDATE tbl_health_data SET 
         h_often_get_sick=?,
         h_health_problems=?,
         h_Others=?
         WHERE studentno=?"
      );
      $stmp->execute([
         $h_sick,
         $health_data_health_problems,
         $health_data_others_please_specify,
         $studentno
      ]);
   }
   # ens

   public function submit_stud_ippwd_data(
      $pwd_checklist_indigenous,             
      $pwd_checklist_if_yes,                 
      $pwd_checklist_others_please_specify,  
      $pwd_checklist_disabilities,           
      $pwd_checklist_chronic_illness,        
      $pwd_checklist_learning_disability,    
      $pwd_checklist_visual_disability,      
      $pwd_checklist_hearing_disability,     
      $pwd_checklist_mental_psychosocial,    
      $pwd_checklist_intellectual_disability,
      $pwd_checklist_other_specify,
      $studentno       
   )
   {
      $stmp = $this->getConnection()->prepare(
         "UPDATE tbl_ippwd_check_list SET
         ip_indigenous_group=?,
         ip_If_yes=?,
         ip_others_one=?,
         ip_suffer_experience=?,
         ip_chronic_illness=?,
         ip_learning_disability=?,
         ip_visual_disability=?,
         ip_hearing_disability=?,
         ip_mental_psychosocial=?,
         ip_intellectual_disability=?,
         ip_others_two=?
         WHERE studentno=?"
      );
      $stmp->execute([
         $pwd_checklist_indigenous,             
         $pwd_checklist_if_yes,                 
         $pwd_checklist_others_please_specify,  
         $pwd_checklist_disabilities,           
         $pwd_checklist_chronic_illness,        
         $pwd_checklist_learning_disability,    
         $pwd_checklist_visual_disability,      
         $pwd_checklist_hearing_disability,     
         $pwd_checklist_mental_psychosocial,    
         $pwd_checklist_intellectual_disability,
         $pwd_checklist_other_specify,
         $studentno
      ]);
   }

   public function submit_stud_initial(
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
   )
   {
      $stmp = $this->getConnection()->prepare(
         "UPDATE tbl_initial_interview SET
         in_how_you_feel=?,
         in_others_one=?,
         in_why_choose_csu=?,
         in_others_two=?,
         in_course_enroll=?,
         in_major=?,
         in_specialization=?,
         in_why=?,
         in_others_three=?,
         in_problems_concerns=?,
         in_others_four=?,
         in_academics=?,
         in_others_five=?,
         in_professors=?,
         in_others_six=?,
         in_administration=?,
         in_others_seven=?,
         in_plans_after_college=?,
         in_others_eight=?
         WHERE studentno=?"
      );
      $stmp->execute([
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
      ]);
   }

   # check the student no if already exist 
   public function session_studentno($studentno)
   {
      # SQL query to fetch data from seven tables using LEFT JOIN
      $query = $this->getconnection()->prepare(
         "SELECT sa.*, pd.*, fd.*, ed.*, hd.*, ipd.*, ini.*
         FROM tbl_stud_accounts          AS sa 
         LEFT JOIN tbl_personal_data     AS pd  ON sa.studentno = pd.studentno 
         LEFT JOIN tbl_family_data       AS fd  ON sa.studentno = fd.studentno
         LEFT JOIN tbl_educational_data  AS ed  ON sa.studentno = ed.studentno    
         LEFT JOIN tbl_health_data       AS hd  ON sa.studentno = hd.studentno    
         LEFT JOIN tbl_ippwd_check_list  AS ipd ON sa.studentno = ipd.studentno    
         LEFT JOIN tbl_initial_interview AS ini ON sa.studentno = ini.studentno    
         WHERE sa.studentno = ?"
      );
      
      # Execute the prepared statement with the student number parameter
      $query->execute([$studentno]);
      
      # Use FETCH_ASSOC to get all columns as an associative array
      return $query->fetchAll(PDO::FETCH_ASSOC);
   }
   # end

   # migration viewing fir student account
   public function view_account_student()
   {
      $stmt = $this->getConnection()->prepare(
         "SELECT sa.*, cl.*, cr.*, mj.*, pd.*
         FROM tbl_stud_accounts      AS sa 
         LEFT JOIN tblcolleges       AS cl  ON sa.colid    = cl.colid 
         LEFT JOIN tblcourses        AS cr  ON sa.courseid = cr.courseid
         LEFT JOIN tblmajors         AS mj  ON sa.majorid  = mj.majorid
         LEFT JOIN tbl_personal_data AS pd  ON sa.studentno = pd.studentno"
      );

      # Execute the prepared statement with the student number parameter
      $stmt->execute();
      
      # Use FETCH_ASSOC to get all columns as an associative array
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }
   # end 
}