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
    $data = ['comics' => config('comics')];
    return view('guest.home', $data);
})->name('comics');


Route::get('/prova', function () {
    $data = ['comics' => config('comics')];
    return view('guest.partials.prova', $data);
})->name('prova');


Route::get('home/{id}', function ($id) {
    $collection = collect(config('comics'));
    $product = $collection->where('id', $id);

    // @dd($product);

    if ($product->count() === 0) {
        abort(404);
    }

    $singleComic = '';
    foreach ($product as $value) {
        $singleComic = $value;
    }


    return view('guest.partials.product', ['product' => $singleComic, 'nomeComic' => $singleComic['title']]);
})->name('product');