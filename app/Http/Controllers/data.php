<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\user_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class data extends Controller
{
    public function index()
    {
        $d=session()->get('User');
        $a=$d->id;
        $User = User::findOrFail($d->id);
        $data = user_data::where('user_id', $a)->first();
        // dd($data);
        return view('autoriz', ['user' => $User,'data'=>$data]);
    }
    public function create()
    {
        
        // dd($d->id);
        
        return view('Edit');
    }
    public function store(Request $request){
        $d=session()->get('User');
        $a=$d->id;
        $path=$request->file('avatar')->store('uploads','public');

        User::where('id', $a)->update([

            'name'=>$request['name'],
            'avatar'=>$path
            
        ]);
        user_data::where('user_id', $a)->update([

            'age'=>$request['age'],
            'address'=>$request['address'],
            'birthday'=>$request['birthday'],
            'gender'=>$request['gender'],
            'phone_number'=>$request['phone_number'],
            
            
        ]);
        $User = User::findOrFail($a);
        
        session()->put('User',$User);
        return redirect()->route('autoriz');
    }
}
