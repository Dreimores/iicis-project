$(".Logout-Portal-Btn-student").click(function (e) {
   e.preventDefault();
 
   swal({
     title: "Logout",
     text: "Are you sure you want to logout?",
     icon: "warning",
     buttons: true,
     dangerMode: true,
     closeOnClickOutside: false,
     buttons: {
       confirm: "Logout",
       cancel: "Cancel",
     },
   }).then((willLogout) => {
     if (willLogout) {
       $.ajax({
         type: "post",
         url: "?route=logoutStud",
         data: {
           "Logout-Portal-Btn-student": 1,
         },
         success: () => {
           window.location.href = "?route=";
         },
       });
     }
   });
 });

 $(".Logout-Portal-Btn-Admin").click(function (e) {
   e.preventDefault();
 
   swal({
     title: "Logout",
     text: "Are you sure you want to logout?",
     icon: "warning",
     buttons: true,
     dangerMode: true,
     closeOnClickOutside: false,
     buttons: {
       confirm: "Logout",
       cancel: "Cancel",
     },
   }).then((willLogout) => {
     if (willLogout) {
       $.ajax({
         type: "post",
         url: "?route=logoutAdmin",
         data: {
           "Logout-Portal-Btn-Admin": 1,
         },
         success: () => {
           window.location.href = "?route=";
         },
       });
     }
   });
 });
 