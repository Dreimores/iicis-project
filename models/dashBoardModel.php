<?php

class dashBoardModel extends Connection
{
   # initialize the connection
   public function __construct()
   {
      parent::__construct();
   }
   # end

   # fetch all status
   public function all($status)
   {  
      if ($status==="Approved") $stmt = $this->getConnection()->prepare("SELECT COUNT(*) COUNT_APPROVED FROM tbl_stud_accounts WHERE status = ?");
      
      elseif ($status==="Pending...") $stmt = $this->getConnection()->prepare("SELECT COUNT(*) COUNT_PENDING FROM tbl_stud_accounts WHERE status = ?");
      
      elseif($status==="Single") $stmt = $this->getConnection()->prepare("SELECT COUNT(*) COUNT_SINGLE FROM tbl_personal_data WHERE p_cilvilstatus = ?");
      
      elseif ($status==="Marreid") $stmt = $this->getConnection()->prepare("SELECT COUNT(*) COUNT_MARRIED FROM tbl_personal_data WHERE p_cilvilstatus = ?");
      
      elseif ($status==="Female") $stmt = $this->getConnection()->prepare("SELECT COUNT(*) COUNT_FEMALE FROM tbl_personal_data WHERE p_sex = ?");
      
      elseif ($status==="Male") $stmt = $this->getConnection()->prepare("SELECT COUNT(*) COUNT_MALE FROM tbl_personal_data WHERE p_sex = ?");
      
      elseif ($status==="Ongoing") $stmt = $this->getConnection()->prepare("SELECT COUNT(*) COUNT_ONGING FROM tbl_intakeform WHERE CounselStatus = ?");
      
      elseif ($status==="Terminated") $stmt = $this->getConnection()->prepare("SELECT COUNT(*) COUNT_TERMINATED FROM tbl_intakeform WHERE CounselStatus = ?");
      else $stmt = $this->getConnection()->prepare("SELECT COUNT(*) COUNT_YES_PWD FROM tbl_ippwd_check_list WHERE ip_suffer_experience = ?");
      
      $stmt->execute([$status]);
      return $stmt->fetch(PDO::FETCH_ASSOC);
   }
   # end

   # Fetch all IP
   public function allIP($status)
   {
      $stmt = $this->getConnection()->prepare("SELECT COUNT(*) COUNT_YES_IP FROM tbl_ippwd_check_list WHERE ip_indigenous_group = ?");
      $stmt->execute([$status]);
      return $stmt->fetch(PDO::FETCH_ASSOC);
   }
   # end

   # fetch all students
   public function allStudensts()
   {
      $stmt = $this->getConnection()->prepare("SELECT COUNT(*) COUNT_STUDENT FROM tbl_stud_accounts");
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
   }
   # end

   # Get report terminal
   public function TRM($yr)
   {
      $stmt = $this->getConnection()->prepare("SELECT COUNT(*) AS COUNT_TRM FROM tbl_terminal_form WHERE YEAR(terDate) = ?");
      $stmt->execute([$yr]);
      return $stmt->fetch(PDO::FETCH_ASSOC);
   }
   # end

   # Get report Intake
   public function ITF($yr)
   {
      $stmt = $this->getConnection()->prepare("SELECT COUNT(*) AS COUNT_ITF FROM tbl_intakeform WHERE YEAR(Date) = ?");
      $stmt->execute([$yr]);
      return $stmt->fetch(PDO::FETCH_ASSOC);
   }
   # end

   # Get report Drop
   public function DRP($yr)
   {
      $stmt = $this->getConnection()->prepare("SELECT COUNT(*) AS COUNT_DRP FROM tbl_exit_drop WHERE YEAR(dropDate) = ?");
      $stmt->execute([$yr]);
      return $stmt->fetch(PDO::FETCH_ASSOC);
   }
   # end

    # Get report Trans
    public function TRANS($yr)
    {
       $stmt = $this->getConnection()->prepare("SELECT COUNT(*) AS COUNT_TRANS FROM tbl_exit_transfer WHERE YEAR(transDate) = ?");
       $stmt->execute([$yr]);
       return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    # end

}
