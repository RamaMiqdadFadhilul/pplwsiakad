
<div>
    <label for="nama_prodi">Nama Program Studi</label>

    <input
        type="text"
        id="nama_prodi"
        name="nama_prodi"
        value="{{ old('nama_prodi', $prodi->nama_prodi ?? '') }}"
        required
    >

    @error('nama_prodi')
        <small style="color: red;">{{ $message }}</small>
    @enderror
</div>
