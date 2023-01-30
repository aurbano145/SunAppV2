<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiAuthController extends Controller {

    function __construct() {
        $this->middleware('auth:api')->only(['protected']);
    }
    
    function login(Request $request) {
        $user = $request->input('user');
        $password = $request->input('password');
        
        if($user == 'user@email.com' && $password == '12345678') {
            $key = 'private_key'; //Clave para cifrar y descifrar
            $payload = [
                'user' => 'user@email.com',
                'expiration_date' => Carbon::now()->addHour(),
            ];
            
            $jwt = JWT::encode($payload, $key, 'HS256');
            return response()->json(['token' => $jwt]);
        }
        
        return response()->json(['message' => 'User not valid'], 401);
    }
        
    public function index() {
        
    }

    public function create() {
        
    }

    public function store(Request $request) {
        
    }

    public function show($id) {
        
    }

    public function edit($id) {
        
    }

    public function update(Request $request, $id) {
        
    }

    public function destroy($id) {
        
    }
    
    
}
