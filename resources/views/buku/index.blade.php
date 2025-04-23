@extends('layouts.template')
@section('title')
Daftar Buku
@endsection

@section('content')
<h1>Daftar Buku</h1>
<a href="{{ route('buku.create') }}">Tambah Buku</a>
<table>
    <thead>
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bukus as $buku)
        <tr>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ $buku->tahun_terbit }}</td>
            <td>{{ $buku->penerbit }}</td>
            <td>{{ $buku->jumlah }}</td>
            <td>
                <a href="{{ route('buku.edit', $buku->id) }}">Edit</a>
                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirmDelete()">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin menghapus buku ini?");
    }
</script>
@endsection