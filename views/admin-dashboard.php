<?php
$includeAdminController = new includeAdminController();
$includeAdminController->header();
$includeAdminController->navbar();
?>
<div class="container-fluid">
   <div class="card">
      <div class="card-header">
         <div class="h4">Dash Board</div>
      </div>
      <div class="card-body">
         <div class="h4">Hello Admin</div>
      </div>
   </div>
</div>
<?php
$includeAdminController->footer();
$includeAdminController->script();
?>