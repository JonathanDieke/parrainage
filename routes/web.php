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

    $godfathers = Godfather::all()->sortBy([
        ['name', 'asc'],
        ['lname', 'asc'],
    ]);

    $godchildren = Godchild::all()->sortBy([
        ['name', 'asc'],
        ['lname', 'asc'],
    ]);

    return view('sponsorship/relationship', compact('godfathers', 'godchildren'));

})->where(['relationship' => '[a-z]{10,11}'])
    ->name('sponsorship.relationship');

Route::get('/add-phone-number', function()  {

    $godfathers = collect([
        ["register" =>  '18ESATIC0139GN', 'phone' => "+225 01 40 98 51 68"],
        ["register" =>  '17ESATIC0092KO', 'phone' => "+225 07 08 87 34 69"],
        ["register" =>  '18ESATIC0143AN', 'phone' => "+225 01 43 60 91 80"],
        ["register" =>  '18ESATIC0054YO', 'phone' => "+225 01 03 78 25 20"],
        ["register" =>  '18ESATIC0085AB', 'phone' => "+225 07 78 89 27 04"],
        ["register" =>  '18ESATIC0134BO', 'phone' => "+225 07 89 87 34 68"],
        ["register" =>  '18ESATIC0173DA', 'phone' => "NULL"],
        ["register" =>  '18ESATIC0097NO', 'phone' => "+225 07 87 08 90 13"],
        ["register" =>  '18ESATIC0005BO', 'phone' => "+225 05 95 02 77 66"],
        ["register" =>  '18ESATIC0102AB', 'phone' => "+225 01 53 48 88 36"],
        ["register" =>  '18ESATIC0152AB', 'phone' => "+225 07 77 24 20 51"],
        ["register" =>  '18ESATIC0016CO', 'phone' => "+225 01 02 21 86 55"],
        ["register" =>  '18ESATIC0061BO', 'phone' => "+225 07 88 17 90 46"],
        ["register" =>  '18ESATIC0053AB', 'phone' => "+225 07 97 62 60 42"],
        ["register" =>  '18ESATIC0137AG', 'phone' => "+225 07 78 25 36 41"],
        ["register" =>  '18ESATIC0002AB', 'phone' => "+225 07 09 54 14 21"],
        ["register" =>  '18ESATIC0169AG', 'phone' => "+225 05 66 60 29 85"],
        ["register" =>  '18ESATIC0057NI', 'phone' => "+225 07 57 79 06 27"],
        ["register" =>  '18ESATIC0200AG', 'phone' => "+225 07 67 96 06 76"],
        ["register" =>  '18ESATIC0170BO', 'phone' => "+225 05 66 78 76 13"],
        ["register" =>  '18ESATIC0141YO', 'phone' => "+225 07 79 23 40 26"],
        ["register" =>  '18ESATIC0163AB', 'phone' => "+225 07 59 31 93 42"],
        ["register" =>  '18ESATIC0167AB', 'phone' => "+225 07 79 80 24 23"],
        ["register" =>  '18ESATIC0159AB', 'phone' => "+225 01 02 75 35 51"],
        ["register" =>  '18ESATIC0145BO', 'phone' => "+225 07 79 64 10 76"],
        ["register" =>  '18ESATIC0183AD', 'phone' => "+225 07 87 58 79 96"],
        ["register" =>  '18ESATIC0198AB', 'phone' => "+225 07 78 67 75 81"],
        ["register" =>  '18ESATIC0068AB', 'phone' => "+225 01 41 72 58 88 "],
        ["register" =>  '18ESATIC0055AD', 'phone' => "+225 01 02 24 71 28"],
        ["register" =>  '18ESATIC0166AG', 'phone' => "+225 07 79 00 83 54"],
        ["register" =>  '18ESATIC0080BO', 'phone' => "+225 05 76 75 92 63"],
    ]);

    foreach($godfathers as $godfather){

        // dump($godfather["register"]. ' and ' .$godfather["phone"]);
        Godfather::where("register", $godfather['register'])->update(['phone' => $godfather['phone']]);
    }

    return "<h1> Numéros ajoutés avec succès !</h1>";

});
