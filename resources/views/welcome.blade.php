<!DOCTYPE html>
<html lang="en">

  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  </head>
  <nav class="navbar navbar-default navbar-fixed-top transp-nav">
    <div class="container">
      <a href="{{ route('launcher.index') }}"><img src="{{ asset('nasa-logo.png') }}" class="logo-img">Rocketfy</a>
    </div>
  </nav>

  <body>
    <div class="container">
      <div>
      <h1 class="text-white">It's n̶o̶t̶ rocket science.<br>
        And it's closer than you<br>
        may think!</h1>
        <p class="text-white">Watch space rockets launching, learn more </br>
        about them and get lots of cool info.</p>
    </div>
  </div>
  </body>

</html>
