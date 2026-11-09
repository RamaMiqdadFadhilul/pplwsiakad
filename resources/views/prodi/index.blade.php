<h1>Daftar Program Studi</h1>
@if (session('success'))
    <p>{{ session('success') }}</p>
@endif
@if (session('error'))
    <p>{{ session('error') }}</p>
@endif
@if (session('user_role') === 1)
    <a href="{{ route('prodi.create') }}">Tambah Prodi</a>
@endif
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Program Studi</th>
        <th>Aksi</th>
    </tr>
    @forelse ($data as $prodi)
        <tr>
            <td>{{ $prodi->id_prodi }}</td>
            <td>{{ $prodi->nama_prodi }}</td>
            <td>
                @if (session('user_role') === 1)
                    <a href="{{ route('prodi.edit', $prodi->id_prodi) }}">
                        Ubah
                    </a>
                    <form method="POST"
                        action="{{ route('prodi.destroy', $prodi->id_prodi) }}"
                        style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                @else
                    -
                @endif
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="3">Belum ada data program studi.</td>
        </tr>
    @endforelse
</table>
