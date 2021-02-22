<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('dashboard/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.formu') }}"
                        class="nav-link {{ request()->is('admin/formu') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Advanced Form</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.users') }}"
                        class="nav-link {{ request()->is('admin/users') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Modal Valid RealTime</p>
                    </a>

                </li>
                <li class="nav-item
                    {{ request()->is('admin/widgets') ? 'menu-open' : ''}}
                    {{ request()->is('admin/charts') ? 'menu-open' : '' }}
                    {{ request()->is('admin/ielement') ? 'menu-open' : ''}}
                    {{ request()->is('admin/forms') ? 'menu-open' : ''}}
                    {{ request()->is('admin/tables') ? 'menu-open' : ''}}">

                    <a href="#" class="nav-link
                     {{ request()->is('admin/widgets') ? 'active' : ''}}
                     {{ request()->is('admin/charts') ? 'active' : ''}}
                     {{ request()->is('admin/ielement') ? 'active' : ''}}
                     {{ request()->is('admin/forms') ? 'active' : ''}}
                     {{ request()->is('admin/tables') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            AdmLite UI
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">5</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.widgets') }}"
                                class="nav-link {{ request()->is('admin/widgets') ? 'active' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Widgets</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.charts') }}"
                                class="nav-link {{ request()->is('admin/charts') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Charts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.ielement') }}"
                                class="nav-link {{ request()->is('admin/ielement') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>UI Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.forms') }}"
                                class="nav-link {{ request()->is('admin/forms') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Forms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.tables') }}"
                                class="nav-link {{ request()->is('admin/tables') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Tables</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.about') }}"
                        class="nav-link {{ request()->is('admin/about') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-arrow-left"></i>
                        <p>About</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
