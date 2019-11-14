<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function doLogin() {
        $data = [
    		"email"     => request("email"),
    		"password"  => request("password")
    	];

    	$credtx = auth()->attempt($data);

    	if($credtx) {
    		return redirect()->intended('/app/dashboard');
    	}else {
    		return redirect()->back()->with('error', 'Invalid User');
    	}
    }

    public function dashboard() {
        return view('app.dashboard');
    }

    public function logout() {
        auth()->logout();
        return redirect()->to('/login')->with('success', 'Successfully Logout');
    }
}