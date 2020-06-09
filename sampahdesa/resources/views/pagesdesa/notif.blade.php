@extends('admin.desaTemplate')
@section('main') 
<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <div class="card-header bg-dark text-white">
                Notifikasi
            </div>
            <a href="{{url('/desadatapetugas')}}" class="list-group-item list-group-item-action active">
                <i class='fas fa-bell'></i> Notifikasi
            </a>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <i class='fas fa-bell'></i> Notifikasi
                <form class="form-inline my-2 my-lg-0 float-right" method="get" action="{{url('/desanotifikasi/cari')}}">
                    <input class="form-control mr-sm-2 form-control-sm" type="search"  name="search" aria-label="Search" data-date-format="yyyy-mm-dd" id="datepicker">
                    <button class="btn btn-outline-info my-2 my-sm-0 btn-sm" type="submit"><i class='fas fa-search'></i></button>
                </form>
            </div>
        </div>
        <br>
        {{--<div class="card">
            <div class="card-body">
                <div class="container">
                    <table id="myTable" class="display table-bordered">
                        <thead>
                            <tr>
                                <th>ID Notifikasi</th>
                                <th>Nama Warga</th>
                                <th>Nama Desa</th>
                                <th>Status</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($notifikasi as $l)
                            <tr>
                                <td>{{$l->id}}</td>
                                <td>{{$l->warga->namawarga}}</td>
                                <td>{{$l->desa->name}}</td>
                                <td>{{$l->status}}</td>
                                <td class="text-center">
                                    <a href="{{url('desawarga/store/'.$l->id)}}" class="btn btn-outline-info btn-sm"><i class='fas fa-trash-restore'></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>--}}
        @foreach($notifikasi as $l)
            <div class="card shadow rounded-pill border-secondary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            Nama Warga : <strong>{{$l->warga->namawarga}}</strong>
                        </div>
                        <div class="col-sm-3">
                            Desa, Rt / Rw : <strong>{{$l->desa->name}}, {{$l->warga->rt}} / {{$l->warga->rw}}</strong>
                        </div>
                        <div class="col-sm-3">
                            Tanggal : <strong>{{$l->created_at}}</strong>
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-6 text-right">
                                    <form method="post" action="{{url('/notif/angkut')}}/{{$l->id}}">
                                        {{ csrf_field() }}
                                        <button class="btn btn-outline-success btn-sm rounded-pill"><i class='fas fa-people-carry'></i> Angkut </button>
                                    </form>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <form method="post" action="{{url('/notif/pending')}}/{{$l->id}}">
                                        {{ csrf_field() }}
                                        <button class="btn btn-outline-warning btn-sm rounded-pill"><i class='fas fa-history'></i> Pending </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </br>
        @endforeach
    </div>
</div>
@stop