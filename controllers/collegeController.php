<?php
include_once('models/collegeModel.php');
class collegeController
{
   private $collegeModel;

   public function __construct()
   {
      $this->collegeModel = new collegeModel();
   }
   # add, edit, delete submit colleges
   public function submit_colleges()
   {
      # post colleges
      $collegeId   = $_POST['collegeId'] ?? '';
      $collegeCode = $_POST['collegeCode'] ?? '';
      $college     = $_POST['college'] ?? '';
      
      # add 
      if(isset($_POST['add-college-form']))
      {
         $this->collegeModel->submit_colleges_add($collegeCode,$college);
         header('Location: ?route=college-list');
      }
      # end

      # edit 
      if(isset($_POST['edit-college-form']))
      {
         $this->collegeModel->submit_colleges_edit($collegeCode,$college,$collegeId);
         header('Location: ?route=college-list');
      }
      # end

      # delete
      isset($_POST['btnDeleteCollege']) ? $this->collegeModel->submit_colleges_delete($_POST['colledeid']) : '';
      # end

      # get course id
      isset($_POST['college-btn']) ? $this->collegeModel->getIdCollege($_POST['seleted-college']) : '';
      # end
   }
}