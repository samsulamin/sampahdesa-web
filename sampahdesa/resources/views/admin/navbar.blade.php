<div class="fixed-top">
    <div class="row">
        <div class="col-sm-1">
            <a class="nav-link" href="{{url('/dashboard')}}"><span class="sr-only">(current)</span>
                <img src="{{asset('images/tegal2.png')}}" class="mx-auto d-block" style="height:105px" alt="Kabupaten Tegal">
            </a>
        </div>
        <div class="col-sm-11">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top:20px">
                <a class="navbar-brand" href="{{url('/dashboard')}}"> {{ Auth::user()->name}}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/dashboard')}}">
                                <i class='fas fa-tachometer-alt'></i> Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/datadesa')}}">
                                <i class='fas fa-database'></i> Data
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/laporan')}}">
                                <i class='fas fa-clipboard-list'></i> Laporan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">
                                <i class='fas fa-info-circle'></i> About
                            </a>
                        </li>
                        {{--<li class="nav-item">
                            <a class="nav-link" href="{{url('/notifikasi')}}">
                                <i class='fas fa-bell'></i> Notifikasi
                            </a>
                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class='fas fa-sign-out-alt'></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>