<?php

class reportsModel extends Connection
{
   public function __construct()
   {
      parent::__construct();
   }

   public function all_individual_reports($sDate, $eDate)
   {
      $stmt = $this->getConnection()->prepare(
         "SELECT * FROM tbl_stud_accounts 
         LEFT JOIN tbl_personal_data ON tbl_stud_accounts.studentno = tbl_personal_data.studentno
         LEFT JOIN tblcolleges ON tbl_stud_accounts.colid = tblcolleges.colid 
         WHERE studDate BETWEEN ? AND ?"
      );

      // Ensure all four parameters are passed
      $stmt->execute([$sDate, $eDate]);

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }



   public function year_college_individual_reports($year, $college, $dateStart, $dateToEnd)
   {

      $stmt = $this->getConnection()->prepare(
         "SELECT * FROM tbl_stud_accounts 
         LEFT JOIN tbl_personal_data ON tbl_stud_accounts.studentno = tbl_personal_data.studentno
         LEFT JOIN tblcolleges ON tbl_stud_accounts.colid = tblcolleges.colid WHERE ylevel = ? AND college = ? AND studDate BETWEEN ? AND ?"
      );

      // Ensure all four parameters are passed
      $stmt->execute([$year, $college, $dateStart, $dateToEnd]); 

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function college_individual_reports($college, $dateStart, $dateToEnd)
   {

      $stmt = $this->getConnection()->prepare(
         "SELECT * FROM tbl_stud_accounts 
         LEFT JOIN tbl_personal_data ON tbl_stud_accounts.studentno = tbl_personal_data.studentno
         LEFT JOIN tblcolleges ON tbl_stud_accounts.colid = tblcolleges.colid WHERE college = ? AND studDate BETWEEN ? AND ?"
      );

      // Ensure all four parameters are passed
      $stmt->execute([$college, $dateStart, $dateToEnd]); 

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function yearlevel_individual_reports($year, $dateStart, $dateToEnd)
   {

      $stmt = $this->getConnection()->prepare(
         "SELECT * FROM tbl_stud_accounts 
         LEFT JOIN tbl_personal_data ON tbl_stud_accounts.studentno = tbl_personal_data.studentno
         LEFT JOIN tblcolleges ON tbl_stud_accounts.colid = tblcolleges.colid WHERE ylevel = ? AND studDate BETWEEN ? AND ?"
      );

      // Ensure all four parameters are passed
      $stmt->execute([$year, $dateStart, $dateToEnd]); 

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function counsel_service($sDate, $eDate)
   {
      $stmt = $this->getConnection()->prepare("SELECT * FROM tbl_stud_accounts 
         LEFT JOIN tbl_personal_data ON tbl_stud_accounts.studentno = tbl_personal_data.studentno
         LEFT JOIN tblcolleges ON tbl_stud_accounts.colid = tblcolleges.colid
         LEFT JOIN tbl_intakeform ON tbl_stud_accounts.studentno = tbl_intakeform.studentno WHERE Date BETWEEN ? AND ?"
      );
      $stmt->execute([$sDate, $eDate]); 

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }
}

?>
