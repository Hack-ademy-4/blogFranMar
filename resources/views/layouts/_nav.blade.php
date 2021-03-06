<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand text-white " href="{{route('home')}}">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('articles.index')}}">Articles</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        @auth
                        Hola{{auth()->user()->name}}
                        @else
                        Get in mate!
                        @endauth
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @auth
                        <li><a class="dropdown-item" href="{{route('articles.create')}}">Create Article</a></li>
                        <li><a id="logout" class="dropdown-item" href="#">Logout</a></li>
                        <form  id="logout-form" action="{{route('logout')}}" method="POST">
                        @csrf
                        </form>
                        @endauth
                        @guest
                        <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                        <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                        @endguest
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav- text-white disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success text-white" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
