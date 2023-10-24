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
// Route::get('/test',function(){
//     $etudiant = [
        
//         1=>"soufiane",
//         2=>"hassan",
//         3=>"fatima",
//     ];
//     return view('test',['etudiant'=>$etudiant]);
// });
// Route::get('/', function () {
//     return view('welcome');
// });
// // Route::get('/home/{id}/{naem}', function ($id, $name) {
// //     $data = ["id" => $id, "name" => $name];
// //     return view('home',['data'=> $data]);})->where('id','[0-9]+');
// Route ::get('/home/{id}/{name}',[user_controller::class,'index']);
Route::get('/', function () {
    return view('home');
});
Route::get('/post/{id_post}', function ($id_post) {
    $posts=[
        1=>'Apprendre Laravel',
        2=>'Apprendre Python',
        3=>'Apprendre Javascript',
        4=>'Apprendre Java',
        5=>'Apprendre C',
        6=>'Apprendre C#',
        7=>'Apprendre React.js',
        8=>'Apprendre Node.js'
    ];
    return  view('post',['titre_post' => $posts[$id_post]]);
});