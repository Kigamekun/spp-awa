@extends('home')
@section('content')

<div class="container mt-3">
<a href="{{ url('/spp/create') }}" class="btn btn-primary"> + Create</a>

<table class="table table-striped table-hover mt-3">
    <thead class="table-light">
        <tr>
            <th>Tahun</th>
            <th>Nominal</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 0;
        @endphp
        @foreach ($spp as $get)
        <tr>
            {{-- @foreach ($spp as $a) --}}
            <td>{{ $get->tahun }}</td>
            <td>{{ $get->nominal }}</td>
            {{-- @endforeach --}}
            <td>
                <a href="/spp/edit/{{ $get->id_spp }}" class="btn btn-warning">Update</a>
                |
                <a href="/spp/hapus/{{ $get->id_spp }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>
@endsection