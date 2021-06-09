<?php

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
    $comics_array = config('comics');
    // dd($comics_array);

    $data = [
        'comics_array' => $comics_array
    ];
    
    return view('home' , $data);
});

Route::get('/prod_info/{id}', function ($id) {
    $comics_array = config('comics');
    $single = [];

    foreach($comics_array as $item){
        if($item['id'] === (int)$id){
            $single = $item;
        }
    }
    
    if(empty($single)){
        abort('404');
    }

    $data = [
        'single' => $single
    ];

    return view('prod_info', $data);
})->name('product');