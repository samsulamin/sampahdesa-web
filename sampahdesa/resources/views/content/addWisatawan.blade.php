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
                                            <div class="col-sm-6 pt-2">
                                                <a href="{{url('/addWisata')}}" class="btn btn-warning btn-sm"><i class='fas fa-plus'></i> Tambah Data</a>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5 class="card-header-title text-white pt-2 float-right">Update Data Wisata</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group row">
                                                        <label for="namawisata" class="col-sm-4 col-form-label">Nama Wisata</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="namawisata" name="namawisata" placeholder="Nama Wisata">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="kategori" class="col-sm-4 col-form-label">Kategori</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="kategori" name="kategori" value="{{ Auth::user()->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="informasi" class="col-sm-4 col-form-label">Informasi</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="informasi" name="informasi" placeholder="Informasi">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group row">
                                                        <label for="fasilitas" class="col-sm-4 col-form-label">Fasilitas</label>
                                                        <div class="col-sm-8">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                            Toilet
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                            Waterboom
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                            Toilet
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                            Toilet
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                            Toilet
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="latittude" class="col-sm-4 col-form-label">Latittude</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="latittude" name="latittude" placeholder="Latittude">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="longitude" class="col-sm-4 col-form-label">Longitude</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="vidio" class="col-sm-4 col-form-label">Vidio</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="vidio" name="vidio">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="foto" name="foto">
                                                </div>
                                            </div>
                                            <hr>
                                            <button type="submit" class="btn btn-outline-success btn-sm"><i class='fas fa-save'></i> Submit</button>
                                        </form>
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