

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-lock"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">
                        <!-- Heading -->
            <div class="sidebar-heading">
                MENU
            </div>


            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>home</span></a>
            </li>
             <hr class="sidebar-divider">

            <!-- Divider -->
      
            
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('home/user'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>User</span></a>
            </li>
                  <hr class="sidebar-divider">

            <li class="nav-item">
                 <a class="nav-link" href="<?php echo base_url('home/databarang'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Barang</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->

        </ul>
        <!-- End of Sidebar -->