<?php


   class terminalModels extends Connection
   {
      public function __construct()
      {
         parent::__construct();
      }

      public function submit_terminal_Interview($FacebookAccount,$WhyEnrollCsu,$OthersOne,$WhatSchlFirstEnroll,$FinishCrsEnrolled,$IfNoWhy,$OthersTwo,$HowFeelGraduate,$OthersThree,$WhatDoAfterGrad,$OthersFour,$WhatDiffUniversity,$OthersFive,$WhatGreatLearn,$OthersSix,$WouldYouEncourRel,$Why,$OthersSeven,$WhatCanSugServ,$studentno)
      {
         $stmt = $this->getConnection()->prepare("UPDATE tbl_terminal_form SET FacebookAccount = ?,WhyEnrollCsu = ?,OthersOne = ?,WhatSchlFirstEnroll = ?,FinishCrsEnrolled = ?,IfNoWhy = ?,OthersTwo = ?,HowFeelGraduate = ?,OthersThree = ?,WhatDoAfterGrad = ?,OthersFour = ?,WhatDiffUniversity = ?,OthersFive = ?,WhatGreatLearn = ?,OthersSix = ?,WouldYouEncourRel = ?,Why = ?,OthersSeven = ?,WhatCanSugServ = ? WHERE studentno = ?");
         $stmt->execute([$FacebookAccount,$WhyEnrollCsu,$OthersOne,$WhatSchlFirstEnroll,$FinishCrsEnrolled,$IfNoWhy,$OthersTwo,$HowFeelGraduate,$OthersThree,$WhatDoAfterGrad,$OthersFour,$WhatDiffUniversity,$OthersFive,$WhatGreatLearn,$OthersSix,$WouldYouEncourRel,$Why,$OthersSeven,$WhatCanSugServ,$studentno]);
      }
   }
?>
