<?php

   class exitDropController
   {
      private $exitDropModel;

      public function __construct()
      {
         $this->exitDropModel = new exitDropModel(); 
      }
      public function submit_exitdrop()
      {
         
         if ($_SERVER['REQUEST_METHOD'] === "POST") {

            $SmstrSchool      = $_POST['SmstrSchool'];
            $txtDateExitDrop  = $_POST['txtDateExitDrop'];
            $ReasonsForDrop   = implode(",",$_POST['ReasonsForDrop'] ?? []);
            $txtExOthersOne   = $_POST['txtExOthersOne'];
            $PlanAfterDrop    = implode(",",$_POST['PlanAfterDrop'] ?? []);
            $txtExOthersTwo   = $_POST['txtExOthersTwo'];
            $FeelAboutDrop    = implode(",",$_POST['FeelAboutDrop'] ?? []);
            $txtExOthersThree = $_POST['txtExOthersThree'];
            $ParentsAwareness = $_POST['ParentsAwareness'];
            $ParntFeelingsDrop= implode(",",$_POST['ParentsFeelingsDrop'] ?? []);
            $txtExOthersFive  = $_POST['txtExOthersFive'];
            $txtCourseEnroll  = $_POST['txtCourseEnroll'];
            $txtSchool        = $_POST['txtSchool'];
            $ReasonChoosSchool= implode(",",$_POST['ReasonChoosSchool'] ?? []);
            $txtExOthersSix   = $_POST['txtExOthersSix'];
            $CRStCLCampus     = $_POST['ComRegardStayCsuLasamCampus'];
            $studentNo        = $_POST['Student-No'];
            $this->exitDropModel->submit_exitdrop($SmstrSchool,$txtDateExitDrop,$ReasonsForDrop,$txtExOthersOne,$PlanAfterDrop,$txtExOthersTwo,$FeelAboutDrop,$txtExOthersThree,$ParentsAwareness,$ParntFeelingsDrop,$txtExOthersFive,$txtCourseEnroll,$txtSchool,$ReasonChoosSchool,$txtExOthersSix,$CRStCLCampus,$studentNo);
            header("Location: ?route=exit-drop-form");
         }

      }
   }

?>