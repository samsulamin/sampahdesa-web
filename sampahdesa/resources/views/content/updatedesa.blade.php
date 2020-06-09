@extends('admin.adminTemplate')
@section('main') 
<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <div class="card-header bg-dark text-white">
                Data
            </div>
            <a href="{{url('/datadesa')}}" class="list-group-item list-group-item-action active">
                <i class='fas fa-user-shield'></i> Data Desa
            </a>
            <a href="{{url('/datapetugas')}}" class="list-group-item list-group-item-action">
                <i class='fas fa-user-tie'></i> Data Petugas
            </a>
            <a href="{{url('/datawarga')}}" class="list-group-item list-group-item-action">
                <i class='fas fa-users'></i> Data Warga
            </a>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h7 class="float-left">Data Desa</h7>
                <button type="button" class="btn btn-outline-success btn-sm float-right" data-toggle="modal" data-target="#staticBackdrop">
                    <i class='fas fa-plus-circle'></i> Tambah Data Desa
                </button>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <form method="post" action="{{url('/datadesa/update')}}/{{ $desa->id }}">
                        <div class="container-fluid">     
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="namadesa" class="col-sm-2 col-form-label">Nama Desa</label>
                                <div class="col-sm-10">
                                    <select name="namadesa" id="namadesa" class="form-control selectpicker" data-live-search="true">
                                        <option value="">pilih Desa </option>
                                        @foreach($kelurahan as $k)
                                            <option value="{{$k->desa}}">{{$k->desa}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="namadesa" class="col-sm-2 col-form-label">Nama Desa</label>
                                <div class="col-sm-10">
                                    <select name="kecamatan" id="kecamatan" class="form-control selectpicker" data-live-search="true">
                                        <option value="">pilih Kecamatan </option>
                                        @foreach($kecamatan as $kc)
                                            <option value="{{$kc->nama}}">{{$kc->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{$desa->email}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
