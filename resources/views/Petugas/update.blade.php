@extends('home')
@section('content')

<div class="container">
  <div class="card mt-3">
      <div class="card-body">
        <div class="row align-items-stretch justify-content-center no-gutters">
          <div class="col-md-7">
            <div class="form h-100 contact-wrap p-5">
              <h3 class="text-center"></h3>
              @foreach ($data as $p)
              <form class="mb-5" method="post" id="contactForm" name="contactForm" 
                  action="/petugas/update/{{ $p->id_petugas }}">
               @method('put')
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group mb-3">
                  <label for="username" class="col-form-label">Username *</label>
                  <input type="text" class="form-control" name="username" id="username" 
                      placeholder="Username" value="{{ $p->username }}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6 form-group mb-3">
                  <label for="password" class="col-form-label">Password *</label>
                  <input type="text" class="form-control" name="password" id="password" 
                      placeholder="password" value="{{ $p->password }}">
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-md-6 form-group mb-3">
                  <label for="nama_petugas" class="col-form-label">Nama Petugas *</label>
                  <input type="text" class="form-control" name="nama_petugas" id="petugas" 
                      placeholder="Nama petugas" value="{{ $p->nama_petugas }}">
                  </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-3">
                <label for="level" class="col-form-label">Level *</label>
                <input type="text" class="form-control" name="level" id="level" 
                    placeholder="Level" value="{{ $p->level }}">
                </div>
            </div>

                  <div class="row justify-content-center">
                      <div class="col-md-5 form-group text-center">
                      <input type="submit" value="Kirim" class="btn btn-block rounded-0 py-2 px-4" 
                        style="background-color: #82AAE3">
                      <span class="submitting"></span>
                      </div>
                  </div>
              </form>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection