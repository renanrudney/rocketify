@extends('app')

@section('main-content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <iframe src="{{ asset('infos/lancamento.html') }}" width="100%" height="100%"></iframe>
    </div>
    <div class="col-md-6">
      <img src="{{ asset('infos/proximo_pais.png') }}" alt="">
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="{{ asset('relogio_historico.png') }}" alt="">
    </div>
    <div class="col-md-6">
      <img src="{{ asset('lancamento_agencia.png') }}" alt="">
    </div>
  </div>
</div>
</div>
@endsection
