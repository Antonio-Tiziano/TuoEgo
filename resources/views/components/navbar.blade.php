<div class="container-fluid">
    {{-- Prima navbar minore --}}
    <div class="row d-none d-lg-block">
        <nav class="navbar p-0 navbar-expand">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between vw-100">
                    <div class="col-6">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">
                                    <i class="bi bi-1-circle text-dark fs-4"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-1-circle text-dark fs-4"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="navbar-nav justify-content-end align-items-center">
                            <li class="nav-item">
                                <a class="nav-link fw-lighter" aria-current="page" href="#">Trova negozio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-lighter" aria-current="page" href="#">Aiuto</a>
                            </li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link fw-lighter" aria-current="page"
                                        href="{{ route('login') }}">Accedi</a>
                                </li>
                            @endguest
                            @auth
                                <li class="nav-item">
                                    <form class="" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="btn_link nav-link" type="submit">Logout</button>
                                    </form>
                                </li>
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
                <div class="row vw-100 d-flex align-items-center justify-content-between">
                    <div class="col-lg-4 col-12 justify-content-between d-flex align-items-center">
                        <a class="navbar-brand align-content-center align-items-center" href="#">
                            <div class=" logo_navbar"></div>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class=" col-lg-4 collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Uomo
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Scarpe</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Abbigliamento</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Accessori</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Donna
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Scarpe</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Abbigliamento</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Accessori</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="d-block d-lg-none">
                                <div class="row">
                                    <div class="col-1 ">
                                        <i class="bi bi-search"></i>
                                    </div>
                                    <div class="col-1 ">
                                        <i class="bi bi-heart"></i>
                                    </div>
                                    <div class="col-1 ">
                                        <i class="bi bi-bag"></i>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="d-none d-lg-block col-lg-4 justify-content-end d-flex">
                        <div class="container">
                            <div class="row d-flex justify-content-end">
                                <div class="col-2 d-flex justify-content-end">
                                    <i class="bi bi-search"></i>
                                </div>
                                <div class="col-2 d-flex justify-content-end">
                                    <i class="bi bi-heart"></i>
                                </div>
                                <div class="col-2 d-flex justify-content-end">
                                    <i class="bi bi-bag"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
