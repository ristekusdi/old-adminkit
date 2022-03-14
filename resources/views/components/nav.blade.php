<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url('/') }}">
            <span class="align-middle">AdminKit</span>
        </a>
        <div class="mx-auto" style="width: 80%;">
            <select class="form-select mb-3">
                <option selected>Roles</option>
                <option>One</option>
                <option>Two</option>
                <option>Three</option>
            </select>
        </div>
        {!! load_app_menu() !!}
    </div>
</nav>
