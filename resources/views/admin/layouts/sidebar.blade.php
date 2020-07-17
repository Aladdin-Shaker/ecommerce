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
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                {{trans('admin.main')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('')[1]}}">
                            <li class="nav-item has-treeview ">
                                <a href="{{aurl()}}" class="nav-link">
                                    <i
                                        class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        {{trans('admin.dashboard')}}
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item has-treeview ">
                                <a href="{{aurl('settings')}}"
                                    class="nav-link">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>
                                        {{trans('admin.settings')}}
                                    </p>
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
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                {{trans('admin.adminAccount')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('admin')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('admin')}}"
                                    class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    {{trans('admin.adminAccount')}}
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
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                {{trans('admin.userAccount')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('users')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('users')}}"
                                    class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    {{trans('admin.users')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('users')}}?level=user"
                                    class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    {{trans('admin.user')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('users')}}?level=vendor"
                                    class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    {{trans('admin.vendor')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('users')}}?level=company"
                                    class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    {{trans('admin.company')}}
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
                            <i class="nav-icon fas fa-flag"></i>
                            <p>
                                {{trans('admin.countries')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('countries')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('countries')}}"
                                    class="nav-link">
                                    <i class="fas fa-flag nav-icon"></i>
                                    {{trans('admin.countries')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('countries/create')}}"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    {{trans('admin.create_country')}}
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
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                {{trans('admin.cities')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('cities')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('cities')}}"
                                    class="nav-link">
                                    <i class="fas fa-globe nav-icon"></i>
                                    {{trans('admin.cities')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('cities/create')}}"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    {{trans('admin.create_city')}}
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
                            <i class="nav-icon fas fa-university"></i>
                            <p>
                                {{trans('admin.states')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('states')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('states')}}"
                                    class="nav-link">
                                    <i
                                        class="fas fa-university nav-icon"></i>
                                    {{trans('admin.states')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('states/create')}}"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    {{trans('admin.create_state')}}
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
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                {{trans('admin.departments')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('departments')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('departments')}}"
                                    class="nav-link">
                                    <i class="fas fa-list nav-icon"></i>
                                    {{trans('admin.departments')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('departments/create')}}"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    {{trans('admin.create_department')}}
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
                            <i class="nav-icon fas fa-cube"></i>
                            <p>
                                {{trans('admin.trademarks')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('trademarks')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('trademarks')}}"
                                    class="nav-link">
                                    <i class="fas fa-cube nav-icon"></i>
                                    {{trans('admin.trademarks')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('trademarks/create')}}"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    {{trans('admin.create_trademark')}}
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
                            <i class="nav-icon fas fa-industry"></i>
                            <p>
                                {{trans('admin.manufactures')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('manufactures')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('manufactures')}}"
                                    class="nav-link">
                                    <i
                                        class="fas fa-industry nav-icon"></i>
                                    {{trans('admin.manufactures')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('manufactures/create')}}"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    {{trans('admin.create_manufacture')}}
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
                            <i class="nav-icon fas fa-truck"></i>
                            <p>
                                {{trans('admin.shippings')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('shipping')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('shipping')}}"
                                    class="nav-link">
                                    <i class="fas fa-truck nav-icon"></i>
                                    {{trans('admin.shippings')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('shipping/create')}}"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    {{trans('admin.create_shipping')}}
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
                            <i class="nav-icon fas fa-building"></i>
                            <p>
                                {{trans('admin.malls')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('mall')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('malls')}}"
                                    class="nav-link">
                                    <i
                                        class="fas fa-building nav-icon"></i>
                                    {{trans('admin.malls')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('malls/create')}}"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    {{trans('admin.create_mall')}}
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
                            <i class="nav-icon fas fa-palette"></i>
                            <p>
                                {{trans('admin.colors')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul
                            class="nav nav-treeview {{active_menu('mall')[1]}}">
                            <li class="nav-item">
                                <a href="{{aurl('colors')}}"
                                    class="nav-link">
                                    <i class="fas fa-palette nav-icon"></i>
                                    {{trans('admin.colors')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{aurl('colors/create')}}"
                                    class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    {{trans('admin.create_color')}}
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
