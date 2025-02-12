<?php

   session_start();
   # configuration
   require_once('config/dbconfig.php');
   # end

   # includes controllers
   include_once('controllers/includeStudentController.php');
   include_once('controllers/loginStudentController.php');
   include_once('controllers/studentFormsController.php');
   include_once('controllers/loginAdminController.php');
   include_once('controllers/includeAdminController.php');
   include_once('controllers/userManagementController.php');
   include_once('controllers/collegeController.php');
   include_once('controllers/courseController.php');
   include_once('controllers/majorController.php');
   include_once('controllers/intakeController.php');
   include_once('controllers/terminalController.php');
   include_once('controllers/exitDropController.php');
   include_once('controllers/exitTransController.php');
   # end

   # include models
   include_once('models/userManagementModel.php');
   include_once('models/collegeModel.php');
   include_once('models/courseModel.php');
   include_once('models/majorModel.php');
   include_once('models/studentFormsModel.php');
   include_once('models/intakeModel.php');
   include_once('models/exitDropModel.php');
   include_once('models/exitTransModel.php');
   # end 

   # get router
   $route = isset($_GET['route']) ? $_GET['route'] : '';
   # end

   # instance classes
   $includeStudentController = new includeStudentController();
   $loginController          = new loginStudentController();
   $studentFormsController   = new studentFormsController();
   $loginAdminController     = new loginAdminController();
   $includeAdminController   = new includeAdminController();
   $userManagementController = new userManagementController();
   $collegeController        = new collegeController();
   $courseController         = new courseController();
   $majorController          = new majorController();
   $intakeController         = new intakeController();
   $terminalController       = new terminalController();
   $exitDropController       = new exitDropController();
   $exitTransController      = new exitTransController();
   # end

   # route start
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
      case "admin-user-management":
         $userManagementController->admin_user_management();
      break;
      case "college-list":
         $includeAdminController->college();
      break;
      case "submit-colleges":
         $collegeController->submit_colleges();
      break;
      case "course-list":
         $includeAdminController->course();
      break;
      case "submit-courses":
         $courseController->submit_course();
      break;
      case "major-list":
         $includeAdminController->majors();
      case "submit-majors":
         $majorController->submit_majors();
      break;
      case "student-info":
         $includeAdminController->student_info();
      break;
      case "intake-form":
         $includeAdminController->intake_form();
      break;
      case "submit-intake-form":
         $intakeController->submit_intake_form();
      break;
      case "terminal-Interview":
         $includeAdminController->terminalInterviewForm();
      break;
      case "submit-terminal-Interview":
         $terminalController->submit_terminal_Interview();
      break;
      case "exit-drop-form":
         $includeAdminController->exit_drop();
      break;
      case "exit-drop":
         $exitDropController->submit_exitdrop();
      break;
      case "exit-trans":
         $includeAdminController->exit_trans();
      break;
      case "exit-exit-trans":
         $exitTransController->submit_exit_trans();
      break;
      case "reports":
         $includeAdminController->reports();
      break;
      default:
         $includeAdminController->page_not_found();
      break;
   }
# end

?>