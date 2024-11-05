<?php

class userManagementModel extends Connection
{
   # initialize the connection
   public function __construct() 
   {
      parent::__construct();
   }
   # end

   # fetch all records from user admin
   public function read_user_management()
   {
      $stmt = $this->getConnection()->prepare("SELECT * FROM tbl_admin_users ORDER BY userid");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }
   # end

   # check username if already exist
   public function invalid_username()
   {
      $stmt = $this->getConnection()->prepare("SELECT username FROM tbl_admin_users");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }
   # end

   # inert admin user
   public function admin_user_management_add($userLName,$userFName,$userMName,$userEmAdd,$userUName,$userPword)
   {
      $stmt = $this->getConnection()->prepare("INSERT INTO tbl_admin_users (lastname,firstname,middlename,emailaddress,username,admin_password) VALUES (?,?,?,?,?,?)");
      $stmt->execute([$userLName,$userFName,$userMName,$userEmAdd,$userUName,$userPword]);
   }
   # end

   # inert admin user
   public function admin_user_management_edit($userLName,$userFName,$userMName,$userEmAdd,$userUName,$userPword,$getuserId)
   {
      $stmt = $this->getConnection()->prepare("UPDATE tbl_admin_users SET lastname=?,firstname=?,middlename=?,emailaddress=?,username=?,admin_password=? WHERE userid =?");
      $stmt->execute([$userLName,$userFName,$userMName,$userEmAdd,$userUName,$userPword,$getuserId]);
   }
   # end

   # inert admin user
   public function admin_user_management_delete($getuserId)
   {
      $stmt = $this->getConnection()->prepare("DELETE FROM tbl_admin_users WHERE userid =?");
      $stmt->execute([$getuserId]);
   }
   # end

}