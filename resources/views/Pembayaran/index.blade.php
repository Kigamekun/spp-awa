: @extends('home')
@section('content')

<div class="container">
    {{--  <div class="card ">  --}}
<a href="{{ url('/pembayaran/create') }}" class="btn btn-primary"> + Create</a>
<a href="/pembayaran/cetak" class="btn btn-primary" target="_blank">Cetak PDF</a>

<table class="table table-striped table-hover mt-3">
    <thead class="table-light">
        <tr>
            <th>No.</th>
            <th>Nisn</th>
            <th>Nama Siswa</th>
            <th>Tanggal Bayar</th>
            <th>Nama Petugas</th>
            <th>Bulan Bayar</th>
            <th>Tahun Bayar</th>
            <th>Nominal</th>
            <th>Jumlah Bayar</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 0;
        @endphp
        @foreach ($data as $get)
        <tr>
            <td>{{ ++ $no }}</td>
            <td>{{ $get->nisn}}</td>
            <td>{{ !is_null($get->siswa) ? $get->siswa->nama :'' }}</td>
            <td>{{ $get->tgl_bayar }}</td>
            <td>{{ !is_null($get->id_petugas) ? $get->petugas->nama_petugas :'' }}</td>
            <td>{{ $get->bulan_dibayar }}</td>
            <td>{{ $get->tahun_dibayar }}</td>
            <td>{{ !is_null($get->id_spp) ? $get->spp->nominal :'' }}</td>
            <td>{{ $get->jumlah_bayar}}</td>

            <td>
                <a href="/pembayaran/edit/{{ $get->id_pembayaran }}" class="btn btn-warning">Update</a>
                <a href="/pembayaran/hapus/{{ $get->id_pembayaran }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
    {{--  </div>  --}}
</div>
@endsection
