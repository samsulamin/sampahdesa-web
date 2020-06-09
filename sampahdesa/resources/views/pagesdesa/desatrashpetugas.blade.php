@extends('admin.desaTemplate')
@section('main') 
<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <div class="card-header bg-dark text-white">
                Data
            </div>
            <a href="{{url('/desadatapetugas')}}" class="list-group-item list-group-item-action active">
                <i class='fas fa-user-tie'></i> Data Petugas
            </a>
            <a href="{{url('/desadatawarga')}}" class="list-group-item list-group-item-action">
                <i class='fas fa-users'></i> Data Warga
            </a>
            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h7 class="float-left"><i class='fas fa-user-shield'></i> Data petugas</h7>
                <div class="float-right">
                    {{--<button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                        <i class='fas fa-plus'></i> Tambah Data
                    </button>
                    |--}}
                    <a href="{{url('/desadatapetugas')}}" class="btn btn-outline-primary btn-sm">
                        <i class='fas fa-box-open'></i> Data Petugas
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
                                <th>ID Petugas</th>
                                <th>Nama Petugas</th>
                                <th>email</th>
                                <th>Asal Desa</th>
                                <th>Jenis Kelamin</th>
                                <th>Restore</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($petugas as $p)
                                <tr>
                                    <td>{{$p->id}}</td>
                                    <td>{{$p->namapetugas}}</td>
                                    <td>{{$p->email}}</td>
                                    <td>{{$p->desa->name}}</td>
                                    <td>{{$p->jeniskelamin}}</td>
                                    <td class="text-center">
                                        <a href="{{url('/desapetugas/restore/'.$p->id)}}" class="btn btn-outline-warning btn-sm"><i class='fas fa-trash-restore'></i></a>
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
@endsection