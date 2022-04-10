<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">HotelMaSSeh</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">HMSS</a>
      </div>
      <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="@if (Request::is('admin/dashboard','admin/dashboard/*')) active @endif">
                <a class="nav-link" href="/admin/dashboard">
                    <i class="far fa-square"></i>
                    <span>Dashboard</span>
                </a>
            </li>

          <li class="menu-header">Admin</li>
            {{-- <li class="@if (Request::is('/posts','/posts*')) active @endif">
                <a class="nav-link" href="{{route('posts.index')}}">
                    <i class="far fa-square"></i>
                    <span>Posts</span>
                </a>
            </li> --}}
            <li class="@if (Request::is('admin/kamar','admin/kamar/*')) active @endif">
                <a class="nav-link" href="{{route('admin.kamar.index')}}">
                    <i class="far fa-square"></i>
                    <span>Kamar</span>
                </a>
            </li>
            <li class="@if (Request::is('admin/fasikamar','admin/fasikamar/*')) active @endif">
                <a class="nav-link" href="{{route('admin.fasikamar.index')}}">
                    <i class="far fa-square"></i>
                    <span>Fasilitas Kamar</span>
                </a>
            </li>
            <li class="@if (Request::is('admin/fasihotel','admin/fasihotel/*')) active @endif">
                <a class="nav-link" href="{{route('admin.fasihotel.index')}}">
                    <i class="far fa-square"></i>
                    <span>Fasilitas Hotel</span>
                </a>
            </li>
      </ul>
    </aside>
</div>
