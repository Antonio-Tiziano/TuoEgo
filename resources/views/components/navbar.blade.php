<div class="navbar bg-base-100">
    <div class="navbar-start avatar">
        <a href="{{route('home')}}" class="btn logo_navbar m-2 btn-ghost text-xl">
            <img class="w-20" src="storage/img/pin.png" alt="">
        </a>
    </div>
    <div class="navbar-center ">
        <div class="dropdown mx-5 dropdown-hover align-middle">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <a href="">Offerte</a> <!-- Link to Offerte page -->
            </div>
            <ul tabindex="0" class="dropdown-content  menu p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="">In evidenza</a></li>
                <li><a href="">Scarpe</a></li>
                <li><a href="">Abbigliamento</a></li>
                <li><a href="">Accessori</a></li>
            </ul>
        </div>
        <div class="dropdown mx-5 dropdown-hover">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <a href="">Uomo</a> <!-- Link to Offerte page -->
            </div>
            <ul tabindex="0" class="dropdown-content  menu p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="">In evidenza</a></li>
                <li><a href="">Scarpe</a></li>
                <li><a href="">Abbigliamento</a></li>
                <li><a href="">Accessori</a></li>
            </ul>
        </div>

        <div class="dropdown mx-5 dropdown-hover">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <a href="">Donna</a> <!-- Link to Offerte page -->
            </div>
            <ul tabindex="0" class="dropdown-content  menu p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="">In evidenza</a></li>
                <li><a href="">Scarpe</a></li>
                <li><a href="">Abbigliamento</a></li>
                <li><a href="">Accessori</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar-end">
        <button class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
        </button>
        <div class="dropdown mx-5 dropdown-end dropdown-hover">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </div>
            <ul  tabindex="0" class="dropdown-content dropdown-left menu p-2 shadow bg-base-100 rounded-box w-52">
                @if (Auth::user())

                <li>
                    <form
                    id="problema"
                    class="w-full"
                    action="{{route('logout')}}" method="POST">
                    @csrf
                    <button style="width: 100%;" type="submit" class="link-neutral w-full ">Logout</button>
                </form>
            </li>

            <li>
                <a class=" justify-center link-neutral  m-1" href="{{route('home')}}">Profilo</a>
            </li>

            @endif
            @guest
            <li><a class=" justify-center link-neutral m-3" href="{{route('login')}}">Accedi/Registrati</a></li>
            @endguest
        </ul>
    </div>
</div>
</div>
