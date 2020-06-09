@extends('admin.adminTemplate')

@section('main') 
        <div class="container main-section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12 card-main">
                            <div class="card-section card-section-second border rounded ml-2 mr-2">
                                <div class="card-header card-header-second rounded">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5 class="card-header-title text-white pt-2">Contact Us</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <div class="card-deck-wrapper">
                                            <div class="card-deck">
                                                <div class="card shadow p-3 mb-5 bg-white rounded">
                                                    <div class="container">
                                                        <a href="https://id-id.facebook.com/" class="btn btn-fix text-center" target="blank">
                                                            <img class="card-img-top" src="{{asset('images/facebook.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                                                            <hr>
                                                            <div class="card-block text-center ">
                                                                <h6 class="card-title text-dark ">facebook</h6>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card shadow p-3 mb-5 bg-white rounded">
                                                    <div class="container">
                                                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" class="btn btn-fix text-center" target="blank">
                                                            <img class="card-img-top" src="{{asset('images/gmail.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                                                            <hr>
                                                            <div class="card-block text-center ">
                                                                <h6 class="card-title text-dark ">gmail</h6>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card shadow p-3 mb-5 bg-white rounded">
                                                    <div class="container">
                                                        <a href="https://www.instagram.com/?hl=id" class="btn btn-fix text-center" target="blank">
                                                            <img class="card-img-top" src="{{asset('images/instagram.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                                                            <hr>
                                                            <div class="card-block text-center ">
                                                                <h6 class="card-title text-dark ">instagram</h6>
                                                            </div>
                                                        </a>
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
            </div>
        </div>
        <div id="push"></div>
    </div>
</div>
@stop

@section('footer')

@stop