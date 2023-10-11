<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= url_to('dashboard') ?>" class="brand-link">
        <img src="<?= base_url('assets'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Machine App</span>
    </a>

    <!-- sidebar -->
    <div class="sidebar">

        <!--Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-header">Menu</li>
                <li class="nav-item">
                    <a href="<?= url_to('dashboard') ?>" class="nav-link">
                        <i class="fas fa-home nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                

                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-dolly-flatbed"></i>
                        <p>Master Data <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= url_to('brand') ?>" class="nav-link">
                                <i class="fas fa-registered nav-icon"></i>
                                <p>Brand</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('machine-type') ?>" class="nav-link">
                                <i class="far fa-list-alt nav-icon"></i>
                                <p>Machine Type</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('location') ?>" class="nav-link">
                                <i class="fas fa-location-arrow nav-icon"></i>
                                <p>Location</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('machine') ?>" class="nav-link">
                                <i class="fas fa-satellite nav-icon"></i>
                                <p>Machine</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('machine_location') ?>" class="nav-link">
                                <i class="fas fa-map-marker-alt nav-icon"></i>
                                <p>Machine Location</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Report <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= url_to('repair_request') ?>" class="nav-link">
                                <i class="fas fa-file-pdf nav-icon"></i>
                                <p>Report</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>