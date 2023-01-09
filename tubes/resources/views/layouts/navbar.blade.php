<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4C7972;">
    <div class="container">

        @auth
        <div class="navbar-nav">
            <a class="nav-link active" style="color: white;" href="{{ '/' }}">FOODTOUR</a>
            <a class="nav-link" aria-current="page" href="{{ '/' }}">Home</a>
            <a class="nav-link" href="{{ 'about' }}">About</a>
            @if (auth()->user()->role == 'admin')
            <a class="nav-link" href="{{ 'service' }}">Service</a>
            @endif
            <a class="nav-link" href="{{ 'packages' }}">Packages</a>
            <a class="nav-link" href="{{ 'ticket' }}">Ticket</a>
        
        </div>
        <div class="dropdown ms-4">
            <button class="btn btn-light dropdown-toggle text-" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu">
                {{-- Logout --}}
                <li>
                    <form action="{{ url('/logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item text-">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    @else
    <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{ '/' }}" style="font-weight: 900;">FOODTOUR</a>
        <a class="nav-link" aria-current="page" href="{{ '/' }}">Home</a>
        <a class="nav-link" href="{{ 'about' }}">About</a>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <div class="dropdown">
            <a href="{{ 'login' }}"><button class="btn btn-light" type="button" aria-expanded="false">
                    Login</button></a>
        </div>
    </div>
    @endauth

    </div>
</nav>