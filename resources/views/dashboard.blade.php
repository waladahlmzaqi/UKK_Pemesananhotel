@extends('master.layout')
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
              <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Pesan Sekarang!</a>
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
              <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Pesan yuk</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- /hero slider ---------------------------------------------------------------------------------------->



<!--form pemesanan---------------------------------------------------------------------------------------->
<div class="content container">
    <div class="text-left">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <form action="#" class="row">
            <div class="col-md-3 mr-5">
                <div class="form-group">
                  <ul class="list-inline text-xl-center">
                    <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                        <div class="d-flex align-items-center">
                            <i class="ti-wallet text-primary icon-md mr-2"></i>
                            <div class="text-left">
                                <div class="form-group">
                                    <label for="input_from">Tanggal Cek In</label>
                                    <input type="text" class="form-control" id="input_from" placeholder="Start Date">
                                </div>
                            </div>
                        </div>
                    </li>
                  </ul>
                </div>
            </div>
            <div class="col-md-3 mr-5">
                <div class="form-group">
                    <ul class="list-inline text-xl-center">
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-wallet text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <div class="form-group">
                                        <label for="input_to">Tanggal Cek Out</label>
                                        <input type="text" class="form-control" id="input_to" placeholder="End Date">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 mr-5">
                <div class="form-group">
                    <ul class="list-inline text-xl-center">
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-wallet text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <div class="form-group">
                                        <label for="input_to">Jumlah Kamar</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-1" style="margin-top: 30px;">
                <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#formHotel" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Pesan
                    </a>
                </p>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="collapse ml-2" id="formHotel">
      <div class="card card-body">
        <!-- contact -->
        <section class="section bg-gray">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h2 class="section-title" style="margin-top: -60px;margin-left: 20px;">Form Pemesanan</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 mb-4 mb-lg-0" style="margin-left: 50px;">
                <form action="#">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Nama Pemesan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control mb-3" id="" name="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control mb-3" id="" name="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">No Handphone</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control mb-3" id="" name="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Nama Tamu</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control mb-3" id="" name="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Tipe Kamar</label>
                        <div class="col-sm-8">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Pilih Kamar Kamu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="float: right;margin-top: 30px;">Konfirmasi Pemesanan</button>
                </form>
              </div>
              <div class="col-lg-5">
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae voluptates doloremque veniam temporibus porro culpa ipsa, nisi soluta minima saepe laboriosam debitis nesciunt. Dolore, labore. Accusamus nulla sed cum aliquid exercitationem debitis error harum porro maxime quo iusto aliquam dicta modi earum fugiat, vel possimus commodi, deleniti et veniam, fuga ipsum praesentium. Odit unde optio nulla ipsum quae obcaecati! Quod esse natus quibusdam asperiores quam vel, tempore itaque architecto ducimus expedita</p>
                <a href="tel:+8802057843248" class="text-color h5 d-block">+880 20 5784 3248</a>
                <a href="mailto:yourmail@email.com" class="mb-5 text-color h5 d-block">yourmail@email.com</a>
                <p>71 Shelton Street<br>London WC2H 9JQ England</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /contact -->
      </div>
  </div>
    {{-- collapse form --}}
