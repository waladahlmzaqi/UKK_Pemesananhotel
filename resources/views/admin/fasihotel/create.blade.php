@extends('master.stisla.admin.index')
@push('link')
    <style></style>
@endpush
@section('title', 'HotelMaSSeh | FASILITAS HOTEL')
@section('judul', 'Tambah Data Fasilitas Hotel')
@section('breadcrump')
    {{-- <div class="breadcrumb-item "><i class="fas fa-user"></i></div> --}}
    <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i>
        <a href="/admin/fasihotel">Data Fasilitas Hotel</a> /Tambah Data Fasilitas Hotel</div>
@endsection
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <form action="/admin/fasihotel/create/postdata" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="font-weight-bold" style="font-size: 15px;">Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                        <!-- error message untuk title -->
                        @error('image')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" style="font-size: 15px;">Nama Fasilitas</label>
                        <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror" name="nama_fasilitas" value="{{ old('nama_fasilitas') }}" placeholder="Masukkan Nama Fasilitas">

                        <!-- error message untuk nama_fasilitas -->
                        @error('nama_fasilitas')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" style="font-size: 15px;">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" placeholder="Masukkan Keterangan">

                        <!-- error message untuk keterangan -->
                        @error('keterangan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
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

