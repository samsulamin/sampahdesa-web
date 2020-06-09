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
                    <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                        <i class='fas fa-plus'></i> Tambah Data
                    </button>
                    |
                    <a href="{{url('/desawarga/trash')}}" class="btn btn-outline-warning btn-sm">
                        <i class='fas far fa-trash-alt'></i> Restore Data
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
                                <th>pilihan</th>
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
                                    <a href="{{url('/desawarga/edit')}}/{{$w->id}}" class="btn btn-outline-info btn-sm"><i class='fas fa-pencil-alt'></i></a>
                                    <a href="{{url('/desawarga/delete')}}/{{$w->id}}" class="btn btn-outline-danger btn-sm"><i class='fas fa-trash'></i></a>
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

<!-- Modal -->
<div class="modal fade shadow" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="staticBackdropLabel">
                    <i class='fas fa-plus-square'></i> Tambah Warga
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('/desadatawarga/store')}}">
                    <div class="container-fluid">       
                    {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="namawarga" class="col-sm-3 col-form-label">N. Warga</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="namawarga" name="namawarga" placeholder="Nama Warga" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emailwarga" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="emailwarga" name="emailwarga" aria-describedby="emailHelp" placeholder="Email Warga" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                            </div>
                        </div>    <div class="form-group row">
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
                            <label for="rt" class="col-sm-3 col-form-label">Rt</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="rt" name="rt" placeholder="Rt Warga" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rw" class="col-sm-3 col-form-label">Rw</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="rw" name="rw" placeholder="Rw Warga" required>
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
                        <div class="form-group row">
                            <label for="latittude" class="col-sm-3 col-form-label">latittude</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="latittude" name="latittude" placeholder="Ex = -6.993401" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="longitude" class="col-sm-3 col-form-label">longitude</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Ex = 109.127927" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-success btn-sm">Simpan Data</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop