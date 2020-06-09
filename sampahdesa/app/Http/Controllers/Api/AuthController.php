<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\ResponseHandler;
use App\User;
use App\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;
//use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $user;
    private $respHandler;
    public function __construct()
    {
        $this->user = new User();
        $this->respHandler = new ResponseHandler();
    }
    public function register(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string',
            'password' => 'required|string',
            'email' => 'required|string|email'
        ]);
        if ($validate->fails()) {return $this->respHandler->validateError($validate->errors());}
        $input = $request->all();
        
        if (!$this->user->where('name', $input['name'])->where('email', $input['email'])->first()) {
            $input['password'] = Hash::make($input['password']);
            $user = $this->user->create($input);
            return $this->respHandler->send(201, "Register Success", new UserResource($user));
        } else {
            return $this->respHandler->exists("Users");
        }
    }
    public function loginlama(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required'
        ]);
        if ($validate->fails()) {return $this->respHandler->validateError($validate->errors());}
        $input = $request->all();
        $user = $this->user->where('email', $input["email"])->first();
        if ($user) {
            if (Hash::check($input['password'], $user->password)) {
                return $this->respHandler->send(200, "Berhasil login", new UserResource($user));
            } else {
                return $this->respHandler->badCredentials();
            }
        } else {
            return $this->respHandler->notFound("Users");
        }
    }

    public function index(Request $request){
        //$id = 20;
        //$oke = Auth::user()->desa_id;
        //$id = $request->user()->id;
        if($request->user()->desa_id){
            $petugas = Petugas::where('desa_id', $request->user()->desa_id)->get();
            return response([
                'data' => $petugas
            ], 200);
        }else{
            return response([
                'data' => 'NotFound'
            ], 401);
        }
    }

    public function login(Request $request)
    {
        if(\Auth::attempt([
            'email'     => $request->email, 
            'password'  => $request->password
        ])){
            $user = \Auth::user();
            $token = $user->createToken('user')->accessToken;
            $data['user']   = $user;
            $data['token']  = $token;
            return response()->json([
                'success'   => true,
                'data'      => $data,
                'pesan'     => 'Login Sukses'
            ],200);
        }else{
            return response()->json([
                'success'   => false,
                'data'      => '',
                'pesan'     => 'Login Gagal'
            ],401);
        }
    }
    
}