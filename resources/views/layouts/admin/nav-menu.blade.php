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
        <li class="nav-item  {{ request()->routeIs('front.home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('front.home') }}" target="_blank">
                <i class="material-icons">home</i>
                <p>Home</p>
            </a>
        </li>
        <li class="nav-item  {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item  {{ request()->routeIs('admin.foods') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.foods') }}">
                <i class="material-icons">fastfood</i>
                <p>Foods</p>
            </a>
        </li>
        <!-- your sidebar here -->
    </ul>
</div>
</div>