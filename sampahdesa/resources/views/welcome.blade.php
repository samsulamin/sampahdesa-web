@extends('templateLogin.templateLogin')
@section('main')
    <div id="homepage">
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <div class="login-area">
            <div class="container">
                <div class="login-box ptb--100">  
                    <div class="card-deck-wrapper">
                        <div class="card-deck">      
                            <div class="col-sm-8">
                                <div class="card shadow p-3  bg-white rounded">
                                    <article class="card-body">
                                        <h4 class="card-title text-center mb-4 mt-1">SAMPAHDESA</h4>
                                        <hr>
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
                                        <form method="POST" action="{{ route('login') }}">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                    </div>
                                                    <input class="form-control" id="email" type="email" class="@error('email') is-invalid @enderror" name="email" placeholder="Email or login" required autofocus>
                                                </div> <!-- input-group.// -->
                                            </div> <!-- form-group// -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                    </div>
                                                    <input id="password" type="password" class="formControlPass form-control @error('password') is-invalid @enderror" name="password" required placeholder="******">
                                                </div> <!-- input-group.// -->
                                            </div> <!-- form-group// -->

                                            <div class="row mb-4 rmber-area">
                                                <div class="col-6">
                                                    <div class="custom-control custom-checkbox mr-sm-2">
                                                        <input type="checkbox" class="form-checkbox custom-control-input" id="customControlAutosizing">
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
                                            <hr>
                                            <div class="mb-4 rmber-area">
                                                <div class="text-center">
                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}">Register <i class="ti-marker-alt"></i></a>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>
                                    </article><!-- card.// -->
                                </div>
                            </div>
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->
                </div> <!-- row.// -->
            </div>  <!-- row.// -->
        </div>         
    </div>
@stop