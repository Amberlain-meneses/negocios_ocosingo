<li class="nav-item">
    <a href="{{ route('businesses.index') }}"
       class="nav-link bg-success {{ Request::is('businesses*') ? 'active' : '' }}">
        <p>Negocios</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('products.index') }}"
       class="nav-link bg-success {{ Request::is('products*') ? 'active' : '' }}">
        <p>Products</p>
    </a>
</li>


