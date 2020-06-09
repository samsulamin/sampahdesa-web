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
                                                <h5 class="card-header-title text-white pt-2">SIG Wisata Tegal</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
                                                    <div class="container">
                                                        <a href="{{url('/dataWisata')}}" class="btn btn-fix text-center">
                                                            <img class="card-img-top" src="{{asset('images/photo.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                                                             <hr>
                                                            <div class="card-block text-center ">
                                                                <h6 class="card-title text-dark ">About Us</h6>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <p>
                                                    Akomodasi yang tersedia di Tegal relatif lengkap. Aneka hotel / penginapan dan pusat perbelanjaan pun ada. Akses jalan dan transportasi cukup bagus. Bagi Anda yang mudik saat libur lebaran atau pun weekend dan kebetulan melewati Tegal, sempatkanlah mampir di kota ini sejenak untuk menikmati kuliner khas Tegal yang lezat dan maknyus.
                                                    Secara administratif, Tegal terbagi menjadi dua wilayah yaitu Kota/Kodya Tegal di sebelah utara (dekat pantai) dan Kabupaten Tegal sebelah selatannya. 
                                                </p>
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