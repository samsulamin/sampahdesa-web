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
                                                <a href="{{url('/addWisatawan')}}" class="btn btn-warning btn-sm"><i class='fas fa-plus'></i> Tambah Data</a>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5 class="card-header-title text-white pt-2 float-right">Data Wisatawan</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <table id="myTable" class="display table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nama Wisata</th>
                                                    <th>Alamat</th>
                                                    <th>Kategori</th>
                                                    <th>Informasi</th>
                                                    <th>Fasilitas</th>
                                                    <th>Foto</th>
                                                    <th>Video</th>
                                                    <th>pilihan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Row 1 Data 1</td>
                                                    <td>Row 1 Data 2</td>
                                                    <td>Row 1 Data 1</td>
                                                    <td>Row 1 Data 2</td>
                                                    <td>Row 1 Data 1</td>
                                                    <td>Row 1 Data 2</td>
                                                    <td>Row 1 Data 1</td>
                                                    <td class="text-center">
                                                        <a href="{{url('/delete')}}" class="btn btn-outline-danger btn-sm"><i class='fas fa-trash'></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Row 1 Data 1</td>
                                                    <td>Row 1 Data 2</td>
                                                    <td>Row 1 Data 1</td>
                                                    <td>Row 1 Data 2</td>
                                                    <td>Row 1 Data 1</td>
                                                    <td>Row 1 Data 2</td>
                                                    <td>Row 1 Data 1</td>
                                                    <td class="text-center">
                                                        <a href="{{url('/delete')}}" class="btn btn-outline-danger btn-sm"><i class='fas fa-trash'></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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