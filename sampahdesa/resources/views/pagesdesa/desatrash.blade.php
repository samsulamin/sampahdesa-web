@extends('admin.desaTemplate')
@section('main') 
<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <div class="card-header bg-dark text-white">
                Data
            </div>
            <a href="{{url('/desadatapetugas')}}" class="list-group-item list-group-item-action">
                <i class='fas fa-user-tie'></i> Data Petugas
            </a>
            <a href="{{url('/desadatawarga')}}" class="list-group-item list-group-item-action active">
                <i class='fas fa-users'></i> Data Warga
            </a>
            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h7 class="float-left">Data Warga</h7>
                <div class="float-right">
                    {{--<button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                        <i class='fas fa-plus'></i> Tambah Data
                    </button>
                    |
                    <a href="{{url('/desarestrore')}}" class="btn btn-outline-warning btn-sm">
                        <i class='fas far fa-trash-alt'></i> Data Terhapus
                    </a>--}}
                    <a href="{{url('/desadatawarga')}}" class="btn btn-outline-primary btn-sm">
                        <i class='fas fa-box-open'></i> Data Warga
                    </a>
                </div>
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
                                <th>Email</th>
                                <th>J. kelamin</th>
                                <th>Asal Desa</th>
                                <th>Rt / Rw</th>
                                <th>Latittude</th>
                                <th>Longitude</th>
                                <th>Restore</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($warga as $w)
                            <tr>
                                <td>{{$w->namawarga}}</td>
                                <td>{{$w->email}}</td>
                                <td>{{$w->jeniskelamin}}</td>
                                <td>{{$w->desa->name}}</td>
                                <td>{{$w->rt}} / {{$w->rw}}</td>
                                <td>{{$w->latittude}}</td>
                                <td>{{$w->longitude}}</td>
                                <td class="text-center">
                                    <a href="{{url('desawarga/store/'.$w->id)}}" class="btn btn-outline-info btn-sm"><i class='fas fa-trash-restore'></i></a>
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