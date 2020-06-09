@extends('admin.adminTemplate')
@section('main') 

<div class="row">
    <div class="col-2">
        <div class="list-group" id="list-tab" role="tablist">
            <div class="card-header bg-dark text-white">
            About
            </div>
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                <i class='fas fa-info-circle'></i> Tentang Kami
            </a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                <i class='fas fa-glasses'></i> Visi Misi
            </a>
        </div>
    </div>
     <div class="col-10">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <i class='fas fa-info-circle'></i> Tentang Kami
                    </div>
                </div>
                <br>
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('images/motor.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption text-left">
                                <h5 class="text-white">DLH Kabupaten Tegal Bagikan 51 Armada Angkut Sampah - PANTAU TERKINI</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/tosa.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption text-left">
                                <h5 class="text-white">Motor Pengangkut Sampah memudahkan Pekerjaan Petugas Kebersihan</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <a href="https://www.instagram.com/dlh_kab.tegal/" class="btn btn-fix text-center" target="blank">
                                    <img src="{{asset('images/instagram.png')}}" class="card-img" alt="..." style="width:70px">
                                </a>
                            </div>
                            <div class="col-md-10">
                                <div class="card shadow rounded-pill">
                                    <div class="card-body">
                                        @dlh_kab.tegal.
                                    </div>
                                </div>
                            </div>
                        </div>                  
                    </div>
                    <div class="col-sm-6">
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <a href="https://twitter.com/DLHkabTegal" class="btn btn-fix text-center" target="blank">
                                    <img src="{{asset('images/twitter.png')}}" class="card-img" alt="..." style="width:70px">
                                </a>
                            </div>
                            <div class="col-md-10">
                                <div class="card shadow rounded-pill">
                                    <div class="card-body">
                                        @DLHkabTegal
                                    </div>
                                </div>
                            </div>
                        </div>                  
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <i class='fas fa-glasses'></i> Visi Misi
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card shadow">
                            <div class="card-header bg-dark text-white">
                                Visi
                            </div>
                            <div class="card-body">
                                <p class="card-text">Visi Dinas Lingkungan Hidup Tahun  2014–2019 seperti yang tertuang dalam Rencana Strategis Badan Lingkungan Hidup Kabupaten Tegal 2014–2019 yaitu : <strong>“Menjadi Instansi yang Handal dalam Pengelolaan Lingkungan Hidup Menuju Terwujudnya Pembangunan Berkelanjutan di Kabupaten Tegal”</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card shadow">
                            <div class="card-header bg-dark text-white">
                                Misi
                            </div>
                            <div class="card-body">
                                <p class="card-text">Untuk mewujudkan visi tersebut, diperlukan tindakan nyata dalam bentuk Misi. Sesuai dengan peran Dinas Lingkungan Hidup, Misi Dinas Lingkungan Hidup Kabupaten Tegal Tahun 2014–2019 adalah sebagai berikut :</p>
                                <p class="card-text">
                                    <ol>
                                        <li>Meningkatkan Peran aktif dan Pengetahuan masyarakat dalam Upaya Perlindungan dan Pengelolaan Lingkungan Hidup;</li>
                                        <li>Meningkatkan upaya pengendalian pencemaran dan kerusakan lingkungan hidup, konservasi sumber daya alam, serta adaptasi dan mitigasi perubahan iklim;</li>
                                        <li>Meningkatkan Kualitas Pelayanan dan Kapasitas Kelembagaan dalam Rangka Pelaksanaan Tugas Pokok dan Fungsi;</li>
                                    </ol>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br> <br>
        </div>
    </div>
</div>
@stop