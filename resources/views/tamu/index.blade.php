@extends('master.edu.layout')
@push('link')
<link rel="stylesheet" href="{{asset('date/css/classic.css')}}">
<link rel="stylesheet" href="{{asset('date/css/classic.date.css')}}">
<!-- Bootstrap CSS -->
<!-- Style -->
<link rel="stylesheet" href="{{asset('date/css/style.css')}}">
<style>
    .form-control{
        height: 38px;
    }
</style>
@endpush
@section('content')
<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="{{asset('edu/images/beach.jpg')}}">
    <div class="content container">
        <div class="d-flex justify-content-center" style="margin-top: -200px;margin-bottom: -300px;">
            <div class="card card-body col-12">
                <section class="section bg-gray">
                    <div class="">
                        <div class="col-lg-12">
                            <h2 class="section-title mb-5" style="margin-top: -70px;margin-left: 20px;">Form Pemesanan</h2>
                        </div>
                        <form action="/pemesanan/create/postdata" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="d-flex justify-content-center">
                                    <div class="col-md-3 mr-5">
                                        <div class="form-group">
                                        <ul class="list-inline text-xl-center">
                                            <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                                                <div class="d-flex align-items-center">
                                                    <i class="ti-wallet text-primary icon-md mr-2"></i>
                                                    <div class="text-left">
                                                        <div class="form-group">
                                                            <label for="input_from">Tanggal Cek In</label>
                                                            <input type="date" class="form-control" placeholder="Start Date" name="cek_in">
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
                                                                <input type="date" class="form-control" placeholder="End Date" name="cek_out">
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
                                                                <label for="input_to">Jumlah Kamar Dipesan</label>
                                                                <input type="number" class="form-control" name="jml_kamar">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-4 row d-flex justify-content-center">
                                    <div class="mb-3 col-4 ml-4">
                                        <label for="staticEmail" class="col-form-label">Nama Pemesan</label>
                                        <div class="">
                                            <input type="text" class="form-control mb-3" name="nama_pemesan">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label for="staticEmail" class="col-form-label">Nama Tamu</label>
                                        <div class="">
                                            <input type="text" class="form-control mb-3" name="nama_tamu">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-3">
                                        <label for="staticEmail" class="col-form-label">Email</label>
                                        <div class="">
                                            <input type="email" class="form-control mb-3" name="email">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label for="staticEmail" class="col-form-label">No Handphone</label>
                                        <div class="">
                                            <input type="text" class="form-control mb-3" name="no_tlp">
                                        </div>
                                    </div>

                                    <div class="mb-3 col-4">
                                        <label for="staticEmail" class="col-form-label">Tipe Kamar</label>
                                        <div class="">
                                            <select class="form-select form-control" aria-label="Default select example" name="tipe_kamar">
                                                <option selected>Pilih Tipe Kamar Kamu</option>
                                                @foreach ($datak as $kamar)
                                                <option value="{{ $kamar->tp_kamar }}">{{ $kamar->tp_kamar }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 d-flex justify-content-end" style="margin-left: 700px;">
                                    <button type="submit" class="btn btn-primary" style="height: 50px;">Konfirmasi Pemesanan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- /hero slider ---------------------------------------------------------------------------------------->







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

