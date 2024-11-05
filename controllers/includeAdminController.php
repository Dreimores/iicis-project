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

      # user management admin
      public function college()
      {
         include_once('views/admin-colleges.php');
      }
      # end
   }
?>