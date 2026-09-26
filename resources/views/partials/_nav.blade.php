<nav class="nav mb-4">
<a class="nav-link {{ request()->is('shoes') || (request()->is('shoes/*') && !request()->is('shoes/featured')) ? 'active' : '' }}" href="{{ route('shoes.index') }}">Shoe List</a>
<a class="nav-link {{ request()->is('shoes/featured') ? 'active' : '' }}" href="{{ route('shoes.featured') }}">Featured Shoe</a>
</nav>