@extends('home')
@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="row align-items-stretch justify-content-center no-gutters">
                    <div class="col-md-7">
                        <div class="form h-100 contact-wrap p-5">
                            <h3 class="text-center"></h3>

                            <form class="mb-5" method="post" id="form" name="form"
                                action="{{ url('/pembayaran/create') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="nisn">NISN</label>
                                        <select required="" name="nisn" id="nisn"
                                            class="form-control select2bs4">
                                            <option disabled="" selected="">NISN</option>
                                            @foreach ($siswa as $row)
                                                <option value="{{ $row->nisn }}">{{ $row->nisn }} -
                                                    {{ $row->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="tgl_bayar" class="col-form-label">Tanggal Bayar</label>
                                        <input type="date" class="form-control" name="tgl_bayar" id="tgl_bayar"
                                            placeholder="Tanggal Bayar">
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="id_petugas" class="col-form-label">Nama Petugas</label>
                                        <select required="" name="id_petugas" id="id_petugas"
                                            class="form-control select2bs4">
                                            <option disabled="" selected="">Nama Petugas</option>
                                            @foreach ($petugas as $row)
                                                <option value="{{ $row->id_petugas }}">{{ $row->nama_petugas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="bulan_dibayar" class="col-form-label">Bulan Bayar</label>
                                        <select name="bulan_dibayar" id="" class="form-select">
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="April">April</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>

                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="tahun_dibayar" class="col-form-label">Tahun Bayar</label>
                                        <input type="text" class="form-control" name="tahun_dibayar" id="tahun_dibayar"
                                            placeholder="Tahun Bayar">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="kelas_id" class="col-form-label">Nominal </label>
                                        <select required="" name="id_spp" id="id_spp"
                                            class="form-control select2bs4">
                                            <option disabled="" selected=""></option>
                                            @foreach ($spp as $row)
                                                <option value="{{ $row->id_spp }}">{{ $row->nominal }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="jumlah_bayar" class="col-form-label">Jumlah Bayar</label>
                                        <input type="text" class="form-control" name="jumlah_bayar" id="nama"
                                            placeholder="Jumlah Bayar">
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-md-5 form-group text-center">
                                        <input type="submit" value="Mengirim" class="btn"
                                            style="background-color: #82AAE3">
                                        <span class="submitting"></span>
                                        <input type="button" class="btn " style="background-color: #3795BD"
                                            value="Kembali" onclick="history.back(-1)" />
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
