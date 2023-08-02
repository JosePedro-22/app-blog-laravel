<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
        $this->middleware('auth')->only('destroy');
    }
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($data, $request->remember)){
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }
        return redirect()->back()->with(['status'=> 'Credenciais Invalidas']);
    }

    public function destroy(Request $request)
    {
       Auth::logout();
       $request->session()->invalidate();
       return back();
    }
}
