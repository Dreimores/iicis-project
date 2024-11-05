<?php
$includeAdminController = new includeAdminController();
$includeAdminController->header();
$includeAdminController->navbar();
?>
<div class="container-fluid">
   <div class="card">
      <div class="card-header">
         <div class="h4">List of Users</div>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<?php
$includeAdminController->footer();
$includeAdminController->script();
?>