@extends('home')
@section('content')

<div class="container mt-3">
<a href="{{ url('/petugas/create') }}" class="btn btn-primary"> + Create </a>
<a href="/petugas/cetak" class="btn btn-primary" target="_blank">Cetak PDF</a>

<table class="table table-striped table-hover mt-3">
    <thead class="table-light">
        <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nama Petugas</th>
            <th>Level</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 0;
        @endphp
        @foreach ($petugas as $get)
        <tr>
            <td>{{ ++ $no }}</td>
            <td>{{ $get->username}}</td>
            <td>{{ $get->password}}</td>
            <td>{{ $get->nama_petugas }}</td>
            <td>{{ $get->level }}</td>

            <td>
                <a href="/petugas/edit/{{ $get->id_petugas }}" class="btn btn-warning">Update</a>
                |
                <a href="/petugas/hapus/{{ $get->id_petugas }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>
@endsection