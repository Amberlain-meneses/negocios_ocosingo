@can('businesses.index')
<li class="nav-item">
    <a href="{{ route('businesses.index') }}"
       class="nav-link bg-success {{ Request::is('businesses*') ? 'active' : '' }}">
        <p>Negocios</p>
    </a>
</li>
@endcan
@can('products.index')
<li class="nav-item">
    <a href="{{ route('products.index') }}"
       class="nav-link bg-success {{ Request::is('products*') ? 'active' : '' }}">
        <p>Productos</p>
    </a>
</li>
@endcan
@can('users.index')
<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link bg-success {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>
@endcan
@can('roles.index')
<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link bg-success {{ Request::is('roles*') ? 'active' : '' }}">
        <p>Roles</p>
    </a>
</li>
@endcan

<li class="nav-item">
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <p>Categories</p>
    </a>
</li>


