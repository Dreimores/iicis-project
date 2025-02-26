<?php
# initialize include controler to get the header, navbar, footer, script
$includeStudentController = new includeStudentController();
$studentFormsModel        = new studentFormsModel();
# end

$includeStudentController->header();
$includeStudentController->navbar();

foreach ($studentFormsModel->session_studentno($_SESSION['username']) as $row) {
?>
<div class="container-fluid">
      <div class="card">
         <div class="card-header">
            <div class="h4"> Profile </div>
         </div>
         <div class="card-body">
            <div class="form-group">
               <a href="?route=admin-dashboard"><i class="fas fa-arrow-left fa-1x text-black-50"></i></a>
            </div>
            <div class="form-group ml-2">
               <div class="d-none d-lg-inline">
                  <img class="img-profile rounded-circle sign-up-profile" width="100" src="<?= !empty($row['file_name']) ? "uploads/" . $row['file_name'] : "img/undraw_profile.svg" ?>" width="75" height="75">
                  <span class="text-gray-600"><?= $row['p_surname'] . " " . $row['p_firstname'] . " " . $row['p_middlename'] ?></span>
                  <a class="btn btn-sm btn-primary position-absolute" href="#" data-toggle="modal" data-target="#edited-profle" style="left: 6.8rem; top:10.5rem;"> <i class="fas fa-pencil-alt"></i> Edit profile </a>
               </div>
               <div class="d-flex flex-column justify-content-center align-items-center text-center d-lg-none d-inline">
                  <img class="img-profile rounded-circle sign-up-profile" width="100" src="<?= !empty($row['file_name']) ? "uploads/" . $row['file_name'] : "img/undraw_profile.svg" ?>" width="75" height="75">
                  <span class="text-gray-600"><?= $row['p_surname'] . " " . $row['p_firstname'] . " " . $row['p_middlename'] ?></span>
                  <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#edited-profle"> <i class="fas fa-pencil-alt"></i> Edit profile </a>
               </div>
            </div>
            <div class="form-group col-12 font-weight-bolder">
               My profile
            </div>
            <div class="form-group">
               <label for="" class="font-weight-bolder col-form-label col-12">
                  Last Name
               </label>
               <div class="col-12">
                  <input type="text" value="<?= $row['p_surname'] ?>" class="form-control border-0 mb-4 shadow-none" role="button" disabled />
               </div>
            </div>
            <div class="form-group">
               <label for="" class="font-weight-bolder col-form-label col-12">
                  First Name
               </label>
               <div class="col-12">
                  <input type="text" value="<?= $row['p_firstname'] ?>" class="form-control border-0 mb-4 shadow-none" role="button" disabled />
               </div>
            </div>
            <div class="form-group">
               <label for="" class="font-weight-bolder col-form-label col-12">
                  Middle Name
               </label>
               <div class="col-12">
                  <input type="text" value="<?= $row['p_middlename'] ?>" class="form-control border-0 mb-4 shadow-none" role="button" disabled />
               </div>
            </div>
            <div class="form-group">
               <label for="" class="font-weight-bolder col-form-label col-12">
                  Email Address
               </label>
               <div class="col-12">
                  <input type="text" value="<?= $row['email'] ?>" class="form-control mb-4 shadow-none" role="button" disabled />
               </div>
            </div>
            <div class="form-group">
               <label for="" class="font-weight-bolder col-form-label col-12">
                  Phone Number
               </label>
               <div class="col-12">
                  <input type="text" value="<?= $row['p_homeadd_telno'] ?>" class="form-control mb-4 shadow-none" role="button" disabled />
               </div>
            </div>
         </div>
         <div class="card-footer">
            <a class="btn btn-danger ml-2" href="#" data-toggle="modal" data-target="#">
               <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
               Logout
            </a>
         </div>
      </div>
   </div>
   <div class="modal fade" id="edited-profle" tabindex="-1" role="dialog" aria-hidden="true" data-keybord="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header pt-2 pb-2 pl-3 pr-3">
               <div class="h6" id="EditUser"> Edit </div>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>
            </div>
            <form action="?route=update-profile" method="post" enctype="multipart/form-data">
               <div class="modal-body">
                  <div class="d-flex justify-content-center mb-3">
                     <img src="<?=$row['file_name']!==''?'uploads/'.$row['file_name']:'img/undraw_profile.svg'?>" class="img-profile rounded-circle sign-up-profile" id="imgProfPicture" width="75" height="75"/>
                     <i class="fas fa-camera position-absolute bg-secondary text-white border-sign-up-profile" id="profile-sing-up"></i>
                     <input type="file" name="fileImage" id="fileImage" class="form-control p-1 d-none" />
                     <input type="hidden" name="old-image" id="old-image" value="<?=$row['file_name']?>" class="form-control p-1"/>
                  </div>
                  <div class="d-none">
                     <input type="hidden" value="<?=$_SESSION['username']?>" name="getuserId"/>
                  </div>
                  <div class="form-group">
                     <label for="userLName" class="col-form-label col-12">
                        Last Name <span class="text-danger" id="userLNameReq"></span>
                     </label>
                     <div class="col-12">
                        <input type="text" id="userLName" name="userLName" value="<?= $row['p_surname'] ?>" class="form-control" />
                        <span class="text-danger" id="errUserLName"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="userFName" class="col-form-label col-12">
                        First Name <span class="text-danger" id="userFNameReq"></span>
                     </label>
                     <div class="col-12">
                        <input type="text" id="userFName" name="userFName" value="<?= $row['p_firstname'] ?>" class="form-control" />
                        <span class="text-danger" id="errUserFName"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="userMName" class="col-form-label col-12">
                        Middle Name <span class="text-danger" id="userMNameReq"></span>
                     </label>
                     <div class="col-12">
                        <input type="text" id="userMName" name="userMName" value="<?= $row['p_middlename'] ?>" class="form-control" />
                        <span class="text-danger" id="errUserMName"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="userEmAdd" class="col-form-label col-12">
                        Email Address <span class="text-danger" id="userEmAddReq"></span>
                     </label>
                     <div class="col-12">
                        <input type="text" id="userEmAdd" name="userEmAdd" value="<?= $row['email'] ?>" class="form-control" />
                        <span class="text-danger" id="errUserEmAdd"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="userPhone" class="col-form-label col-12">
                        Phone Number <span class="text-danger" id="userPhoneReq"></span>
                     </label>
                     <div class="col-12">
                        <input type="text" id="userPhone" name="userPhone" value="<?= $row['p_homeadd_telno'] ?>" class="form-control" />
                        <input type="hidden" id="origUName" class="form-control">
                        <span class="text-danger" id="errUserPhone"></span>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <div class="form-group mr-3">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="fas fa-ban"></i>
                        Cancel
                     </button>
                     <button type="submit" name="btn-student-profile" class="btn btn-success add-user-profile">
                        <i class="fas fa-save"></i>
                        Save
                     </button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
<?php } ?>
<?php
   $includeStudentController->footer();
   $includeStudentController->script();
