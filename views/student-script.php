   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="js/sb-admin-2.min.js"></script>

   <!-- Page level plugins -->
   <script src="vendor/chart.js/Chart.min.js"></script>

   <!-- Page level custom scripts -->
   <script src="js/demo/chart-area-demo.js"></script>
   <script src="js/demo/chart-pie-demo.js"></script>

   <!-- Page level plugins -->
   <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

   <!-- Page level custom scripts -->
   <script src="js/demo/datatables-demo.js"></script>

   <!-- Custom form validation scripts -->
   <script src="js/forms-validation.js"></script>

   <!-- Sweet Alert -->
   <script src="js/sweetalert.min.js"></script>

   <!-- change password script -->
   <script src="js/change-pass.js"></script>

   <!-- script logout portal -->
   <script src="js/logout-portal.js"></script>

   <!-- Script for custom message -->
   <script>
      /* Success message */
      <?php if (isset($_SESSION['success']) && $_SESSION['success'] != "") { ?>
            swal({
               title: "Success",
               icon: "success",
               text: "<?php echo $_SESSION['success'] ?>",
               button: "Ok",
               closeOnClickOutside: false
            })
            $('.swal-text').addClass('text-center ml-3 mr-3');
      <?php } unset($_SESSION['success']); ?>
      /* end */

      /* change password message */
      <?php if (isset($_SESSION['changePass']) && $_SESSION['changePass'] != "") { ?>
         swal({
               title: "Success",
               icon: "success",
               text: "<?=$_SESSION['changePass']?>",
               closeOnClickOutside: false,
               dangerMode: true,
               buttons: {
                  confirm: "Logout",
                  cancel: "Stay Logged In",
               }
         }).then((willLogout) => {
               if (willLogout) {
                  window.location.href = "?route="; // Redirect to logout page
               }
         });
         $(".swal-text").addClass("text-center ml-3 mr-3");
      <?php } unset($_SESSION['changePass']); // Clear session after showing message ?>
      /* end */

      /* Error message */
      <?php if (isset($_SESSION['error']) && $_SESSION['error'] != "") { ?>
         swal({
            icon: "error",
            text: "<?php echo $_SESSION['error'] ?>",
            button: "Ok",
            closeOnClickOutside: false
         })
         $('.swal-text').addClass('text-center ml-3 mr-3');
      <?php } unset($_SESSION['error']); ?>
      /* end */ 
      
      /* Warning message */
      <?php if (isset($_SESSION['warning']) && $_SESSION['warning'] != "") { ?>
         swal({
            icon: "warning",
            text: "<?php echo $_SESSION['warning']?>",
            button: "Ok",
            closeOnClickOutside: false
         })
         $('.swal-text').addClass('text-center ml-3 mr-3');
      <?php } unset($_SESSION['warning']); ?>
      /* end */

      /* Fillout all form message */
      <?php if (isset($_SESSION['ty']) && $_SESSION['ty'] != "") { ?>
         swal({
            title: "Thank you!",  
            icon: "success",
            text: "<?php echo $_SESSION['ty']?>",
            button: "Ok",
            closeOnClickOutside: false
         })
         $('.swal-text').addClass('text-center ml-3 mr-3');
      <?php } unset($_SESSION['ty']); ?>
      /* end */

   </script>
   <!-- End -->