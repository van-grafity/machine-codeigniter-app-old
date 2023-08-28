<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= url_to('dashboard') ?>" class="brand-link">
        <img src="<?= base_url('adminLTE'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Mesin Jahit</span>
    </a>

    <!-- sidebar -->
    <div class="sidebar">

        <!--Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-weight="treeview" role="menu" dara-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-header">Menu</li>
                <li class="nav-item">
                    <a href="<?= url_to('dashboard') ?>" class="nav-link">
                        <i class="fas fa-home nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('brand') ?>" class="nav-link">
                        <i class="fas fa-cube nav-icon"></i>
                        <p>Brand</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('machine') ?>" class="nav-link">
                        <i class="fas fa-cubes nav-icon"></i>
                        <p>Machine</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('machine_type') ?>" class="nav-link">
                        <i class="fas fa-radiation nav-icon"></i>
                        <p>Machine Type</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>