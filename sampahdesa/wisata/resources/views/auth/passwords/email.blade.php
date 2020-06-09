@extends('templateLogin.templateLogin')
@section('main')
    <div id="homepage">
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <div class="login-area">
            <div class="container">
                <div class="login-box ptb--80">
                     @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        <div class="login-form-head">
                            <h4>SIG WISATA KAB. & KOTA TEGAL</h4>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{csrf_field()}}
                        <div class="login-form-body">
                            <div class="form-gp">
                                <label for="exampleInputEmail1">Email address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                <div class="text-danger"></div>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="submit-btn-area">
                                <button id="form_submit" type="submit">
                                {{ __('Send Password Reset Link') }}
                                <i class="ti-arrow-right"></i>
                                </button>
                            </div>
                            <div class="ptb--30 text-center">
                                <p>Sudah Punya Akun.? <a href="{{url('/')}}">Login.!</a></p>
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