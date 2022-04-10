@extends('master.stisla.admin.index')
@push('link')
    <style></style>
@endpush
@section('title', 'HotelMaSSeh | FASILITAS HOTEL')
@section('judul', 'Edit Fasilitas Hotel')
@section('breadcrump')
    {{-- <div class="breadcrumb-item "><i class="fas fa-user"></i></div> --}}
    <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i>
        <a href="/admin/kamar">Fasilitas Hotel</a> /Edit Fasilitas Hotel</div>
@endsection
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <form action="/admin/fasihotel/update/{{ $data->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="font-weight-bold" style="font-size: 15px;">Nama Fasilitas</label>
                        <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror" name="nama_fasilitas" value="{{ $data->nama_fasilitas }}" placeholder="Masukkan Judul Post">

                        <!-- error message untuk nama_fasilitas -->
                        @error('nama_fasilitas')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" style="font-size: 15px;">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $data->keterangan }}" placeholder="Masukkan Judul Post">

                        <!-- error message untuk keterangan -->
                        @error('keterangan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    <a href="/admin/kamar" class="btn btn-md btn-success">KEMBALI</a>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
</script>
@endpush

