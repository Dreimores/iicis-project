<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="?route=dashboard">
        <div class="sidebar-brand-icon">
            <img src="img/csu_lasam_logo.webp" width="50">
        </div>
        <div class="sidebar-brand-text mx-2"></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="?route=dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Personal Data -->
    <li class="nav-item">
        <a class="nav-link presonal-dara-link" href="?route=student-forms">
            <span>
                <i class="fas fa-folder"></i>
                Personal Data
            </span>
        </a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Nav Item - Family data -->
    <li class="nav-item nav">
        <a class="nav-link family-data-link" href="?route=student-forms">
            <span>
                <i class="fas fa-users"></i>
                Family Data
            </span>
        </a>
    </li>

    <!-- Nav Item - Educational data -->
    <li class="nav-item nav">
        <a class="nav-link educational-data-link" href="?route=student-forms">
            <span>
                <i class="fas fa-book"></i>
                Educational Data
            </span>
        </a>
    </li>

    <!-- Nav Item - Educational data -->
    <li class="nav-item nav">
        <a class="nav-link health-data-link" href="?route=student-forms">
            <span>
                <i class="fas fa-hospital-user"></i>
                Health Data
            </span>
        </a>
    </li>

    <!-- Nav Item - IP and PWD checklist data -->
    <li class="nav-item nav">
        <a class="nav-link ip-and-pwd-checklist-link" href="?route=student-forms">
            <span>
                <i class="fas fa-wheelchair"></i>
                IP and PWD checklist
            </span>
        </a>
    </li>

    <!-- Nav Item - Inntial Interview data -->
    <li class="nav-item nav">
        <a class="nav-link initial-interview-link" href="?route=student-forms">
            <span>
                <i class="fas fa-inbox"></i>
                Inintial Interview
            </span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-2 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                        # initialize the login controller to fetch all the data
                        $loginStudentModel = new studentFormsModel();
                        # end
                        foreach ($loginStudentModel->session_studentno($_SESSION['username']) as $row) { ?>
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?=$row['p_firstname']." ".substr($row['p_middlename'],0,1).". ".$row['p_surname']?>
                            </span>
                            <img class="img-profile rounded-circle" src="<?=empty($row['file_name'])?"img/undraw_profile.svg":"uploads/".$row['file_name']?>">
                        <?php }?>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="?route=stud-profile">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#" data-target="#change-password" data-toggle="modal">
                            <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                            Change password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->

        <div class="modal fade" id="change-password" tabindex="-1" role="dialog" aria-hidden="true" data-keybord="false" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header pt-2 pb-2 pl-3 pr-3">
                        <div class="h6 mt-1 text-primary"> Change password <i class="fas fa-question-circle fa-sm" role="button" title="Change your password."></i> </div>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="#" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="oldPasword" class="col-form-label col-12">
                                    Old password <span class="text-danger" id="oldPaswordReq"></span>
                                </label>
                                <div class="col-12">
                                    <input type="text" id="oldPasword" name="oldPasword" value="" class="form-control" />
                                    <span class="text-danger" id="erroldPasword"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="changePass" class="col-form-label col-12">
                                    Change password <span class="text-danger" id="changePassReq"></span>
                                </label>
                                <div class="col-12">
                                    <input type="text" id="changePass" name="changePass" value="" class="form-control" />
                                    <span class="text-danger" id="errchangePass"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ConfirmPassword" class="col-form-label col-12">
                                    Confirm password <span class="text-danger" id="ConfirmPasswordReq"></span>
                                </label>
                                <div class="col-12">
                                    <input type="text" id="ConfirmPassword" name="ConfirmPassword" value="" class="form-control" />
                                    <span class="text-danger" id="errConfirmPassword"></span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group mr-3">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                    <i class="fas fa-ban"></i>
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-success add-user-profile">
                                    <i class="fas fa-save"></i>
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>