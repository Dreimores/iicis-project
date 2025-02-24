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
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->