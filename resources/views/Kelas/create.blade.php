@extends('home')
@section('content')

<div class="container">
  <div class="card mt-3">
      <div class="card-body">
          <div class="row align-items-stretch justify-content-center no-gutters">
              <div class="col-md-7">
                  <div class="form h-100 contact-wrap p-5">
                      <h3 class="text-center"></h3>
                      <form class="mb-5" method="post" id="contactForm" name="contactForm" 
                          action="{{ url('/kelas/create') }}">
                          @csrf
                          <div class="row">
                              <div class="col-md-6 form-group mb-3">
                              <label for="nama_kelas" class="col-form-label">Kelas*</label>
                              <input type="text" class="form-control" name="nama_kelas" id="nama_kelas"
                              placeholder="Nama Kelas">
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-6 form-group mb-3">
                              <label for="kompetensi_keahlian" class="col-form-label">Kompetensi Keahlian *</label>
                              <input type="text" class="form-control" name="kompetensi_keahlian" 
                              id="kompetensi_keahlian"  placeholder="Kompetensi Keahlian">
                              </div>
                          </div>
                          
                          <div class="row justify-content-center">
                              <div class="col-md-5 form-group text-center">
                              <input type="submit" value="Kirim" 
                              class="btn btn-block rounded-0 py-2 px-4" style="background-color: #82AAE3">
                              <span class="submitting"></span>
                              </div>
                          </div>
                      </form>
                  </div>   
              </div>
          </div>
      </div>
  </div>
</div>


{{-- <form method="POST" id="contactform" name="contactform" action="{{ url('kelas/create') }}">
 @csrf
<div class="card mt-3">
  <div class="card-header">
    <b>Tambah</b>
  </div>
  <div class="card-body">

    <div class="mb-3">
      <label for="kelas" class="form-label">Kelas</label>
      <input type="kelas" class="form-control" id="kelas">
    </div>

    <div class="mb-3">
        <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
        <input type="kompetensi_keahlian" class="form-control" id="kompetensi_keahlian">
    </div>
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div> --}}
@endsection