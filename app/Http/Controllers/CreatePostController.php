<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\goods;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;

class CreatePostController extends Controller
{
    public function create()
    {
        
        if (session('User')->role) {
            return view('CreatePost');
        } else {
            dd(session('User')->role);
        }
        
    }
    public function search(Request $request)
    {
        
        $search = $request->input('search');

        // Выборка всех товаров, у которых в имени есть искомое слово
        $posts = goods::where('name', 'LIKE', '%'.$search.'%')->get();
        // dd($search);
        return view('catalog',['posts'=>$posts]);
        
    }
    
     public function store(Request $request){
        $path=$request->file('avatar')->store('uploads','public');
    
        $validated = $request->validate([
            
            'name'=>['required','string'],
            'avatar'=>[], 
            'price'=>['required','integer','gt:0'],
            'Brand'=>['required','string'],
            'Diameter'=>['required','integer','gt:0'],
            'Width'=>['required','integer','gt:0'],
        ]);
    
        $post = goods::query()->create([
            
            'name' => $validated['name'],
            'avatar' => $path, 
            'price' => $validated['price'],
            'Brand'=> $validated['Brand'],
            'Diameter'=> $validated['Diameter'],
            'Width'=> $validated['Width'],
        ]);
    //     // $posts = Post::all('id','user_id','img','content');
        
        return redirect(RouteServiceProvider::HOME);
    }
    public function catalog(){
        
        $posts = goods::all();
        return view('catalog',['posts'=>$posts]);
    }
    public function product($id){
        $posts = DB::table('goods')->whereIn('id', [$id])->get();
        return view('/product',['posts'=>$posts[0]]);
    }
    public function basket($id){
        $basket = DB::table('goods')->whereIn('id', [$id])->get();
        $ba=session()->get('basket', []);
        $ba[]=$basket;
        session()->put('basket',$ba);
        // return view('/basket');
        return redirect()->route('basket');
    }
    public function indexBasket(){
        // dd(session('basket'));
        return view('basket');
        
    }
    public function basketD(){
        session()->put('basket',[]);
        return view('basket');
        
    }
    
}
