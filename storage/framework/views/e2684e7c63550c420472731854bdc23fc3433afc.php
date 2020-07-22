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
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                <?php echo e(trans('admin.main')); ?>

                            </p>
                            <i class="nav-icon fas fa-home"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('')[1]); ?>">
                            <li class="nav-item has-treeview ">
                                <a href="<?php echo e(aurl()); ?>" class="nav-link">
                                    <p>
                                        <?php echo e(trans('admin.dashboard')); ?>

                                    </p>
                                    <i
                                        class="nav-icon fas fa-tachometer-alt"></i>
                                </a>
                            </li>

                            <li class="nav-item has-treeview ">
                                <a href="<?php echo e(aurl('settings')); ?>"
                                    class="nav-link">
                                    <p>
                                        <?php echo e(trans('admin.settings')); ?>

                                    </p>
                                    <i class="nav-icon fas fa-cogs"></i>
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
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                <?php echo e(trans('admin.adminAccount')); ?>

                            </p>
                            <i class="nav-icon fas fa-users"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('admin')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('admin')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.adminAccount')); ?>

                                    <i class="fas fa-users nav-icon"></i>
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
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                <?php echo e(trans('admin.userAccount')); ?>

                            </p>
                            <i class="nav-icon fas fa-users"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('users')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('users')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.users')); ?>

                                    <i class="fas fa-users nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('users')); ?>?level=user"
                                    class="nav-link">
                                    <?php echo e(trans('admin.user')); ?>

                                    <i class="fas fa-users nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('users')); ?>?level=vendor"
                                    class="nav-link">
                                    <?php echo e(trans('admin.vendor')); ?>

                                    <i class="fas fa-users nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('users')); ?>?level=company"
                                    class="nav-link">
                                    <?php echo e(trans('admin.company')); ?>

                                    <i class="fas fa-users nav-icon"></i>
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
                        class="nav-item has-treeview <?php echo e(active_menu('products')[0]); ?>">
                        <a href="<?php echo e(aurl('products')); ?>" class="nav-link">
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                <?php echo e(trans('admin.products')); ?>

                            </p>
                            <i class="nav-icon fab fa-product-hunt"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('mall')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('products')); ?>"
                                    class="nav-link">
                                    <i
                                        class="fab fa-product-hunt nav-icon"></i>
                                    <?php echo e(trans('admin.products')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('products/create')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <?php echo e(trans('admin.create_product')); ?>

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
                            <p>
                                <?php echo e(trans('admin.countries')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                            <i class="nav-icon fas fa-flag"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('countries')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('countries')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.countries')); ?>

                                    <i class="fas fa-flag nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('countries/create')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.create_country')); ?>

                                    <i class="fas fa-plus nav-icon"></i>
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
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                <?php echo e(trans('admin.cities')); ?>

                            </p>
                            <i class="nav-icon fas fa-globe"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('cities')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('cities')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.cities')); ?>

                                    <i class="fas fa-globe nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('cities/create')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.create_city')); ?>

                                    <i class="fas fa-plus nav-icon"></i>
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
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                <?php echo e(trans('admin.states')); ?>

                            </p>
                            <i class="nav-icon fas fa-university"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('states')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('states')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.states')); ?>

                                    <i
                                        class="fas fa-university nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('states/create')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.create_state')); ?>

                                    <i class="fas fa-plus nav-icon"></i>
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
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                <?php echo e(trans('admin.departments')); ?>

                            </p>
                            <i class="nav-icon fas fa-list"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('departments')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('departments')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.departments')); ?>

                                    <i class="fas fa-list nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('departments/create')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.create_department')); ?>

                                    <i class="fas fa-plus nav-icon"></i>
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
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                <?php echo e(trans('admin.trademarks')); ?>

                            </p>
                            <i class="nav-icon fas fa-cube"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('trademarks')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('trademarks')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.trademarks')); ?>

                                    <i class="fas fa-cube nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('trademarks/create')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.create_trademark')); ?>

                                    <i class="fas fa-plus nav-icon"></i>
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
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                <?php echo e(trans('admin.manufactures')); ?>

                            </p>
                            <i class="nav-icon fas fa-industry"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('manufactures')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('manufactures')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.manufactures')); ?>

                                    <i
                                        class="fas fa-industry nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('manufactures/create')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.create_manufacture')); ?>

                                    <i class="fas fa-plus nav-icon"></i>
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
                            <p>
                                <?php echo e(trans('admin.shippings')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                            <i class="nav-icon fas fa-truck"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('shipping')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('shipping')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.shippings')); ?>

                                    <i class="fas fa-truck nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('shipping/create')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.create_shipping')); ?>

                                    <i class="fas fa-plus nav-icon"></i>
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
                            <p>
                                <?php echo e(trans('admin.malls')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                            <i class="nav-icon fas fa-building"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('mall')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('malls')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.malls')); ?>

                                    <i
                                        class="fas fa-building nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('malls/create')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.create_mall')); ?>

                                    <i class="fas fa-plus nav-icon"></i>
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
                            <p>
                                <?php echo e(trans('admin.colors')); ?>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                            <i class="nav-icon fas fa-palette"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('mall')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('colors')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.colors')); ?>

                                    <i class="fas fa-palette nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('colors/create')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.create_color')); ?>

                                    <i class="fas fa-plus nav-icon"></i>
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
                        class="nav-item has-treeview <?php echo e(active_menu('sizes')[0]); ?>">
                        <a href="<?php echo e(aurl('sizes')); ?>" class="nav-link">
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                <?php echo e(trans('admin.sizes')); ?>

                            </p>
                            <i class="nav-icon fas fa-info-circle"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('mall')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('sizes')); ?>"
                                    class="nav-link">
                                    <?php echo e(trans('admin.sizes')); ?>

                                    <i
                                        class="fas fa-info-circle nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('sizes/create')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <?php echo e(trans('admin.create_size')); ?>

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
                        class="nav-item has-treeview <?php echo e(active_menu('weights')[0]); ?>">
                        <a href="<?php echo e(aurl('weights')); ?>" class="nav-link">
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                <?php echo e(trans('admin.weights')); ?>

                            </p>
                            <i class="nav-icon fas fa-weight"></i>
                        </a>
                        <ul
                            class="nav nav-treeview <?php echo e(active_menu('mall')[1]); ?>">
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('weights')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-weight nav-icon"></i>
                                    <?php echo e(trans('admin.weights')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(aurl('weights/create')); ?>"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <?php echo e(trans('admin.create_weight')); ?>

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