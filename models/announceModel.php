<?php
   class announceModel extends Connection
   {

      public function __construct()
      {
         parent::__construct();
      }

      public function read_announce()
      {
         $stmt = $this-> getConnection()->prepare("SELECT * FROM tbl_announcement ORDER BY id ASC");
         $stmt->execute();
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }

      public function add_annouce($announce)
      {
         $stmt = $this->getConnection()->prepare("INSERT INTO tbl_announcement (announce) VALUES (?)");
         $stmt->execute([$announce]);
      }

      public function update_announce($announce,$id)
      {
         $stmt = $this->getConnection()->prepare("UPDATE tbl_announcement SET announce = ? WHERE id = ?");
         $stmt->execute([$announce,$id]);
      }

      public function show_announce()
      {
         $stmt = $this-> getConnection()->prepare("SELECT * FROM tbl_announcement ORDER BY id DESC LIMIT 3");
         $stmt->execute();
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
   }
?>