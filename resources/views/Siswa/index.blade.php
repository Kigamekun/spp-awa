
@extends('home')
@section('content')

<div class="container mt-3">
<a href="{{ url('/siswa/create') }}" class="btn btn-primary"> + Create</a>
<a href="/siswa/cetak" class="btn btn-primary" target="_blank">Cetak PDF</a>

<table class="table table-striped table-hover mt-3">
    <thead class="table-light">
        <tr>
            <th>No.</th>
            <th>Nisn</th>
            <th>Nis</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Kompetensi Keahlian</th>
            <th>Alamat</th>
            <th>No.Telp</th>
            <th>Tahun</th>
            <th>Nominal</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 0;
        @endphp
        @foreach ($siswa as $get)
        <tr>
            <td>{{ ++ $no }}</td>
            <td>{{ $get->nisn}}</td>
            <td>{{ $get->nis}}</td>
            <td>{{ $get->nama }}</td>
            <td>{{ !is_null($get->id_kelas) ? $get->kelas->nama_kelas :'' }}</td>
            <td>{{ !is_null($get->id_kelas) ? $get->kelas->kompetensi_keahlian:'' }}</td>
            <td>{{ $get->alamat }}</td>
            <td>{{ $get->no_telp }}</td>
            <td>{{ !is_null($get->id_spp) ? $get->spp->tahun :'' }}</td>
            <td>{{ !is_null($get->id_spp) ? $get->spp->nominal :'' }}</td>

            <td>
                <a href="/siswa/edit/{{ $get->nisn }}" class="btn btn-warning">Update</a>
                |
                <a href="/siswa/hapus/{{ $get->nisn }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>
@endsection