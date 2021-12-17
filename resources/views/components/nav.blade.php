<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url('adminkit/pages/dashboard') }}">
            <span class="align-middle">AdminKit</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ is_active_path('/') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('/') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
