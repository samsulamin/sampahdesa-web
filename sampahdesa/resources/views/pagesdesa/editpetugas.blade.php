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
            <a href="{{url('/desadatawarga')}}" class="list-group-item list-group-item-action ">
                <i class='fas fa-users'></i> Data Warga
            </a>
            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h7 class="float-left">Update Data Petugas</h7>
                <a href="{{url('/desadatapetugas')}}" class="btn btn-outline-success btn-sm float-right">
                    <i class='fas fa-plus-circle'></i> Data Petugas
                </a>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <form  method="post" action="{{url('/desapetugas/update')}}/{{ $petugas->id }}">
                        <div class="container-fluid">       
                        {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="namapetugas" class="col-sm-3 col-form-label">Nama Petugas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="namapetugas" name="namapetugas" value="{{$petugas->namapetugas}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="emailpetugas" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="emailpetugas" name="emailpetugas" aria-describedby="emailHelp" value="{{$petugas->email}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desa" class="col-sm-3 col-form-label">Desa</label>
                                <div class="col-md-9">
                                    <select name="desa_id" id="desa_id" class="form-control">
                                        <option value="{{$petugas->desa->id}}">{{$petugas->desa->name}}</option>
                                        @foreach($kelurahan as $k)
                                        <option value="{{$k->id}}">{{$k->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <select name="jk" id="jk" class="form-control">
                                        <option value="{{$petugas->jeniskelamin}}">{{$petugas->jeniskelamin}}</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuasn</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
