<?php
   include_once('models/majorModel.php');
   class majorController
   {
      private $majorModel;
      public function __construct()
      {
         $this->majorModel = new majorModel();
      }

      public function submit_majors()
      {
         $majorId = $_POST['majorId'] ?? [];
         $major   = $_POST['major'] ?? [];
         # add major
         if(isset($_POST['add-course-form']))
         {
            $this->majorModel->submit_major_add($major);
            header('Location: ?route=major-list');
            $_SESSION['success'] = "Major has been successfuly added!";
         }
         # end

         # edit major
         if(isset($_POST['edit-course-form']))
         {
            $this->majorModel->submit_major_edit($major,$majorId);
            header('Location: ?route=major-list');  
            $_SESSION['success'] = "Major has been successfuly edited!";
         }
         # end

         # delete major
         if(isset($_POST['btnDeleteMajor']))
         {
            $majoriddel = $_POST['majorid'];
            $this->majorModel->submit_major_delete($majoriddel);
            $_SESSION['success'] = "Major has been successfuly deleted!";
         }
         # end

         # get major id
         isset($_POST['major-btn']) ? $this->majorModel->getIdMajor($_POST['selected-major']) : '';
         # end

      }
   }

?>