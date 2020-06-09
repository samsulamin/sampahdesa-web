@extends('admin.adminTemplate')
@section('main') 
<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <div class="card-header bg-dark text-white">
                Laporan
            </div>
              <a href="{{url('/laporan')}}" class="list-group-item list-group-item-action active">
            <i class='fas fa-clipboard-list'></i> Laporan</a>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <i class='fas fa-clipboard-list'></i> Laporan
                <form class="form-inline my-2 my-lg-0 float-right" method="get" action="{{url('/laporan/cari')}}">
                    <input class="form-control mr-sm-2 form-control-sm" type="search"  name="search" aria-label="Search" data-date-format="yyyy-mm-dd" id="datepicker">
                    <button class="btn btn-outline-info my-2 my-sm-0 btn-sm" type="submit"><i class='fas fa-search'></i></button>
                </form>
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
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Lat/Long</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($laporan as $l)
                            <tr>
                                <td>{{$l->warga->namawarga}}</td>
                                <td>{{$l->desa->name}}</td>
                                <td>{{$l->warga->rt}} / {{$l->warga->rw}}</td>
                                <td>{{$l->created_at}}</td>
                                <td>{{$l->status}}</td>
                                <td>{{$l->warga->latittude}} / {{$l->warga->longitude}}</td>
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