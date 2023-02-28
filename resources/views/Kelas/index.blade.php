@extends('home')
@section('content')

<div class="container mt-3">
<a href="{{ url('/kelas/create') }}" class="btn btn-primary"> + Create</a>
<a href="/kelas/cetak" class="btn btn-primary" target="_blank">Cetak PDF</a>

<table class="table table-striped table-hover mt-3">
    <thead class="table-light">
        <tr>
            <th>No.</th>
            <th>Nama Kelas</th>
            <th>Kompetensi Keahlian</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 0;
        @endphp
        @foreach ($kelas as $get)
        <tr>
            <td>{{ ++ $no }}</td>
            <td>{{ $get->nama_kelas }}</td>
            <td>{{ $get->kompetensi_keahlian }}</td>
            <td>
                <a href="/kelas/edit/{{ $get->id_kelas }}" class="btn btn-warning">Update</a>
                |
                <a href="/kelas/hapus/{{ $get->id_kelas }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>
@endsection