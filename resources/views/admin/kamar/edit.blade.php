@extends('master.stisla.admin.index')
@push('link')
    <style></style>
@endpush
@section('title', 'HotelMaSSeh | KAMAR')
@section('judul', 'Edit Data Kamar')
@section('breadcrump')
    {{-- <div class="breadcrumb-item "><i class="fas fa-user"></i></div> --}}
    <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i>
        <a href="/admin/kamar">Data Kamar</a> /Edit Data Kamar</div>
@endsection
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <form action="/admin/kamar/update/{{ $data->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="font-weight-bold" style="font-size: 15px;">Tipe Kamar</label>
                        <input type="text" class="form-control @error('tp_kamar') is-invalid @enderror" name="tp_kamar" value="{{ $data->tp_kamar }}" placeholder="Masukkan Judul Post">

                        <!-- error message untuk tp_kamar -->
                        @error('tp_kamar')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" style="font-size: 15px;">Jumlah Kamar</label>
                        <input type="number" class="form-control @error('jml_kamar') is-invalid @enderror" name="jml_kamar" value="{{ $data->jml_kamar }}" placeholder="Masukkan Judul Post">

                        <!-- error message untuk jml_kamar -->
                        @error('jml_kamar')
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
