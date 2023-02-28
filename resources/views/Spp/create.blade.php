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
                            action="{{ url('/spp/create') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                <label for="tahun" class="col-form-label">Tahun *</label>
                                <input type="text" class="form-control" name="tahun" id="tahun"
                                placeholder="Nama Kelas">
                                </div>
                            </div>
  
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                <label for="nominal" class="col-form-label">Nominal *</label>
                                <input type="text" class="form-control" name="nominal" 
                                id="nominal"  placeholder="Nominal">
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

@endsection