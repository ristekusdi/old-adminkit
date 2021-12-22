<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url('adminkit/pages/dashboard') }}">
            <span class="align-middle">{{ env('APP_NAME') }}</span>
        </a>
        {!! load_adminkit_menu() !!}
    </div>
</nav>