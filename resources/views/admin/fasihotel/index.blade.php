@extends('master.stisla.admin.index')
@push('link')
    <style></style>
@endpush
@section('title', 'HotelMaSSeh | FASILITAS HOTEL')
@section('judul', 'Data Fasilitas Hotel')
@section('breadcrump')
    {{-- <div class="breadcrumb-item "><i class="fas fa-user"></i></div> --}}
    <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Fasilitas Hotel</div>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <a href="/admin/fasihotel/create" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Fasilitas</th>
                    <th>Keterangan</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $fasihotel)
                <tr>
                    <td>{{ $fasihotel->nama_fasilitas }}</td>
                    <td>{{ $fasihotel->keterangan }}</td>
                    <td>
                        <img src="{{asset('img/fasihotel/'.$fasihotel->image)}}" alt="" style="width: 200px;">
                    </td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/admin/fasihotel/delete/{{ $fasihotel->id }}" method="GET">
                            <a href="/admin/fasihotel/edit/{{ $fasihotel->id }}" class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            {{-- @method('DELETE') --}}
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                </tr>
              @empty
                  <div class="alert alert-danger">
                      Data Post belum Tersedia.
                  </div>
              @endforelse
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
