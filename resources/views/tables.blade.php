<table border="1" class="table table-bordered text-center bg-info text-dark" id="tb-mahasiswa">
    <tr>
        <th>Saung</th>
        <th>Kapasitas</th>
        <th>Status</th>
    </tr>
    <?php $no = 1; ?>
    @foreach ($mahasiswa as $Get)
        <tr>
            <td>{{ $Get['no'] }}</td>
            <td>{{ $Get['kapasitas'] }}</td>
            <td>{{ $Get['status'] }}</td>
        </tr>
        <?php $no++;?>
    @endforeach
</table>