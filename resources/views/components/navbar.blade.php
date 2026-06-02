<nav class="navbar navbar-expand-lg border-bottom bg-bianco">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img id="logoNavbar" src="/media/logo.png" alt="Logo del sito" class="logo" width="120" height="120"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('posts')}}">Tutti i post</a>
                </li>
                <li class="nav-item dropdown">
                    @auth
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao {{\Illuminate\Support\Facades\Auth::user()->name }}
                    </a>
                    @else
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route('login')}}">Accedi</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('register')}}">Registrati</a>
                        </li>
                    </ul>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>