<?php
   class majorModel extends Connection{
      
      public function __construct()
      {
         parent::__construct();
      }

      # read majors
      public function read_majors()
      {
         $stmt = $this->getConnection()->prepare("SELECT * FROM tblmajors ORDER BY majorid");
         $stmt->execute();
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
      # end

      # add major
      public function submit_major_add($major)
      {
         $stmt = $this->getConnection()->prepare("INSERT INTO tblmajors (major) VALUES (?)");
         $stmt->execute([$major]);
      }
      # end

      # edit major
      public function submit_major_edit($major,$majorid)
      {
         $stmt = $this->getConnection()->prepare("UPDATE tblmajors SET major=? WHERE majorid=?");
         $stmt->execute([$major,$majorid]);
      }
      # end

      # edit major
      public function submit_major_delete($majorid)
      {
         $stmt = $this->getConnection()->prepare("DELETE FROM tblmajors WHERE majorid=?");
         $stmt->execute([$majorid]);
      }
      # end 

      # get major id
      public function getIdMajor($major)
      {
         $stmt = $this->getConnection()->prepare("SELECT * FROM tblmajors WHERE major=?");
         $stmt->execute([$major]);
         while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo $row['majorid'];
         }
      }
      # end

   }

?>