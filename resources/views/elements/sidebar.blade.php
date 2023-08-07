<aside class="page-sidebar">
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
            <img src="{{ asset('img/logo.png') }}" alt="HRMS" aria-roledescription="logo">
            <span class="page-logo-text mr-1">HRMS</span>
            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
        </a>
    </div>
    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">
        <div class="info-card">
            <img src="{{ asset('img/pro.png') }}" class="profile-image rounded-circle" alt="{{ Auth::user()->name }}">
            <div class="info-card-text">
                <a href="#" class="d-flex align-items-center text-white">
                    <span class="text-truncate text-truncate-sm d-inline-block">
                        {{ Auth::user()->name }}
                    </span>
                </a>
                <span class="d-inline-block text-truncate text-truncate-sm">Toronto, Canada</span>
            </div>
            <img src="{{ asset('img/card-backgrounds/cover-2-lg.png') }}" class="cover" alt="cover">
        </div>
        <ul id="js-nav-menu" class="nav-menu">
            <li>
                <a href="{{ route('dashboard') }}" title="Dashboard" data-filter-tags="Dashboard">
                    <i class="fal fa-info-circle"></i>
                    <span class="nav-link-text" data-i18n="nav.application_intel">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" title="Masters" data-filter-tags="masters" class=" waves-effect waves-themed" aria-expanded="false">
                    <i class="fal fa-cog"></i>
                    <span class="nav-link-text" data-i18n="nav.theme_settings">Masters</span>
                </a>
                <ul style="display: none;">
                    <li>
                        <a href="{{ route('roles.index') }}" title="How it works" data-filter-tags="theme settings how it works" class=" waves-effect waves-themed">
                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Roles</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users.list') }}" title="How it works" data-filter-tags="theme settings how it works" class=" waves-effect waves-themed">
                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Users</span>
                        </a>
                    </li>
                </ul>
            </li>
            @can('master-module')
            @endcan
        </ul>
        <div class="filter-message js-filter-message bg-success-600"></div>
    </nav>
    <!-- END PRIMARY NAVIGATION -->
    <!-- NAV FOOTER -->

</aside>
