<?php

   class exitTransModel extends Connection
   {
      public function __construct()
      {
         parent::__construct();
      }

      public function submit_exit_trans(
         $SmstrSchool,
         $ReasonTransfer,
         $OthersOne,
      )
      {
         $stmt = $this->getConnection()->prepare("UPDATE tbl_exit_transfer SET studentno = ? 
         SmstrSchool = ?, 
         ReasonTransfer = ?, 
         trans_OthersOne = ?, 
         FeelAboutTransfer = ?, 
         trans_OthersTwo = ?, 
         ParentAwareness = ?, 
         PrntFeelAboutTransfer = ?,
         trans_OthersThree = ?, 
         trans_CourseOne = ?,
         trans_School = ?,
         RsnsChoosTheSchl = ?,
         trans_OthersFour = ?,
         Regarding = ? 
         WHERE studentno = ?");
         $stmt->execute([]);
      }
   }
?>