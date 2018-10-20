@extends('app')
@section('main-content')

  {{-- <div id="ImageContainer">
  <img src="http://placehold.it/1000x600" class="Image">
</div> --}}

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
          <br></div>
        </div>
          <div class="row">
            <div class="col-md-12">
              <i class="fas fa-map-marker-alt text-secondary"></i>
              <span class="local-launche text-secondary ">{{ $launcher->cidade }}</span>
            <br></div>
          </div>
          {{-- <div class="row">
            <div class="col-md-12">
              <br><button type="button" class="btn btn-secondary">Add Calendar</button>
            </div>
          </div> --}}
        </div>

        </div>
        {{-- <div class="block_1 hline-bottom"></div> --}}
        <div clas="row">
            <div class="d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="accordion " id="accordionExample">
                      @if ($launcher->descricao != NULL)

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                <button class="btn btn-link collapsed text-secondary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-space-shuttle"></i> About Rocket
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
{{--
                        <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                    <button class="btn btn-link  text-secondary" type="button" data-toggle="collapse" data-target="#company" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fas fa-building"></i> The company
                                    </button>
                                    </h5>
                                </div>
                                <div id="company" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        {{ $launcher->nomeBase }}
                                    </div>
                                </div>
                            </div>
                        </div> --}}

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
        var myLatLng = {lat: {{ $launcher->latitude }}, lng: {{ $launcher->longitude }}};

        // Create a map object and specify the DOM element
        // for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 5
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: 'Hello World!'
        });

        map.addListener('center_changed', function() {
          // 3 seconds after the center of the map has changed, pan back to the
          // marker.
          window.setTimeout(function() {
            map.panTo(marker.getPosition());
          }, 3000);
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
