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
                     <th> Last Name </th>
                     <th> First Name </th>
                     <th> Middle Name </th>
                     <th> Email Address </th>
                     <th> User Name </th>
                     <th> Actions </th>
                  </tr>
               </thead>
               <tbody>
                  <?php $userManagementModel = new userManagementModel();
                  $username = json_encode($userManagementModel->invalid_username());
                  foreach ($userManagementModel->read_user_management() as $row) { ?>
                     <tr>
                        <td class="align-middle"><?=$row['lastname'] ?></td>
                        <td class="align-middle"><?=$row['firstname'] ?></td>
                        <td class="align-middle"><?=$row['middlename'] ?></td>
                        <td class="align-middle"><?=$row['emailaddress'] ?></td>
                        <td class="align-middle"><?=$row['username'] ?></td>
                        <td class="align-middle p-0">
                           <div class="d-flex justify-content-center align-items-center">
                              <div class="btn-group">
                                 <a href="#" data-toggle="modal" data-target="#user-management" class="btn btn-sm btn-primary show-modal-edit"
                                    getUsrId="<?=$row['userid'] ?>"
                                    getLname="<?=$row['lastname'] ?>"
                                    getFname="<?=$row['firstname'] ?>"
                                    getMname="<?=$row['middlename'] ?>"
                                    getEmail="<?=$row['emailaddress'] ?>"
                                    username="<?=$row['username'] ?>"
                                    password="<?=$row['admin_password'] ?>">
                                    <i class="fas fa-edit"></i>
                                 </a>
                              </div>
                              &nbsp;
                              <div class="btn-group">
                                 <button type="button" value="<?= $row['userid'] ?>" class="btn btn-sm btn-danger btn-delete-admin-user">
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
         <form action="?route=admin-user-management" method="post">
            <div class="modal-body">
               <div class="d-flex justify-content-center mb-3">
                  <img src="img/undraw_profile.svg" class="img-profile rounded-circle sign-up-profile" width="75" height="75"/>
                  <i class="fas fa-camera position-absolute bg-secondary text-white border-sign-up-profile"></i>
               </div>
               <div class="form-group d-none">
                  <label for="getuserId" class="col-form-label col-12">User Id</label>
                  <div class="col-12">
                     <input type="text" id="getuserId" name="getuserId" class="form-control">
                  </div>
               </div>
               <div class="d-flex">
                  <div class="form-group">
                     <label for="userLName" class="col-form-label col-12">
                        Last Name <span class="text-danger" id="userLNameReq"></span>
                     </label>
                     <div class="col-12">
                        <input type="text" id="userLName" name="userLName" class="form-control">
                        <span class="text-danger" id="errUserLName"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="userFName" class="col-form-label col-12">
                        First Name <span class="text-danger" id="userFNameReq"></span>
                     </label>
                     <div class="col-12">
                        <input type="text" id="userFName" name="userFName" class="form-control">
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
                        <input type="text" id="userMName" name="userMName" class="form-control">
                        <span class="text-danger" id="errUserMName"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="userEmAdd" class="col-form-label col-12">
                        Email Address <span class="text-danger" id="userEmAddReq"></span>
                     </label>
                     <div class="col-12">
                        <input type="text" id="userEmAdd" name="userEmAdd" class="form-control">
                        <span class="text-danger" id="errUserEmAdd"></span>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label for="userUName" class="col-form-label col-12">
                     User Name <span class="text-danger" id="userUNameReq"></span>
                  </label>
                  <div class="col-12">
                     <input type="text" id="userUName" name="userUName" class="form-control">
                     <span class="text-danger" id="errUserUName"></span>
                  </div>
               </div>
               <div class="d-flex">
                  <div class="form-group">
                     <label for="userPword" class="col-form-label col-12">
                        Password <span class="text-danger" id="userPwordReq"></span>
                     </label>
                     <div class="col-12">
                        <input type="text" id="userPword" name="userPword" class="form-control">
                        <span class="text-danger" id="errUserPword"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="userConfirmPword" class="col-form-label col-12">
                        Confirm Password <span class="text-danger" id="userConfirmPwordReq"></span>
                     </label>
                     <div class="col-12">
                        <input type="text" id="userConfirmPword" name="userConfirmPword" class="form-control">
                        <span class="text-danger" id="errUserConfirmPword"></span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <div class="form-group mr-3">
                  <button class="btn btn-danger" type="button" data-dismiss="modal">
                     <i class="fas fa-ban"></i>
                     Cancel
                  </button>
                  <button type="submit" class="btn btn-success add-user-form" disabled name="btnSave_Add" id="add-user-form">
                     <i class="fas fa-save"></i>
                     Save
                  </button>
                  <button type="submit" class="btn btn-success edit-user-form" name="btnSaveEdit" id="edit-user-form">
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
   function verifyPassword() 
   {
      const userLName       = $('#userLName').val().trim();
      const userFName       = $('#userFName').val().trim();
      const userMName       = $('#userMName').val().trim();
      const userEmAdd       = $('#userEmAdd').val().trim();
      const existingUsername=<?=json_encode($username)?>;
      const userPword       = $('#userPword').val().trim();
      const userUName       = $('#userUName').val().trim();
      const usrCPword       = $('#userConfirmPword').val().trim();
      const emailIsValid    = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(userEmAdd);
      const isFormValidTwo  = userLName.length > 2 && userFName.length > 2 && userMName.length > 2 && userEmAdd.length > 2 && userPword.length > 7 && usrCPword.length > 7 && emailIsValid && !existingUsername.includes(userUName);
      const isPasswordMatch = userPword === usrCPword;
      $(".add-user-form").prop("disabled", !(isFormValidTwo && isPasswordMatch));
      $(".edit-user-form").prop("disabled", !(isFormValidTwo && isPasswordMatch));
   }

$('#userLName').on('input',()=>{
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
   verifyPassword();
});
$('#userFName').on('input',()=>{
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
   verifyPassword();
})
$('#userMName').on('input',()=>{
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
   verifyPassword();
})
$('#userEmAdd').on('input',()=>{
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
   verifyPassword();
});
$('#userUName').on('input',()=>{
   const userUName = $('#userUName').val();   
   const existingUserName = <?=json_encode($username)?>;
   if (userUName.trim().length <= 0) {
      $('#userUName').addClass('is-invalid');
      $('#userUNameReq').text('*');
      $('#errUserUName').text('No blank spaces allowed.');  
   } else if (userUName.trim().length <= 2) {
      $('#userUName').addClass('is-invalid');
      $('#userUNameReq').text('*');
      $('#errUserUName').text('At least 3 characters allowed required.');  
   } else if (existingUserName.includes(userUName)) {
      $("#errUserUName").text("Invalid Student no.");
      $("#userUNameReq").text("*");
      $("#userUName").addClass("is-invalid");
   } else {
      $('#userUName').removeClass('is-invalid').addClass('is-valid');
      $('#userUNameReq').text('');
      $('#errUserUName').text('');  
   }
   verifyPassword();
})
$('#userPword,#userConfirmPword').on('input',()=>{
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
   } else if (userPword !== userConfirmPword){
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
   verifyPassword();
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
   $('#userConfirmPword').val($(this).attr('password'));
   $('#add-user-form').addClass('d-none').prop('disabled', true);
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
   $('#edit-user-form').addClass('d-none');
   $('#add-user-form').removeClass('d-none');
   $('#EditUser').addClass('d-none');
   $('#Add_User').removeClass('d-none');
});
// end

// delete admin user
$('.btn-delete-admin-user').click(function(e) {
   const userid = $(this).val();
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
               "userid": userid
            },
            success: () => {
               swal({
                  title: "Information!",
                  text: "User admin has been successfully deleted!",
                  icon: "info",
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