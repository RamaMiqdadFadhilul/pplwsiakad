<h1>Tambah Mata Kuliah</h1>

<form method="POST" action="{{ route('mata-kuliah.store') }}">
    @csrf

    @include('mata-kuliah._form')

    <button type="submit">Simpan</button>
</form>