
<ul class="nav blue-nav align-items-center">
    <li class="nav-item">
        <a href="{{ url('/') }}" class=" nav-link text-white">
            <img src="{{ asset('nasa-logo.png') }}" class="logo-img">
            <strong> Rocketfy </strong>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('launcher.index') }}">Launchers</a>
    </li>
    <li class="nav-item">
        <a class=" nav-link text-white" href="{{ url('/info') }}">Dashboard</a>
    </li>
</ul>


