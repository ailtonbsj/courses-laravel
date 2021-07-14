<?php

use App\Http\Controllers\HelloWorldController;
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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/queries/{event}', function($event){
    //$events  = \App\Models\Event::all();
    //$event = \App\Models\Event::where('id', 1)->first();
    return \App\Models\Event::find($event);
});

Route::get('/hello-world', [HelloWorldController::class, 'helloWorld']);
Route::get('/hello/{name?}', [HelloWorldController::class, 'hello']);
