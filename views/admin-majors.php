<?php
$includeAdminController = new includeAdminController();
$includeAdminController->header();
$includeAdminController->navbar();
?>
<div class="container-fluid">
   <div class="card">
      <div class="card-header">
         <div class="h4">List of Majors</div>
      </div>
      <div class="card-body">
         <div class="form-group">
            <a href="#" data-toggle="modal" data-target="#modal-major" class="btn btn-primary add-show-modal-major">
               <i class="fas fa-plus"></i>
               Add major
            </a>
         </div>
         <div class="table-responsive">
            <table class="table table-bordered" id="major-lists">
               <thead>
                  <tr>
                     <th>Major</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $majorModel = new majorModel();
                     $majorExist = [];
                     foreach ($majorModel->read_majors() as $row) { 
                        $majorExist[] = $row['major']?>
                     <tr>
                        <td class="align-middle"><?=$row['major']?></td>
                        <td class="align-middle col-2">
                           <div class="btn-group d-flex justify-content-center">
                              <div>
                                 <a data-toggle="modal" data-target="#modal-major" class="btn btn-sm btn-primary edit-show-modal-major"
                                 majorid ="<?=$row['majorid']?>"
                                 major   ="<?=$row['major']?>">
                                 <i class="fas fa-pencil-alt"></i>
                                 </a>
                              </div>
                              &nbsp;
                              <div>
                                 <button type="button" value="<?=$row['majorid']?>" class="btn btn-sm btn-danger delete-btn-majors">
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
<div class="modal fade" id="modal-major" tabindex="-1" role="dialog" aria-hidden="true" data-keybord="false" data-backdrop="static">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header pt-2 pb-2 pl-3 pr-3">
            <div class="h6" id="Add_majors"> Add </div>
            <div class="h6" id="Edit_majors"> Edit </div>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <form action="?route=submit-majors" method="post">
            <div class="modal-body">
               <div class="form-group d-none">
                  <label for="majorId" class="col-form-label col-12">Major Id</label>
                  <div class="col-12">
                     <input type="text" id="majorId" name="majorId" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label for="major" class="col-form-label col-12">
                     Major <span class="text-danger" id="majorReq"></span>
                  </label>
                  <div class="col-12">
                     <input type="text" id="major" name="major" class="form-control">
                     <input type="hidden" id="originalMajor">
                     <span class="text-danger" id="errMajor"></span>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <div class="form-group mr-3">
                  <button class="btn btn-danger" type="button" data-dismiss="modal">
                     <i class="fas fa-ban"></i>
                     Cancel
                  </button>
                  <button type="submit" class="btn btn-success add-course-form" name="add-course-form" id="add-course-form" disabled>
                     <i class="fas fa-save"></i>
                     Save
                  </button>
                  <button type="submit" class="btn btn-success edit-course-form" name="edit-course-form" id="edit-course-form">
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
   const majorExist = <?=json_encode($majorExist)?>;
   function verifyCourse()
   {
      const major = $('#major').val().trim();
      const originalMajor = $('#originalMajor').val().trim();
      const isFormValidAdd = major.length > 2 && !majorExist.includes(major);
      $('.add-course-form').prop('disabled', !isFormValidAdd);

      const isFormValidEdit = major.length <= 2 || major !== originalMajor && majorExist.includes(major);
      isFormValidEdit===true ? $('.edit-course-form').attr('disabled', isFormValidEdit) : $('.edit-course-form').removeAttr('disabled');
   }
   $('#major').on('input',function(){
      const major = $(this).val();
      const originalMajor = $('#originalMajor').val();
      if(major.trim().length <= 0){
         $('#majorReq').text('*');
         $('#errMajor').text('No blank spaces allowed.');
         $(this).addClass('is-invalid');
      } else if (originalMajor === major) {
         $('#majorReq').text('');
         $(this).removeClass('is-invalid').addClass('is-valid');
         $('#errMajor').text('');
      } else if (majorExist.includes(major)) {
         $('#majorReq').text('*');
         $('#errMajor').text(major + ' already exist.');
         $(this).addClass('is-invalid');
      } else if (major.trim().length <= 2) {
         $('#majorReq').text('*');
         $('#errMajor').text('Atleast 3 characters allowed required.');
         $(this).addClass('is-invalid');
      } else {
         $('#majorReq').text('');
         $(this).removeClass('is-invalid').addClass('is-valid');
         $('#errMajor').text('');
      }
      verifyCourse();
   })
   $('.add-show-modal-major').click(function(){
      $('#majorId').val('');
      $('#major').val('');
      $('#originalMajor').val('');
      $('#edit-course-form').addClass('d-none');
      $('#add-course-form').removeClass('d-none');
      $('#Add_majors').removeClass('d-none');
      $('#Edit_majors').addClass('d-none');
   });
   $('.edit-show-modal-major').on('click',function(){
      $('#majorId').val($(this).attr('majorid'));
      $('#major').val($(this).attr('major'));
      $('#originalMajor').val($(this).attr('major'));
      $('#add-course-form').addClass('d-none');
      $('#edit-course-form').removeClass('d-none');
      $('#Edit_majors').removeClass('d-none');
      $('#Add_majors').addClass('d-none');
   });
   
   $('.delete-btn-majors').click(function(e){
      const majorid = $(this).val();
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
               url: "?route=submit-majors",
               data: {
                  "btnDeleteMajor": 1,
                  "majorid": majorid
               },
               success: () => {
                  location.reload(); 
               },
            });
         }
      });
   })
</script>