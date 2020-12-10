<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('church/img/actionlogo.png') }}" alt="{{ asset('church/img/actionlogo.png') }}" class="d-inline-block align-top" />
        ACTION Christian Center
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('/') ? 'active' : "" }}">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Request::is('about') ? 'active' : ""}}">
                <a class="nav-link" href="{{ url('about') }}">About</a>
            </li>
            <li class="nav-item {{ Request::is('locations') ? 'active' : ""}}">
                <a class="nav-link" href="{{ url('locations') }}">Locations</a>
            </li>
            <li class="nav-item {{ Request::is('events') ? 'active' : ""}}">
                <a class="nav-link" href="{{ url('events') }}">Events</a>
            </li>
            <li class="nav-item {{ Request::is('serve') ? 'active' : ""}}">
                <a class="nav-link" href="{{ url('serve') }}">Serve</a>
            </li>
            <li class="nav-item {{ Request::is('giving') ? 'active' : ""}}">
                <a class="btn btn-cashapp" target="_blank" href="//cash.app/$beaction">Giving</a>
            </li>
            {{--<li class="nav-item"><button class="btn btn-primary" id="planModalButton">Plan A Visit</button></li>--}}
        </ul>
    </div>
</nav>
@include('church.partials.notifications')