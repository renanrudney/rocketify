@extends('app')
@section('main-content')

    <div class="container">

        <div class="row epic-margin">
            <div class="col-md-6">
                <div class="image-rocket text-center" id="ImageContainer">
                    <img src="{{ $launcher->imageURL }}" alt="" class="Image">
                </div>
            </div>
            <div class="col-md-6 rem">
                <div class="row text">
                    <div class="col-md-12">
                        <h2 class="text-secondary">{{ $launcher->nomeFoguete }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <i class="fas fa-calendar-alt text-secondary"></i>
                        <span class="data-launche text-secondary">{{ $launcher->windowstart }}</span>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <i class="fas fa-map-marker-alt text-secondary"></i>
                <span class="local-launche text-secondary ">{{ $launcher->cidade }}</span>
                <br></div>
            </div>
            </div>
        </div>

        <div clas="row">
            <div class="d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="accordion " id="accordionExample">
                      @if ($launcher->descricao != NULL)

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                <button class="btn btn-link collapsed text-secondary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-space-shuttle"></i> About the Rocket
                                </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    {{ $launcher->descricao }}
                                </div>
                            </div>
                        </div>
                      @endif
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                <button class="btn btn-link text-secondary" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fas fa-map-marker-alt"></i> <span class="local-launche"> How to get there
                                </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                  <i>Best's places to watch <img src="http://maps.google.com/mapfiles/ms/icons/yellow-dot.png" alt=""></i>
                                    <div id="map" style="width:100%;height:400px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      @endsection
      @section('footer')
    <script>
    function initMap() {

        var defaultLatLng = {lat: {{ $launcher->latitude }}, lng: {{ $launcher->longitude }}};

        // Create a map object and specify the DOM element
        // for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: defaultLatLng,
          zoom: 9
        });
        // Create a marker and set its position.
        @foreach ($local as $lc)
        var myLatLng = {lat: {{ $lc->latitude }}, lng: {{ $lc->longitude }}};
        var marker = new google.maps.Marker({
          icon : 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png',
          map: map,
          position: myLatLng,
          title: '{{ $lc->local }}'
        });
        @endforeach

        var marker = new google.maps.Marker({
          icon : 'http://maps.google.com/mapfiles/ms/icons/red-dot.png',
          map: map,
          position: defaultLatLng,
          title: '{{ $launcher->nomeFoguete }}'
        });


        map.addListener('center_changed', function() {
          // 10 seconds after the center of the map has changed, pan back to the
          // marker.
          window.setTimeout(function() {
            map.panTo(marker.getPosition());
          }, 10000);
        });

        marker.addListener('click', function() {
          map.setZoom(12);
          map.setCenter(marker.getPosition());
        });

      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgVYrdoy0PRt0w_8OVsG8YaLQlO4Uy0UE&callback=initMap"
        async defer></script>
@endsection
