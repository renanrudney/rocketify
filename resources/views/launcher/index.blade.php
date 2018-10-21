@extends('app')
@section('includes')
<link rel="stylesheet" href="{{ asset('css/launcher.css') }}">
@endsection

@section('main-content')
<section class="container-fluid">
    @include('layouts/sidebar')
    <div class="side-off row d-flex justify-content-center">
      <h1>Next Rocket Launchings</h1>
    </div>
    @foreach ($launchers as $launch)
  <div class="row side-off">
    <div class="col-sm-12 text-left d-flex justify-content-center">
      <div class=" col-sm-9 card launcher-card">
        <div class="card-body row">
        <img class="card-img-top launcher-img col-sm-4" src="{{ $launch->imageURL }}" alt="Card image cap">
          <div class="col-sm-5">
                <div class="row">
                  <h5 class="card-title">{{ $launch->nomeFoguete }}</h5>
                </div>
                <div class="row">
                    <strong>
                        <i class="far fa-calendar-alt"></i>
                        <small>{{ $launch->windowstart }}</small>
                    </strong>
                </div>
                <div class="row">
                    <strong>
                        <i class="fas fa-map-marker-alt"></i>
                        <small>{{ $launch->cidade }}</small>
                    </strong>
                </div>
          </div>
          <div class="col-sm-3 d-flex align-items-center ">

            <div class="row">
                <a href="{{ route('launcher', $launch->id) }}" class="btn btn-primary btn-lg">KNOW MORE</a>
            </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endforeach


  <div class="clearfix row side-off d-flex justify-content-center">
    {{ $launchers->links() }}
  </div>

</section>
@endsection
