<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function logout(Request $request) {
        $request->session()->flush();
        $request->session()->regenerate();
        
        return redirect()->route('login');
    }
}
