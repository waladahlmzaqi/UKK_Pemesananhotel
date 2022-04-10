@extends('master.stisla.admin.index')
@push('link')
    <style></style>
@endpush
@section('title', 'HotelMaSSeh | FASILITAS KAMAR')
@section('judul', 'Data Fasilitas Kamar')
@section('breadcrump')
    {{-- <div class="breadcrumb-item "><i class="fas fa-user"></i></div> --}}
    <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Fasilitas Kamar</div>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <a href="/admin/fasikamar/create" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Tipe Kamar</th>
                    <th>Nama Fasilitas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fasi_kamars as $fasikamar)
                <tr>
                    <td>{{ $fasikamar->kamar->tp_kamar }}</td>
                    <td>{{ $fasikamar->nama_fasilitas }}</td>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/admin/fasikamar/delete/{{ $fasikamar->id }}" method="GET">
                            <a href="/admin/fasikamar/edit/{{ $fasikamar->id }}" class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('script')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
@endpush

