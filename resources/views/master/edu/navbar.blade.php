<!-- navbar -->
<div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0" style="height: 70px;">
        <a class="navbar-brand" href="index.html">
            <img src="{{asset('img/logo.png')}}" alt="logo" style="width: 60px;">
        </a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center" style="height: 70px;">
            <li class="nav-item @if (Request::is('/home','/home*')) active @endif">
              <a class="nav-link martop" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link martop" href="#kamar">Kamar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link martop" href="#fasilitas">Fasilitas</a>
            </li>
            <li class="nav-item @if (Request::is('/pemesanan/reservasi','/pemesanan/reservasi*')) active @endif">
                <a class="nav-link martop" href="/pemesanan/reservasi">Reservasi</a>
              </li>
            <li class="nav-item">
                <a class="nav-link martop" href="/login">Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
</div>
