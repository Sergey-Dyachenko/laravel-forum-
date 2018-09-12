<?php

//use Symfony\Component\Routing\Route;

use App\Thread;


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
});

Route::get('/sum', function () {

    $report = new Acme\Reporting\SalesReporter(new Acme\Repositories\SalesRepository);

    $begin = Carbon\Carbon::now()->subDays(10);

    $end = Carbon\Carbon::now();


    return $report->between($begin, $end, new Acme\Reporting\HtmlOutput);



});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/threads', 'ThreadsController@index');

Route::get('/threads/{id}','ThreadsController@show' );


