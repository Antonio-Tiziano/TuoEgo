<x-layout>
    <div class="section">
        <div class="">
            <div class="row full-height justify-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 text-white pb-3">Log In</h4>
                                            <form
                                            action="{{route('login')}}"
                                            method="POST"
                                            >
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-style"
                                                        placeholder="Your Email" id="email" autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style"
                                                        placeholder="Your Password" id="password" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button class="btn_link btn_form p-2 m-3 border" type="submit">
                                                    Submit
                                                </button>
                                            </form>
                                            <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot
                                                    your password?</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 text-white pb-3">Sign Up</h4>
                                            <form action="{{ route('register') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-style"
                                                        placeholder="Your Full Name" id="name" autocomplete="off">
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" name="email" class="form-style"
                                                        placeholder="Your Email" id="email" autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style"
                                                        placeholder="Your Password" id="password" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password_confirmation"
                                                        class="form-style" placeholder="Confirm Password"
                                                        id="password_confirmation" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button class="btn_link btn_form p-2 m-3 border" type="submit">
                                                    Submit
                                                </button>
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
