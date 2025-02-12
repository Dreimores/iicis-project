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
         <div class="form-group">
            <a href="#" data-toggle="modal" data-target="#user-management" class="btn btn-primary show-modal-add">
               <i class="fas fa-plus"></i>
               Add user
            </a>
         </div>
         <div class="table-responsive">
            <table class="table table-bordered" id="userAdminList" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     <th class="align-middle text-nowrap"> Profile </th>
                     <th class="align-middle text-nowrap"> Last Name </th>
                     <th class="align-middle text-nowrap"> First Name </th>
                     <th class="align-middle text-nowrap"> Middle Name </th>
                     <th class="align-middle text-nowrap"> Email Address </th>
                     <th class="align-middle text-nowrap"> User Name </th>
                     <th> Actions </th>
                  </tr>
               </thead>
               <tbody>
                  <?php $userManagementModel = new userManagementModel();
                  $username = json_encode($userManagementModel->invalid_username());
                  foreach ($userManagementModel->read_user_management() as $row) { ?>
                     <tr>
                        <td class="d-flex justify-content-center align-items-center p-1"><img src="<?=!empty($row['admin_picture'])?'uploads/'.$row['admin_picture']:'img/undraw_profile.svg'?>" class="img-profile rounded-circle user-profile"></td>
                        <td class="align-middle text-nowrap"><?=$row['lastname']?></td>
                        <td class="align-middle text-nowrap"><?=$row['firstname']?></td>
                        <td class="align-middle text-nowrap"><?=$row['middlename']?></td>
                        <td class="align-middle text-nowrap"><?=$row['emailaddress']?></td>
                        <td class="align-middle text-nowrap"><?=$row['username']?></td>
                        <td class="align-middle p-0">
                           <div class="d-flex justify-content-center align-items-center">
                              <div class="btn-group">
                                 <a href="#" data-toggle="modal" data-target="#user-management" class="btn btn-sm btn-primary show-modal-edit"
                                    getUsrId="<?=$row['userid']?>"
                                    fileimge="<?=$row['admin_picture']?>"
                                    getLname="<?=$row['lastname']?>"
                                    getFname="<?=$row['firstname']?>"
                                    getMname="<?=$row['middlename']?>"
                                    getEmail="<?=$row['emailaddress']?>"
                                    username="<?=$row['username']?>"
                                    password="<?=$row['admin_password']?>">
                                    <i class="fas fa-pencil-alt"></i>
                                 </a>
                              </div>
                              &nbsp;
                              <div class="btn-group">
                                 <button type="button" value="<?=$row['userid']?>" image="<?=$row['admin_picture']?>" class="btn btn-sm btn-danger btn-delete-admin-user">
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
<div class="modal fade" id="user-management" tabindex="-1" role="dialog" aria-hidden="true" data-keybord="false" data-backdrop="static">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header pt-2 pb-2 pl-3 pr-3">
            <div class="h6" id="Add_User"> Add </div>
            <div class="h6" id="EditUser"> Edit </div>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="d-flex justify-content-center mb-3">
               <img src="img/undraw_profile.svg" class="img-profile rounded-circle sign-up-profile" id="imgProfPicture" width="75" height="75"/>
               <i class="fas fa-camera position-absolute bg-secondary text-white border-sign-up-profile" id="profile-sing-up"></i>
               <input type="file" name="fileImage" id="fileImage" class="form-control p-1 d-none"/>
               <input type="hidden" name="old-image" id="old-image"class="form-control p-1"/>
            </div>
            <div class="form-group d-none">
               <label for="getuserId" class="col-form-label col-12">User Id</label>
               <div class="col-12">
                  <input type="text" id="getuserId" name="getuserId" class="form-control"/>
               </div>
            </div>
            <div class="d-flex">
               <div class="form-group">
                  <label for="userLName" class="col-form-label col-12">
                     Last Name <span class="text-danger" id="userLNameReq"></span>
                  </label>
                  <div class="col-12">
                     <input type="text" id="userLName" name="userLName" class="form-control"/>
                     <span class="text-danger" id="errUserLName"></span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="userFName" class="col-form-label col-12">
                     First Name <span class="text-danger" id="userFNameReq"></span>
                  </label>
                  <div class="col-12">
                     <input type="text" id="userFName" name="userFName" class="form-control"/>
                     <span class="text-danger" id="errUserFName"></span>
                  </div>
               </div>
            </div>
            <div class="d-flex">
               <div class="form-group">
                  <label for="userMName" class="col-form-label col-12">
                     Middle Name <span class="text-danger" id="userMNameReq"></span>
                  </label>
                  <div class="col-12">
                     <input type="text" id="userMName" name="userMName" class="form-control"/>
                     <span class="text-danger" id="errUserMName"></span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="userEmAdd" class="col-form-label col-12">
                     Email Address <span class="text-danger" id="userEmAddReq"></span>
                  </label>
                  <div class="col-12">
                     <input type="text" id="userEmAdd" name="userEmAdd" class="form-control"/>
                     <span class="text-danger" id="errUserEmAdd"></span>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label for="userUName" class="col-form-label col-12">
                  User Name <span class="text-danger" id="userUNameReq"></span>
               </label>
               <div class="col-12">
                  <input type="text" id="userUName" name="userUName" class="form-control"/>
                  <input type="hidden" id="origUName" class="form-control">
                  <span class="text-danger" id="errUserUName"></span>
               </div>
            </div>
            <div class="d-flex">
               <div class="form-group">
                  <label for="userPword" class="col-form-label col-12">
                     Password <span class="text-danger" id="userPwordReq"></span>
                  </label>
                  <div class="col-12">
                     <input type="password" id="userPword" name="userPword" class="form-control bg-password-img"/>
                     <i class="fas fa-eye text-gray-500 pword-user-admin" id="pwordUserAdmin"></i>
                     <span class="text-danger" id="errUserPword"></span>
                  </div>
               </div>
               <div class="form-group">
                  <label for="userConfirmPword" class="col-form-label col-12">
                     Confirm Password <span class="text-danger" id="userConfirmPwordReq"></span>
                  </label>
                  <div class="col-12">
                     <input type="password" id="userConfirmPword" name="userConfirmPword" class="form-control bg-password-img"/>
                     <i class="fas fa-eye text-gray-500 pword-user-admin" id="cPwordUserAdmin"></i>
                     <span class="text-danger" id="errUserConfirmPword"></span>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <div class="form-group mr-3">
               <button type="button" class="btn btn-danger" data-dismiss="modal">
                  <i class="fas fa-ban"></i>
                  Cancel
               </button>
               <button type="button" class="btn btn-success add-user-form"  name="btnSave_Add" id="add-user-form" disabled>
                  <i class="fas fa-save"></i>
                  Save
               </button>
               <button type="button" class="btn btn-success edit-user-form" name="btnSaveEdit" id="edit-user-form">
                  <i class="fas fa-save"></i>
                  Save
               </button>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
   $includeAdminController->footer();
   $includeAdminController->script();
?>
<script>
   // add student an account
   $('#add-user-form').click(()=>{
      const files    = $('#fileImage').prop('files')[0];
      const formData = new FormData();
      formData.append("btnSaveAdd", 1);
      formData.append("txtGetuserId", $('input[name="getuserId"]').val());
      formData.append("txtUserLName", $('input[name="userLName"]').val());
      formData.append("txtUserFName", $('input[name="userFName"]').val());
      formData.append("txtUserMName", $('input[name="userMName"]').val());
      formData.append("txtUserEmAdd", $('input[name="userEmAdd"]').val());
      formData.append("txtUserUName", $('input[name="userUName"]').val());
      formData.append("txtUserPword", $('input[name="userPword"]').val());
      formData.append("files__Image", files);
      // If file empty
      if (!files) {
         swal({
            title: "Info!",
            text: "Please upload an image file. The valid formats are: jpg, jpeg, png, gif.",
            icon: "info",
            closeOnClickOutside: false,
            button:{confirm: "Ok"}
         })
         $('.swal-text').addClass('text-center ml-3 mr-3');
         return;
      } else{ 
         const validExtensions = ['jpg', 'jpeg', 'png', 'gif'];
         const fileExtension = files.name.split('.').pop().toLowerCase();
         const maxSize = 2 * 1024 * 1024;
         if (!validExtensions.includes(fileExtension)) { // If the file extentions are invalid
            swal({
               title: "Info!",
               text: "Invalid file type! Please upload an image file (jpg, jpeg, png, gif).",
               icon: "info",
               closeOnClickOutside: false,
               button:{confirm: "Ok"}
            })
            $('.swal-text').addClass('text-center ml-3 mr-3');
            return;
         } else {
            if (files.size > maxSize){ // If valid size file
               swal({
                  title: "Info!",
                  text: "The file you are trying to upload exceeds the maximum allowed size of 2MB. Please ensure your file is smaller than 2MB.",
                  icon: "info",
                  closeOnClickOutside: false,
                  button:{confirm: "Ok"}
               })
               $('.swal-text').addClass('text-center ml-3 mr-3');
               return;
            } else {
               const filename = files.name;
               $.ajax({ // check if the file already exist 
                  type: "post",
                  url: "?route=check-file-exist",
                  data: {"filename": filename},
                  success:(response)=>{
                     if (response.exists) {
                        swal({
                           title: "Error!",
                           text: "Invalid file! Please try again.",
                           icon: "error",
                           closeOnClickOutside: false,
                           button:{confirm: "Ok"}
                        })
                        $('.swal-text').addClass('text-center ml-3 mr-3');
                     } else { // Then Insert into table students account
                        // Add using Ajax 
                        $.ajax({
                           type:"post",
                           url :"?route=admin-user-management",
                           contentType: false,
                           processData: false,
                           data:formData,
                           success:()=>{
                              location.reload();
                           }
                        })
                     }
                  }
               })
            }
         } 
      }
   });
   // end

   // edit student account
   $('#edit-user-form').click(()=>{
      const files    = $('#fileImage').prop('files')[0];
      const formData = new FormData();
      formData.append("btnSaveEdit", 1);
      formData.append("txtGetuserId", $('input[name="getuserId"]').val());
      formData.append("txtUserLName", $('input[name="userLName"]').val());
      formData.append("txtUserFName", $('input[name="userFName"]').val());
      formData.append("txtUserMName", $('input[name="userMName"]').val());
      formData.append("txtUserEmAdd", $('input[name="userEmAdd"]').val());
      formData.append("txtUserUName", $('input[name="userUName"]').val());
      formData.append("txtUserPword", $('input[name="userPword"]').val());
      formData.append("txtOld_Image", $('input[name="old-image"]').val());
      formData.append("files__Image", files);
      // If file empty
      if (!files) {
         $.ajax({
            type:"post",
            url :"?route=admin-user-management",
            contentType: false,
            processData: false,
            data:formData,
            success:()=>{
               location.reload();
            }
         })
         $('.swal-text').addClass('text-center ml-3 mr-3');
         return;
      } else{ 
         const validExtensions = ['jpg', 'jpeg', 'png', 'gif'];
         const fileExtension = files.name.split('.').pop().toLowerCase();
         const maxSize = 2 * 1024 * 1024;
         if (!validExtensions.includes(fileExtension)) { // If the file extentions are invalid
            swal({
               title: "Info!",
               text: "Invalid file type! Please upload an image file (jpg, jpeg, png, gif).",
               icon: "info",
               closeOnClickOutside: false,
               button:{confirm: "Ok"}
            })
            $('.swal-text').addClass('text-center ml-3 mr-3');
            return;
         } else {
            if (files.size > maxSize){ // If valid size file
               swal({
                  title: "Info!",
                  text: "The file you are trying to upload exceeds the maximum allowed size of 2MB. Please ensure your file is smaller than 2MB.",
                  icon: "info",
                  closeOnClickOutside: false,
                  button:{confirm: "Ok"}
               })
               $('.swal-text').addClass('text-center ml-3 mr-3');
               return;
            } else {
               const filename = files.name;
               $.ajax({ // check if the file already exist 
                  type: "post",
                  url: "?route=check-file-exist",
                  data: {"filename": filename},
                  success:(response)=>{
                     if (response.exists) {
                        swal({
                           title: "Error!",
                           text: "Invalid file! Please try again.",
                           icon: "error",
                           closeOnClickOutside: false,
                           button:{confirm: "Ok"}
                        })
                        $('.swal-text').addClass('text-center ml-3 mr-3');
                     } else { // Then Insert into table students account
                        // Add using Ajax 
                        $.ajax({
                           type:"post",
                           url :"?route=admin-user-management",
                           contentType: false,
                           processData: false,
                           data:formData,
                           success:()=>{
                              location.reload();
                           }
                        })
                     }
                  }
               })
            }
         } 
      }
   });   
   // end

   $('#pwordUserAdmin').click(function(){
      this.classList.toggle('fa-eye-slash');
      const pwordUser = document.querySelector('#userPword');
      const type = pwordUser.getAttribute('type') === 'password' ? 'type' : 'password';
      pwordUser.setAttribute('type', type);
   });
   $('#cPwordUserAdmin').click(function(){
      this.classList.toggle('fa-eye-slash');
      const cPwordUser = document.querySelector('#userConfirmPword');
      const type = cPwordUser.getAttribute('type') === 'password' ? 'type' : 'password';
      cPwordUser.setAttribute('type', type);
   });
   $('#profile-sing-up').click(() => {
      $('#fileImage').click();
      $('#fileImage').on('change', function(e){
         e.preventDefault();
         this.files[0] ? $('#imgProfPicture').attr('src', URL.createObjectURL(this.files[0])) : $(".sign-up-profile").attr(`src`, `img/undraw_profile.svg`);
      });
   });

   function verifyUserAdmin() 
   {
      const userLName    = $('#userLName').val().trim();
      const userFName    = $('#userFName').val().trim();
      const userMName    = $('#userMName').val().trim();
      const userEmAdd    = $('#userEmAdd').val().trim();
      const existingUsername = <?=json_encode($username)?>;
      const userPword    = $('#userPword').val().trim();
      const userUName    = $('#userUName').val().trim();
      const origUName    = $('#origUName').val();
      const uppercase    = /[A-Z]/.test(userPword);
      const lowercase    = /[0-9]/.test(userPword);
      const usrCPword    = $('#userConfirmPword').val().trim();
      const emailIsValid = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(userEmAdd);
      const isFormValidTwo  = userLName.length > 2 && userFName.length > 2 && userMName.length > 2 && userEmAdd.length > 2 && userPword.length > 7 && usrCPword.length > 7 && emailIsValid && userUName.length > 2 && uppercase && lowercase && !existingUsername.includes(userUName);
      const isPasswordMatch = userPword === usrCPword;
      $(".add-user-form").prop("disabled", !(isFormValidTwo && isPasswordMatch));

      const isFormValidOne  = userLName.length <= 2 || userFName.length <= 2 || userMName.length <= 2 || userEmAdd.length <= 2 || userPword.length <= 7 || usrCPword.length <= 7 || !emailIsValid || !uppercase || !lowercase || userUName.length <= 2 || userPword !== usrCPword || origUName !== userUName && existingUsername.includes(userUName);
      isFormValidOne === true ? $(".edit-user-form").attr("disabled", isFormValidOne) : $(".edit-user-form").removeAttr("disabled");
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
      verifyUserAdmin();
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
      verifyUserAdmin();
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
      verifyUserAdmin();
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
      verifyUserAdmin();
   });
   $('#userUName').on('input', () => {
      const userUName = $('#userUName').val();
      const origUName = $('#origUName').val();
      const existingUserName = <?= json_encode($username) ?>;
      if (userUName.trim().length <= 0) {
         $('#userUName').addClass('is-invalid');
         $('#userUNameReq').text('*');
         $('#errUserUName').text('No blank spaces allowed.');
      } else if (userUName.trim().length <= 2) {
         $('#userUName').addClass('is-invalid');
         $('#userUNameReq').text('*');
         $('#errUserUName').text('At least 3 characters allowed required.');
      } else if(origUName === userUName) {
         $('#userUName').removeClass('is-invalid').addClass('is-valid');
         $('#userUNameReq').text('');
         $('#errUserUName').text('');
      } else if (existingUserName.includes(userUName)) {
         $('#errUserUName').text('Invalid Student no.');
         $('#userUNameReq').text('*');
         $('#userUName').addClass('is-invalid');
      } else {
         $('#userUName').removeClass('is-invalid').addClass('is-valid');
         $('#userUNameReq').text('');
         $('#errUserUName').text('');
      }
      verifyUserAdmin();
   })
   $('#userPword,#userConfirmPword').on('input', () => {
      const userPword = $('#userPword').val();
      const userConfirmPword = $('#userConfirmPword').val();
      if (userPword.trim().length <= 0) {
         $('#userPword').addClass('is-invalid');
         $('#userPwordReq').text('*');
         $('#errUserPword').text('No blank spaces allowed.');
      } else if (userPword.trim().length <= 7) {
         $('#userPword').addClass('is-invalid');
         $('#userPwordReq').text('*');
         $('#errUserPword').text('At least 8 characters required.');
      } else if (!/[A-Z]/.test(userPword)) {
         $("#errUserPword").text("At least 1 uppercase letter required.");
         $("#userPword").addClass("is-invalid");
         $("#userPwordReq").text("*");
      } else if (!/[0-9]/.test(userPword)) {
         $("#errUserPword").text("At least 1 number required.");
         $("#userPword").addClass("is-invalid");
         $("#userPwordReq").text("*");
      } else if (userPword !== userConfirmPword) {
         $('#errUserConfirmPword').text('Password Do not match.');
         $('#userConfirmPwordReq').text("*");
         $('#userConfirmPword').addClass("is-invalid");
         $("#userPwordReq").text("");
         $("#errUserPword").text("");
         $('#userPword').removeClass('is-invalid').addClass('is-valid');
      } else {
         $('#userPword').removeClass('is-invalid').addClass('is-valid');
         $('#userConfirmPword').removeClass('is-invalid').addClass('is-valid');
         $('#userPwordReq').text('');
         $('#errUserPword').text('');
         $('#errUserConfirmPword').text('');
         $('#userConfirmPwordReq').text("");
      }
      verifyUserAdmin();
   });
   // show edit modal
   $('.show-modal-edit').on('click', function(e) {
      e.preventDefault();
      $('#getuserId').val($(this).attr('getUsrId'));
      $('#userLName').val($(this).attr('getLname'));
      $('#userFName').val($(this).attr('getFname'));
      $('#userMName').val($(this).attr('getMname'));
      $('#userEmAdd').val($(this).attr('getEmail'));
      $('#userUName').val($(this).attr('username'));
      $('#userPword').val($(this).attr('password'));
      $('#origUName').val($(this).attr('username'));
      $('#old-image').val($(this).attr('fileimge'));
      $(this).attr('fileimge')!=='' ? $('#imgProfPicture').attr(`src`,`uploads/${$(this).attr('fileimge')}`) : $('#imgProfPicture').attr(`src`,`img/undraw_profile.svg`);
      $('#userConfirmPword').val($(this).attr('password'));
      $('#add-user-form').addClass('d-none');
      $('#edit-user-form').removeClass('d-none');
      $('#Add_User').addClass('d-none');
      $('#EditUser').removeClass('d-none');
   });
   // end

   // show add modal
   $('.show-modal-add').click(function(e) {
      e.preventDefault();
      $('#getuserId').val('');
      $('#userLName').val('');
      $('#userFName').val('');
      $('#userMName').val('');
      $('#userEmAdd').val('');
      $('#userUName').val('');
      $('#userPword').val('');
      $('#userConfirmPword').val('');
      $('#origUName').val('');
      $('#imgProfPicture').attr(`src`,`img/undraw_profile.svg`);
      $('#edit-user-form').addClass('d-none');
      $('#add-user-form').removeClass('d-none');
      $('#EditUser').addClass('d-none');
      $('#Add_User').removeClass('d-none');
   });
   // end

   // delete admin user
   $('.btn-delete-admin-user').click(function(e) {
      const userid = $(this).val();
      const images = $(this).attr('image');
      e.preventDefault();
      swal({
         title: "Are you sure?",
         text: "Once deleted, you will not be able to recover it.",
         icon: "info",
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
               url: "?route=admin-user-management",
               data: {
                  "btnDeleteUser": 1,
                  "userid": userid,
                  "images": images
               },
               success: () => {
                  location.reload();
               },
            });
         }
      });
   });
   // end
</script>