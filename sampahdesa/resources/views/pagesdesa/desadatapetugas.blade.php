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
                    <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                        <i class='fas fa-plus'></i> Tambah Data
                    </button>
                    |
                    <a href="{{url('/desapetugas/trash')}}" class="btn btn-outline-warning btn-sm">
                        <i class='fas far fa-trash-alt'></i> Data Terhapus
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
                                <th>pilihan</th>
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
                                        <a href="{{url('/desapetugas/edit')}}/{{$p->id}}" class="btn btn-outline-info btn-sm"><i class='fas fa-pencil-alt'></i></a>
                                        <a href="{{url('/desapetugas/delete')}}/{{$p->id}}" class="btn btn-outline-danger btn-sm"><i class='fas fa-trash'></i></a>
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
                    <i class='fas fa-plus-square'></i> Tambah Petugas
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post" action="{{url('/desapetugas/store')}}">
                    <div class="container-fluid">       
                    {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="namapetugas" class="col-sm-3 col-form-label">Nama Petugas</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="namapetugas" name="namapetugas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emailpetugas" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="emailpetugas" name="emailpetugas" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="desa" class="col-sm-3 col-form-label">Desa</label>
                            <div class="col-md-9">
                                <select name="desa_id" id="desa_id" class="form-control">
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
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection