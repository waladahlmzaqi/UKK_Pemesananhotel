@extends('master.edu.layout')
@push('link')
<link rel="stylesheet" href="{{asset('date/css/classic.css')}}">
<link rel="stylesheet" href="{{asset('date/css/classic.date.css')}}">
<!-- Bootstrap CSS -->
<!-- Style -->
<link rel="stylesheet" href="{{asset('date/css/style.css')}}">
@endpush
@section('content')



<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="{{asset('edu/images/beach.jpg')}}">
    <div class="container">
      <div class="hero-slider">
        <!-- slider item -->
        <div class="hero-slider-item">
          <div class="row">
            <div class="col-md-8">
                <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">
                    Cari hotel plus kolam renang luas di Bandung?

                </h1>
                <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">
                    Grand Tebu Hotel, dapatkan fasilitas menarik untuk Anda yang ingin menginap di hotel super nyaman ini.
                    Pesan kamar sekarang juga sebelum kehabisan!
                </p>
              <a href="/pemesanan" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5"
              data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Pesan Sekarang!</a>
            </div>
          </div>
        </div>
        <!-- slider item -->
        <div class="hero-slider-item">
          <div class="row">
            <div class="col-md-8">
                <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">
                    Ingin menikmati pemandangan alam dari Lembang?
                </h1>
                <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">
                    Kamu bisa memilih deretan hotel murah di lembang yang membuatmu semakin betah tinggal di daerah pilihanmu.
                </p>
              <a href="/pemesanan" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5"
              data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Pesan yuk</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- /hero slider ---------------------------------------------------------------------------------------->

<!--tentang kami  ---------------------------------------------------------------------------------------->
<section class="section" id="home">
    <div class="container">
      <div class="row">
        <div class="col-md-5 mb-5">
          <img class="img-fluid w-100" src="{{asset('edu/images/tentangkami.jpg')}}" alt="tentangkami">
        </div>
        <div class="col-md-6 mb-5">
          <h3>Tentang Kami</h3>
          {{-- <h6 class="text-color">Computer Science</h6> --}}
          <p class="mb-5">Hotel Borobudur Jakarta merupakan bagian dari managemen Discovery Hotels & Resorts.
              Managemen Discovery Hotels & Resorts merupakan satu organisasi dari para pelaku bisnis
              perhotelan dan pariwisata yang berpengalaman di bidangnya. Managemen menyediakan layanan
              konsultan untuk hotel-hotel ternama dan resort. Lebih dari itu, managemen juga menawarkan
              servis penuh untuk pembukaan property baru maupun rebrand hotel yang telah ada.</p>
          <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
              <h4 class="mb-4">CONTACT INFO:</h4>
              <ul class="list-unstyled">
                <li class="mb-3"><a class="text-color" href="mailto:johndoe@email.com"><i class="ti-email mr-2"></i>hotelmasseh@email.com</a></li>
                <li class="mb-3"><a class="text-color" href="callto:+120345876"><i class="ti-mobile mr-2"></i>+62 838 9680 2804</a></li>
                <li class="mb-3"><a class="text-color" href="#"><i class="ti-location-pin mr-2"></i>SMK Taruna Bhakti
                    Depok,Jawa Barat</a></li>
              </ul>
            </div>
            <div class="col-md-6 mb-5 mb-md-0">
                <h4 class="mb-4">-</h4>
                <ul class="list-unstyled">
                  <li class="mb-3"><a class="text-color" href="#"><i class="ti-facebook mr-2"></i>fb_hotelmasseh</a></li>
                  <li class="mb-3"><a class="text-color" href="#"><i class="ti-twitter-alt mr-2"></i>@hotelmasseh</a></li>
                  <li class="mb-3"><a class="text-color" href="#"><i class="ti-skype mr-2"></i>hotelmasseh</a></li>
                  <li class="mb-3"><a class="text-color" href="#"><i class="ti-instagram mr-2"></i>hotel_masseh</a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- tentang kami ---------------------------------------------------------------------------------------->



<!-- tipe kamar   ---------------------------------------------------------------------------------------->
<section class="section" id="kamar">
    <div class="container">
        <h2 class="section-title" style="margin-top: -60px;margin-left: 20px;margin-bottom: 40px;">Kamar</h2>
      <div class="row">
        <div class="col-12">
          <!-- teacher category list -->
          <ul class="list-inline text-center filter-controls mb-5">
            <li class="list-inline-item m-3 text-uppercase active" data-filter="all">All</li>
            @foreach ($datak as $kamar)
            <li class="list-inline-item m-3 text-uppercase" data-filter="{{ $kamar->tp_kamar }}">{{ $kamar->tp_kamar }}</li>
            @endforeach
          </ul>
        </div>
      </div>
      <!-- teacher list -->
      <div class="row filtr-container">
        @foreach ($relasi as $kamar)
        <div data-category="{{ $kamar->tp_kamar }}" class="col-lg-4 col-sm-6 mb-5 filtr-item">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="{{asset('img/kamar/'.$kamar->image)}}" alt="">
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title">{{ $kamar->tp_kamar }}</h4>
              </a>
              <p>{{ $kamar->jml_kamar }}</p>
              <ul class="list-inline">
                @foreach ($kamar->fasikamar as $fasi)
                <li class="list-inline-item"><a class="text-color" href="">{{ $fasi->nama_fasilitas }} | </a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</section>
<!-- tipe kamar   ---------------------------------------------------------------------------------------->




<!-- fasilitas hotel    ---------------------------------------------------------------------------------------->
<section class="section" id="fasilitas">
    <div class="container">
        <h2 class="section-title" style="margin-top: -60px;margin-left: 20px;margin-bottom: 40px;">Fasilitas Hotel</h2>
        <!-- course list -->
        <div class="row justify-content-center">
            <!-- course item -->
            @foreach ($data as $fasihotel)
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('img/fasihotel/'.$fasihotel->image)}}" alt="course thumb">
                    <div class="card-body">
                    <a href="course-single.html">
                        <h4 class="card-title">{{ $fasihotel->nama_fasilitas }}</h4>
                    </a>
                    <p class="card-text mb-4">{{ $fasihotel->keterangan }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /course list -->
    </div>
</section>
<!-- fasilitas hotel    ---------------------------------------------------------------------------------------->






@endsection
@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{asset('date/js/popper.min.js')}}"></script>
<script src="{{asset('date/js/picker.js')}}"></script>
<script src="{{asset('date/js/picker.date.js')}}"></script>
<script src="{{asset('date/js/main.js')}}"></script>
@endpush

{{-- @can('isAdmin')
    Selamat datang Admin
@elsecan('isResepsionis')
    Selamat datang Manager
@endcan --}}

