@extends('admin.dashboard')

@section('main')
    {{--<div class="container-fluid bg-light">
        <div class="row">
            <div class="col-sm-1">
                <a class="nav-link" href="{{url('/dashboarddesa')}}"><span class="sr-only">(current)</span>
                    <img src="{{asset('images/tegal2.png')}}" class="mx-auto d-block" style="height:80px" alt="Kabupaten Tegal">
                </a>
            </div>
            <div class="col-sm-7 text-left">
                <h5>PENGANGKUTAN SAMPAH PERUMAHAN</h5>
                <h4>KABUPATEN TEGAL</h4>
            </div>
        </div>
    </div>--}}
    <div class="card-deck-wrapper p-5" id="dashboard">
        <div class="card-deck">
            <div class="slide-up four col">
                <div class="box shadow bg-light">
                    <div class="container">
                        <span class="original">
                        <br> <br>  <br>
                            <h2 class="text-center text-dark">Data</h2>
                        </span>
                    </div>
                    <div class="overlay">
                        <div class="container">
                            <a href="{{url('/desadatapetugas')}}" class="btn btn-fix text-center" aria-hidden="true">
                                <img class="card-img-top" src="{{asset('images/plant.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                                <hr>
                                <div class="card-block text-center ">
                                    <h4 class="card-title text-dark">Data</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-up four col">
                <div class="box shadow bg-light">
                    <div class="container">
                        <span class="original">
                        <br>  <br>  <br>
                            <h2 class="text-center text-dark">Notifikasi</h2>
                        </span>
                    </div>
                    <div class="overlay">
                        <div class="container">
                            <a href="{{url('/desanotifikasi')}}" class="btn btn-fix text-center" aria-hidden="true">
                                <img class="card-img-top" src="{{asset('images/alarm.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                                <hr>
                                <div class="card-block text-center ">
                                    <h4 class="card-title text-dark">Notifikasi</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-up four col">
                <div class="box shadow bg-light">
                    <div class="container">
                        <span class="original">
                        <br>  <br>  <br>
                            <h2 class="text-center text-dark">Laporan</h2>
                        </span>
                    </div>
                    <div class="overlay">
                        <div class="container">
                            <a href="{{url('/desalaporan')}}" class="btn btn-fix text-center" aria-hidden="true">
                                <img class="card-img-top" src="{{asset('images/graph.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                                <hr>
                                <div class="card-block text-center ">
                                    <h4 class="card-title text-dark">Laporan</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-up four col">
                <div class="box shadow bg-light">
                    <div class="container">
                        <span class="original">
                        <br>  <br>  <br>
                            <h2 class="text-center text-dark">About</h2>
                        </span>
                    </div>
                    <div class="overlay">
                        <div class="container">
                            <a href="{{url('/desaabout')}}" class="btn btn-fix text-center" aria-hidden="true">
                                <img class="card-img-top" src="{{asset('images/puzzle.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                                <hr>
                                <div class="card-block text-center ">
                                    <h4 class="card-title text-dark">About</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-up four col">
                <div class="box shadow bg-light">
                    <div class="container">
                        <span class="original">
                            <br>  <br>  <br>
                            <h2 class="text-center">Logout</h2>
                        </span>
                    </div>
                    <div class="overlay">
                        <div class="container">
                            <a href="{{ route('logout') }}" class="btn btn-fix text-center"  
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                                <img class="card-img-top" src="{{asset('images/exit.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                                <hr>
                                <div class="card-block text-center ">
                                    <h4 class="card-title text-dark ">Logout</h4>
                                </div>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
