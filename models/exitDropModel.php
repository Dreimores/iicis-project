<?php

   class exitDropModel extends Connection
   {
      # initialize the connection
      public function __construct()
      {
         parent::__construct();
      }
      # end

      # Method for submitting the form
      public function submit_exitdrop(
         $SmstrSchool,
         $txtDateExitDrop,
         $ReasonsForDrop,
         $txtExOthersOne,
         $PlanAfterDrop,
         $txtExOthersTwo,
         $FeelAboutDrop,
         $txtExOthersThree,
         $ParentsAwareness,
         $ParentsFeelingsDrop,
         $txtExOthersFive,
         $txtCourseEnroll,
         $txtSchool,
         $ReasonChoosSchool,
         $txtExOthersSix,
         $ComRegardStayCsuLasamCampus,
         $studentNo
      )
      {
         $stmp = $this->getConnection()->prepare("UPDATE tbl_exit_drop SET SemYearLastAttend=?,dropDate=?,ReasonsForDrop=?,ex_OthersOne=?,PlanAfterDrop=?,ex_OthersTwo=?,FeelAboutDrop=?,ex_OthersThree=?,ParentsAwareness=?,ParentsFeelingsDrop=?,ex_OthersFive=?,CourseOne=?,School=?,ReasonChoosSchool=?,ex_OthersSix=?,CRSCsuLasam=? WHERE studentno=?");
         $stmp->execute(
            [$SmstrSchool,
            $txtDateExitDrop,
            $ReasonsForDrop,
            $txtExOthersOne,
            $PlanAfterDrop,
            $txtExOthersTwo,
            $FeelAboutDrop,
            $txtExOthersThree,
            $ParentsAwareness,
            $ParentsFeelingsDrop,
            $txtExOthersFive,
            $txtCourseEnroll,
            $txtSchool,
            $ReasonChoosSchool,
            $txtExOthersSix,
            $ComRegardStayCsuLasamCampus,
            $studentNo]
         );
      }
      # end
   }


?>