@extends('master.stisla.admin.index')
@push('link')
    <style></style>
@endpush
@section('title', 'HotelMaSSeh | FASILITAS KAMAR')
@section('judul', 'Tambah Data Fasilitas Kamar')
@section('breadcrump')
    {{-- <div class="breadcrumb-item "><i class="fas fa-user"></i></div> --}}
    <div class="breadcrumb-item ">
        <i class="fas fa-tachometer-alt"></i><a href="/admin/fasikamar">Fasilitas Kamar</a> /Tambah Fasilitas Kamar</div>
@endsection
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <form action="/admin/fasikamar/create/postdata" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="font-weight-bold" style="font-size: 15px;">Id Kamar</label>
                        <select class="custom-select" aria-label="Default select example" name="kamar_id">
                            @foreach ($datakamar as $datak)
                                <option value="{{$datak->id}}">{{$datak->tp_kamar}}</option>
                            @endforeach
                        </select>
                        <!-- error message untuk kamar_id -->
                        @error('kamar_id')
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

                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    <a href="/admin/fasikamar" class="btn btn-md btn-success">KEMBALI</a>
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

