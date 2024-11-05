<?php

class loginAdminModel extends Connection
{
   # initialize the connection
   public function __construct() 
   {
      parent::__construct();
   }
   # end 

   # create an account for admin
   public function createAdminAccount($adminLastName,$adminFirstName,$adminMiddleName,$adminEmailAddress,$adminUserName,$adminPassword)
   {
      $stmp = $this->getConnection()->prepare("INSERT INTO tbl_admin_users (lastname,firstname,middlename,emailaddress,username,admin_password) VALUES (?,?,?,?,?,?)");
      $stmp->execute([$adminLastName,$adminFirstName,$adminMiddleName,$adminEmailAddress,$adminUserName,$adminPassword]);
   }
   # end

   # sign in method for admin
   public function sign_in_admin($username, $admin_password)
   {
      $stmt = $this->getConnection()->prepare("SELECT * FROM tbl_admin_users WHERE username = ? AND admin_password = ?");
      $stmt->execute([$username, $admin_password]);
      return $stmt->fetch(PDO::FETCH_ASSOC);
   }
   # end 

}