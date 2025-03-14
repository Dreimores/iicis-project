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
         $stmt_students = $this->getconnection()->prepare("INSERT INTO tbl_stud_accounts (studentno, studDate, pword, ylevel, email, courseid, colid, majorid, file_name, status) VALUES (?,?,?,?,?,?,?,?,?,?)");
         $stmt_students->execute([$txtStudentNo, date('Y-m-d'),$txtPassword, $cbYearLevel, $txtEmail, $cbCourse, $cbCollege, $cbMajor, $files, "Pending..."]);
         # end

         # insert studentno into personal data
         $stmt_presonal = $this->getConnection()->prepare("INSERT INTO tbl_personal_data (studentno,p_surname,p_firstname,p_middlename) VALUES (?,?,?,?)");
         $stmt_presonal->execute([$txtStudentNo, $p_surname, $p_firstname, $p_middlename]);
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

         # insert studentno into initake data
         $stmt_intake_data = $this->getConnection()->prepare("INSERT INTO tbl_intakeform (studentno) VALUES (?)");
         $stmt_intake_data->execute([$txtStudentNo]);
         # end

         # insert studentno into terminal data
         $stmt_terminal_data = $this->getConnection()->prepare("INSERT INTO tbl_terminal_form (studentno) VALUES (?)");
         $stmt_terminal_data->execute([$txtStudentNo]);
         # end

         # insert studentno into exit drop data
         $stmt_terminal_data = $this->getConnection()->prepare("INSERT INTO tbl_exit_drop (studentno) VALUES (?)");
         $stmt_terminal_data->execute([$txtStudentNo]);
         # end

         # insert studentno into exit transfer data
         $stmt_terminal_data = $this->getConnection()->prepare("INSERT INTO tbl_exit_transfer (studentno) VALUES (?)");
         $stmt_terminal_data->execute([$txtStudentNo]);
         # end
      }
      # end 

      public function sign_update($txtStudentNo, $txtPassword, $p_surname, $p_firstname, $p_middlename, $cbYearLevel, $txtEmail, $cbCourse, $cbCollege, $cbMajor, $files, $txtOldStudentNo)
      {
         # update an account of students
         $stmt_students = $this->getconnection()->prepare("UPDATE tbl_stud_accounts SET studentno=?, pword=?, ylevel=?, email=?, courseid=?, colid=?, majorid=?, file_name=? WHERE studentno=?");
         $stmt_students->execute([$txtStudentNo, $txtPassword, $cbYearLevel, $txtEmail, $cbCourse, $cbCollege, $cbMajor, $files, $txtOldStudentNo]);
         # end

         # update studentno into personal data
         $stmt_presonal = $this->getConnection()->prepare("UPDATE tbl_personal_data SET studentno=?, p_surname=?, p_firstname=?, p_middlename=? WHERE studentno=?");
         $stmt_presonal->execute([$txtStudentNo, $p_surname, $p_firstname, $p_middlename, $txtOldStudentNo]);
         # end
         
         # update studentno into family data
         $stmt_fa_data_ = $this->getConnection()->prepare("UPDATE tbl_family_data SET studentno=? WHERE studentno=?");
         $stmt_fa_data_->execute([$txtStudentNo, $txtOldStudentNo]);
         # end

         # update studentno into family data
         $stmt_educ_data = $this->getConnection()->prepare("UPDATE tbl_educational_data SET studentno=? WHERE studentno=?");
         $stmt_educ_data->execute([$txtStudentNo, $txtOldStudentNo]);
         # end

         # update studentno into health data
         $stmt_health_data = $this->getConnection()->prepare("UPDATE tbl_health_data SET studentno=? WHERE studentno=?");
         $stmt_health_data->execute([$txtStudentNo, $txtOldStudentNo]);
         # end

         # update studentno into ip pwd data
         $stmt_ip_pwd_data = $this->getConnection()->prepare("UPDATE tbl_ippwd_check_list SET studentno=? WHERE studentno=?");
         $stmt_ip_pwd_data->execute([$txtStudentNo, $txtOldStudentNo]);
         # end

         # update studentno into ip pwd data
         $stmt_initial_data = $this->getConnection()->prepare("UPDATE tbl_initial_interview SET studentno=? WHERE studentno=?");
         $stmt_initial_data->execute([$txtStudentNo, $txtOldStudentNo]);
         # end

         # insert studentno into initake data
         $stmt_intake_data = $this->getConnection()->prepare("UPDATE tbl_intakeform SET studentno=?  WHERE studentno=?");
         $stmt_intake_data->execute([$txtStudentNo, $txtOldStudentNo]);
         # end

         # insert studentno into terminal data
         $stmt_terminal_data = $this->getConnection()->prepare("UPDATE tbl_terminal_form SET studentno=?  WHERE studentno=?");
         $stmt_terminal_data->execute([$txtStudentNo, $txtOldStudentNo]);
         # end

         # insert studentno into exit drop data
         $stmt_terminal_data = $this->getConnection()->prepare("UPDATE tbl_exit_drop SET studentno=?  WHERE studentno=?");
         $stmt_terminal_data->execute([$txtStudentNo, $txtOldStudentNo]);
         # end

         # insert studentno into exit transfer data
         $stmt_terminal_data = $this->getConnection()->prepare("UPDATE tbl_exit_transfer SET studentno=?  WHERE studentno=?");
         $stmt_terminal_data->execute([$txtStudentNo, $txtOldStudentNo]);
         # end
      }

      # delete student account
      public function sign_delete($txtStudentNo)
      {
         # delete an account of students
         $stmt = $this->getConnection()->prepare("DELETE FROM tbl_stud_accounts WHERE studentno=?");
         $stmt->execute([$txtStudentNo]);
         #end

         # delete studentno into personal data
         $stmt_presonal = $this->getConnection()->prepare("DELETE FROM tbl_personal_data WHERE studentno=?");
         $stmt_presonal->execute([$txtStudentNo]);
         # end
         
         # delete studentno into family data
         $stmt_fa_data_ = $this->getConnection()->prepare("DELETE FROM tbl_family_data WHERE studentno=?");
         $stmt_fa_data_->execute([$txtStudentNo]);
         # end

         # delete studentno into family data
         $stmt_educ_data = $this->getConnection()->prepare("DELETE FROM tbl_educational_data WHERE studentno=?");
         $stmt_educ_data->execute([$txtStudentNo]);
         # end

         # delete studentno into health data
         $stmt_health_data = $this->getConnection()->prepare("DELETE FROM tbl_health_data WHERE studentno=?");
         $stmt_health_data->execute([$txtStudentNo]);
         # end

         # delete studentno into ip pwd data
         $stmt_ip_pwd_data = $this->getConnection()->prepare("DELETE FROM tbl_ippwd_check_list WHERE studentno=?");
         $stmt_ip_pwd_data->execute([$txtStudentNo]);
         # end

         # delete studentno into ip pwd data
         $stmt_initial_data = $this->getConnection()->prepare("DELETE FROM tbl_initial_interview WHERE studentno=?");
         $stmt_initial_data->execute([$txtStudentNo]);
         # end

         # delete studentno into initake data
         $stmt_intake_data = $this->getConnection()->prepare("DELETE FROM tbl_intakeform WHERE studentno=?");
         $stmt_intake_data->execute([$txtStudentNo]);
         # end

         # delete studentno into exit drop data
         $tbl_exit_drop = $this->getConnection()->prepare("DELETE FROM tbl_exit_drop WHERE studentno=?");
         $tbl_exit_drop->execute([$txtStudentNo]);
         # end

         # delete studentno into terminal data
         $stmt_terminal_data = $this->getConnection()->prepare("DELETE FROM tbl_terminal_form WHERE studentno=?");
         $stmt_terminal_data->execute([$txtStudentNo]);
         # end

         # delete studentno into exit transfer data
         $tbl_exit_transfer = $this->getConnection()->prepare("DELETE FROM tbl_exit_transfer WHERE studentno=?");
         $tbl_exit_transfer->execute([$txtStudentNo]);
         # end
      }
      # end

      # sign in method
      public function sign_in($txtStudentNo, $txtPassword, $status)
      {
         $stmt = $this->getConnection()->prepare("SELECT * FROM tbl_stud_accounts WHERE studentno = ? AND pword = ? AND status = ?");
         $stmt->execute([$txtStudentNo, $txtPassword, $status]);
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

      # For update approving an account of student
      public function update_approved($status, $studentno)
      {
         $stmt = $this->getConnection()->prepare("UPDATE tbl_stud_accounts SET status = ? WHERE studentno = ?");
         $stmt->execute([$status, $studentno]);
      }
      # End
   }
?>
