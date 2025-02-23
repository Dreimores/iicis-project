<?php
   class includeStudentController
   {
      # header
      public function header()
      {
         include_once('views/student-header.php');
      }
      # end

      # navbar
      public function navbar()
      {
         include_once('views/student-navbar.php');
      }
      # end

      # footer
      public function footer()
      {
         include_once('views/student-footer.php');  
      }
      # end

      # script
      public function script()
      {
         include_once('views/student-script.php');
      }
      # end
      
      # home index
      public function index()
      {
         include_once('views/student-home.php');
      }
      # end

      # login 
      public function login()
      {
         include_once('views/student-login.php');
      }
      # end
      
      # if file already exist
      public function check_file_exist()
      {
         # Check if 'filename' is set in the POST data
         if (isset($_POST['filename'])) {
            header('Content-Type: application/json');
            $filename = $_POST['filename'];
            $filePath = "uploads/" . $filename;
            $response = ['exists' => file_exists($filePath)];
            echo json_encode($response);
         }   
      }
      # end

      # dashboard
      public function dashboard()
      {
         include_once('views/student-dashboard.php');
      }
      # end

      # student forms
      public function student_forms()
      {
         include_once('views/student-forms.php');
      }
      # end

      # student views forms
      public function views()
      {
         include_once('views/admin-views.php');
      }
      # end
   }
?>