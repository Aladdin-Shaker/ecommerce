<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo e(url('/design/adminlte/dist/img/AdminLTELogo.png')); ?>"
            alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: 0.8;" />
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(url('/design/adminlte/dist/img/user2-160x160.jpg')); ?>"
                    class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo e(admin()->user()->name); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-close">
                    <a href="<?php echo e(aurl()); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            <?php echo e(trans('admin.dashboard')); ?>

                        </p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview" role="menu" data-accordion="true">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-close">
                    <a href="<?php echo e(aurl('admin')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            <?php echo e(trans('admin.adminAccount')); ?>

                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(aurl('admin')); ?>" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <?php echo e(trans('admin.adminAccount')); ?>

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
<?php /**PATH /home/sniper/Desktop/my_project/Ecommerce/Ecommerce/resources/views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>