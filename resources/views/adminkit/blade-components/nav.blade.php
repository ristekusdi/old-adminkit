<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url('adminkit/pages/dashboard') }}">
            <span class="align-middle">AdminKit</span>
        </a>
        {!! load_menu() !!}
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ is_active_path('adminkit/pages/dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('adminkit/pages/dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ is_active_path('adminkit/pages/profile') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('adminkit/pages/profile') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>

            <li class="sidebar-item {{ is_active_path('adminkit/pages/blank') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('adminkit/pages/blank') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
                </a>
            </li>

            
            <li class="sidebar-item {{ is_active_path('adminkit/pages/chart') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('adminkit/pages/chart') }}">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Chart</span>
                </a>
            </li>

            <!-- Kalau link active maka class `active` muncul dan sebaliknya -->
            <li class="sidebar-item {{ is_active_path('adminkit/pages/subnestedlv1') ? 'active' : '' }}">
                <!-- Kalau link active maka class `collapsed` menghilang dan sebaliknya-->
                <!-- Kalau link active maka value dari attribute `aria-expanded` true dan sebaliknya -->
                <a class="sidebar-link {{ is_active_path('adminkit/pages/subnestedlv1') ? '' : 'collapsed' }}" data-bs-target="#nested-menu-lv1" data-bs-toggle="collapse" aria-expanded="{{ is_active_path('adminkit/pages/subnestedlv1') ? 'true' : 'false' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout align-middle"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg> <span class="align-middle">Nested Menu Lv. 1</span>
                </a>
                <!-- Kalau link active maka class `show` menghilang dan sebaliknya -->
                <ul id="nested-menu-lv1" class="sidebar-dropdown list-unstyled collapse {{ is_active_path('adminkit/pages/subnestedlv1') ? 'show' : '' }}" data-bs-parent="#sidebar" style="">
                    <li class="sidebar-item {{ is_active_path('adminkit/pages/subnestedlv1') ? 'active' : '' }}"><a class="sidebar-link" href="{{ url('adminkit/pages/subnestedlv1') }}">Sub Nested Menu Lv. 1</a></li>
                </ul>
            </li>

            <li class="sidebar-item {{ is_active_path('adminkit/pages/subnestedlv2') ? 'active' : '' }}">
                <a data-bs-target="#multi" data-bs-toggle="collapse" class="sidebar-link {{ is_active_path('adminkit/pages/subnestedlv2') ? '' : 'collapsed' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-down align-middle"><polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path></svg> <span class="align-middle">Multi Level</span>
                </a>
                <ul id="multi" class="sidebar-dropdown list-unstyled collapse {{ is_active_path('adminkit/pages/subnestedlv2') ? 'show' : '' }}" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a data-bs-target="#multi-2" data-bs-toggle="collapse" class="sidebar-link {{ is_active_path('adminkit/pages/subnestedlv2') ? '' : 'collapsed' }}" aria-expanded="{{ is_active_path('adminkit/pages/subnestedlv2') ? 'true' : 'false' }}">Two Levels</a>
                        <ul id="multi-2" class="sidebar-dropdown list-unstyled collapse {{ is_active_path('adminkit/pages/subnestedlv2') ? 'show' : '' }}">
                            <li class="sidebar-item {{ is_active_path('adminkit/pages/subnestedlv2') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ url('adminkit/pages/subnestedlv2') }}">Item 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item {{ is_active_path('adminkit/pages/subnestedlv3') ? 'active' : '' }}">
                <a data-bs-target="#multi-x" data-bs-toggle="collapse" class="sidebar-link {{ is_active_path('adminkit/pages/subnestedlv3') ? '' : 'collapsed' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-down align-middle"><polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path></svg> <span class="align-middle">Multi Level</span>
                </a>
                <ul id="multi-x" class="sidebar-dropdown list-unstyled collapse {{ is_active_path('adminkit/pages/subnestedlv3') ? 'show' : '' }}" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a data-bs-target="#multi-3" data-bs-toggle="collapse" class="sidebar-link {{ is_active_path('adminkit/pages/subnestedlv3') ? '' : 'collapsed' }}" aria-expanded="{{ is_active_path('adminkit/pages/subnestedlv3') ? 'true' : 'false' }}">Three Levels</a>
                        <ul id="multi-3" class="sidebar-dropdown list-unstyled collapse {{ is_active_path('adminkit/pages/subnestedlv3') ? 'show' : '' }}">
                            <li class="sidebar-item">
                                <a data-bs-target="#multi-3-1" data-bs-toggle="collapse" class="sidebar-link {{ is_active_path('adminkit/pages/subnestedlv3') ? '' : 'collapsed' }}" aria-expanded="{{ is_active_path('adminkit/pages/subnestedlv3') ? 'true' : 'false' }}">Item 1</a>
                                <ul id="multi-3-1" class="sidebar-dropdown list-unstyled collapse {{ is_active_path('adminkit/pages/subnestedlv3') ? 'show' : '' }}">
                                    <li class="sidebar-item {{ is_active_path('adminkit/pages/subnestedlv3') ? 'active' : '' }}">
                                        <a class="sidebar-link" href="{{ url('adminkit/pages/subnestedlv3') }}">Item 1</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">Item 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidebar-header">
                Tools & Components
            </li>

            <li class="sidebar-item {{ is_active_path('adminkit/ui/buttons') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('adminkit/ui/buttons') }}">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
                </a>
            </li>

            <li class="sidebar-item {{ is_active_path('adminkit/ui/forms') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('adminkit/ui/forms') }}">
                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
                </a>
            </li>

            <li class="sidebar-item {{ is_active_path('adminkit/ui/cards') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('adminkit/ui/cards') }}">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
                </a>
            </li>

            <li class="sidebar-item {{ is_active_path('adminkit/ui/typography') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('adminkit/ui/typography') }}">
                    <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
                </a>
            </li>

            <li class="sidebar-item {{ is_active_path('adminkit/ui/icons') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('adminkit/ui/icons') }}">
                    <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                </a>
            </li>
    </div>
</nav>