</div>
<!--form pemesanan---------------------------------------------------------------------------------------->



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
          <p class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque accusamus tenetur ea harum
            delectus ab consequatur excepturi, odit qui in quo quia voluptate nam optio, culpa aspernatur. Error placeat
            iusto officia voluptas quae.</p>
          <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
              <h4 class="mb-4">CONTACT INFO:</h4>
              <ul class="list-unstyled">
                <li class="mb-3"><a class="text-color" href="mailto:johndoe@email.com"><i class="ti-email mr-2"></i>johndoe@email.com</a></li>
                <li class="mb-3"><a class="text-color" href="callto:+120345876"><i class="ti-mobile mr-2"></i>+120 345 876</a></li>
                <li class="mb-3"><a class="text-color" href="#"><i class="ti-facebook mr-2"></i>john Doe</a></li>
                <li class="mb-3"><a class="text-color" href="#"><i class="ti-twitter-alt mr-2"></i>john Doe</a></li>
                <li class="mb-3"><a class="text-color" href="#"><i class="ti-skype mr-2"></i>john Doe</a></li>
                <li class="mb-3"><a class="text-color" href="#"><i class="ti-world mr-2"></i>johnDoe.com</a></li>
                <li class="mb-3"><a class="text-color" href="#"><i class="ti-location-pin mr-2"></i>1313 Boulevard
                    Cremazie,Quebec</a></li>
              </ul>
            </div>
            <div class="col-md-6 mb-5 mb-md-0">
                <h4 class="mb-4">-</h4>
                <ul class="list-unstyled">
                  <li class="mb-3"><a class="text-color" href="mailto:johndoe@email.com"><i class="ti-email mr-2"></i>johndoe@email.com</a></li>
                  <li class="mb-3"><a class="text-color" href="callto:+120345876"><i class="ti-mobile mr-2"></i>+120 345 876</a></li>
                  <li class="mb-3"><a class="text-color" href="#"><i class="ti-facebook mr-2"></i>john Doe</a></li>
                  <li class="mb-3"><a class="text-color" href="#"><i class="ti-twitter-alt mr-2"></i>john Doe</a></li>
                  <li class="mb-3"><a class="text-color" href="#"><i class="ti-skype mr-2"></i>john Doe</a></li>
                  <li class="mb-3"><a class="text-color" href="#"><i class="ti-world mr-2"></i>johnDoe.com</a></li>
                  <li class="mb-3"><a class="text-color" href="#"><i class="ti-location-pin mr-2"></i>1313 Boulevard
                      Cremazie,Quebec</a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- tentang kami ---------------------------------------------------------------------------------------->



<!-- fasilitas    ---------------------------------------------------------------------------------------->
<section class="section">
    <div class="container">
        <h2 class="section-title" style="margin-top: -60px;margin-left: 20px;margin-bottom: 40px;">Fasilitas</h2>
        <!-- course list -->
        <div class="row justify-content-center">
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
            <div class="card p-0 border-primary rounded-0 hover-shadow">
                <img class="card-img-top rounded-0" src="images/courses/course-1.jpg" alt="course thumb">
                <div class="card-body">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                    <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                </ul>
                <a href="course-single.html">
                    <h4 class="card-title">Photography</h4>
                </a>
                <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna.</p>
                <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                </div>
            </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
            <div class="card p-0 border-primary rounded-0 hover-shadow">
                <img class="card-img-top rounded-0" src="images/courses/course-2.jpg" alt="course thumb">
                <div class="card-body">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                    <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                </ul>
                <a href="course-single.html">
                    <h4 class="card-title">Programming</h4>
                </a>
                <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna.</p>
                <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                </div>
            </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
            <div class="card p-0 border-primary rounded-0 hover-shadow">
                <img class="card-img-top rounded-0" src="images/courses/course-3.jpg" alt="course thumb">
                <div class="card-body">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                    <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                </ul>
                <a href="course-single.html">
                    <h4 class="card-title">Lifestyle Archives</h4>
                </a>
                <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna.</p>
                <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                </div>
            </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
            <div class="card p-0 border-primary rounded-0 hover-shadow">
                <img class="card-img-top rounded-0" src="images/courses/course-4.jpg" alt="course thumb">
                <div class="card-body">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                    <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                </ul>
                <a href="course-single.html">
                    <h4 class="card-title">Complete Freelancing</h4>
                </a>
                <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna.</p>
                <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                </div>
            </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
            <div class="card p-0 border-primary rounded-0 hover-shadow">
                <img class="card-img-top rounded-0" src="images/courses/course-5.jpg" alt="course thumb">
                <div class="card-body">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                    <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                </ul>
                <a href="course-single.html">
                    <h4 class="card-title">Branding Design</h4>
                </a>
                <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna.</p>
                <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                </div>
            </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
            <div class="card p-0 border-primary rounded-0 hover-shadow">
                <img class="card-img-top rounded-0" src="images/courses/course-6.jpg" alt="course thumb">
                <div class="card-body">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                    <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                </ul>
                <a href="course-single.html">
                    <h4 class="card-title">Art Design</h4>
                </a>
                <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna.</p>
                <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                </div>
            </div>
            </div>
        </div>
        <!-- /course list -->
    </div>
