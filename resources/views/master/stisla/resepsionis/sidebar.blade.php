<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">HotelMaSSeh</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">HMSS</a>
      </div>
      {{-- <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li><a class="nav-link" href="/resepsionis/dashboard"><i class="far fa-square"></i> <span>Dashboard</span></a></li>

          <li class="menu-header">Resepsionis</li>
          <li><a class="nav-link" href="{{route('resepsionis.kamar')}}"><i class="far fa-square"></i> <span>Kamar</span></a></li>
          <li><a class="nav-link" href="{{route('resepsionis.fasikamar')}}"><i class="far fa-square"></i> <span>Fasilitas Kamar</span></a></li>
          <li><a class="nav-link" href="{{route('resepsionis.fasihotel')}}"><i class="far fa-square"></i> <span>Fasilitas Hotel</span></a></li>
      </ul> --}}



      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="@if (Request::is('resepsionis/dashboard','resepsionis/dashboard/*')) active @endif">
            <a class="nav-link" href="/resepsionis/dashboard">
                <i class="far fa-square"></i>
                <span>Dashboard</span>
            </a>
        </li>

      <li class="menu-header">Resepsionis</li>
        <li class="@if (Request::is('resepsionis/reservasi','resepsionis/reservasi/*')) active @endif">
            <a class="nav-link" href="/resepsionis/reservasi">
                <i class="far fa-square"></i>
                <span>Reservasi</span>
            </a>
        </li>
        {{-- <li class="@if (Request::is('admin/fasikamar','admin/fasikamar/*')) active @endif">
            <a class="nav-link" href="{{route('admin.fasikamar')}}">
                <i class="far fa-square"></i>
                <span>Fasilitas Kamar</span>
            </a>
        </li>
        <li class="@if (Request::is('admin/fasihotel','admin/fasihotel/*')) active @endif">
            <a class="nav-link" href="{{route('admin.fasihotel')}}">
                <i class="far fa-square"></i>
                <span>Fasilitas Hotel</span>
            </a>
        </li> --}}
  </ul>
    </aside>
</div>
