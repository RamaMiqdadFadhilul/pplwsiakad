<h1>Daftar Mahasiswa</h1>

<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th></th>
    </tr>

    @foreach($data as $m)
        <tr>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->prodi->nama_prodi }}</td>
            <td>
                <a href="/mahasiswa/{{ $m->id_mahasiswa }}">
                    Detail
                </a>
            </td>
        </tr>
    @endforeach
</table>