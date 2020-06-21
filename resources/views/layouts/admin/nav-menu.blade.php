<div class="sidebar" data-color="purple" data-background-color="white">
<!--
Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

Tip 2: you can also add an image using data-image tag
-->
<div class="logo">
    <a href="https://galibweb.com/" class="simple-text logo-normal">
        GalibWeb
    </a>
</div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item {{ request()->routeIs('frontend.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('frontend.index') }}" target="_blank">
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
        <li class="nav-item has-treeview  {{ request()->routeIs('admin.category.*') ? 'active' : '' }}">
            <a href="#" class="nav-link">
                <i class="material-icons">view_sidebar</i>
                <p>
                    Categories
                    <i class="material-icons nav-right-icon">keyboard_arrow_left</i>
                </p>
            </a>
            <ul class="nav nav-treeview d-none">
                <li class="nav-item {{ request()->routeIs('admin.category.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}" class="nav-link">
                        <i class="material-icons">arrow_right</i>
                        <p>All Categories</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.category.create') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.create') }}" class="nav-link">
                        <i class="material-icons">arrow_right</i>
                        <p>Add New</p>
                    </a>
                </li>
            </ul>
        </li>
        {{-- Dropdown Menu end --}}
        {{-- Dropdown Menu --}}
        <li class="nav-item has-treeview  {{ request()->routeIs('admin.food.*') ? 'active' : '' }}">
            <a href="#" class="nav-link">
                <i class="material-icons">fastfood</i>
                <p>
                    Food Items
                    <i class="material-icons nav-right-icon">keyboard_arrow_left</i>
                </p>
            </a>
            <ul class="nav nav-treeview d-none">
                <li class="nav-item {{ request()->routeIs('admin.food.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.food.index') }}" class="nav-link">
                        <i class="material-icons">arrow_right</i>
                        <p>All Food items</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.food.create') ? 'active' : '' }}">
                    <a href="{{ route('admin.food.create') }}" class="nav-link">
                        <i class="material-icons">arrow_right</i>
                        <p>Add New</p>
                    </a>
                </li>
            </ul>
        </li>
        {{-- Dropdown Menu end --}}
        <li class="nav-item {{ request()->routeIs('admin.reservation.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.reservation.index') }}">
                <i class="material-icons">calendar_today</i>
                <p>Reservation</p>
            </a>
        </li>
        <li class="nav-item {{ request()->routeIs('admin.contact.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.contact.index') }}">
                <i class="material-icons">source</i>
                <p>Contact</p>
            </a>
        </li>
    </ul>
</div>
</div>