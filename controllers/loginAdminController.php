<?php
include_once('models/loginAdminModel.php');
class loginAdminController
{
   private $loginAdminModel;

   public function __construct() 
   {
      $this->loginAdminModel = new loginAdminModel();
   }
   public function createAdminAccount()
   {
      if($_SERVER['REQUEST_METHOD'] === 'POST')
      {
         $adminLastName     = $_POST['adminLastName'];
         $adminFirstName    = $_POST['adminFirstName'];
         $adminMiddleName   = $_POST['adminMiddleName'];
         $adminEmailAddress = $_POST['adminEmailAddress'];
         $adminUserName     = $_POST['adminUserName'];
         $adminPassword     = $_POST['adminPassword'];
         $this->loginAdminModel->createAdminAccount($adminLastName,$adminFirstName,$adminMiddleName,$adminEmailAddress,$adminUserName,$adminPassword);
         header('Location: ?route=sign-in');
      }
   }
}

?>