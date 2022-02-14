<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('home',[
        "title" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "about"
    ]);
});
Route::get('/galeri', function () {
    return view('galeri',[
        "title" => "galeri"
    ]);
});
Route::resource('/contacts', ContactController::class); 

//{    
//     return view('contacts',[
//         "title" => "contact"
//     ]);
// });
