@extends('home')
@section('Content')

{{-- <div id="loaddata">
    @include('tablem')
</div> --}}
<h1 class="text-center" style="color: rgb(212, 212, 0);">LAPORAN PEMESANAN SAUNG</h1>
<table border="1" class="table table-bordered text-center bg-light text-dark" id="tb-mahasiswa">
    <tr>
        <th>Nomor_Booking</th>
        <th>Nama</th>
        <th>Saung</th>
        <th>Orang</th>
    </tr>
    <?php $no = 1; ?>
    @foreach ($mahasiswa as $Get)
        <tr>
            <td>{{ $Get['nobo'] }}</td>
            <td>{{ $Get['nama'] }}</td>
            <td>{{ $Get['no'] }}</td>
            <td>{{ $Get['orang'] }}</td>
        </tr>
        <?php $no++;?>
    @endforeach
</table>

@endsection