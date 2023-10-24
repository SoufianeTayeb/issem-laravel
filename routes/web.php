<?php

use App\Http\Controllers\user_controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/test/{nombre}',function($nombre){
    return view('test',['nombre'=>$nombre]);
});
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home/{id}/{naem}', function ($id, $name) {
//     $data = ["id" => $id, "name" => $name];
//     return view('home',['data'=> $data]);})->where('id','[0-9]+');
Route ::get('/home/{id}/{name}',[user_controller::class,'index']);
