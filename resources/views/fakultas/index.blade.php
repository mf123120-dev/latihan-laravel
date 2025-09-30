<strong>Daftar Fakultas - Telkom University</strong>
<table border="1">
    <tr>
        <th>Kode</th>
        <th>Nama Fakultas</th>
    </tr>
    @foreach($fakultasData as $fakultas)
    <tr>
        <td>{{ $fakultas['kode'] }}</td>
        <td>{{ $fakultas['nama_fakultas'] }}</td>
    </tr>
    @endforeach
</table>