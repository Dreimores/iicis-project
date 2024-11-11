<?php
include_once('models/usermanagementModel.php');

class usermanagementController
{
   private $usermanagementModel;
   
   public function __construct()
   {
      $this->usermanagementModel = new usermanagementModel();
   }

   # Add, edit, and delete for admin user list
   public function admin_user_management()
   {  
      $getuserId = $_POST['getuserId'] ?? null;
      $fileimage = $_FILES['file-image']['name'] ?? null;
      $ftmp_name = $_FILES['file-image']['tmp_name'] ?? null;
      $userLName = $_POST['userLName'] ?? '';
      $userFName = $_POST['userFName'] ?? '';
      $userMName = $_POST['userMName'] ?? '';
      $userEmAdd = $_POST['userEmAdd'] ?? '';
      $userUName = $_POST['userUName'] ?? '';
      $userPword = $_POST['userPword'] ?? '';

      # Add
      if (isset($_POST['btnSave_Add'])) 
      {
         # Move the uploaded file to the "uploads" directory
         $fileimage ? move_uploaded_file($ftmp_name, 'uploads/' . $fileimage) : '';
         $this->usermanagementModel->admin_user_management_add(
            $fileimage,
            $userLName,
            $userFName,
            $userMName,
            $userEmAdd,
            $userUName,
            $userPword
         );
         
         # Set success message and redirect
         $_SESSION['success'] = "User admin has been successfully added!";
         header('Location: ?route=user-management');
         exit();
      }
      # end

      # Edit
      if (isset($_POST['btnSaveEdit'])) 
      {
         $old_image = $_POST['old-image'] ?? '';
         if (!empty($fileimage)) {
            # Remove the old uploaded file
            unlink('uploads/' . $old_image);
            # Move the new uploaded file and set it as the old_image
            move_uploaded_file($ftmp_name, 'uploads/' . $fileimage);
            $old_image = $fileimage;
         }
         
         $this->usermanagementModel->admin_user_management_edit(
            $old_image,
            $userLName,
            $userFName,
            $userMName,
            $userEmAdd,
            $userUName,
            $userPword,
            $getuserId
         );

         # Set success message and redirect
         $_SESSION['success'] = "User admin has been successfully updated!";
         header('Location: ?route=user-management');
         exit();
      }
      # end

      # Delete
      if (isset($_POST['btnDeleteUser'])) 
      {
         $userIdToDelete = $_POST['userid'] ?? null;
         if ($userIdToDelete) 
         {
            $this->usermanagementModel->admin_user_management_delete($userIdToDelete);
            $_SESSION['success'] = "User admin has been successfully deleted!";
            header('Location: ?route=user-management');
            exit();
         }
      }
      # end
   }
}
