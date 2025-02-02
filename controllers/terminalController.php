<?php

   require_once('models/terminalModels.php');

   class terminalController
   {
      private $terminalModels;

      public function __construct()
      {
         $this->terminalModels = new terminalModels(); 
      }

      public function submit_terminal_Interview()
      {

         if(isset($_POST['Btn-Terminalform-Save']))
         {  
            $txtFacebookAccount = $_POST['txtFacebookAccount'];
            $WhyEnrollCsu       = implode($_POST['WhyEnrollCsu'] ?? []);
            $OthersOne          = $_POST['OthersOne'];
            $txtFirstEnroll     = $_POST['txtFirstEnroll'];
            $FinishCrsEnrolled  = $_POST['FinishCrsEnrolled'];
            $IfNoWhy            = implode($_POST['IfNoWhy'] ?? []);
            $txtOtherIfNo       = $_POST['txtOtherIfNo'];
            $HowFeelGraduate    = implode($_POST['HowFeelGraduate'] ?? []);
            $txtOthersThree     = $_POST['txtOthersThree'];
            $WhatDoAfterGrad    = implode($_POST['WhatDoAfterGrad'] ?? []);
            $OthersFour         = $_POST['OthersFour'];
            $WhatDiffUniversity = implode($_POST['WhatDiffUniversity'] ?? []);
            $OthersFive         = $_POST['OthersFive'];
            $WhatGreatLearn     = implode($_POST['WhatGreatLearn'] ?? []);
            $txtOthersSix       = $_POST['txtOthersSix'];
            $WouldYouEncourRel  = $_POST['WouldYouEncourRel'];
            $Why                = implode($_POST['Why'] ?? []);
            $txtOthersSeven     = $_POST['txtOthersSeven'];
            $txtWhatCanSugServ  = $_POST['txtWhatCanSugServ'];
            $studentno          = $_POST['student-no'];

            $this->terminalModels->submit_terminal_Interview($txtFacebookAccount,$WhyEnrollCsu,$OthersOne,$txtFirstEnroll,$FinishCrsEnrolled,$IfNoWhy,$txtOtherIfNo,$HowFeelGraduate,$txtOthersThree,$WhatDoAfterGrad,$OthersFour,$WhatDiffUniversity,$OthersFive,$WhatGreatLearn,$txtOthersSix,$WouldYouEncourRel,$Why,$txtOthersSeven,$txtWhatCanSugServ,$studentno);
            header('Location: ?route=terminal-Interview');
         }
      }
   }

?>
