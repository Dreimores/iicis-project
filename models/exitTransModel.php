<?php

   class exitTransModel extends Connection
   {
      # initialize the connection
      public function __construct()
      {
         parent::__construct();
      }
      # end

      # for submmitting the form transfer
      public function submit_exit_trans(
         $SmstrSchool,
         $transDate,
         $ReasonTransfer,
         $OthersOne,
         $FeelAboutTransfer,
         $OthersTwo,
         $ParentAwareness,
         $PrntFeelAboutTransfer,
         $OthersThree,
         $txtCourseEnroll,
         $txtSchool,
         $RsnsChoosTheSchl,
         $OthersFour,
         $Regarding,
         $studentno
      )
      {
         $stmt = $this->getConnection()->prepare("UPDATE tbl_exit_transfer SET
         SmstrSchool = ?, 
         transDate = ?,
         ReasonTransfer = ?, 
         trans_OthersOne = ?, 
         FeelAboutTransfer = ?, 
         trans_OthersTwo = ?, 
         trans_ParentAwareness = ?, 
         PrntFeelAboutTransfer = ?,
         trans_OthersThree = ?, 
         trans_CourseOne = ?,
         trans_School = ?,
         RsnsChoosTheSchl = ?,
         trans_OthersFour = ?,
         Regarding = ? 
         WHERE studentno = ?");
         $stmt->execute([
            $SmstrSchool,
            $transDate,
            $ReasonTransfer,
            $OthersOne,
            $FeelAboutTransfer,
            $OthersTwo,
            $ParentAwareness,
            $PrntFeelAboutTransfer,
            $OthersThree,
            $txtCourseEnroll,
            $txtSchool,
            $RsnsChoosTheSchl,
            $OthersFour,
            $Regarding,
            $studentno
         ]);
      }
   }
?>