?>
<script>
   $('#profile-sing-up').click(function(){
      const fileImage = $('#fileImage');
      fileImage.click();
      $('#fileImage').on('change', function(e)
      {
         e.preventDefault();
         this.files[0] ? $('#imgProfPicture').attr('src', URL.createObjectURL(this.files[0])) : $(".sign-up-profile").attr(`src`, `img/undraw_profile.svg`);
      });
   })

   function verifyProfileInputs() 
   {
      const userLName    = $('#userLName').val().trim();
      const userFName    = $('#userFName').val().trim();
      const userMName    = $('#userMName').val().trim();
      const userEmAdd    = $('#userEmAdd').val().trim();
      const emailIsValid = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(userEmAdd);
      const userPhone    = $('#userPhone').val().trim();
      const isFormValidTwo  = userLName.length > 2 && userFName.length > 2 && userMName.length > 2 && userEmAdd.length > 2 && emailIsValid && userPhone.length > 10;
      $(".add-user-profile").attr("disabled", !isFormValidTwo);
   }
   $('#userLName').on('input', () => {
      const userLName = $('#userLName').val();
      if (userLName.trim().length <= 0) {
         $('#userLName').addClass('is-invalid');
         $('#userLNameReq').text('*');
         $('#errUserLName').text('No blank spaces allowed.');
      } else if (userLName.trim().length <= 2) {
         $('#userLName').addClass('is-invalid');
         $('#userLNameReq').text('*');
         $('#errUserLName').text('At least 3 characters allowed required.');
      } else {
         $('#userLName').removeClass('is-invalid').addClass('is-valid');
         $('#userLNameReq').text('');
         $('#errUserLName').text('');
      }
      verifyProfileInputs()
   });
   $('#userFName').on('input', () => {
      const userFName = $('#userFName').val();
      if (userFName.trim().length <= 0) {
         $('#userFName').addClass('is-invalid');
         $('#userFNameReq').text('*');
         $('#errUserFName').text('No blank spaces allowed.');
      } else if (userFName.trim().length <= 2) {
         $('#userFName').addClass('is-invalid');
         $('#userFNameReq').text('*');
         $('#errUserFName').text('At least 3 characters allowed required.');
      } else {
         $('#userFName').removeClass('is-invalid').addClass('is-valid');
         $('#userFNameReq').text('');
         $('#errUserFName').text('');
      }
      verifyProfileInputs()
   })
   $('#userMName').on('input', () => {
      const userMName = $('#userMName').val();
      if (userMName.trim().length <= 0) {
         $('#userMName').addClass('is-invalid');
         $('#userMNameReq').text('*');
         $('#errUserMName').text('No blank spaces allowed.');
      } else if (userMName.trim().length <= 2) {
         $('#userMName').addClass('is-invalid');
         $('#userMNameReq').text('*');
         $('#errUserMName').text('At least 3 characters allowed required.');
      } else {
         $('#userMName').removeClass('is-invalid').addClass('is-valid');
         $('#userMNameReq').text('');
         $('#errUserMName').text('');
      }
      verifyProfileInputs()
   })
   $('#userEmAdd').on('input', () => {
      const userEmAdd = $('#userEmAdd').val();
      if (userEmAdd.trim().length <= 0) {
         $('#userEmAdd').addClass('is-invalid');
         $('#userEmAddReq').text('*');
         $('#errUserEmAdd').text('No blank spaces allowed.');
      } else if (userEmAdd.trim().length <= 2) {
         $('#userEmAdd').addClass('is-invalid');
         $('#userEmAddReq').text('*');
         $('#errUserEmAdd').text('At least 3 characters allowed required.');
      } else if (!/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(userEmAdd)) {
         $('#errUserEmAdd').text('Invalid Email Address.');
         $('#userEmAddReq').text('*');
         $('#userEmAdd').addClass('is-invalid');
      } else {
         $('#userEmAdd').removeClass('is-invalid').addClass('is-valid');
         $('#userEmAddReq').text('');
         $('#errUserEmAdd').text('');
      }
      verifyProfileInputs()
   });

   $('#userPhone').on('input', () => {
      const userPhone = $('#userPhone').val().trim(); // Trim input value
      if (userPhone.length <= 0) {
         $('#userPhone').addClass('is-invalid');
         $('#userPhoneReq').text('*');
         $('#errUserPhone').text('No blank spaces allowed.');
      } else if (!/^\d+$/.test(userPhone)) { // Ensures only digits
         $('#userPhone').addClass('is-invalid');
         $('#userPhoneReq').text('*');
         $('#errUserPhone').text('Only numbers are allowed.');
      } else if (userPhone.length !== 11) { // Checks if it is exactly 11 digits
         $('#userPhone').addClass('is-invalid');
         $('#userPhoneReq').text('*');
         $('#errUserPhone').text('Phone number must be exactly 11 digits.');
      } else {
         $('#userPhone').removeClass('is-invalid').addClass('is-valid');
         $('#userPhoneReq').text('');
         $('#errUserPhone').text('');
      }
      verifyProfileInputs();
   });
</script>