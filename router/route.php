<?php
session_start();
include_once('config/dbconfig.php');
include_once('controllers/includeStudentController.php');
include_once('controllers/loginStudentController.php');
include_once('controllers/studentFormsController.php');
include_once('controllers/loginAdminController.php');
include_once('controllers/includeAdminController.php');
include_once('models/userManagementModel.php');
include_once('controllers/userManagementController.php');

$route = isset($_GET['route']) ? $_GET['route'] : '';

$includeStudentController = new includeStudentController();
$loginController          = new loginStudentController();
$studentFormsController   = new studentFormsController();
$loginAdminController     = new loginAdminController();
$includeAdminController   = new includeAdminController();
$userManagementController = new userManagementController();

switch ($route) {
   case "":
      $includeStudentController->index();
      break;
   case "sign-in":
      $includeStudentController->login();
      break;
   case "sign-up":
      $includeStudentController->login();
      break;
   case "dashboard":
      $includeStudentController->dashboard();
      break;
   case "check-file-exist":
      $includeStudentController->check_file_exist();
      break;
   case "student-forms":
      $includeStudentController->student_forms();
      break;
   case "submit-form":
      $studentFormsController->submit_stud_forms();
      break;
   case "create-an-account":
      $loginController->sign_up();
      break;
   case "login":
      $loginController->sign_in();
      break;
   case "admin-sign-up":
      $includeStudentController->login();
      break;
   case "create-admin-account":
      $loginAdminController->createAdminAccount();
      break;
   case "admin-dashboard":
      $includeAdminController->admin_dashboard();
      break;
   case "user-management":
      $includeAdminController->user_management();
      break;
   case "college":
      $includeAdminController->college();
      break;
   case "admin-user-management":
      $userManagementController->admin_user_management();
      break;
   default:
      echo "404 Page Not Found!";
      break;
}
