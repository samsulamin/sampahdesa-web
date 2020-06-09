<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GoogleMaps\Facade\GoogleMapsFacade;

class Coba extends Controller
{
    //
    public function index(){

        $latlng_origin = '-6.923321,109.161301';
        $latlng_destination = '-6.924069,109.1626215|-6.925007,109.1621764' ;

        // for ($i = 0; $i < $rumahsakit->count(); $i++) {
        //     $latlng_destination = $latlng_destination == '' ?  $rumahsakit[$i]->latitude . ',' . $rumahsakit[$i]->longitude : $latlng_destination . '|' . $rumahsakit[$i]->latitude . ',' . $rumahsakit[$i]->longitude;
        // }

        $distances = $this->getDistance($latlng_origin, $latlng_destination);
            return response()->json($distances);
        // for ($i = 0; $i < count($distances->rows[0]->elements); $i++) {
        //     $rumahsakit[$i]['jarak'] = $distances->rows[0]->elements[$i]->distance->value;
        // }

        // $rs_collect = collect($rumahsakit);
        // $rumahsakit = $rs_collect->sortBy('jarak');

        // $http_status = 200;
        // if ($rumahsakit) {
        //     $data = [
        //         'success' => true,
        //         'message' => 'Pencarian rumah sakit terdekat berhasil.',
        //         'data'  => $rumahsakit,
        //     ];
        // } else {
        //     $data = [
        //         'success' => false,
        //         'message'  => 'Pencarian rumah sakit terdekat gagal.',
        //         'data' => null
        //     ];
        //     $http_status = 204;
        // }

        // return response()->json($data, $http_status);
    }

    public function messages()
    {
        return [
            'latitude.required' => 'Latitude tidak boleh kosong!',
            'longitude.required'  => 'Longitude tidak boleh kosong!',
        ];
    }

    public function getDistance($latlng_origin, $latlng_destination)
    {
        $distance = GoogleMapsFacade::load('distancematrix')
            ->setParamByKey('origins', $latlng_origin)
            ->setParamByKey('destinations', $latlng_destination)
            ->setEndpoint('json')
            ->get();

        $data = json_decode($distance);
        return $data;
    }
}
