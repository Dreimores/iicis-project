<?php

class usermanagementController
{
   private $usermanagementModel;
   
   public function __construct()
   {
      $this->usermanagementModel = new userManagementModel();
   }

   # Add, edit, and delete for admin user list
   public function admin_user_management()
   {  
      $getuserId = $_POST['txtGetuserId'] ?? null;
      $fileimage = $_FILES['files__Image']['name'] ?? null;
      $ftmp_name = $_FILES['files__Image']['tmp_name'] ?? null;
      $userLName = $_POST['txtUserLName'] ?? '';
      $userFName = $_POST['txtUserFName'] ?? '';
      $userMName = $_POST['txtUserMName'] ?? '';
      $userEmAdd = $_POST['txtUserEmAdd'] ?? '';
      $userUName = $_POST['txtUserUName'] ?? '';
      $userPword = $_POST['txtUserPword'] ?? '';

      # Add
      if (isset($_POST['btnSaveAdd'])) 
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
         # end
      }
      # end

      # Edit
      if (isset($_POST['btnSaveEdit'])) 
      {
         $old_image = $_POST['txtOld_Image'] ?? '';
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
         # end
      }
      # end

      # Delete
      if (isset($_POST['btnDeleteUser'])) {

         $userIdToDelete = $_POST['userid'] ?? null;
         
         if ($this->usermanagementModel->count_admin_users() === 1) {
            
            $_SESSION['warning'] = "Deletion is not allowed if only one admin exists.";

         } else {
            
            $this->usermanagementModel->admin_user_management_delete($userIdToDelete);
            $_SESSION['success'] = "User admin has been successfully deleted!";
            unlink('uploads/' . $_POST['images']);
         
         }
      }
      # end

   }

   # update profile
   public function update_profile()
   {
      $userLName = $_POST['userLName']; 
      $userFName = $_POST['userFName']; 
      $userMName = $_POST['userMName']; 
      $userEmAdd = $_POST['userEmAdd']; 
      $userPhone = $_POST['userPhone']; 
      $username  = $_POST['getuserId']; 
      $fileName  = $_FILES['fileImage']['name'];
      $tmp_name  = $_FILES['fileImage']['tmp_name'];
      $old_image = $_POST['old-image'];

      if (!empty($fileName)) {
         # Remove the old uploaded file
         unlink('uploads/' . $old_image);
         # Move the new uploaded file and set it as the old_image
         move_uploaded_file($tmp_name, 'uploads/' . $fileName);
         $old_image = $fileName;
      }

      if (isset($_POST['btn-admin-profile'])) {

         $this->usermanagementModel->update_profile($old_image,$userLName,$userFName,$userMName,$userEmAdd,$userPhone,$username);
         header('Location: ?route=profile');
         # Set success message and redirect
         $_SESSION['success'] = "User admin has been successfully updated!";
         # end
      } 

      if (isset($_POST['btn-student-profile'])) {
         $this->usermanagementModel->stud_update_profile($old_image,$userLName,$userFName,$userMName,$userEmAdd,$userPhone,$username);
         header('Location: ?route=stud-profile');
         # Set success message and redirect
         $_SESSION['success'] = "Profile successfully updated!";
         # end
      }
   }
   # end

   # change password
   public function change_pass()
   {
      $newPassword = $_POST['changePass'];
      $username   = $_SESSION['username'];
      if ($_SERVER['REQUEST_METHOD'] === "POST") {
         $this->usermanagementModel->change_pass($newPassword, $username);
         header('Location: ?route=dashboard');
         $_SESSION['changePass'] = "Success";
      }
   }

}
