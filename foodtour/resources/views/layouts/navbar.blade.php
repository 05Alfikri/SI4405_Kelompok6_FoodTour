<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4C7972;">
    <div class="container">

        @auth
        <div class="navbar-nav">
            <a class="nav-link active" style="color: white;" href="{{ '/' }}">FOODTOUR</a>
            <a class="nav-link" aria-current="page" href="{{ '/' }}">Home</a>
            <a class="nav-link" href="{{ 'about' }}">About</a>
            <a class="nav-link" href="{{ 'service' }}">Service</a>
            <a class="nav-link" href="{{ 'packages' }}">Packages</a>
        </div>
        <div class="dropdown ms-4">
            <button class="btn btn-light dropdown-toggle text-" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item text-black" href="{{ '/profile/'.auth()->user()->id }}">Profile</a></li>
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
        <a class="nav-link" href="{{ 'service' }}">Service</a>
    </div>
    <div class="navbar-nav d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="nav-link" aria-current="page" href="{{ 'login' }}"><strong>Login</strong></a>
  <a class="nav-link" aria-current="page" href="{{ 'register' }}"><strong>Registrasi</strong></a>
</div>
    @endauth

    </div>
</nav>