</section>
<!-- fasilitas    ---------------------------------------------------------------------------------------->



<!-- tipe kamar   ---------------------------------------------------------------------------------------->
<section class="section">
    <div class="container">
        <h2 class="section-title" style="margin-top: -60px;margin-left: 20px;margin-bottom: 40px;">Kamar</h2>
      <div class="row">
        <div class="col-12">
          <!-- teacher category list -->
          <ul class="list-inline text-center filter-controls mb-5">
            <li class="list-inline-item m-3 text-uppercase active" data-filter="all">All</li>
            <li class="list-inline-item m-3 text-uppercase" data-filter="arts">arts</li>
            <li class="list-inline-item m-3 text-uppercase" data-filter="bio-science">biological science</li>
            <li class="list-inline-item m-3 text-uppercase" data-filter="business-study">business studies</li>
            <li class="list-inline-item m-3 text-uppercase" data-filter="law">law</li>
            <li class="list-inline-item m-3 text-uppercase" data-filter="pharmacy">pharmacy</li>
            <li class="list-inline-item m-3 text-uppercase" data-filter="science">science</li>
            <li class="list-inline-item m-3 text-uppercase" data-filter="social-science">social science</li>
          </ul>
        </div>
      </div>
      <!-- teacher list -->
      <div class="row filtr-container">
        <!-- teacher -->
        <div data-category="arts, law" class="col-lg-4 col-sm-6 mb-5 filtr-item">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/teachers/teacher-1.jpg" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title">Jacke Masito</h4>
              </a>
              <p>Teacher</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- teacher -->
        <div data-category="bio-science" class="col-lg-4 col-sm-6 mb-5 filtr-item">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/teachers/teacher-2.jpg" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title">Clark Malik</h4>
              </a>
              <p>Teacher</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- teacher -->
        <div data-category="business-study" class="col-lg-4 col-sm-6 mb-5 filtr-item">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/teachers/teacher-3.jpg" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title">John Doe</h4>
              </a>
              <p>Teacher</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- teacher -->
        <div data-category="bio-science, science arts" class="col-lg-4 col-sm-6 mb-5 filtr-item">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/teachers/teacher-1.jpg" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title">Alex Rook</h4>
              </a>
              <p>Teacher</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- teacher -->
        <div data-category="law" class="col-lg-4 col-sm-6 mb-5 filtr-item">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/teachers/teacher-2.jpg" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title">Din Martin</h4>
              </a>
              <p>Teacher</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- teacher -->
        <div data-category="science" class="col-lg-4 col-sm-6 mb-5 filtr-item">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/teachers/teacher-3.jpg" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title">Raka Jim</h4>
              </a>
              <p>Teacher</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- teacher -->
        <div data-category="bio-science" class="col-lg-4 col-sm-6 mb-5 filtr-item">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/teachers/teacher-1.jpg" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title">Devid Luis</h4>
              </a>
              <p>Teacher</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- teacher -->
        <div data-category="pharmacy, social-science, arts" class="col-lg-4 col-sm-6 mb-5 filtr-item">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/teachers/teacher-2.jpg" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title">Zim Cook</h4>
              </a>
              <p>Teacher</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- teacher -->
        <div data-category="business-study" class="col-lg-4 col-sm-6 mb-5 filtr-item">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/teachers/teacher-3.jpg" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title">Duis Riu</h4>
              </a>
              <p>Teacher</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- tipe kamar   ---------------------------------------------------------------------------------------->



@endsection
@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{asset('date/js/popper.min.js')}}"></script>
<script src="{{asset('date/js/picker.js')}}"></script>
<script src="{{asset('date/js/picker.date.js')}}"></script>
<script src="{{asset('date/js/main.js')}}"></script>
@endpush

@can('isAdmin')
    Selamat datang Admin
@elsecan('isResepsionis')
    Selamat datang Manager
@endcan

