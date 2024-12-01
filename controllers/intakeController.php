<?php

class intakeController
{
   private $intakeModel;
   
   public function __construct()
   {
      $this->intakeModel = new intakeModel();
   }

   public function submit_intake_form()
   {
      
      if ($_SERVER['REQUEST_METHOD'] === "POST") {

         $txtDateEdit     = $_POST['txtDateEdit'];
         $txtTimedEdit    = $_POST['txtTimedEdit'];
         $TypeOfCounsel   = $_POST['TypeOfCounsel'];
         $txtDateRferred  = $_POST['txtDateRferred'];
         $txtReferredBy   = $_POST['txtReferredBy'];
         $PersonalIssuess = implode(',',$_POST['PersonalIssuess'] ?? []);
         $txtOthersOne    = $_POST['txtOthersOne'];
         $PlanActionAdd   = implode(',',$_POST['PlanActionAdd'] ?? []);
         $txtOthersTwo    = $_POST['txtOthersTwo'];
         $CounselStat     = implode(',', $_POST['CounselStat'] ?? []);
         $txtStudnetno    = $_POST['txtStudnetno'];
         
         $this->intakeModel->submit_intakeform_add($txtDateEdit,$txtTimedEdit,$TypeOfCounsel,$txtDateRferred,$txtReferredBy,$PersonalIssuess,$txtOthersOne,$PlanActionAdd,$txtOthersTwo,$CounselStat,$txtStudnetno);
         header('Location: ?route=intake-form');

      }
   }   
}