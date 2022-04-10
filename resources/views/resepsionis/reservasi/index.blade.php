@extends('master.stisla.resepsionis.index')
@push('link')
    <style></style>
@endpush
@section('title', 'HotelMaSSeh | RESERVASI')
@section('judul', 'Reservasi')
@section('breadcrump')
    {{-- <div class="breadcrumb-item "><i class="fas fa-user"></i></div> --}}
    <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> RESERVASI</div>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Nama_Tamu</th>
                    <th>Email</th>
                    <th>No Handphone</th>
                    <th>Tipe Kamar</th>
                    <th>Jumlah Kamar Di Pesan</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $reservasi)
                <tr>
                    <td>{{ $reservasi->nama_pemesan }}</td>
                    <td>{{ $reservasi->nama_tamu }}</td>
                    <td>{{ $reservasi->email }}</td>
                    <td>{{ $reservasi->no_tlp }}</td>
                    <td>{{ $reservasi->tipe_kamar }}</td>
                    <td>{{ $reservasi->jml_kamar }}</td>
                    <td>{{ $reservasi->cek_in }}</td>
                    <td>{{ $reservasi->cek_out }}</td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/resepsionis/reservasi/delete/{{ $reservasi->id }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Check Out</button>
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
