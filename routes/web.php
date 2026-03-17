<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index']);

// Route::get('/about', function(){
//     return view('main/about');
// });


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

Route::get('/galery/{id}', function ($id) {
    return view('galery', ['id' => $id]);
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contacts', function(){
    $contacts = ['street' => "Spiridonovka",
                'home' => 9/2, 
                'phone' => '+7(929)546-06-31'];
    return view('contacts', ['abracadabra'=>$contacts]);
});