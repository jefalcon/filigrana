<?php

// use Illuminate\Support\Facades\Route;

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
    return view('main');
})->name('home');

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/prestamopersonal', function () {
    return view('prestamopersonal');
});

Route::get('/arrendamiento', function () {
    return view('arrendamiento');
});

Route::post('/crearcontactoresidencial', 
            "App\Http\Controllers\AltaContactoResidencialController@index")
                ->name('alta.residencial');

Route::post('/crearsolicitudresidencial', 'App\Http\Controllers\AltaContactoResidencialController@store')
                ->name('alta.solicitud.residencial');

// Route::get('/crearcontactoresidencial/{importe}/{plazo}', function ($importe,$plazo) {
//     return view('crearcontactoresidencial')->with('importe', $importe)->with('plazo', $plazo);;
// });
