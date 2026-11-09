<h1>Daftar Mata Kuliah</h1>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

@if (session('user_role') === 1)
    <a href="{{ route('mata-kuliah.create') }}">Tambah</a>
@endif

<table border="1">
    <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>SKS</th>
        <th>Aksi</th>
    </tr>

    @forelse ($data as $mk)
        <tr>
            <td>{{ $mk->kode_mk }}</td>
            <td>{{ $mk->nama_mk }}</td>
            <td>{{ $mk->sks }}</td>
            <td>
                @if (session('user_role') === 1)
                    <a href="{{ route('mata-kuliah.edit', $mk->id_mk) }}">
                        Ubah
                    </a>

                    <form method="POST"
                        style="display:inline"
                        action="{{ route('mata-kuliah.destroy', $mk->id_mk) }}">
                        @csrf
                        @method('DELETE')

                        <button type="submit">Hapus</button>
                    </form>
                @endif
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="4">Belum ada data mata kuliah.</td>
        </tr>
    @endforelse
</table>