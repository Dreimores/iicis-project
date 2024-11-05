<?php
   include_once('models/loginStudentModel.php');
   include_once('models/loginAdminModel.php');
   class loginStudentController
   {

      private $loginModel;
      private $loginAdminModel;

      public function __construct() 
      {
         $this->loginModel      = new loginStudentModel();
         $this->loginAdminModel = new loginAdminModel();
      }

      public function sign_up()
      {
      
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $txtStudentNo = $_POST['txtStudentNo'] ?? '';
            $txtPassword  = $_POST['txtPassword'] ?? '';
            $txtFirstName = $_POST['txtFirstName'] ?? '';
            $txtMiddleName= $_POST['txtMiddleName'] ?? '';
            $txtLastName  = $_POST['txtLastName'] ?? '';
            $cbYearLevel  = $_POST['cbYearLevel'] ?? '';
            $txtEmail     = $_POST['txtEmail'] ?? '';
            $cbCourse     = $_POST['cbCourse'] ?? '';
            $cbCollege    = $_POST['cbCollege'] ?? '';
            $cbMajor      = $_POST['cbMajor'] ?? '';
            $filesname    = $_FILES['files']['name'];
            $tmp_name     = $_FILES['files']['tmp_name'];

            $this->loginModel->sign_up($txtStudentNo, $txtPassword, $txtFirstName, $txtMiddleName, $txtLastName, $cbYearLevel, $txtEmail, $cbCourse, $cbCollege, $cbMajor, $filesname);
            move_uploaded_file($tmp_name,'uploads/'.$filesname);

         }

      }

      public function sign_in()
      {
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $txtUName = $_POST['txtUName'];
            $txtPWord = $_POST['txtPWord'];

            $result       = $this->loginModel->sign_in($txtUName,$txtPWord);
            $admin_result = $this->loginAdminModel->sign_in_admin($txtUName,$txtPWord);

            if (empty($txtUName)) {

               $_SESSION['errUName'] = "Username is required!";
               header("Location: ?route=sign-in");

            } elseif (empty($txtPWord)) {
            
               $_SESSION['errPWord'] = "Password is required!";
               header("Location: ?route=sign-in");
            
            } else if ($result) {
               
               $_SESSION['username'] = $txtUName;
               header("Location: ?route=dashboard");
            
            } elseif($admin_result) {
            
               $_SESSION['admin-username'] = $txtUName;
               header("Location: ?route=admin-dashboard");
            
            } else {
            
               $_SESSION['errIncor'] = "Incorrect Username or Password.";
               header("Location: ?route=sign-in");
            
            }
         }
      }
   }
?>