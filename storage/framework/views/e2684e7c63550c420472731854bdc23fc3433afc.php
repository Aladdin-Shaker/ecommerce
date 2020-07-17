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
        <div>
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo e(url('/design/adminlte/dist/img/user2-160x160.jpg')); ?>"
                        class="img-circle elevation-2" alt="User Image" />
                </div>
                <div class="info">
                    <a href="#"
                        class="d-block"><?php echo e(admin()->user()->name); ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">

                
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                               with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview <?php echo e(active_menu('')[0]); ?>">
                        <a href="<?php echo e(aurl('admin')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                <?php echo e(trans('admin.main')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('')[1]); ?>">
                            <li class="nav-item has-treeview ">
                                <a href="<?php echo e(aurl()); ?>" class="nav-link">
                                    <i
                                        class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        <?php echo e(trans('admin.dashboard')); ?>

                                    </p>
                                </a>
                            </li>

                            <li class="nav-item has-treeview ">
                                <a href="<?php echo e(aurl('settings')); ?>"
                                    class="nav-link">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>
                                        <?php echo e(trans('admin.settings')); ?>

                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview <?php echo e(active_menu('admin')[0]); ?>">
                        <a href="<?php echo e(aurl('admin')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                <?php echo e(trans('admin.adminAccount')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('admin')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('admin')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <?php echo e(trans('admin.adminAccount')); ?>

                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview <?php echo e(active_menu('users')[0]); ?>">
                        <a href="<?php echo e(aurl('users')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                <?php echo e(trans('admin.userAccount')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('users')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('users')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <?php echo e(trans('admin.users')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('users')); ?>?level=user"
                                    class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <?php echo e(trans('admin.user')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('users')); ?>?level=vendor"
                                    class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <?php echo e(trans('admin.vendor')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('users')); ?>?level=company"
                                    class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <?php echo e(trans('admin.company')); ?>

                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>

                
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview <?php echo e(active_menu('countries')[0]); ?>">
                        <a href="<?php echo e(aurl('countries')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-flag"></i>
                            <p>
                                <?php echo e(trans('admin.countries')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('countries')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('countries')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-flag nav-icon"></i>
                                    <?php echo e(trans('admin.countries')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('countries/create')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <?php echo e(trans('admin.create_country')); ?>

                                </a>
                            </li>


                        </ul>
                    </li>
                </ul>

                
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview <?php echo e(active_menu('cities')[0]); ?>">
                        <a href="<?php echo e(aurl('cities')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                <?php echo e(trans('admin.cities')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('cities')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('cities')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-globe nav-icon"></i>
                                    <?php echo e(trans('admin.cities')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('cities/create')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <?php echo e(trans('admin.create_city')); ?>

                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview <?php echo e(active_menu('states')[0]); ?>">
                        <a href="<?php echo e(aurl('states')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-university"></i>
                            <p>
                                <?php echo e(trans('admin.states')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('states')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('states')); ?>"
                                    class="nav-link">
                                    <i
                                        class="fas fa-university nav-icon"></i>
                                    <?php echo e(trans('admin.states')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('states/create')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <?php echo e(trans('admin.create_state')); ?>

                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview <?php echo e(active_menu('departments')[0]); ?>">
                        <a href="<?php echo e(aurl('departments')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                <?php echo e(trans('admin.departments')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('departments')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('departments')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-list nav-icon"></i>
                                    <?php echo e(trans('admin.departments')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('departments/create')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <?php echo e(trans('admin.create_department')); ?>

                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                                    with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview <?php echo e(active_menu('trademarks')[0]); ?>">
                        <a href="<?php echo e(aurl('trademarks')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-cube"></i>
                            <p>
                                <?php echo e(trans('admin.trademarks')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('trademarks')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('trademarks')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-cube nav-icon"></i>
                                    <?php echo e(trans('admin.trademarks')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('trademarks/create')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <?php echo e(trans('admin.create_trademark')); ?>

                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                                                with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview <?php echo e(active_menu('manufactures')[0]); ?>">
                        <a href="<?php echo e(aurl('manufactures')); ?>"
                            class="nav-link">
                            <i class="nav-icon fas fa-industry"></i>
                            <p>
                                <?php echo e(trans('admin.manufactures')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('manufactures')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('manufactures')); ?>"
                                    class="nav-link">
                                    <i
                                        class="fas fa-industry nav-icon"></i>
                                    <?php echo e(trans('admin.manufactures')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('manufactures/create')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <?php echo e(trans('admin.create_manufacture')); ?>

                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                                                with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview <?php echo e(active_menu('shipping')[0]); ?>">
                        <a href="<?php echo e(aurl('shipping')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-truck"></i>
                            <p>
                                <?php echo e(trans('admin.shippings')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('shipping')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('shipping')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-truck nav-icon"></i>
                                    <?php echo e(trans('admin.shippings')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('shipping/create')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <?php echo e(trans('admin.create_shipping')); ?>

                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                                                with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview <?php echo e(active_menu('malls')[0]); ?>">
                        <a href="<?php echo e(aurl('malls')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-building"></i>
                            <p>
                                <?php echo e(trans('admin.malls')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('mall')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('malls')); ?>"
                                    class="nav-link">
                                    <i
                                        class="fas fa-building nav-icon"></i>
                                    <?php echo e(trans('admin.malls')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('malls/create')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <?php echo e(trans('admin.create_mall')); ?>

                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                                                            with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview <?php echo e(active_menu('colors')[0]); ?>">
                        <a href="<?php echo e(aurl('colors')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-palette"></i>
                            <p>
                                <?php echo e(trans('admin.colors')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('mall')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('colors')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-palette nav-icon"></i>
                                    <?php echo e(trans('admin.colors')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('colors/create')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <?php echo e(trans('admin.create_color')); ?>

                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>


            </nav>
        </div>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>