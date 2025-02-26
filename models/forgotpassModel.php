<?php

   class forgotpassModel extends Connection
   {
      public function __construct()
      {
         parent::__construct();
      }

      public function forgot_password($userName, $emailAddress)
      {
         $stmt = $this->getConnection()->prepare("SELECT * FROM tbl_stud_accounts WHERE studentno = ? AND email = ?");

         $stmt->execute([$userName, $emailAddress]);

         return $stmt->fetch(PDO::FETCH_ASSOC);
      }
   }

?>