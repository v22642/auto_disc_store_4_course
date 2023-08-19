<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationControler;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\CreatePostController;
use App\Http\Controllers\data;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//index
    //шапка меняется в зависимости от того вощёл ли челавек в свой акаунт или нет
    //мини католог
    //рабочие ссылки 
Route::view('/','index')->name('index');//Y

//каталог
    //работает католог
    //рабочие ссылки  middelware 
    // middelware
Route::get('/catalog',[CreatePostController::class,'catalog'])->name('catalog');//Y
Route::get('/catalog', [CreatePostController::class,'search'])->middleware()->name('catalog.search');

//регистрация
Route::get('/registration',[RegistrationControler::class,'create'])->middleware('guest')->name('registration');//Y
Route::post('/registration',[RegistrationControler::class,'store'])->middleware('guest');
//авторизация

Route::get('/authorization',[AuthorizationController::class,'create'])->middleware('guest')->name('authorization');//Y
Route::post('/authorization',[AuthorizationController::class,'store'])->middleware('guest');

Route::post('/logout',[AuthorizationController::class,'destroy'])->middleware('auth')->name('logout');
//карзина 
    //выбраный тавар поподает в неё
Route::get('/basket',[CreatePostController::class,'indexBasket'])->middleware('auth')->name('basket');//Y
Route::get('/basket/{id}',[CreatePostController::class,'basket']);
Route::get('/basketD',[CreatePostController::class,'basketD'])->middleware('auth');//Y
//кабинет
    //работает
Route::view('/cabinet','cabinet');//N

//товар
    //отображения товара
Route::get('/product/{id}',[CreatePostController::class,'product'])->name('product');//Y
// Route::view('/product','product');    

//меню добавления товара
Route::get('/CreatePost',[CreatePostController::class,'create'])->name('CreatePost');
Route::post('/CreatePost',[CreatePostController::class,'store']);
//личный кабинет    
Route::get('/autoriz',[data::class,'index'])->name('autoriz');
//редактирование
Route::get('/Edit',[data::class,'create'])->name('Edit');
Route::post('/Edit',[data::class,'store']);
//
Route::get('/payment', function () {
    if(session('basket')){
        return view('payment');
    }else{
        return view('basket');
    }
    
})->name('payment');
//

//