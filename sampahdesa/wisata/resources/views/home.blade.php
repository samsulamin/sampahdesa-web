@extends('admin.adminTemplate')

@section('main') 
        <div class="card-deck-wrapper">
            <div class="card-deck">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="container">
                        <a href="#" class="btn btn-fix text-center">
                            <img class="card-img-top" src="{{asset('images/gps.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                            <hr>
                            <div class="card-block text-center ">
                                <h4 class="card-title text-dark ">Peta Wisata</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="container">
                        <a href="#" class="btn btn-fix text-center">
                            <img class="card-img-top" src="{{asset('images/photo.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                            <hr>
                            <div class="card-block text-center ">
                                <h4 class="card-title text-dark ">Data Wisata</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="container">
                        <a href="#" class="btn btn-fix text-center">
                            <img class="card-img-top" src="{{asset('images/walk.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                            <hr>
                            <div class="card-block text-center ">
                                <h4 class="card-title text-dark ">Data Wisatawan</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="push"></div>
        
    </div>
</div>
@stop

@section('footer')

@stop