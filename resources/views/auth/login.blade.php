{{-- <x-layout>
    <div class="container mt-5 form_dati">
        <div class="row justify-content-center ">
          <img src="/img/pin.png" alt="">
          <div class="col-12 col-md-6">
            <h2 class="my_title fw-light fs-1  mb-3">Accedi per unirti al mondo TuoEgo</h2>
            <form class="p-3 " method="post" action="{{route('login')}}">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label"></label>
                <input class="input" placeholder="Email" type="email" name="email" class="form-control  form_bordi" id="email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="password_confirmation" class="form-label"></label>
                <input class="input" placeholder="Password" type="password" name="password" class="form-control  form_bordi" id="password_confirmation">
              </div>
              <button type="submit" class="btn bottone_annuncio2 d-block mx-auto">login</button>
            </form>
            <div class="my-4 d-flex justify-content-center">
              <a class="tiffany" href="{{route('register')}}">registrati</a>
            </div>
          </div>
        </div>
      </div>
</x-layout> --}}
<x-layout>  
  <div class="section bg-dark">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                  <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                  <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 text-white pb-3">Log In</h4>
                      <div class="form-group">
                        <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                        <i class="input-icon uil uil-at"></i>
                      </div>	
                      <div class="form-group mt-2">
                        <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                      <a href="#" class="btn mt-4">submit</a>
                                    <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                        </div>
                      </div>
                    </div>
                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 text-white pb-3">Sign Up</h4>
                      <form action="{{route('register')}}" method="POST">
                      @csrf
                      <div class="form-group">
                        <input type="text" name="name" class="form-style" placeholder="Your Full Name" id="name" autocomplete="off">
                        <i class="input-icon uil uil-user"></i>
                      </div>	
                      <div class="form-group mt-2">
                        <input type="email" name="email" class="form-style" placeholder="Your Email" id="email" autocomplete="off">
                        <i class="input-icon uil uil-at"></i>
                      </div>	
                      <div class="form-group mt-2">
                        <input type="password" name="password" class="form-style" placeholder="Your Password" id="password" autocomplete="off">
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="password" name="password_confirmation" class="form-style" placeholder="Confirm Password" id="password_confirmation" autocomplete="off">
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                      <button class="" type="submit">Submit</button>
                      <a href="#" class="btn mt-4"></a>
                      </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</x-layout>