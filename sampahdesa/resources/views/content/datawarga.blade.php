@extends('admin.adminTemplate')
@section('main') 
<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <div class="card-header bg-dark text-white">
                Data
            </div>
            <a href="{{url('/datadesa')}}" class="list-group-item list-group-item-action">
                <i class='fas fa-user-shield'></i> Data Desa
            </a>
            <a href="{{url('/datapetugas')}}" class="list-group-item list-group-item-action">
                <i class='fas fa-user-tie'></i> Data Petugas
            </a>
            <a href="{{url('/datawarga')}}" class="list-group-item list-group-item-action active">
                <i class='fas fa-users'></i> Data Warga
            </a>
            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h7 class="float-left"> <i class='fas fa-users'></i> Data Warga</h7>
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
                                <th>Email</th>
                                <th>Rt / Rw</th>
                                <th>Latittude</th>
                                <th>Longitude</th>
                                <th>pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($warga as $wrg)
                            <tr>
                                <td>{{$wrg->namawarga}}</td>
                                <td>{{$wrg->desa->name}}</td>
                                <td>{{$wrg->email}}</td>
                                <td>{{$wrg->rt}} / {{$wrg->rw}}</td>
                                <td>{{$wrg->latittude}}</td>
                                <td>{{$wrg->longitude}}</td>
                                <td class="text-center">
                                    <a href="{{url('/datawisata/edit')}}" class="btn btn-outline-info btn-sm"><i class='fas fa-pencil-alt'></i></a>
                                    <a href="{{url('/delete')}}" class="btn btn-outline-danger btn-sm"><i class='fas fa-trash'></i></a>
                                </td>
                            </tr>
                            @endforeach
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