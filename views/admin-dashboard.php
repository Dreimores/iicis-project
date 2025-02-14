<?php
$includeAdminController = new includeAdminController();
$includeAdminController->header();
$includeAdminController->navbar();
?>
<div class="container-fluid">
   <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-2">
      <h1 class="h3 mb-0 text-dark"><b>Dashboard</b></h1>
      <a href="?route=reports" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report </a>
   </div>
   <div class="row">
      <div class="col-xl-3 col-md-6 mb-3">
         <div class="card border-left-success shadow h-40 py-2 mb-3" data-aos="fade-left">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> approved acount </div>
                     <div class="text-xs mb-0 font-weight-bold text-dark"> Total: Approved <i class="fas fa-check-circle text-success"></i></div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-fw fa-check-circle fa-2x text-success"></i>
                  </div>
               </div>
            </div>
         </div>
         <div class="card border-left-warning shadow h-40 py-2" data-aos="fade-left">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"> pending acount </div>
                     <div class="text-xs mb-0 font-weight-bold text-danger"> Total: Pending <i class="fas fa-ban"></i></div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-fw fa-ban fa-2x text-danger"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-2 col-md-6 mb-3">
         <div class="card border-left-info shadow h-40 py-2 mb-3" data-aos="fade-left">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> students </div>
                     <div class="text-xs mb-0 font-weight-bold text-dark"> Total: Students </div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-fw fa-users fa-2x text-info"></i>
                  </div>
               </div>
            </div>
         </div>
         <div class="card border-left-dark shadow h-40" data-aos="fade-left">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-dark text-uppercase mb-1"> Counseling Services </div>
                     <div class="text-xs mb-0 font-weight-bold text-success"> Total: Terminated <i class="fas fa-check-circle"></i></div>
                     <div class="text-xs mb-0 font-weight-bold text-danger"> Total: Ongoing <i class="fas fa-ban"></i></div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-fw fa-info fa-2x text-info"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-2 col-md-6 mb-3">
         <div class="card border-left-info shadow h-100 py-2" data-aos="fade-left">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> </div>
                     <div class="text-xs mb-0 font-weight-bold text-dark"> Total: Single </div>
                  </div>
                  <div class="col-auto"><i class="fas fa-fw fa-user fa-2x text-info"></i></div>
               </div>
            </div>
            <hr>
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Married </div>
                     <div class="text-xs mb-0 font-weight-bold text-dark"> Total: Married </div>
                  </div>
                  <div class="col-auto"><i class="fas fa-fw fa-users fa-2x text-info"></i></div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-2 col-md-6 mb-3">
         <div class="card border-left-primary shadow h-100 py-2" data-aos="fade-left">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> female </div>
                     <div class="text-xs mb-0 font-weight-bold text-gray-900"> Total: Female </div>
                  </div>
                  <div class="col-auto"><i class="fas fa-female fa-2x text-primary"></i></div>
               </div>
            </div>
            <hr>
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> male </div>
                     <div class="text-xs mb-0 font-weight-bold text-gray-900"> Total: Male </div>
                  </div>
                  <div class="col-auto"><i class="fas fa-male fa-2x text-primary"></i></div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-info shadow h-100 py-2" data-aos="fade-left">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-uppercase text-gray-900 mb-1"> pwd </div>
                     <div class="text-xs mb-0 font-weight-bold text-gray-900"> Total: </div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-wheelchair text-warning fa-2x text-primary"></i>
                  </div>
               </div>
            </div>
            <hr>
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-uppercase text-gray-900 mb-1"> ip </div>
                     <div class="text-xs mb-0 font-weight-bold text-gray-900"> Total: </div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-users text-danger fa-2x text-primary"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-xl-12 col-lg-7">
         <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-info"><i class="fas fa-list"></i> Details </h6>
            </div>
            <div class="card-body">
               <div class="chart-area">
                  <canvas id="myAreaChart"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
$includeAdminController->footer();
$includeAdminController->script();
?>