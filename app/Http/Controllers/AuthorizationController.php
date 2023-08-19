<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AuthorizationController extends Controller
{
    public function create()
    {
        return view('authorization');
    }
    public function store(Request $request)
    {
        $credentials=$request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
            
        ]);
        
        if(!Auth::attempt($credentials)){
            return back();
            
        }

        
        $User = User::where('email', $request->email)->first();
        
        session()->put('User',$User);

        return redirect()->intended(RouteServiceProvider::HOME);
        
    }
    public function destroy(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
