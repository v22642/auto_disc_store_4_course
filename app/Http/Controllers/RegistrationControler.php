<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\user_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class RegistrationControler extends Controller
{
    public function create(){
        return view('registration');
    }
    public function store(Request $request){
        
        $path=$request->file('avatar')->store('uploads','public');
        
        $request->validate([
            'name'=>['required','string'],
            'email'=> ['required', 'string', 'email', 'unique:users'],
            'avatar'=>[],
            'password'=>['required', 'confirmed', 'min:8']
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'avatar'=>$path,
            'password' => Hash::make($request->password)
        ]);
        
       
        
        Auth::login($user);
        $User = User::findOrFail($user->id);
        
        session()->put('User',$User);
        return redirect(RouteServiceProvider::HOME);
    }
}
