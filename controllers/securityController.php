<?php

class securityController
{
   public function logoutPortalStudent()
   {
      if (isset($_POST['Logout-Portal-Btn-student'])) {
         unset($_SESSION['username']);
         exit();
      }
   }

   public function security()
   {
      if (!$_SESSION['username']) {
         header('Location: ?route=');
         exit();
      }
   }

   public function logoutPortalAdmin()
   {
      if (isset($_POST['Logout-Portal-Btn-Admin'])) {
         unset($_SESSION['admin-username']);
         exit();
      }
   }

   public function securityAdmin()
   {
      if (!$_SESSION['admin-username']) {
         header('Location: ?route=');
         exit();
      }
   }
}
