<table border="1" class="table table-bordered text-center bg-info text-dark" id="tb-mahasiswa">
    <tr>
        <th>Nomor_Booking</th>
        <th>Nama</th>
        <th>Saung</th>
        <th>Orang</th>
    </tr>
    <?php $no = 1; ?>
    @foreach ($mahasiswa as $Get)
        <tr>
            <td>{{ $Get['nooo'] }}</td>
            <td>{{ $Get['nama'] }}</td>
            <td>{{ $Get['no'] }}</td>
            <td>{{ $Get['orang'] }}</td>
        </tr>
        <?php $no++;?>
    @endforeach
</table>