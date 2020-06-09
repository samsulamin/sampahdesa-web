@extends('admin.adminTemplate')
@section('main') 
<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <div class="card-header bg-dark text-white">
                Data
            </div>
            <a href="{{url('/datadesa')}}" class="list-group-item list-group-item-action ">Data Desa</a>
            <a href="{{url('/datapetugas')}}" class="list-group-item list-group-item-action">Data Petugas</a>
            <a href="{{url('/datawarga')}}" class="list-group-item list-group-item-action active">Data Warga</a>
            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h6 class="float-left">Notifikasi</h6>
                <a href="{{url('/dataWisata')}}" class="btn btn-outline-primary btn-sm float-right">
                    <i class='fas fa-plus-circle'></i>
                </a> 
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <table id="myTable" class="display table-bordered">
                        <thead>
                            <tr>
                                <th>Nama warga</th>
                                <th>Asal Desa</th>
                                <th>Rt / Rw</th>
                                <th>Latittude</th>
                                <th>Longitude</th>
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
                                <td class="text-center">
                                    <a href="{{url('/datawisata/edit')}}" class="btn btn-outline-info btn-sm"><i class='fas fa-pencil-alt'></i></a>
                                    <a href="{{url('/delete')}}" class="btn btn-outline-danger btn-sm"><i class='fas fa-trash'></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 2</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 2</td>
                                <td>Row 1 Data 1</td>
                                <td class="text-center">
                                    <a href="{{url('/datawisata/edit')}}" class="btn btn-outline-info btn-sm"><i class='fas fa-pencil-alt'></i></a>
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
@stop

@section('footer')

@stop