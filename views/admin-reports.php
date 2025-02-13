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
         <form action="?route=individual-reports" method="post">
            <div class="card-body">
               <div class="h3 text-center text-uppercase font-weight-bold text-gray-700"> 
                  individual inventory 
               </div>
               <hr>
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="form-group">
                        <label for="college" class="text-capitalize"> college: </label>
                        <select name="college" id="college" class="form-control college">
                           <option value="" class="d-none"> Choose... </option>
                           <option value=""> All Colleges </option>
                           <?php $collegeModel = new collegeModel();
                           foreach ($collegeModel->read_colleges() as $row) {?>
                           <option value="<?=$row['college']?>"><?=$row['college']?></option>
                           <?php }?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="yearlevel" class="text-capitalize"> Year Level: </label>
                        <select name="yearlevel" id="yearlevel" class="form-control">
                           <option value="" class="d-none"> Choose... </option>
                           <option value=""> All Year Level </option>
                           <option value="1"> 1 </option>
                           <option value="2"> 2 </option>
                           <option value="3"> 3 </option>
                           <option value="4"> 4 </option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="dateStart" class="text-capitalize"> From <span class="text-danger" id="dateStartreq"></span> </label>
                        <input type="date" name="dateStart" id="dateStart" class="form-control" required>
                        <span class="text-danger" id="errdateStart"></span>
                     </div>
                     <div class="form-group">
                        <label for="dateToEnd" class="text-capitalize"> To <span class="text-danger" id="dateToEndreq"></span> </label>
                        <input type="date" name="dateToEnd" id="dateToEnd" class="form-control">
                        <span class="text-danger" id="errdateToEnd"></span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-footer">
               <button type="submit" id="exportBtn" disabled class="btn btn-success">
                  <i class="fas fa-file-excel"></i>
                  Export
               </button>
            </div>
         </form>
      </div>
   </div>
</div>

<div class="container-fluid mb-3">
   <div class="card">
      <div class="card border-left-info h-100">
         <form action="?route=counseling-service" method="post">
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
                        <label for="fromCounselStart"> From: <span class="text-danger" id="fromCounselStartreq"></span> </label>
                        <input type="date" name="fromCounselStart" id="fromCounselStart" class="form-control"/>
                        <span class="text-danger" id="errfromCounselStart"></span>
                     </div>
                     <div class="form-group">
                        <label for="to_counsel_end"> To: <span class="text-danger" id="to_counsel_endreq"></span> </label>
                        <input type="date" name="to_counsel_end" id="to_counsel_end" class="form-control"/>
                        <span class="text-danger" id="errfromCounselStart"></span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-footer">
               <button type="submit" class="btn btn-success"> 
                  <i class="fas fa-file-excel"></i> 
                  Export 
               </button>
            </div>
         </form>
      </div>
   </div>
</div>

<div class="container-fluid">
   <div class="card">
      <div class="card border-left-success shadow h-100">
         <form action="?route=career-guidance" method="post">
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
                     <select name="careerGuidance" id="careerGuidance" class="form-control">
                        <option value="" class="d-none">Choose...</option>
                        <option value="Initial Interview"> Initial Interview </option>
                        <option value="Terminal Interview"> Terminal Interview </option>
                        <option value="Exit Interview for Dropping"> Exit Interview for Dropping </option>
                        <option value="Exit Interview for Transferring"> Exit Interview for Transferring </option>
                     </select>
                     <div class="form-group mt-4">
                        <label for="fromCareerGuidanceStart" class="text-capitalize"> From: </label>
                        <input type="date" name="fromCareerGuidanceStart" id="fromCareerGuidanceStart" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="toCareerGuidanceEnd" class="text-capitalize"> To: </label>
                        <input type="date" name="toCareerGuidanceEnd" id="toCareerGuidanceEnd" class="form-control">
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-footer">
               <button type="submit" class="btn btn-success">
                  <i class="fas fa-file-excel"></i> 
                  Export 
               </button>
            </div>
         </form>
      </div>
   </div>
</div>


<?php
   $includeAdminController->footer();
   $includeAdminController->script();
?>

<script>
  function isEmptyIndividual() {
      const dateStart = $('#dateStart').val().trim();
      const dateToEnd = $('#dateToEnd').val().trim();

      const isValidInputs = dateStart.length > 0 && dateToEnd.length > 0;
      $('#exportBtn').prop('disabled', !isValidInputs);
   }

   $('#dateStart, #dateToEnd').on('input change', isEmptyIndividual);

   $('#college').on('input', ()=>{$('#college').addClass('is-valid')})

   $('#yearlevel').on('input', ()=>{$('#yearlevel').addClass('is-valid')})

   $('#dateStart').on('input', ()=>{
      const dateStart = $('#dateStart').val().trim()
      if (dateStart.length <= 0) {
         $('#dateStartreq').text('*');
         $('#dateStart').addClass('is-invalid');
         $('#errdateStart').text('Please fill out this field.');
      } else {
         $('#dateStartreq').text('');
         $('#dateStart').removeClass('is-invalid').addClass('is-valid');
         $('#errdateStart').text('');
      }
   })

   $('#dateToEnd').on('input', ()=>{
      const dateStart = $('#dateToEnd').val().trim()
      if (dateStart.length <= 0) {
         $('#dateToEndreq').text('*');
         $('#dateToEnd').addClass('is-invalid');
         $('#errdateToEnd').text('Please fill out this field.');
      } else {
         $('#dateToEndreq').text('');
         $('#dateToEnd').removeClass('is-invalid').addClass('is-valid');
         $('#errdateToEnd').text('');
      }
   })

   $('#fromCounselStart').on('input', ()=>{
      const dateStart = $('#fromCounselStart').val().trim()
      if (dateStart.length <= 0) {
         $('#fromCounselStartreq').text('*');
         $('#dateToEnd').addClass('is-invalid');
         $('#errfromCounselStart').text('Please fill out this field.');
      } else {
         $('#fromCounselStartreq').text('');
         $('#dateToEnd').removeClass('is-invalid').addClass('is-valid');
         $('#errfromCounselStart').text('');
      }
   })

   $('#to_counsel_end').on('input', ()=>{
      const dateStart = $('#to_counsel_end').val().trim()
      if (dateStart.length <= 0) {
         $('#to_counsel_endreq').text('*');
         $('#to_counsel_end').addClass('is-invalid');
         $('#errto_counsel_end').text('Please fill out this field.');
      } else {
         $('#to_counsel_endreq').text('');
         $('#to_counsel_end').removeClass('is-invalid').addClass('is-valid');
         $('#errto_counsel_end').text('');
      }
   })
   
</script>