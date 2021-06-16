<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@index')->name('index');

Route::get('/blog', 'BLogController@index')->name('blog');

Route::get('/contacto', 'ContactoController@index')->name('contacto');

Route::get('/evento', 'EventoController@index')->name('evento');

Route::get('/galeria', 'GaleriaController@index')->name('galeria');

Route::get('/info','InfoController@index')->name('info');

Route::get('/live', 'LiveController@index')->name('live');

Route::get('/tickets', 'TickesController@index')->name('tickes');

Route::get('/zoo','ZooController@index')->name('zoo');