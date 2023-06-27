<table border="1" class="table table-bordered text-center bg-info text-dark" id="tb-mahasiswa">
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