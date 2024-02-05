        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column ">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-1 static-top shadow">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user/index'); ?>">
                <div class="topbar-brand-icon rotate-n-15">
                    <i class="fas fa-code"></i>
                </div>
                <div class="navbar-brand m-2 text-primary">Learn WebDev</div>
                </a>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <div class="dropdown-divider"></div>
                            <a class="nav-link dropdown-toggle-danger text-danger" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger-400"></i>
                                    Logout
                                </a>
                            
                        </li>

                    </ul>

                </nav>

                <!-- End of Topbar --> 