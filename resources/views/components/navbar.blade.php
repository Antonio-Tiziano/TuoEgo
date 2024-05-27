<div class="container-fluid">
    {{-- Prima navbar minore --}}
    <div class="row">

        <nav class="navbar navbar-expand">
            <div class="container-fluid">
                <div class="row justify-content-between vw-100">
                    <div class="col-6">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">
                                    <i class="bi bi-1-circle text-bg-dark fs-1"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-1-circle text-bg-dark fs-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 flex-shrink-1">
                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link fw-lighter" aria-current="page" href="#">Trova negozio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-lighter" aria-current="page" href="#">Aiuto</a>
                            </li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link fw-lighter" aria-current="page" href="{{route('login')}}">Accedi</a>
                            </li>                                
                            @endguest
                            @auth
                            <li class="nav-item"><form
                                class=""
                                method="POST"
                                action="{{route('logout')}}">
                                @csrf
                                <button class="btn_link nav-link" type="submit">Logout</button>
                              </form></li>                                              
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    {{-- navbar Reale --}}
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>
