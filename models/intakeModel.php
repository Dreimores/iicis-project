<?php

class intakeModel extends Connection
{
  # initialize the connection
  public function __construct() 
  {
    parent::__construct();
  }
  # end 

  # Method for submitting the form
  public function submit_intakeform_add(
    $txtDateEdit,    
    $txtTimedEdit,   
    $TypeOfCounsel,  
    $txtDateRferred, 
    $txtReferredBy,  
    $PersonalIssuess,
    $txtOtherOne,   
    $PlanActionAdd,  
    $txtOthersTwo,   
    $CounselStat,
    $txtStudentno    
  )
  {
    $stmt = $this->getConnection()->prepare("UPDATE tbl_intakeform SET Date=?,Time=?,TypeOfCounsel=?,DateReferred=?,ReferredBy=?,ReasonsForCounsel=?,OtherOne=?,PlanOfAction=?,OtherTwo=?,CounselStatus=? WHERE studentno=?");
    $stmt->execute([$txtDateEdit,$txtTimedEdit,$TypeOfCounsel,$txtDateRferred,$txtReferredBy,$PersonalIssuess,$txtOtherOne,$PlanActionAdd,$txtOthersTwo,$CounselStat,$txtStudentno]);
  }
  # end
}