<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url('adminkit/pages/dashboard') }}">
            <span class="align-middle">AdminKit</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ is_active_url('adminkit/pages/dashboard') }}">
                <a class="sidebar-link" href="{{ url('adminkit/pages/dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ is_active_url('adminkit/pages/profile') }}">
                <a class="sidebar-link" href="{{ url('adminkit/pages/profile') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>

            <li class="sidebar-item {{ is_active_url('adminkit/pages/blank') }}">
                <a class="sidebar-link" href="{{ url('adminkit/pages/blank') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
                </a>
            </li>

            
            <li class="sidebar-item {{ is_active_url('adminkit/pages/chart') }}">
                <a class="sidebar-link" href="{{ url('adminkit/pages/chart') }}">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Chart</span>
                </a>
            </li>

            <li class="sidebar-header">
                Tools & Components
            </li>

            <li class="sidebar-item {{ is_active_url('adminkit/ui/buttons') }}">
                <a class="sidebar-link" href="{{ url('adminkit/ui/buttons') }}">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
                </a>
            </li>

            <li class="sidebar-item {{ is_active_url('adminkit/ui/forms') }}">
                <a class="sidebar-link" href="{{ url('adminkit/ui/forms') }}">
                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
                </a>
            </li>

            <li class="sidebar-item {{ is_active_url('adminkit/ui/cards') }}">
                <a class="sidebar-link" href="{{ url('adminkit/ui/cards') }}">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
                </a>
            </li>

            <li class="sidebar-item {{ is_active_url('adminkit/ui/typography') }}">
                <a class="sidebar-link" href="{{ url('adminkit/ui/typography') }}">
                    <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
                </a>
            </li>

            <li class="sidebar-item {{ is_active_url('adminkit/ui/icons') }}">
                <a class="sidebar-link" href="{{ url('adminkit/ui/icons') }}">
                    <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                </a>
            </li>
    </div>
</nav>