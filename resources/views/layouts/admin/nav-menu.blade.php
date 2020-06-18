<div class="sidebar" data-color="purple" data-background-color="white">
<!--
Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

Tip 2: you can also add an image using data-image tag
-->
<div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        CT
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
    </a>
</div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item {{ request()->routeIs('front.home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('front.home') }}" target="_blank">
                <i class="material-icons">home</i>
                <p>Home</p>
            </a>
        </li>
        <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        {{-- Dropdown Menu --}}
        <li class="nav-item has-treeview  {{ request()->routeIs('admin.slider.*') ? 'active' : '' }}">
            <a href="#" class="nav-link">
                <i class="material-icons">api</i>
                <p>
                    Sliders
                    <i class="material-icons nav-right-icon">keyboard_arrow_left</i>
                </p>
            </a>
            <ul class="nav nav-treeview d-none">
                <li class="nav-item {{ request()->routeIs('admin.slider.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.slider.index') }}" class="nav-link">
                        <i class="material-icons">arrow_right</i>
                        <p>All Sliders</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.slider.create') ? 'active' : '' }}">
                    <a href="{{ route('admin.slider.create') }}" class="nav-link">
                        <i class="material-icons">arrow_right</i>
                        <p>Add New</p>
                    </a>
                </li>
            </ul>
        </li>
        {{-- Dropdown Menu end --}}
        {{-- Dropdown Menu --}}
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="material-icons">api</i>
                <p>
                    Categories
                    <i class="material-icons nav-right-icon">keyboard_arrow_left</i>
                </p>
            </a>
            <ul class="nav nav-treeview d-none">
                <li class="nav-item">
                    <a href="category.php" class="nav-link">
                        <i class="material-icons">trip_origin</i>
                        <p>All Categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="category.php?action=add" class="nav-link">
                        <i class="material-icons">trip_origin</i>
                        <p>Add New</p>
                    </a>
                </li>
            </ul>
        </li>
        {{-- Dropdown Menu end --}}
    </ul>
</div>
</div>