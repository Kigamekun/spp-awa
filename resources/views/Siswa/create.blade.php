@extends('home')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-stretch justify-content-center no-gutters">
                    <div class="col-md-7">
                        <div class="form h-100 contact-wrap p-5">
                            <h3 class="text-center"></h3>

                            <form class="mb-5" method="post" id="contactForm" name="contactForm"
                                action="{{ url('/siswa/create') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="nisn" class="col-form-label">NISN</label>
                                        <input type="text" class="form-control" name="nisn" id="nisn"
                                            placeholder="nisn">
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="nis" class="col-form-label">NIS</label>
                                        <input type="text" class="form-control" name="nis" id="nis"
                                            placeholder="nis">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="password" class="col-form-label">password</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="password">
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="nama" class="col-form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            placeholder="nama">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label class="col-form-label" for="id_kelas">Kelas :</label>
                                        <select required="" name="id_kelas" id="id_kelas"
                                            class="form-control select2bs4">
                                            <option disabled selected>pilih kelas</option>
                                            @foreach ($kelas as $row)
                                                <option value="{{ $row->id_kelas }}">{{ $row->nama_kelas }} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-12 form-group mb-3">
                                        <label for="id_kelas">Kompetensi Keahlian :</label>
                                        <select required="" name="kompetensi_keahlian" id="id_kelas"
                                            class="form-control select2bs4">
                                            <option disabled selected>Pilih KK</option>
                                            @foreach ($kelas as $row)
                                                <option value="{{ $row->kompetensi_keahlian }}">
                                                    {{ $row->kompetensi_keahlian }} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="alamat" class="col-form-label">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" id="alamat"
                                                placeholder="alamat">
                                        </div>



                                        <div class="col-md-6 form-group mb-3">
                                            <label for="no_telp" class="col-form-label">No. Telp</label>
                                            <input type="text" class="form-control" name="no_telp" id="nama"
                                                placeholder="no_telp">
                                        </div>
                                    </div>




                                    <div class="col-md-12 form-group mb-3">
                                        <label for="id_spp">Nominal :</label>
                                        <select required="" name="id_spp" id="id_spp"
                                            class="form-control select2bs4">
                                            <option disabled="" selected=""></option>
                                            @foreach ($spp as $row)
                                                <option value="{{ $row->id_spp }}">{{ $row->nominal }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-md-5 form-group text-center mt-1">
                                            <input type="submit" value="Simpan" class="btn btn-primary">
                                            <span class="submitting"></span>
                                        </div>
                                    </div>
                                </div>


                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    </div>
    </div>
@endsection
