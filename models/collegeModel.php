<?php

class collegeModel extends Connection
{  
   # initialize the connection
   public function __construct() 
   {
      parent::__construct();
   }
   # end 

   # read colleges
   public function read_colleges()
   {
      $stmt = $this->getConnection()->prepare("SELECT * FROM tblcolleges ORDER BY colid");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }
   # end

   # add colleges
   public function submit_colleges_add($collegecode,$college)
   {
      $stmt = $this->getConnection()->prepare("INSERT INTO tblcolleges (collegecode,college) VALUES (?,?)");
      $stmt->execute([$collegecode,$college]);
   }
   # end

   # edit college
   public function submit_colleges_edit($collegecode,$college,$colid)
   {
      $stmt = $this->getConnection()->prepare("UPDATE tblcolleges SET collegecode=?,college=? WHERE colid=?");
      $stmt->execute([$collegecode,$college,$colid]);
   }
   # end

   # delete college
   public function submit_colleges_delete($collegeid)
   {
      $stmt = $this->getConnection()->prepare("DELETE FROM tblcolleges WHERE colid=?");
      $stmt->execute([$collegeid]);
   }
   # end

   # get college id
   public function getIdCollege($course)
   {
      $stmt = $this->getConnection()->prepare("SELECT * FROM tblcolleges WHERE college=?");
      $stmt->execute([$course]);
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
         echo $row['colid'];
      }
   }
   # end
}