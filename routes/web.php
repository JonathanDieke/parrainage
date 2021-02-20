<?php

use App\Models\Godchild;
use App\Models\Godfather;
use Illuminate\Http\Request;
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

Route::post('/parrainage/parrains', function (Request $request ) {
    $godfatherTab = (int) $request->tab;

    $godfathers = Godfather::all();

    return view('parrainage/parrains', compact("godfathers", "godfatherTab"));
})->name('parrainage.parrains');
