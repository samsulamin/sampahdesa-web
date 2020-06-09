@extends('templateLogin.templateLogin')
@section('main')
    <div id="homepage">
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <div class="login-area">
            <div class="container">
                <div class="login-box ptb--130">  
                    <div class="card-deck-wrapper">
                        <div class="card-deck">      
                            <div class="col-sm-8">
                                <div class="card shadow p-3  bg-white rounded">
                                    <article class="card-body">
                                        <h4 class="card-title text-center mb-4 mt-1">SAMPAHDESA</h4>
                                        <hr>
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('password.email') }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                    </div>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                    <div class="text-danger"></div>
                                                </div> <!-- input-group.// -->
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

                                            <div class="mb-4 rmber-area ptb--30">
                                                <div class="text-center">
                                                    <a href="{{url('/')}}">Login Disini</a>
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