@extends('home')
@section('Content')

{{-- <div id="loaddata">
    @include('tablem')
</div> --}}
<h1 class="text-center" style="color: rgb(212, 212, 0);">LAPORAN PEMESANAN MAKANAN</h1>
<table border="1" class="table table-bordered text-center bg-light text-dark" id="tb-mahasiswa">
    <tr>
        <th>Kode Pesan</th>
        <th>Nomor Paket</th>
        <th>Nama</th>
        <th>Jumlah</th>
    </tr>
    <?php $no = 1; ?>
    @foreach ($mahasiswa as $Get)
        <tr>
            <td>{{ $Get['kp'] }}</td>
            <td>{{ $Get['nopa'] }}</td>
            <td>{{ $Get['nama'] }}</td>
            <td>{{ $Get['jumlah'] }}</td>
        </tr>
        <?php $no++;?>
    @endforeach
</table>

@endsection