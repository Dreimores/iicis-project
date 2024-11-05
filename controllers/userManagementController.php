<?php
include_once('models/usermanagementModel.php');
class usermanagementController
{
   private $usermanagementModel;
   
   public function __construct()
   {
      $this->usermanagementModel = new usermanagementModel();
   }

   # add, edit, and delete for admin user list
   public function admin_user_management()
   {  
      $getuserId = $_POST['getuserId'];
      $userLName = $_POST['userLName'];
      $userFName = $_POST['userFName'];
      $userMName = $_POST['userMName'];
      $userEmAdd = $_POST['userEmAdd'];
      $userUName = $_POST['userUName'];
      $userPword = $_POST['userPword'];

      # add
      if (isset($_POST['btnSave_Add'])) 
      {
         $this->usermanagementModel->admin_user_management_add($userLName,$userFName,$userMName,$userEmAdd,$userUName,$userPword);
         $_SESSION['success'] = "User admin has been successfully added!";
         header('Location: ?route=user-management');
      }
      # end

      # edit
      if (isset($_POST['btnSaveEdit'])) 
      {
         $this->usermanagementModel->admin_user_management_edit($userLName,$userFName,$userMName,$userEmAdd,$userUName,$userPword,$getuserId);
         $_SESSION['success'] = "User admin has been successfully updated!";
         header('Location: ?route=user-management');
      }
      # edit

      # delete
      if(isset($_POST['btnDeleteUser']))
      {
         $this->usermanagementModel->admin_user_management_delete($_POST['userid']);
      }
      # delete
   }
   # end
}