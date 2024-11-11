<?php
$includeAdminController = new includeAdminController();
$includeAdminController->header();
$includeAdminController->navbar();
?>
<div class="container-fluid">
   <div class="card">
      <div class="card-header">
         <div class="h4">List of Courses</div>
      </div>
      <div class="card-body">
         <div class="form-group">
            <a href="#" data-toggle="modal" data-target="#modal-courses" class="btn btn-primary add-show-modal-courses">
               <i class="fas fa-plus"></i>
               Add course
            </a>
         </div>
         <div class="table-responsive">
            <table class="table table-bordered" id="course-lists">
               <thead>
                  <tr>
                     <th>Course code</th>
                     <th>Course</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $courseModel = new courseModel();
                  $couserExist = [];
                  foreach ($courseModel->read_courses() as $row) { 
                     $couserExist[] = $row['coursecode'];
                     $couserExist[] = $row['course'];
                     ?>
                     <tr>
                        <td class="align-middle"><?=$row['coursecode']?></td>
                        <td class="align-middle"><?=$row['course']?></td>
                        <td class="align-middle">
                           <div class="btn-group d-flex justify-content-center">
                              <div>
                                 <a data-toggle="modal" data-target="#modal-courses" class="btn btn-sm btn-primary edit-show-modal-courses"
                                 courseidedit="<?=$row['courseid']?>"
                                 coursecode  ="<?=$row['coursecode']?>"
                                 courseedit  ="<?=$row['course']?>">
                                    <i class="fas fa-edit"></i>
                                 </a>
                              </div>
                              &nbsp;
                              <div>
                                 <button type="button" value="<?=$row['courseid']?>" class="btn btn-sm btn-danger delete-btn-courses">
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
<div class="modal fade" id="modal-courses" tabindex="-1" role="dialog" aria-hidden="true" data-keybord="false" data-backdrop="static">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header pt-2 pb-2 pl-3 pr-3">
            <div class="h6" id="Add_Courses"> Add </div>
            <div class="h6" id="Edit_Courses"> Edit </div>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <form action="?route=submit-courses" method="post">
            <div class="modal-body">
               <div class="form-group d-none">
                  <label for="courseId" class="col-form-label col-12">Course Id</label>
                  <div class="col-12">
                     <input type="text" id="courseId" name="courseId" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <label for="courseCode" class="col-form-label col-12">
                     Course Code <span class="text-danger" id="courseCodeReq"></span>
                  </label>
                  <div class="col-12">
                     <input type="text" id="courseCode" name="courseCode" class="form-control">
                     <input type="hidden" id="originalCourseCode">
                     <span class="text-danger" id="errCourseCode"></span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="course" class="col-form-label col-12">
                     Course <span class="text-danger" id="courseReq"></span>
                  </label>
                  <div class="col-12">
                     <input type="text" id="course" name="course" class="form-control"/>
                     <input type="hidden" id="originalCourse"/>
                     <span class="text-danger" id="errCourse"></span>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <div class="form-group mr-3">
                  <button class="btn btn-danger" type="button" data-dismiss="modal">
                     <i class="fas fa-ban"></i>
                     Cancel
                  </button>
                  <button type="submit" class="btn btn-success" name="add-course-form" id="add-course-form" disabled>
                     <i class="fas fa-save"></i>
                     Save
                  </button>
                  <button type="submit" class="btn btn-success" name="edit-course-form" id="edit-course-form">
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
   const couserExist = <?=json_encode($couserExist)?>;
   function verifyCourse()
   {
      const courseCode = $('#courseCode').val().trim();
      const originalCourseCode = $('#originalCourseCode').val().trim();  
      const course     = $('#course').val().trim();
      const originalCourse = $('#originalCourse').val().trim();
      const isFormValidAdd = courseCode.length > 2 && course.length > 2 && !couserExist.includes(courseCode) && !couserExist.includes(course);
      $('#add-course-form').prop('disabled', !isFormValidAdd);
      const isFormValidEdit = courseCode.length <= 2 || course.length <= 2 || courseCode !== originalCourseCode && couserExist.includes(courseCode) || course !== originalCourse && couserExist.includes(course);
      isFormValidEdit===true ? $('#edit-course-form').attr('disabled', isFormValidEdit) : $('#edit-course-form').removeAttr('disabled');
   }
   $('#courseCode').on('input',function(){
      const courseCode = $(this).val();
      const originalCourseCode = $('#originalCourseCode').val();
      if (courseCode.trim().length <= 0) {
         $('#errCourseCode').text('No blank spaces allowed.');
         $(this).addClass('is-invalid');
         $('#courseCodeReq').text('*');
      } else if(originalCourseCode === courseCode){
         $('#errCourseCode').text('');
         $(this).removeClass('is-invalid').addClass('is-valid');
         $('#courseCodeReq').text('');
      } else if (couserExist.includes(courseCode)) {
         $('#errCourseCode').text(courseCode + ' already exist.');
         $(this).addClass('is-invalid');
         $('#courseCodeReq').text('*');
      } else if (courseCode.trim().length <= 2) {
         $('#errCourseCode').text('Atleast 3 characters allowed required.');
         $(this).addClass('is-invalid');
         $('#courseCodeReq').text('*');
      } else {
         $('#errCourseCode').text('');
         $(this).removeClass('is-invalid').addClass('is-valid');
         $('#courseCodeReq').text('');
      }
      verifyCourse();
   });
   $('#course').on('input',function(){
      const course = $(this).val();
      const originalCourse = $('#originalCourse').val();
      if (course.trim().length <= 0) {
         $('#errCourse').text('No blank spaces allowed.');
         $(this).addClass('is-invalid');
         $('#courseReq').text('*');
      } else if(originalCourse === course) {
         $('#errCourse').text('');
         $(this).removeClass('is-invalid').addClass('is-valid');
         $('#courseReq').text('');
      } else if (couserExist.includes(course)) {
         $('#errCourse').text(course + ' already exist.');
         $(this).addClass('is-invalid');
         $('#courseReq').text('*');
      }  else if(course.trim().length <= 2) {
         $('#errCourse').text('Atleast 3 characters allowed required.');
         $(this).addClass('is-invalid');
         $('#courseReq').text('*');
      } else {
         $('#errCourse').text('');
         $(this).removeClass('is-invalid').addClass('is-valid');
         $('#courseReq').text('');
      }
      verifyCourse();
   })
   $('.add-show-modal-courses').on('click',function(){
      $('#courseId').val('');  
      $('#course').val('');
      $('#originalCourse').val('');
      $('#courseCode').val('');
      $('#originalCourseCode').val('');
      $('#edit-course-form').addClass('d-none');
      $('#add-course-form').removeClass('d-none');
      $('#Edit_Courses').addClass('d-none');
      $('#Add_Courses').removeClass('d-none');
   });
   $('.edit-show-modal-courses').on('click',function(){
      $('#courseId').val($(this).attr('courseidedit'));  
      $('#course').val($(this).attr('courseedit'));
      $('#originalCourse').val($(this).attr('courseedit'));
      $('#courseCode').val($(this).attr('coursecode'));
      $('#originalCourseCode').val($(this).attr('coursecode'));
      $('#add-course-form').addClass('d-none');
      $('#edit-course-form').removeClass('d-none');
      $('#Add_Courses').addClass('d-none');
      $('#Edit_Courses').removeClass('d-none');
   });

   $('.delete-btn-courses').click(function(e){
      const courseid = $(this).val();
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
               url: "?route=submit-courses",
               data: {
                  "btnDeleteCourse": 1,
                  "courseid": courseid
               },
               success: () => {
                  location.reload(); 
               },
            });
         }
      });
   })
</script>