@extends('master.stisla.admin.index')
@push('link')
    <style></style>
@endpush
@section('title', 'HotelMaSSeh | DASHBOARD')
@section('judul', 'Dashboard')
@section('breadcrump')
    {{-- <div class="breadcrumb-item "><i class="fas fa-user"></i></div> --}}
    <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> DASBOARD</div>
@endsection
@section('content')
<div class="row">
    <a href="/admin/kamar" class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div>
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Kamar</h4>
              </div>
              <div class="card-body">
                Kamar
              </div>
            </div>
          </div>
        </div>
    </a>
    <a href="/admin/fasikamar" class="col-lg-4 col-md-7 col-sm-7 col-12">
        <div>
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Fasilitas Kamar</h4>
              </div>
              <div class="card-body">
                Fasilitas Kamar
              </div>
            </div>
          </div>
        </div>
    </a>
    <a href="/admin/fasihotel" class="col-lg-4 col-md-7 col-sm-7 col-12">
        <div>
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
              <i class="far fa-file"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Fasilitas Hotel</h4>
              </div>
              <div class="card-body">
                Fasilitas Hotel
              </div>
            </div>
          </div>
        </div>
    </a>
</div>

@endsection
@push('script')
<script>
</script>

@endpush

