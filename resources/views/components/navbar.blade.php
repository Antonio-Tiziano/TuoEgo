<div class="navbar bg-base-100">
    <div class="navbar-start avatar">
        <a href="{{route('home')}}" class="w-12 m-2  text-xl">
            <img class="w-20" src="storage/img/pin.png" alt="">
        </a>
    </div>
    <div class="navbar-center hidden md:block">
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
                <a href="">Uomo</a> <!-- Link to Uomo page -->
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
                <a href="">Donna</a> <!-- Link to Donna page -->
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
            <label class="swap swap-rotate">
          
                <!-- this hidden checkbox controls the state -->
                <input type="checkbox" class="theme-controller" value="synthwave" />
                
                <!-- sun icon -->
                <svg class="swap-off fill-current w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/></svg>
                
                <!-- moon icon -->
                <svg class="swap-on fill-current w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg>
                
              </label>
        <button class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
        <div class="dropdown dropdown-end dropdown-hover">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content dropdown-left menu p-2 shadow bg-base-100 rounded-box w-52">
                @if (Auth::user())
                <li>
                    <a class="justify-center link-active m-1" href="{{route('profil')}}">Profilo</a>
                </li>
                @if (Auth::user() && Auth::user()->is_admin)
                <li>
                    <a class="justify-center link-active m-1" href="{{route('add.product')}}">Aggiungi articolo</a>
                </li>
                @endif
                <li>
                    <form id="problema" class="w-full" action="{{route('logout')}}" method="POST">
                        @csrf
                        <button style="width: 100%;" type="submit" class="link-active w-full">Logout</button>
                    </form>
                </li>
                @endif
                @guest
                <li><a class="justify-center link-active m-3" href="{{route('login')}}">Accedi/Registrati</a></li>
                @endguest
            </ul>
        </div>
    </div>
</div>
