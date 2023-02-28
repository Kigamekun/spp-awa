: @extends('home')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="/pembayaran/update/{{ $data->id_pembayaran }}" method="post" id="contactForm" name="contactForm">
                    @csrf


                    <div class="mb-3">
                        <label for="nisn">Nisn</label>
                        <select required="" name="nisn" id="nisn" class="form-control select2bs4">
                            <option disabled="" selected="">Nisn</option>
                            @foreach (DB::table('siswa')->get() as $row)
                                <option value="{{ $row->nisn }}" @if ($data->nisn == $row->nisn) selected @endif>
                                    {{ $row->nama }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tgl_bayar" class="form-label">tgl bayar</label>
                        <input type="date" class="form-control" name="tgl_bayar" id="tg_bayar"
                            value="{{ $data->tgl_bayar }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_petugas">Petugas:</label>
                        <select required="" name="id_petugas" id="id_petugas" class="form-control select2bs4">
                            <option disabled="" selected="">Petugas</option>
                            @foreach (DB::table('petugas')->get() as $row)
                                <option value="{{ $row->id_petugas }}" @if ($data->id_petugas == $row->id_petugas) selected @endif>
                                    {{ $row->nama_petugas }} </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="bulan_bayar" class="form-label">bulan dibayar</label>
                        <input type="text" class="form-control" id="bulan_bayar" name="bulan_dibayar"
                            value="{{ $data->bulan_dibayar }}">
                    </div>

                    <div class="mb-3">
                        <label for="tahun_bayar" class="form-label">tahun bayar</label>
                        <input type="text" class="form-control" name="tahun_dibayar" value="{{ $data->tahun_dibayar }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_petugas">Nominal:</label>
                        <select required="" name="id_spp" id="id_spp" class="form-control select2bs4">
                            <option disabled="" selected="">Nominal</option>
                            @foreach (DB::table('spp')->get() as $row)
                                <option value="{{ $row->id_spp }}" @if ($data->id_spp == $row->id_spp) selected @endif>
                                    {{ $row->nominal }} </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="jumlah_bayar" class="form-label">jumlah bayar</label>
                        <input type="text" class="form-control" id="jumlah_bayar" name="jumlah_bayar"
                            value="{{ $data->jumlah_bayar }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>


                </form>
            </div>
        </div>
    </div>
@endsection
