<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img class="rounded-circle mr-3"
                width="60"
                src="{{ asset('img/MAH Dev Logo.png') }}"
                alt="avatar">
            {{-- <a href="{{ url('home') }}">MAH DEV</a> --}}
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('home') }}">MAH</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item  ">
                <a href="{{ url('home') }}" class="nav-link ">
                    <i class="fas fa-home">
                    </i><span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Masters</li>
            <li class="nav-item ">
                <a href="{{ route('users.index') }}" class="nav-link ">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('companies.show', 1) }}" class="nav-link">
                    <i class="fas fa-building-flag"></i>
                    <span>Company</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('positions.index') }}" class="nav-link">
                    <i class="fas fa-marker"></i>
                    <span>Positions</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('attendances.index') }}" class="nav-link">
                    <i class="fas fa-clipboard-check"></i>
                    <span>Attendances</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('permissions.index') }}" class="nav-link">
                    <i class="fas fa-file-signature"></i>
                    <span>Permission</span>
                </a>
            </li>

            <li class="menu-header">Reports</li>
            <li class="nav-item">
                <a href="{{ route('permissions.index') }}" class="nav-link">
                    <i class="fas fa-file-invoice"></i>
                    <span>Attendance Report</span>
                </a>
            </li>
        {{-- </ul> --}}

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs"
                class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-book"></i> Documentation
            </a>
        </div>

    </aside>
</div>
