<?php

class dashBoardController
{
   private $dashBoardModel;
   # instantiation course model class
   public function __construct()
   {
      $this->dashBoardModel = new dashBoardModel();
   }
   # end

   # Itirate all approved status
   public function allApproved()
   {
      return $this->dashBoardModel->all("Approved");
   }
   # end

   # Itirate all Pending status
   public function allPending()
   {
      return $this->dashBoardModel->all("Pending...");
   }
   # end

   # Itirate all Single
   public function allSingle()
   {
      return $this->dashBoardModel->all("Single");
   }
   # end

   # Itirate all Marreid
   public function allMarreid()
   {
      return $this->dashBoardModel->all("Marreid");
   }
   # end


   # Itirate all Male
   public function allMale()
   {
      return $this->dashBoardModel->all("Male");
   }
   # end

   # Itirate all Female
   public function allFemale()
   {
      return $this->dashBoardModel->all("Female");
   }
   # end


   # Itirate all PWD
   public function allYesPWD()
   {
      return $this->dashBoardModel->all("Yes");
      
   }
   # end

   # Itirate all IP
   public function allYesIP()
   {
      return $this->dashBoardModel->allIP("Yes");
      
   }
   # end

   # Itirate all Ongoing
   public function allOngoing()
   {
      return $this->dashBoardModel->all("Ongoing");
      
   }
   # end
   
   # Itirate all Ongoing
   public function allTerminated()
   {
      return $this->dashBoardModel->all("Terminated");
      
   }
   # end

   # Itirate all Students
   public function allStudensts()
   {
      return $this->dashBoardModel->allStudensts();
   }
   # end

   # Get terminal year report
   public function TRM()
   {
      $year = date("Y");
      $y = [];
      $data = []; // Store results

      for ($i = 0; $i <= 5; $i++) 
      {
         $y[$i] = $year - $i; // Generate last 6 years
         $result = $this->dashBoardModel->TRM($y[$i]); // Store results
         $data[] = $result['COUNT_TRM'];
      }

      return $data; // Return the results
   }
   # end

   # Get Intake year report
   public function ITF()
   {
      $year = date("Y");
      $y = [];
      $data = []; // Store results

      for ($i = 0; $i <= 5; $i++) 
      {
         $y[$i] = $year - $i; // Generate last 6 years
         $result = $this->dashBoardModel->ITF($y[$i]); // Store results
         $data[] = $result['COUNT_ITF'];
      }

      return $data; // Return the results
   }
   # end

   # Get Drop year report
   public function DRP()
   {
      $year = date("Y");
      $y = [];
      $data = []; // Store results

      for ($i = 0; $i <= 5; $i++) 
      {
         $y[$i] = $year - $i; // Generate last 6 years
         $result = $this->dashBoardModel->DRP($y[$i]); // Store results
         $data[] = $result['COUNT_DRP'];
      }
      
      return $data; // Return the results
   }
   # end

   # Get Transfer report
   public function TRANS()
   {
      $year = date("Y");
      $y = [];
      $data = []; // Store results

      for ($i = 0; $i <= 5; $i++) 
      {
         $y[$i] = $year - $i; // Generate last 6 years
         $result = $this->dashBoardModel->TRANS($y[$i]); // Store results
         $data[] = $result['COUNT_TRANS'];
      }
      
      return $data; // Return the results
   }
   # end

}
