<nav>
      <div class="side_navbar">
        <a href="{{route('dashboard')}}" class="@if (request()->routeIs('dashboard')) active @endif">Dashboard</a>
        <a href="{{route('product')}}" class="@if (request()->routeIs('product')) active @endif">Products</a>
        <a href="{{route('user')}}"  class="@if (request()->routeIs('user')) active @endif">Users</a>

      </div>
    </nav>  