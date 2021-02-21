<?php

use App\Models\Godchild;
use App\Models\Godfather;
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
    return view('welcome');
})->name('welcome');


Route::get('/sponsorship/{relationship}', function () {

    $godfathers = Godfather::all();
    $godchildren = Godchild::all();

    return view('sponsorship/relationship', compact('godfathers', 'godchildren'));

})->where(['relationship' => '[a-z]{10,11}'])
    ->name('sponsorship.relationship');


