<?php
$includeAdminController = new includeAdminController();
$includeAdminController->header();
$includeAdminController->navbar();
?>

<div class="container-fluid mb-2">
   <div class="card">
      <div class="card-header">
         <div class="h4 text-gray-800 font-weight-bold text-uppercase mb-5 d-inline">
            <i class="fas fa-download"></i>
            generate report
         </div>
      </div>
   </div>
</div>

<div class="container-fluid mb-3">
   <div class="card">
      <div class="card border-left-primary h-100">
         <div class="card-body">
            <div class="h3 text-center text-uppercase font-weight-bold text-gray-700"> 
               individual inventory 
            </div>
            <hr>
            <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                  <div class="form-group">
                     <label for="collegecode" class="text-capitalize"> college: </label>
                     <select name="collegecode" id="collegecode" class="form-control college">
                        <option value=""> Choose... </option>
                        <option value=""> All Colleges </option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="year_level" class="text-capitalize"> Year Level: </label>
                     <select name="year_level" id="year_level" class="form-control">
                        <option value="" class="d-none"> Choose... </option>
                        <option value=""> All Year Level </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="date_from_start" class="text-capitalize"> From </label>
                     <input type="date" name="date_from_start" id="date_from_start" class="form-control">
                  </div>
                  <div class="form-group">
                     <label for="date_to_end" class="text-capitalize"> To </label>
                     <input type="date" name="date_to_end" id="date_to_end" class="form-control">
                  </div>
               </div>
            </div>
         </div>
         <div class="card-footer">
            <button type="submit" name="save-btn-report" class="btn btn-success">
               <i class="fas fa-file-excel"></i>
               Export
            </button>
         </div>
      </div>
   </div>
</div>

<div class="container-fluid mb-3">
   <div class="card">
      <div class="card border-left-info h-100">
         <div class="card-body">
            <div class="text-center">
               <div class="h3 text-uppercase font-weight-bold text-gray-700"> 
                  counseling service 
               </div>
               <hr>
            </div>
            <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                  <div class="form-group">
                     <label for="from_counsel_start"> From: </label>
                     <input type="date" name="from_counsel_start" id="from_counsel_start" class="form-control"/>
                  </div>
                  <div class="form-group">
                     <label for="to_counsel_end"> To: </label>
                     <input type="date" name="to_counsel_end" id="to_counsel_end" class="form-control"/>
                  </div>
               </div>
            </div>
         </div>
         <div class="card-footer">
            <button type="submit" name="save-counsel-btn-services" class="btn btn-success"> 
               <i class="fas fa-file-excel"></i> 
               Export 
            </button>
         </div>
      </div>
   </div>
</div>

<div class="container-fluid">
   <div class="card">
      <div class="card border-left-success shadow h-100">
         <div class="card-body">
            <div class="text-center">
               <div class="h3 text-uppercase font-weight-bold text-gray-700"> 
                  career guidance 
               </div>
               <hr>
            </div>
            <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                  <label> Choose type Career Guidance: </label>
                  <select name="career_guidance" id="career_guidance" class="form-control">
                     <option value="" class="d-none">Choose...</option>
                     <option value="Initial Interview"> Initial Interview </option>
                     <option value="Terminal Interview"> Terminal Interview </option>
                     <option value="Exit Interview for Dropping"> Exit Interview for Dropping </option>
                     <option value="Exit Interview for Transferring"> Exit Interview for Transferring </option>
                  </select>
                  <div class="form-group mt-4">
                     <label for="from_career_guidance_start" class="text-capitalize"> From: </label>
                     <input type="date" name="from_career_guidance_start" id="from_career_guidance_start" class="form-control">
                  </div>
                  <div class="form-group">
                     <label for="to_career_guidance_end" class="text-capitalize"> To: </label>
                     <input type="date" name="to_career_guidance_end" id="to_career_guidance_end" class="form-control">
                  </div>
               </div>
            </div>
         </div>
         <div class="card-footer">
            <button type="submit" name="save-career-guidance-btn" class="btn btn-success">
               <i class="fas fa-file-excel"></i> 
               Export 
            </button>
         </div>
      </div>
   </div>
</div>


<?php
$includeAdminController->footer();
$includeAdminController->script();
?>