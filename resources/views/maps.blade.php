@extends('app')

@section('main-content')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <iframe src="{{ asset('infos/lancamento.html') }}" width="100%" height="100%"></iframe>
      </div>
      <div class="col-md-6">
        <iframe src="{{ asset('infos/icon_mundi_cor_igual.html') }}" width="100%" height="100%"></iframe>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <iframe src="{{ asset('infos/icon_region.html') }}" width="100%" height="100%"></iframe>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('freq_lancamento.png') }}" alt="">
      </div>
    </div>
  </div>
  </div>
@endsection
