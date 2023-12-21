<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function login() {
        $users = collect([]);
        $url = 'localhost:8000/users';
    
        $response= Http::get($url);
    
        if ($response->ok()) {
            $users = $response->json();
            $users = collect($users);
        }
        
        return view('auth.login', [
            'users' => $users,
            ''
        ]);
    }

    public function authenticate(Request $request) {
        Session::put('user_id', $request->get('user_id'));
        return redirect('/');
    }
}
