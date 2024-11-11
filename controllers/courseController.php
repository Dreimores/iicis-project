<?php

   include_once('models/courseModel.php');
   class courseController
   {
      private $courseModel;
      # instantiation course model class
      public function __construct()
      {
         $this->courseModel = new courseModel();
      }
      # end

      # submit course add
      public function submit_course()
      {
         # post cousre
         $courseId   = $_POST['courseId'] ?? '';
         $courseCode = $_POST['courseCode'] ?? '';
         $course     = $_POST['course'] ?? '';
         # end 
         
         # submit add course
         if(isset($_POST['add-course-form']))
         {
            $this->courseModel->submit_course_add($courseCode,$course);
            header('Location: ?route=course-list');
            $_SESSION['success'] = "Course has been successfully added!";
         }
         # end

         # submit edit course
         if(isset($_POST['edit-course-form']))
         {
            $this->courseModel->submit_course_edit($courseCode,$course,$courseId);
            header('Location: ?route=course-list');
            $_SESSION['success'] = "Course has been successfully edited!";
         }
         # end

         # submit delete course
         if(isset($_POST['btnDeleteCourse']))
         {
            $courseid = $_POST['courseid'];
            $this->courseModel->submit_course_del($courseid);
            $_SESSION['success'] = "Course has been successfully deleted!";
         }
         
         # get course id
         isset($_POST['course-btn']) ? $this->courseModel->getIdCourse($_POST['seleted-course']) : '';
         # end
      }
      # end
   }

?>