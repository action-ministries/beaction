<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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
            <li class="nav-item {{ Request::is('serve') ? 'active' : ""}}">
                <a class="nav-link" href="{{ url('serve') }}">Serve</a>
            </li>
            <li class="nav-item {{ Request::is('connect') ? 'active' : ""}}">
                <a class="nav-link" href="{{ route('ministry-home') }}" target="_blank">Ministry Home <i class="fas fa-external-link-alt"></i></a>
            </li>
            {{--<li class="nav-item"><button class="btn btn-primary" id="planModalButton">Plan A Visit</button></li>--}}
        </ul>
    </div>
</nav>