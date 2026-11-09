
<h1>Ubah Program Studi</h1>

<form method="POST"
    action="{{ route('prodi.update', $prodi->id_prodi) }}">

    @csrf
    @method('PUT')

    @include('prodi._form')

    <button type="submit">Perbarui</button>
</form>

<a href="{{ route('prodi.index') }}">Kembali</a>
