@extends('app')
@section('includes')
<link rel="stylesheet" href="{{ asset('css/launcher.css') }}">
@endsection

@section('main-content')
<section class="container-fluid">
    @include('layouts/sidebar')
    <div class="side-off">
      <h3>Next Rocket Launchings</h3>
    </div>
    @foreach ($launchers as $launch)
  <div class="row side-off">
    <div class="col-sm-11 text-left">
      <div class="card launcher-card">
        <div class="card-body row">
            <img class="card-img-top launcher-img col-sm-4" src="{{ $launch->imageURL }}" alt="Card image cap">
          <div class="col-sm-5">
            <h5 class="card-title">{{ $launch->nomeFoguete }}</h5>
            <br><small><i class="far fa-calendar-alt"></i> {{ $launch->windowstart }}</small><br><br>
            <small><i class="fas fa-map-marker-alt"></i> {{ $launch->cidade }}</small>
            {{-- <small>{{ $launch->id }}</small> --}}
          </div>
          <div class="col-sm-3">
            <a href="{{ route('launcher', $launch->id) }}" class="btn btn-primary">KNOW MORE</a>
        </div>
      </div>
    </div>
  </div>
  </div>
@endforeach
</section>
@endsection
