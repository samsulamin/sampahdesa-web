@extends('admin.desaTemplate')
@section('main') 
<div class="container">
    <form method="post" action="{{url('/test/store')}}">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="warga_id">Nama Warga Id</label>
            <input type="text" class="form-control" id="warga_id" name="warga_id" value="{{$warga->id}}">
        </div>
        <div class="form-group">
            <label for="desa">Desa Id</label>
            <input type="text" class="form-control" id="desa_id" name="desa_id" value="{{$warga->desa_id}}">
        </div>
        {{--<div class="form-group">
            <label for="rt">rt</label>
            <input type="text" class="form-control" id="rt" name="rt" value="{{$warga->rt}}">
        </div>
        <div class="form-group">
            <label for="rw">rw</label>
            <input type="text" class="form-control" id="rw" name="rw" value="{{$warga->rw}}">
        </div>
        <div class="form-group">
            <label for="latitude">latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude"  value="{{$warga->latittude}}">
        </div>
        <div class="form-group">
            <label for="longitude">longitude</label>
            <input type="text" class="form-control" id="longitude" name="longitude"  value="{{$warga->longitude}}">
        </div>--}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
</div>
@stop