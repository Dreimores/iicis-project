function verifyChangePass() {

   const oldPasword =$('#oldPasword').val().trim();
   const oldPWord =$('#oldPWord').val().trim();
   const changePass = $('#changePass').val().trim();
   const ConfirmPassword = $('#ConfirmPassword').val().trim();

   const isValid = changePass.length > 7 && ConfirmPassword.length > 7 && oldPasword === oldPWord && changePass === ConfirmPassword && /[0-9]/.test(changePass) && /[A-Z]/.test(changePass);
   $('.btn-change-password').prop('disabled', !isValid);

}

$('#oldPasword').on('input',function(){
   const oldPasword =$('#oldPasword').val().trim();
   const oldPWord =$('#oldPWord').val().trim();
   if(oldPasword.length <= 0) {
      $('#oldPaswordReq').text('*');
      $('#erroldPasword').text('No blank spaces allowed.');
      $(this).addClass('is-invalid');
   } else if(oldPWord !== oldPasword) {
      $('#oldPaswordReq').text('*');
      $('#erroldPasword').text('Old password do not match.');
      $(this).addClass('is-invalid');
   } else {
      $('#oldPaswordReq').text('');
      $('#erroldPasword').text('');
      $(this).removeClass('is-invalid').addClass('is-valid');
   }
   verifyChangePass();
})
 
$('#changePass, #ConfirmPassword').on('input',function(){
   const changePass = $('#changePass').val().trim();
   const ConfirmPassword = $('#ConfirmPassword').val().trim();
   if(changePass.length <= 0) {
      $('#changePassReq').text('*');
      $('#errchangePass').text('No blank spaces allowed.');
      $(this).addClass('is-invalid');
   } else if(changePass.length <= 7) {
      $('#changePassReq').text('*');
      $('#errchangePass').text('At least 8 characters required.');
      $(this).addClass('is-invalid');
   } else if(!/[A-Z]/.test(changePass)) {
      $('#changePassReq').text('*');
      $('#errchangePass').text('At least 1 uppercase letter required.');
      $(this).addClass('is-invalid');
   } else if(!/[0-9]/.test(changePass)) {
      $('#changePassReq').text('*');
      $('#errchangePass').text('At least 1 number required.');
      $(this).addClass('is-invalid');
   } else if(changePass !== ConfirmPassword) {
      $('#ConfirmPasswordReq').text('*');
      $('#errConfirmPassword').text('Passwords do not match.');
      $('#ConfirmPassword').addClass('is-invalid');
      $('#changePassReq').text('');
      $('#errchangePass').text('');
      $('#changePass').removeClass('is-invalid').addClass('is-valid');
   } else {
      $('#changePassReq').text('');
      $('#errchangePass').text('');
      $('#ConfirmPasswordReq').text('');
      $('#errConfirmPassword').text('');
      $(this).removeClass('is-invalid').addClass('is-valid');
   }
   verifyChangePass();
})
