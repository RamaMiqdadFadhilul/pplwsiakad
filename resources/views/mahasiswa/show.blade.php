<h1>{{ $m->nama }}</h1>

<ul>
    @foreach($m->mataKuliah as $mk)
        <li>
            {{ $mk->nama_mk }} ({{ $mk->sks }} SKS)
        </li>
    @endforeach
</ul>