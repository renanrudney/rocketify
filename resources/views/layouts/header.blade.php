
<ul class="nav blue-nav align-items-center">
    <li class="nav-item">
        <a href="{{ url('/') }}" class=" nav-link text-white">
            <img src="{{ asset('rocketfy.png') }}" class="logo-img">
            {{-- <strong> Rocketfy </strong> --}}
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('launcher.index') }}">Launchings</a>
    </li>
    <li class="nav-item">
        <a class=" nav-link text-white" href="{{ url('/info') }}">Dashboard</a>
    </li>
</ul>
