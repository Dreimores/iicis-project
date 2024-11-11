<?php

   class courseModel extends Connection{

      public function __construct()
      {
         parent::__construct();
      }

      # read course
      public function read_courses()
      {
         $stmt = $this->getConnection()->prepare("SELECT * FROM tblcourses ORDER BY courseid");
         $stmt->execute();
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
      # end

      # query add course
      public function submit_course_add($courseCode,$course)
      {
         $stmt = $this->getConnection()->prepare("INSERT INTO tblcourses (coursecode,course) VALUES (?,?)");
         $stmt->execute([$courseCode,$course]);
      }
      # end

      # query edit course
      public function submit_course_edit($courseCode,$course,$courseid)
      {
         $stmt = $this->getConnection()->prepare("UPDATE tblcourses SET coursecode=?,course=? WHERE courseid=?");
         $stmt->execute([$courseCode,$course,$courseid]);
      }
      # end

      # query delete course
      public function submit_course_del($courseid)
      {
         $stmt = $this->getConnection()->prepare("DELETE FROM tblcourses WHERE courseid=?");
         $stmt->execute([$courseid]);
      }
      # end

      # query get course id
      public function getIdCourse($course)
      {
         $stmt = $this->getConnection()->prepare("SELECT * FROM tblcourses WHERE course=?");
         $stmt->execute([$course]);
         while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
         {
            echo $row['courseid'];
         }
      }
      # end

   }

?>