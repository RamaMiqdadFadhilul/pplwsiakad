<h1>Ubah Mata Kuliah</h1>

<form method="POST"
    action="{{ route('mata-kuliah.update', $mk->id_mk) }}">

    @csrf
    @method('PUT')

    @include('mata-kuliah._form')

    <button type="submit">Perbarui</button>
</form>