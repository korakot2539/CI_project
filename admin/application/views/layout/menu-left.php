 <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fab fa-angellist"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TNI ADMIN </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url()?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading pb-3">
                Configuration
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link py-2" href="<?=base_url("Movie")?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Movie</span>
                </a>
                <a class="nav-link py-2" href="<?=base_url("Category")?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Category</span>
                </a>
                <a class="nav-link py-2" href="<?=base_url("User")?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>User</span>
                </a>
            </li>
                    
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            

        </ul>
        <!-- End of Sidebar -->