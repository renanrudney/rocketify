@extends('app')
@section('includes')
<link rel="stylesheet" href="{{ asset('css/launcher.css') }}">
@endsection

@section('main-content')
<section class="container-fluid">
    @include('layouts/sidebar')
    <div class="side-off">
      Next Rocket Launchings
    </div>
  <div class="row side-off">
    <div class="col-sm-11 text-left">
      <div class="card launcher-card">
        <div class="card-body row">
          <img class="card-img-top launcher-img col-sm-4" src="{{ asset('storage/spacex-530585-unsplash.jpg') }}" alt="Card image cap">
          <div class="col-sm-5">
            <h5 class="card-title">Space Rocket X</h5>
            <br><small><i class="far fa-calendar-alt"></i> Oct 28, 2018 11:00 AM</small><br><br>
            <small><i class="fas fa-map-marker-alt"></i> Cape Canaveral, FL, USA</small>
          </div>
          <div class="col-sm-3">
            <a href="#" class="btn btn-primary">KNOW MORE</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="row side-off">
    <div class="col-sm-11 text-left">
      <div class="card launcher-card">
        <div class="card-body row">
          <img class="card-img-top launcher-img col-sm-4" src="{{ asset('storage/spacex-530585-unsplash.jpg') }}" alt="Card image cap">
          <div class="col-sm-5">
            <h5 class="card-title">Space Rocket X</h5>
            <br><small><i class="far fa-calendar-alt"></i> Oct 28, 2018 11:00 AM</small><br><br>
            <small><i class="fas fa-map-marker-alt"></i> Cape Canaveral, FL, USA</small>
          </div>
          <div class="col-sm-3">
            <a href="#" class="btn btn-primary">KNOW MORE</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="row side-off">
    <div class="col-sm-11 text-left">
      <div class="card launcher-card">
        <div class="card-body row">
          <img class="card-img-top launcher-img col-sm-4" src="{{ asset('storage/spacex-530585-unsplash.jpg') }}" alt="Card image cap">
          <div class="col-sm-5">
            <h5 class="card-title">Space Rocket X</h5>
            <br><small><i class="far fa-calendar-alt"></i> Oct 28, 2018 11:00 AM</small><br><br>
            <small><i class="fas fa-map-marker-alt"></i> Cape Canaveral, FL, USA</small>
          </div>
          <div class="col-sm-3">
            <a href="#" class="btn btn-primary">KNOW MORE</a>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
@endsection
