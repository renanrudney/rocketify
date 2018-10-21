@extends('app')

@section('main-content')
<div class="col-md-12">
    <br>
    <div class="side-off row d-flex justify-content-center">
        <h1>Dashboard</h1>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <iframe src="{{ asset('infos/lancamento.html') }}" width="100%" height="100%"></iframe>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('infos/relogio_historico.png') }}" class="img-thumbnail" alt="">
        </div>
    </div>
    <br>
    <div class="row">
            <div class="col-md-6">
                <iframe src="{{ asset('infos/icon_region.html') }}" width="100%" height="100%"></iframe>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('infos/freq_lancamento.png') }}" class="img-thumbnail" alt="">
            </div>
        </div>
    <br>

    <div class="row ">
        <div class="col-md-6 d-flex justify-content-center">
            <img src="{{ asset('infos/proximo_pais.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
                <iframe src="{{ asset('infos/icon_mundi_cor_igual.html') }}" width="100%" height="100%"></iframe>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{ asset('infos/lancamento_agencia.png') }}" class="img-thumbnail" alt="">
        </div>
    </div>
    <br>
</div>
@endsection
