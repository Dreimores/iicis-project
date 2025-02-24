<?php 

class announceController
{
   private $announceModel;

   public function __construct()
   {
      $this->announceModel = new announceModel();
   }

   public function add_annouce()
   {  
      $id_Ann       = $_POST['id-ann'];
      $AnnounceHere = $_POST['AnnounceHere'];

      if (isset($_POST['add-ann'])) {
         $this->announceModel->add_annouce($AnnounceHere);
         header("Location: ?route=announcement");
      } else {
         $this->announceModel->update_announce($AnnounceHere,$id_Ann);
         header("Location: ?route=announcement");
      }
   }
}