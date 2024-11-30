<style>
/* Add this to adjust the sidebar's upward position */
.sidebar-adjust {
    transform: translateY(-20px); /* Moves the sidebar content upwards */
    transition: transform 0.3s ease; /* Optional smooth animation */
}
</style>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary bg-gradient-dark text-light elevation-4 sidebar-no-expand">
    <!-- Brand Logo -->
    <a href="<?php echo base_url ?>admin" class="brand-link bg-gradient-primary text-sm text-light">
        <img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="Store Logo"
            class="brand-image img-circle elevation-3 bg-gradient-light"
            style="opacity: .8;width: 1.6rem;height: 1.6rem;max-height: unset">
        <span class="brand-text font-weight-light"><?php echo $_settings->info('short_name') ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden sidebar-adjust">
        <div class="os-content">
            <!-- Sidebar user panel (optional) -->
            <div class="clearfix"></div>

            <!-- Sidebar Menu -->
            <nav class="mt-4">
                <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child"
                    data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item dropdown">
                        <a href="./" class="nav-link nav-home">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url ?>admin/?page=facilities" class="nav-link nav-facilities">
                            <i class="nav-icon fas fa-door-closed"></i>
                            <p>Facility List</p>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url ?>admin/?page=clients" class="nav-link nav-clients">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Registered Clients</p>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url ?>admin/?page=bookings" class="nav-link nav-bookings">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p>Booking List</p>
                        </a>
                    </li>
                    <?php if($_settings->userdata('type') == 1): ?>
                    <li class="nav-header">Maintenance</li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url ?>admin/?page=categories" class="nav-link nav-categories">
                            <i class="nav-icon fas fa-th-list"></i>
                            <p>Category List</p>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url ?>admin/?page=user/list" class="nav-link nav-user_list">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>User List</p>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url ?>admin/?page=system_info" class="nav-link nav-system_info">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>Settings</p>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
</aside>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.querySelector('.sidebar');
    if (sidebar) {
        sidebar.classList.add('sidebar-adjust');
    }
});
</script>