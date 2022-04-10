@extends('master.stisla.resepsionis.index')
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
    <a href="/resepsionis/reservasi" class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div>
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Reservasi</h4>
              </div>
              <div class="card-body">
                Reservasi
              </div>
            </div>
          </div>
        </div>
    </a>
</div>
@endsection
@push('script')

@endpush

