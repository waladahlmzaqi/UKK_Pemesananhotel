@extends('master.stisla.admin.index')
@push('link')
    <style></style>
@endpush
@section('title', 'HotelMaSSeh | KAMAR')
@section('judul', 'Data Kamar')
@section('breadcrump')
    {{-- <div class="breadcrumb-item "><i class="fas fa-user"></i></div> --}}
    <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Data Kamar</div>
@endsection
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <a href="/admin/kamar/create" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Tipe Kamar</th>
                        <th scope="col">Jumlah Kamar</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $kamar)
                      <tr>
                        <td>{{ $kamar->tp_kamar }}</td>
                        <td>{{ $kamar->jml_kamar }}</td>
                        <td>
                            <img src="{{asset('img/kamar/'.$kamar->image)}}" alt="" style="width: 200px;">
                        </td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/admin/kamar/delete/{{ $kamar->id }}" method="GET">
                                <a href="/admin/kamar/edit/{{ $kamar->id }}" class="btn btn-sm btn-primary">EDIT</a>
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
