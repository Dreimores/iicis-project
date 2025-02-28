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
      public function admin_user_management_add($files,$userLName,$userFName,$userMName,$userEmAdd,$userUName,$userPword)
      {
         $stmt = $this->getConnection()->prepare("INSERT INTO tbl_admin_users (admin_picture,lastname,firstname,middlename,emailaddress,username,admin_password) VALUES (?,?,?,?,?,?,?)");
         $stmt->execute([$files,$userLName,$userFName,$userMName,$userEmAdd,$userUName,$userPword]);
      }
      # end

      # inert admin user
      public function admin_user_management_edit($files,$userLName,$userFName,$userMName,$userEmAdd,$userUName,$userPword,$getuserId)
      {
         $stmt = $this->getConnection()->prepare("UPDATE tbl_admin_users SET admin_picture=?,lastname=?,firstname=?,middlename=?,emailaddress=?,username=?,admin_password=? WHERE userid =?");
         $stmt->execute([$files,$userLName,$userFName,$userMName,$userEmAdd,$userUName,$userPword,$getuserId]);
      }
      # end

      # inert admin user
      public function admin_user_management_delete($getuserId)
      {
         $stmt = $this->getConnection()->prepare("DELETE FROM tbl_admin_users WHERE userid =?");
         $stmt->execute([$getuserId]);
      }
      # end

      # get full name
      public function admin_username($studentno)
      {
         $stmt = $this->getConnection()->prepare("SELECT * FROM tbl_admin_users WHERE username = ?");
         $stmt->execute([$studentno]);
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
      # end

      # admin update profile
      public function update_profile($adminPicture,$userLName, $userFName, $userMName, $userEmAdd, $userPhone, $username)
      {
         $stmt = $this->getConnection()->prepare("UPDATE tbl_admin_users SET admin_picture=?,lastname=?,firstname=?,middlename=?,emailaddress=?,phoneNumber=? WHERE username =?");
         $stmt->execute([$adminPicture, $userLName, $userFName, $userMName, $userEmAdd, $userPhone, $username]);
      }
      # end

      # studnet update profile
      public function stud_update_profile($adminPicture,$userLName, $userFName, $userMName, $userEmAdd, $userPhone, $username)
      {
         $stmt = $this->getConnection()->prepare(
            "UPDATE tbl_stud_accounts  AS sa 
            JOIN tbl_personal_data     AS pd 
            ON sa.studentno = pd.studentno 
            SET sa.file_name = ?, pd.p_surname = ?, pd.p_firstname = ?, pd.p_middlename = ?, sa.email = ?, pd.p_homeadd_telno = ? 
            WHERE sa.studentno = ?"
            );
         $stmt->execute([$adminPicture, $userLName, $userFName, $userMName, $userEmAdd, $userPhone, $username]);
      }
      # end

      # change password
      public function change_pass($newPassword,$studentno)
      {
         $stmt = $this->getConnection()->prepare("UPDATE tbl_stud_accounts SET pword = ? WHERE studentno = ?");
         $stmt->execute([$newPassword, $studentno]);
      }
      # end

   }

?>