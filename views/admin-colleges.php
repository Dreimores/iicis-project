<?php
   $includeAdminController = new includeAdminController();
   $includeAdminController->header();
   $includeAdminController->navbar();
?>
<div class="container-fluid">
   <div class="card">
      <div class="card-header">
         <div class="h4">List of Colleges</div>
      </div>
      <div class="card-body">
         <div class="form-group">
            <a href="#" data-toggle="modal" data-target="#modal-colleges" class="btn btn-primary add-show-modal-colleges">
               <i class="fas fa-plus"></i>
               Add college
            </a>
         </div>
         <div class="table-responsive">
            <table class="table table-bordered" id="college-lists">
               <thead>
                  <tr>
                     <th>College code</th>
                     <th>College</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $collegeModel = new collegeModel();
                  $checkIfExist = [];
                  foreach ($collegeModel->read_colleges() as $row) { 
                     $checkIfExist[] = $row['collegecode'];
                     $checkIfExist[] = $row['college'];?>
                     <tr>
                        <td class="align-middle"><?=$row['collegecode']?></td>
                        <td class="align-middle"><?=$row['college']?></td>
                        <td class="align-middle">
                           <div class="btn-group d-flex justify-content-center">
                              <div>
                                 <a data-toggle="modal" data-target="#modal-colleges" class="btn btn-sm btn-primary edit-show-modal-colleges"
                                 collegeditid="<?=$row['colid']?>"
                                 collegecode="<?=$row['collegecode']?>"
                                 collegeedit="<?=$row['college']?>">
                                    <i class="fas fa-edit"></i>
                                 </a>
                              </div>
                              &nbsp;
                              <div>
                                 <button type="button" value="<?=$row['colid']?>" class="btn btn-sm btn-danger delete-btn-colleges">
                                    <i class="fas fa-trash-alt"></i>
                                 </button>
                              </div>
                           </div>
                        </td>
                     </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="modal-colleges" tabindex="-1" role="dialog" aria-hidden="true" data-keybord="false" data-backdrop="static">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header pt-2 pb-2 pl-3 pr-3">
            <div class="h6" id="Add_College"> Add </div>
            <div class="h6" id="Edit_College"> Edit </div>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <form action="?route=submit-colleges" method="post">
            <div class="modal-body">
               <div class="form-group d-none">
                  <label for="collegeId" class="col-form-label col-12">College Id</label>
                  <div class="col-12">
                     <input type="text" id="collegeId" name="collegeId" class="form-control"/>
                  </div>
               </div>
               <div class="form-group">
                  <label for="collegeCode" class="col-form-label col-12">
                     College Code <span class="text-danger" id="collegeCodeReq"></span>
                  </label>
                  <div class="col-12">
                     <input type="text" id="collegeCode" name="collegeCode" class="form-control"/>
                     <input type="hidden" id="originalCollegeCode"/>
                     <span class="text-danger" id="errCollegeCode"></span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="college" class="col-form-label col-12">
                     College <span class="text-danger" id="collegeReq"></span>
                  </label>
                  <div class="col-12">
                     <input type="text" id="college" name="college" class="form-control"/>
                     <input type="hidden" id="originalCollege"/>
                     <span class="text-danger" id="errCollege"></span>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <div class="form-group mr-3">
                  <button class="btn btn-danger" type="button" data-dismiss="modal">
                     <i class="fas fa-ban"></i>
                     Cancel
                  </button>
                  <button type="submit" class="btn btn-success add-college-form" name="add-college-form" id="add-college-form" disabled>
                     <i class="fas fa-save"></i>
                     Save
                  </button>
                  <button type="submit" class="btn btn-success edit-college-form" name="edit-college-form" id="edit-college-form">
                     <i class="fas fa-save"></i>
                     Save
                  </button>
               </div>
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
   const checkIfExist = <?=json_encode($checkIfExist)?>;
   function verifycollege(){

      const college         = $('#college').val().trim();  
      const originalCollege = $('#originalCollege').val();

      const collegeCode     = $('#collegeCode').val().trim();
      const originalCollegeCode = $('#originalCollegeCode').val();
      
      const isFormValidAdd = college.length > 2 && collegeCode.length > 2 && !checkIfExist.includes(college) && !checkIfExist.includes(collegeCode);
      $('.add-college-form').prop('disabled', !isFormValidAdd);

      const isFormValidEdit = college.length <= 2 || collegeCode.length <= 2 || college !== originalCollege && checkIfExist.includes(college) || collegeCode !== originalCollegeCode && checkIfExist.includes(collegeCode);
      isFormValidEdit === true ? $('.edit-college-form').attr('disabled', isFormValidEdit) : $('.edit-college-form').removeAttr('disabled'); 
   }
   $('#college').on('input',function(){
      const college = $('#college').val();
      const originalCollege = $('#originalCollege').val();
      if (college.trim().length <= 0) {
         $('#college').addClass('is-invalid');
         $('#errCollege').text('No blank spaces allowed.');
         $('#collegeReq').text('*');
      } else if (college.trim().length <= 2) {
         $('#college').addClass('is-invalid');
         $('#errCollege').text('At least 3 characters allowed required.');
         $('#collegeReq').text('*');
      } else if (originalCollege === college) {
         $('#college').removeClass('is-invalid').addClass('is-valid');
         $('#errCollege').text('');
         $('#collegeReq').text('');
      } else if (checkIfExist.includes(college)) {
         $('#errCollege').text(college + ' already exist!');
         $('#collegeReq').text('*');
         $('#college').addClass('is-invalid');
      } else {
         $('#college').removeClass('is-invalid').addClass('is-valid');
         $('#errCollege').text('');
         $('#collegeReq').text('');
      }
      verifycollege();
   });
   $('#collegeCode').on('input',function(){
      const collegeCode = $('#collegeCode').val()
      const originalCollegeCode = $('#originalCollegeCode').val();
      if (collegeCode.trim().length <= 0) {
         $('#collegeCode').addClass('is-invalid');
         $('#errCollegeCode').text('No blank spaces allowed.');
         $('#collegeCodeReq').text('*');
      } else if (originalCollegeCode === collegeCode) {
         $('#collegeCode').removeClass('is-invalid').addClass('is-valid');
         $('#errCollegeCode').text('');
         $('#collegeCodeReq').text('');
      } else if (checkIfExist.includes(collegeCode)) {
         $('#errCollegeCode').text(collegeCode + ' already exist!');
         $('#collegeCodeReq').text('*');
         $('#collegeCode').addClass('is-invalid');
      } else if(collegeCode.trim().length <= 2) {
         $('#collegeCode').addClass('is-invalid');
         $('#errCollegeCode').text('At least 3 characters allowed required.');
         $('#collegeCodeReq').text('*');
      } else {
         $('#collegeCode').removeClass('is-invalid').addClass('is-valid');
         $('#errCollegeCode').text('');
         $('#collegeCodeReq').text('');
      }
      verifycollege();
   });
   $('.add-show-modal-colleges').click(function(){
      $('#collegeId').val('');
      $('#college').val('');
      $('#originalCollege').val('');
      $('#collegeCode').val('');
      $('#originalCollegeCode').val('');
      $('#edit-college-form').addClass('d-none');
      $('#add-college-form').removeClass('d-none');
      $('#Add_College').removeClass('d-none');
      $('#Edit_College').addClass('d-none');
   });
   $('.edit-show-modal-colleges').on('click',function(){
      $('#collegeId').val($(this).attr('collegeditid'));
      $('#college').val($(this).attr('collegeedit'));
      $('#originalCollege').val($(this).attr('collegeedit'));
      $('#collegeCode').val($(this).attr('collegecode'));
      $('#originalCollegeCode').val($(this).attr('collegecode'));
      $('#add-college-form').addClass('d-none');
      $('#edit-college-form').removeClass('d-none');
      $('#Edit_College').removeClass('d-none');
      $('#Add_College').addClass('d-none');
   });

   // delete college
   $('.delete-btn-colleges').click(function(e) {
      const colledeid = $(this).val();
      e.preventDefault();
      swal({
         title: "Are you sure?",
         text: "Once deleted, you will not be able to recover it.",
         icon: "warning",
         buttons: true,
         dangerMode: true,
         closeOnClickOutside: false,
         buttons: {
            confirm: "Ok",
            cancel: "Cancel",
         },
      }).then((wilDelete) => {
         if (wilDelete) {
            $.ajax({
               type: "post",
               url: "?route=submit-colleges",
               data: {
                  "btnDeleteCollege": 1,
                  "colledeid": colledeid
               },
               success: () => {
                  swal({
                     title: "Success!",
                     text: "User admin has been successfully deleted!",
                     icon: "success",
                     closeOnClickOutside: false,
                     button: {
                        confirm: "Ok"
                     }
                  }).then(() => {
                     location.reload();
                  });
               },
            });
         }
      });
   });
   // end
</script>