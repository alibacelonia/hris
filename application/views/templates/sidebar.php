<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>" class="brand-link navbar-warning">
        <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <!-- <img src="<?php echo base_url(); ?>assets/dist/img/dilg-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-bold">SAMPLE WEB APP</span>
        <!-- <span class="brand-text font-weight-bold">HR INFOSYS</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url();?>home" class="nav-link <?php echo $current_page == "home" ? "active" : "" ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>home/applicants" class="nav-link <?php echo $current_page == "applicants" ? "active" : "" ?>">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Applicants</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>home/employees" class="nav-link <?php echo $current_page == "employees" ? "active" : "" ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Employees</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>home/reports" class="nav-link <?php echo $current_page == "reports" ? "active" : "" ?>">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Reports</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>