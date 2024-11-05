<?php
   class loginStudentModel extends Connection
   {
      # initialize the connection
      public function __construct() 
      {
         parent::__construct();
      }
      # end 
      
      # sign up method
      public function sign_up($txtStudentNo, $txtPassword, $p_surname, $p_firstname, $p_middlename, $cbYearLevel, $txtEmail, $cbCourse, $cbCollege, $cbMajor, $files)
      {  
         # insert an account of students
         $stmt_students = $this->getconnection()->prepare("INSERT INTO tbl_stud_accounts (studentno, pword, ylevel, email, course, college, major, file_name) VALUES (?,?,?,?,?,?,?,?)");
         $stmt_students->execute([$txtStudentNo, $txtPassword, $cbYearLevel, $txtEmail, $cbCourse, $cbCollege, $cbMajor, $files]);
         # end

         # insert studentno into personal data
         $stmt_presonal = $this->getConnection()->prepare("INSERT INTO tbl_personal_data (studentno,p_surname,p_firstname,p_middlename) VALUES (?,?,?,?)");
         $stmt_presonal->execute([$txtStudentNo,$p_surname, $p_firstname, $p_middlename]);
         # end
         
         # insert studentno into family data
         $stmt_fa_data_ = $this->getConnection()->prepare("INSERT INTO tbl_family_data (studentno) VALUES (?)");
         $stmt_fa_data_->execute([$txtStudentNo]);
         # end

         # insert studentno into family data
         $stmt_educ_data = $this->getConnection()->prepare("INSERT INTO tbl_educational_data (studentno) VALUES (?)");
         $stmt_educ_data->execute([$txtStudentNo]);
         # end

         # insert studentno into health data
         $stmt_health_data = $this->getConnection()->prepare("INSERT INTO tbl_health_data (studentno) VALUES (?)");
         $stmt_health_data->execute([$txtStudentNo]);
         # end

         # insert studentno into ip pwd data
         $stmt_ip_pwd_data = $this->getConnection()->prepare("INSERT INTO tbl_ippwd_check_list (studentno) VALUES (?)");
         $stmt_ip_pwd_data->execute([$txtStudentNo]);
         # end

         # insert studentno into ip pwd data
         $stmt_initial_data = $this->getConnection()->prepare("INSERT INTO tbl_initial_interview (studentno) VALUES (?)");
         $stmt_initial_data->execute([$txtStudentNo]);
         # end

      }
      # end 

      # sign in method
      public function sign_in($txtStudentNo, $txtPassword)
      {
         $stmt = $this->getConnection()->prepare("SELECT * FROM tbl_stud_accounts WHERE studentno = ? AND pword = ?");
         $stmt->execute([$txtStudentNo, $txtPassword]);
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
      # end
      
      # check the student no if already exist 
      public function invalid_studentno()
      {
         $query = $this->getconnection()->prepare("SELECT studentno FROM tbl_stud_accounts");
         $query->execute();
         return $query->fetchAll(PDO::FETCH_COLUMN);
      }
      # end
   }
?>
