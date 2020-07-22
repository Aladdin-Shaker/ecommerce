<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{url('/design/adminlte/dist/img/AdminLTELogo.png')}}"
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
                    <img src="{{url('/design/adminlte/dist/img/user2-160x160.jpg')}}"
                        class="img-circle elevation-2" alt="User Image" />
                </div>
                <div class="info">
                    <a href="#"
                        class="d-block">{{admin()->user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">

                {{-- Main --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                               with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('')[0]}}">
                        <a href="{{aurl('admin')}}" class="nav-link">
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                {{trans('admin.main')}}
                            </p>
                            <i class="nav-icon fas fa-home"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('')[1]}}">
                            <li class="nav-item has-treeview ">
                                <a href="{{aurl()}}" class="nav-link">
                                    <p>
                                        {{trans('admin.dashboard')}}
                                    </p>
                                    <i
                                        class="nav-icon fas fa-tachometer-alt"></i>
                                </a>
                            </li>

                            <li class="nav-item has-treeview ">
                                <a href="{{aurl('settings')}}"
                                    class="nav-link">
                                    <p>
                                        {{trans('admin.settings')}}
                                    </p>
                                    <i class="nav-icon fas fa-cogs"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{-- admins accounts --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('admin')[0]}}">
                        <a href="{{aurl('admin')}}" class="nav-link">
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                {{trans('admin.adminAccount')}}
                            </p>
                            <i class="nav-icon fas fa-users"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('admin')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('admin')}}"
                                    class="nav-link">
                                    {{trans('admin.adminAccount')}}
                                    <i class="fas fa-users nav-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{-- users accounts --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('users')[0]}}">
                        <a href="{{aurl('users')}}" class="nav-link">
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                {{trans('admin.userAccount')}}
                            </p>
                            <i class="nav-icon fas fa-users"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('users')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('users')}}"
                                    class="nav-link">
                                    {{trans('admin.users')}}
                                    <i class="fas fa-users nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('users')}}?level=user"
                                    class="nav-link">
                                    {{trans('admin.user')}}
                                    <i class="fas fa-users nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('users')}}?level=vendor"
                                    class="nav-link">
                                    {{trans('admin.vendor')}}
                                    <i class="fas fa-users nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('users')}}?level=company"
                                    class="nav-link">
                                    {{trans('admin.company')}}
                                    <i class="fas fa-users nav-icon"></i>
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>

                {{-- product --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                                                         with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('products')[0]}}">
                        <a href="{{aurl('products')}}" class="nav-link">
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                {{trans('admin.products')}}
                            </p>
                            <i class="nav-icon fab fa-product-hunt"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('mall')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('products')}}"
                                    class="nav-link">
                                    <i
                                        class="fab fa-product-hunt nav-icon"></i>
                                    {{trans('admin.products')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('products/create')}}"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    {{trans('admin.create_product')}}
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{-- countries --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('countries')[0]}}">
                        <a href="{{aurl('countries')}}" class="nav-link">
                            <p>
                                {{trans('admin.countries')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            <i class="nav-icon fas fa-flag"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('countries')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('countries')}}"
                                    class="nav-link">
                                    {{trans('admin.countries')}}
                                    <i class="fas fa-flag nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('countries/create')}}"
                                    class="nav-link">
                                    {{trans('admin.create_country')}}
                                    <i class="fas fa-plus nav-icon"></i>
                                </a>
                            </li>


                        </ul>
                    </li>
                </ul>

                {{-- cities --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('cities')[0]}}">
                        <a href="{{aurl('cities')}}" class="nav-link">
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                {{trans('admin.cities')}}
                            </p>
                            <i class="nav-icon fas fa-globe"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('cities')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('cities')}}"
                                    class="nav-link">
                                    {{trans('admin.cities')}}
                                    <i class="fas fa-globe nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('cities/create')}}"
                                    class="nav-link">
                                    {{trans('admin.create_city')}}
                                    <i class="fas fa-plus nav-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{-- states --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('states')[0]}}">
                        <a href="{{aurl('states')}}" class="nav-link">
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                {{trans('admin.states')}}
                            </p>
                            <i class="nav-icon fas fa-university"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('states')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('states')}}"
                                    class="nav-link">
                                    {{trans('admin.states')}}
                                    <i
                                        class="fas fa-university nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('states/create')}}"
                                    class="nav-link">
                                    {{trans('admin.create_state')}}
                                    <i class="fas fa-plus nav-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{-- departments --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('departments')[0]}}">
                        <a href="{{aurl('departments')}}" class="nav-link">
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                {{trans('admin.departments')}}
                            </p>
                            <i class="nav-icon fas fa-list"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('departments')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('departments')}}"
                                    class="nav-link">
                                    {{trans('admin.departments')}}
                                    <i class="fas fa-list nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('departments/create')}}"
                                    class="nav-link">
                                    {{trans('admin.create_department')}}
                                    <i class="fas fa-plus nav-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{-- trademarks --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                                    with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('trademarks')[0]}}">
                        <a href="{{aurl('trademarks')}}" class="nav-link">
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                {{trans('admin.trademarks')}}
                            </p>
                            <i class="nav-icon fas fa-cube"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('trademarks')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('trademarks')}}"
                                    class="nav-link">
                                    {{trans('admin.trademarks')}}
                                    <i class="fas fa-cube nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('trademarks/create')}}"
                                    class="nav-link">
                                    {{trans('admin.create_trademark')}}
                                    <i class="fas fa-plus nav-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{-- manufactures --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                                                with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('manufactures')[0]}}">
                        <a href="{{aurl('manufactures')}}"
                            class="nav-link">
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                {{trans('admin.manufactures')}}
                            </p>
                            <i class="nav-icon fas fa-industry"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('manufactures')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('manufactures')}}"
                                    class="nav-link">
                                    {{trans('admin.manufactures')}}
                                    <i
                                        class="fas fa-industry nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('manufactures/create')}}"
                                    class="nav-link">
                                    {{trans('admin.create_manufacture')}}
                                    <i class="fas fa-plus nav-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{-- shipping --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                                                with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('shipping')[0]}}">
                        <a href="{{aurl('shipping')}}" class="nav-link">
                            <p>
                                {{trans('admin.shippings')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            <i class="nav-icon fas fa-truck"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('shipping')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('shipping')}}"
                                    class="nav-link">
                                    {{trans('admin.shippings')}}
                                    <i class="fas fa-truck nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('shipping/create')}}"
                                    class="nav-link">
                                    {{trans('admin.create_shipping')}}
                                    <i class="fas fa-plus nav-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{-- mall --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                                                with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('malls')[0]}}">
                        <a href="{{aurl('malls')}}" class="nav-link">
                            <p>
                                {{trans('admin.malls')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            <i class="nav-icon fas fa-building"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('mall')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('malls')}}"
                                    class="nav-link">
                                    {{trans('admin.malls')}}
                                    <i
                                        class="fas fa-building nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('malls/create')}}"
                                    class="nav-link">
                                    {{trans('admin.create_mall')}}
                                    <i class="fas fa-plus nav-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{-- color --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                                                            with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('colors')[0]}}">
                        <a href="{{aurl('colors')}}" class="nav-link">
                            <p>
                                {{trans('admin.colors')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            <i class="nav-icon fas fa-palette"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('mall')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('colors')}}"
                                    class="nav-link">
                                    {{trans('admin.colors')}}
                                    <i class="fas fa-palette nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('colors/create')}}"
                                    class="nav-link">
                                    {{trans('admin.create_color')}}
                                    <i class="fas fa-plus nav-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{-- size --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                                                            with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('sizes')[0]}}">
                        <a href="{{aurl('sizes')}}" class="nav-link">
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                {{trans('admin.sizes')}}
                            </p>
                            <i class="nav-icon fas fa-info-circle"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('mall')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('sizes')}}"
                                    class="nav-link">
                                    {{trans('admin.sizes')}}
                                    <i
                                        class="fas fa-info-circle nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('sizes/create')}}"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    {{trans('admin.create_size')}}
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                {{-- weight --}}
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview" role="menu"
                    data-accordion="true">
                    <!-- Add icons to the links using the .nav-icon class
                                                            with font-awesome or any other icon font library -->
                    <li
                        class="nav-item has-treeview {{active_menu('weights')[0]}}">
                        <a href="{{aurl('weights')}}" class="nav-link">
                            <p>
                                <i class="right fas fa-angle-left"></i>
                                {{trans('admin.weights')}}
                            </p>
                            <i class="nav-icon fas fa-weight"></i>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('mall')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('weights')}}"
                                    class="nav-link">
                                    <i class="fas fa-weight nav-icon"></i>
                                    {{trans('admin.weights')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('weights/create')}}"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    {{trans('admin.create_weight')}}
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
