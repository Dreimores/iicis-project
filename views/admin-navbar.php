<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="?route=admin-dashboard">
        <div class="sidebar-brand-icon">
            <img src="img/csu_lasam_logo.webp" width="50">
        </div>
        <div class="sidebar-brand-text mx-2"></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="?route=admin-dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item text-capitalize">
        <a class="nav-link collapsed" href="?route=user-management"> <i class="fas fa-fw fa-user "></i> User Management </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item text-capitalize">
        <a class="nav-link collapsed" href="?route=college-list"> <i class="fas fa-fw fa-building"></i> Colleges </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item text-capitalize">
        <a class="nav-link collapsed" href="?route=course-list"> <i class="fas fa-fw fa-book"></i> Courses </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item text-capitalize">
        <a class="nav-link collapsed" href="?route=major-list"> <i class="fas fa-fw fa-university"></i> Majors </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item text-capitalize">
        <a class="nav-link collapsed" href="?route=student-info">
            <i class="fas fa-users"></i><span> Student Information </span>
        </a>
    </li>

    <li class="nav-item text-capitalize">
        <a class="nav-link collapsed" href="?route=intake-form">
            <i class="fas fa-fw fa-wrench"></i><span> Counseling Service </span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-arrow-right"></i>
            <span> Career Guidance </span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header text-gray-900"> Custom Files: </h6>
                <a class="collapse-item pl-1" href="?route=terminal-Interview"> Terminal Interview </a>
                <a class="collapse-item pl-1" href="?route=exit-drop-form"> Exit Interview Dropping </a>
                <a class="collapse-item pl-1" href="?route=exit-trans"> Exit Interview Transferring </a>
            </div>
        </div>
    </li>

    <li class="nav-item text-capitalize">
        <a class="nav-link collapsed" href="?route=reports">
            <i class="fas fa-download fa-sm text-white-50"></i><span> generate report </span>
        </a>
    </li>

    <li class="nav-item text-capitalize">
        <a class="nav-link collapsed" href="?route=announcement">
            <i class="fas fa-bell fa-sm text-white-50"></i><span> announcement </span>
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
                        <?php $userManagementModel = new userManagementModel();
                        foreach ($userManagementModel->admin_username($_SESSION['admin-username']) as $row) { ?>
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $row['lastname'] . " " . $row['firstname'] . " " . $row['middlename'] ?></span>
                            <img class="img-profile rounded-circle" src="<?= !empty($row['admin_picture']) ? "uploads/" . $row['admin_picture'] : "img/undraw_profile.svg" ?>">
                        <?php } ?>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="?route=profile">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger Logout-Portal-Btn-Admin">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->