
<h1>Tambah Program Studi</h1>

<form method="POST" action="{{ route('prodi.store') }}">
    @csrf

    @include('prodi._form')

    <button type="submit">Simpan</button>
</form>

<a href="{{ route('prodi.index') }}">Kembali</a>
