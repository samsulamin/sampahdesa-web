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
            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h7 class="float-left"><i class='fas fa-user-shield'></i> Data Desa</h7>
                <div class="float-right">
                    <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                        <i class='fas fa-plus'></i> Tambah Data
                    </button>
                    |
                    <a href="{{url('datadesa/trash')}}" class="btn btn-outline-danger btn-sm">
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
                                <th>Desa</th>
                                <th>Email</th>
                                <th>Kecamatan</th>
                                <th>Admin</th>
                                <th>Kabupaten</th>
                                <th>pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($desa as $d)
                            <tr>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->email }}</td>
                                <td>{{ $d->kecamatan }}</td>
                                <td>{{ $d->users->admin }}</td>
                                <td>{{ $d->kabupaten }}</td>
                                <td class="text-center">
                                    <a href="{{url('datadesa/edit/'.$d->id)}}" class="btn btn-outline-info btn-sm"><i class='fas fa-pencil-alt'></i></a>
                                    <a href="{{url('delete/'.$d->id)}}" class="btn btn-outline-danger btn-sm"><i class='fas fa-trash'></i></a>
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
                    <i class='fas fa-plus-square'></i> Tambah Data Desa
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('/datadesa/store')}}">
                    <div class="container-fluid">       
                    {{ csrf_field() }}
                        {{--<div class="form-group row">
                            <label for="namadesa" class="col-sm-3 col-form-label">Nama Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="namadesa" name="namadesa" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                            </div>
                        </div>--}}
                        <div class="form-group row">
                            <label for="namadesa" class="col-sm-3 col-form-label">Nama Desa</label>
                            <div class="col-sm-9">
                                <select name="namadesa" id="namadesa" class="form-control selectpicker" data-live-search="true">
                                    <option value="">pilih Desa </option>
                                    @foreach($kelurahan as $k)
                                        <option value="{{$k->desa}}">{{$k->desa}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namadesa" class="col-sm-3 col-form-label">Nama Desa</label>
                            <div class="col-sm-9">
                                <select name="kecamatan" id="kecamatan" class="form-control selectpicker" data-live-search="true">
                                    <option value="">pilih Kecamatan </option>
                                    @foreach($kecamatan as $kc)
                                        <option value="{{$kc->nama}}">{{$kc->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" required>
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
@stop
