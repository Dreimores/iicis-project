<?php
   class includeAdminController
   {
      # header admin
      public function header()
      {
         include_once('views/admin-header.php');
      }
      # end

      # navbar admin
      public function navbar()
      {
         include_once('views/admin-navbar.php');
      }
      # end
      
      # footer admin
      public function footer()
      {
         include_once('views/admin-footer.php');
      }
      # end
      
      # script admin
      public function script()
      {
         include_once('views/admin-script.php');
      }
      # end
      
      # dashboard admin
      public function admin_dashboard()
      {
         include_once('views/admin-dashboard.php');
      }
      # end

      # user management admin
      public function user_management()
      {
         include_once('views/admin-user-manage.php');
      }
      # end

      # college
      public function college()
      {
         include_once('views/admin-colleges.php');
      }
      # end

      # course
      public function course()
      {
         include_once('views/admin-courses.php');
      }
      # end

      # major
      public function majors()
      {
         include_once('views/admin-majors.php');
      }
      # end
      
      # student information
      public function student_info()
      {
         include_once('views/admin-student-info.php');
      }
      # end

      # intake form
      public function intake_form()
      {
         include_once('views/admin-intakeform.php');
      }
      # end

      # terminal Interview
      public function terminalInterviewForm() 
      {
         include_once('views/admin-terminalform.php');   
      }
      # end

      # exit drop
      public function exit_drop()
      {
         include_once('views/admin-exit-drop.php');
      }
      # end

      # exit transfer
      public function exit_trans()
      {
         include_once('views/admin-exit-trans.php');
      }
      # end

      # exit reports
      public function reports()
      {
         include_once('views/admin-reports.php');
      }
      # end

      # announce
      public function announce()
      {
         include_once('views/admin-announce.php');
      }
      # end

      # 404 page not found
      public function page_not_found() 
      {
         include_once('views/404.html');
      }
      # end
   }
?>