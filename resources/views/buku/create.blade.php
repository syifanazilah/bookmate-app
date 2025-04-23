@extends('layouts.template')

@section('title')
Tambah Buku
@endsection

@section('content')
<h1>Tambah Buku</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <div>
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" value="{{ old('judul') }}" required>
    </div>
    <div>
        <label for="penulis">Penulis:</label>
        <input type="text" id="penulis" name="penulis" value="{{ old('penulis') }}" required>
    </div>
    <div>
        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="number" id="tahun_terbit" name="tahun_terbit" value="{{ old('tahun_terbit') }}" required>
    </div>
    <div>
        <label for="penerbit">Penerbit:</label>
        <input type="text" id="penerbit" name="penerbit" value="{{ old('penerbit') }}" required>
    </div>
    <div>
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" value="{{ old('jumlah') }}" required>
    </div>
    <div>
        <button type="submit">Simpan</button>
        <a href="{{ route('buku.index') }}">Batal</a>
    </div>
</form>
@endsection
