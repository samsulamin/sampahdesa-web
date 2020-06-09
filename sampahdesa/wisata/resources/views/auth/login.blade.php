@extends('../templateLogin.templateLogin')
@section('main')
    <div id="homepage">
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <div class="login-area">
            <div class="container">
                <div class="login-box ptb--80">
                    <form method="POST" action="{{ route('login') }}">
                        <div class="login-form-head">
                            <h4>SIG WISATA KAB. & KOTA TEGAL</h4>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{csrf_field()}}
                        <div class="login-form-body">
                            <div class="form-gp">
                                <label for="exampleInputEmail1">Email address</label>
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" required autofocus>
                                <i class="ti-email"></i>
                                <div class="text-danger"></div>
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputPassword1">Password</label>
                                <input id="password" type="password" class="formControlPass @error('password') is-invalid @enderror" name="password" required >
                                <i class="ti-lock"></i>
                                <div class="text-danger"></div>
                            </div>
                            <div class="row mb-4 rmber-area">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class=" form-checkbox custom-control-input" id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Show Password</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    @if (Route::has('password.request'))
                                        <a href="{{route('password.request')}}">Lupa Password ?</a>
                                    @endif
                                </div>
                            </div>
                            <div class="submit-btn-area">
                                <button id="form_submit" type="submit">SIGN IN <i class="ti-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')

@stop