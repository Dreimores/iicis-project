<?php

   session_start();
   # configuration
   require_once('config/dbconfig.php');
   # end

   # security
   include_once('controllers/securityController.php');
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
   include_once('controllers/reportsController.php');
   include_once('controllers/dashBoardController.php');
   include_once('controllers/announceController.php');
   include_once('controllers/forgotpassController.php');
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
   include_once('models/reportsModel.php');
   include_once('models/dashBoardModel.php');
   include_once('models/announceModel.php');
   include_once('models/forgotpassModel.php');
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
   $reportsController        = new reportsController();
   $announceController       = new announceController();
   $forgotpassController     = new forgotpassController();
   $securityController       = new securityController();
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
      case "forgot-password":
         $includeStudentController->login();
      break;
      case "dashboard":
         $securityController->security();
         $includeStudentController->dashboard();
      break;
      case "check-file-exist":
         $includeStudentController->check_file_exist();
      break;
      case "student-forms":
         $securityController->security();
         $includeStudentController->student_forms();
      break;
      case "submit-form":
         $studentFormsController->submit_stud_forms();
      break;
      case "app":
         $loginController->update_approved();
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
         $securityController->securityAdmin();
         $includeAdminController->admin_dashboard();
      break;
      case "user-management":
         $securityController->securityAdmin();
         $includeAdminController->user_management();
      break;
      case "college-list":
         $securityController->securityAdmin();
         $includeAdminController->college();
      break;
      case "submit-colleges":
         $collegeController->submit_colleges();
      break;
      case "course-list":
         $securityController->securityAdmin();
         $includeAdminController->course();
      break;
      case "submit-courses":
         $courseController->submit_course();
      break;
      case "major-list":
         $securityController->securityAdmin();
         $includeAdminController->majors();
      case "submit-majors":
         $majorController->submit_majors();
      break;
      case "student-info":
         $securityController->securityAdmin();
         $includeAdminController->student_info();
      break;
      case "intake-form":
         $securityController->securityAdmin();
         $includeAdminController->intake_form();
      break;
      case "submit-intake-form":
         $intakeController->submit_intake_form();
      break;
      case "terminal-Interview":
         $securityController->securityAdmin();
         $includeAdminController->terminalInterviewForm();
      break;
      case "submit-terminal-Interview":
         $terminalController->submit_terminal_Interview();
      break;
      case "exit-drop-form":
         $securityController->securityAdmin();
         $includeAdminController->exit_drop();
      break;
      case "exit-drop":
         $exitDropController->submit_exitdrop();
      break;
      case "exit-trans":
         $securityController->securityAdmin();
         $includeAdminController->exit_trans();
      break;
      case "exit-exit-trans":
         $exitTransController->submit_exit_trans();
      break;
      case "reports":
         $securityController->securityAdmin();
         $includeAdminController->reports();
      break;
      case "individual-reports":
         $reportsController->individual();
      break;
      case "counseling-service":
         $reportsController->counseling();
      break;
      case "career-guidance":
         $reportsController->career_guidance();
      break;
      case "announcement":
         $securityController->securityAdmin();
         $includeAdminController->announce();
      break;
      case "announce":
         $announceController->annouce();
      break;
      case "profile":
         $includeAdminController->profile();
      break;
      case "update-profile":
         $userManagementController->update_profile();
      break;
      case "stud-profile":
         $includeStudentController->stud_profile();
      break;
      case "forgot-pass":
         $forgotpassController->forgot_password();
      break;
      case "change-pass":
         $userManagementController->change_pass();
      break;
      case "views":
         $securityController->securityAdmin();
         $includeStudentController->views();
      break;
      case "logoutStud":
         $securityController->logoutPortalStudent();
      break;
      case "logoutAdmin":
         $securityController->logoutPortalAdmin();
      break;
      default:
         $includeAdminController->page_not_found();
      break;
   }
# end

?>