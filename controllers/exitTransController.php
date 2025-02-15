<?php

   class exitTransController 
   {
      private $exitTransModel;

      public function __construct()
      {
         $this->exitTransModel = new exitTransModel();
      }

      public function submit_exit_trans()
      {
         if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $SmstrSchool     = $_POST['SmstrSchool'];
            $txtforTransfer  = $_POST['txtforTransfer'];
            $ReasonTransfer  = implode(",",$_POST['ReasonTransfer'] ?? []);
            $OthersOne       = $_POST['OthersOne'];
            $FeelAbtTransfer = implode(",", $_POST['FeelAboutTransfer'] ?? []);
            $OthersTwo       = $_POST['OthersTwo'];
            $ParentAwareness = $_POST['ParentAwareness'];
            $PrntFeelTrnsfer = implode(",",$_POST['PrntFeelAboutTransfer'] ?? []);
            $OthersThree     = $_POST['OthersThree'];
            $txtCourseEnroll = $_POST['txtCourseEnroll'];
            $txtSchool       = $_POST['txtSchool'];
            $RsnsChoosTheSchl= implode(",",$_POST['RsnsChoosTheSchl'] ?? []);
            $OthersFour      = $_POST['OthersFour'];
            $Regarding       = $_POST['Regarding'];
            $studentno       = $_POST['Student-No'];
            $this->exitTransModel->submit_exit_trans($SmstrSchool,$txtforTransfer,$ReasonTransfer,$OthersOne,$FeelAbtTransfer,$OthersTwo,$ParentAwareness,$PrntFeelTrnsfer,$OthersThree,$txtCourseEnroll,$txtSchool,$RsnsChoosTheSchl,$OthersFour,$Regarding,$studentno);
            header("Location: ?route=exit-trans");
         }  
      }
   }

?>