@extends('admin.desaTemplate')
@section('main') 
<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <div class="card-header bg-dark text-white">
                Data
            </div>
            <a href="{{url('/desadatapetugas')}}" class="list-group-item list-group-item-action ">
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
                <h7 class="float-left">Update Data Warga</h7>
                <a href="{{url('/desadatawarga')}}" class="btn btn-outline-success btn-sm float-right">
                    <i class='fas fa-plus-circle'></i> Data Warga
                </a>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <form method="post" action="{{url('/desawarga/update')}}/{{ $warga->id }}">
                        <div class="container-fluid">     
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="namawarga" class="col-sm-3 col-form-label">N. Warga</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="namawarga" name="namawarga" value="{{$warga->namawarga}}" placeholder="Nama Warga" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="emailwarga" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="emailwarga" name="emailwarga" aria-describedby="emailHelp"  value="{{$warga->email}}" placeholder="Email Warga" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="desa" class="col-sm-3 col-form-label">Desa</label>
                                        <div class="col-md-9">
                                            <select name="desa" id="desa" class="form-control">
                                                <option value="">pilih desa</option>
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
                                                <option value="">pilih Jenis Kelamin</option>
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuasn</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="rt" class="col-sm-3 col-form-label">Rt</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="rt" name="rt"  value="{{$warga->rt}}" placeholder="Rt Warga" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rw" class="col-sm-3 col-form-label">Rw</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="rw" name="rw"  value="{{$warga->rw}}" placeholder="Rw Warga" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="latittude" class="col-sm-3 col-form-label">latittude</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="latittude" name="latittude"  value="{{$warga->latittude}}" placeholder="Ex = -6.993401" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="longitude" class="col-sm-3 col-form-label">longitude</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="longitude" name="longitude" value="{{$warga->longitude}}" placeholder="Ex = 109.127927" required>
                                        </div>
                                    </div>
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
