<label>Kode</label>
<input name="kode_mk"
    value="{{ old('kode_mk', $mk->kode_mk ?? '') }}">
@error('kode_mk')
    <small>{{ $message }}</small>
@enderror

<label>Nama</label>
<input name="nama_mk"
    value="{{ old('nama_mk', $mk->nama_mk ?? '') }}">
@error('nama_mk')
    <small>{{ $message }}</small>
@enderror

<label>SKS</label>
<input type="number" name="sks"
    value="{{ old('sks', $mk->sks ?? '') }}">
@error('sks')
    <small>{{ $message }}</small>
@enderror