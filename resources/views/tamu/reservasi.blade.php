@extends('master.edu.layout')
@push('link')
<link rel="stylesheet" href="{{asset('date/css/classic.css')}}">
<link rel="stylesheet" href="{{asset('date/css/classic.date.css')}}">
<!-- Bootstrap CSS -->
<!-- Style -->
<link rel="stylesheet" href="{{asset('date/css/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

@endpush
@section('content')
<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="{{asset('edu/images/beach.jpg')}}">
    <div class="content container">
        <div class="d-flex justify-content-center" style="margin-top: -200px;margin-bottom: -300px;">
            <div class="card card-body col-12">
                <section class="section bg-gray">
                    <div class="card-body" style="margin-top: -90px;margin-bottom: -60px;">
                        {{-- <a href="/admin/kamar/create" class="btn btn-md btn-success mb-3">TAMBAH DATA</a> --}}
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Pemesan</th>
                                    <th scope="col">Nama Tamu</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $reservasi)
                                  <tr>
                                    <td>{{ $reservasi->nama_pemesan }}</td>
                                    <td>{{ $reservasi->nama_tamu }}</td>
                                    {{-- <td>{{ $reservasi->email }}</td>
                                    <td>{{ $reservasi->no_tlp }}</td>
                                    <td>{{ $reservasi->tipe_kamar }}</td>
                                    <td>{{ $reservasi->jml_kamar }}</td>
                                    <td>{{ $reservasi->cek_in }}</td>
                                    <td>{{ $reservasi->cek_out }}</td> --}}
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/pemesanan/delete/{{ $reservasi->id }}" method="GET">
                                            {{-- <a href="/pemesanan/edit/{{ $reservasi->id }}" class="btn btn-sm btn-primary">EDIT</a> --}}
                                            <a href="/pemesanan/pdf/{{ $reservasi->id }}" class="btn btn-sm btn-primary">Download PDF</a>
                                            @csrf
                                            {{-- <button type="submit" class="btn btn-sm btn-danger">HAPUS</button> --}}
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
                </section>
            </div>
        </div>
    </div>
</section>
<!-- /hero slider ---------------------------------------------------------------------------------------->

@endsection
@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{asset('date/js/popper.min.js')}}"></script>
<script src="{{asset('date/js/picker.js')}}"></script>
<script src="{{asset('date/js/picker.date.js')}}"></script>
<script src="{{asset('date/js/main.js')}}"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
@endpush
