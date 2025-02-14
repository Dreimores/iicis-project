<?php
$includeController = new includeStudentController();
$includeController->header();
$includeController->navbar();
?>
<div class="container-fluid">
   <div class="card">
      <div class="card-header">
         <div class="h4">Dash Board</div>
      </div>
      <div class="card-body">
         <div class="h4">Hello Student</div>
      </div>
   </div>
</div>
<?php
$includeController->footer();
$includeController->script();
?>