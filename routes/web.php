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

/**************************************** */


// Route::get('universite', function () {
//     return view('admin.pages2.universite');
// });


Route::resource('ufr', 'ufrController');
Route::resource('parametres_universite', 'universiteController');
Route::resource('test', 'testcontroller');


Route::get('adm', 'adminMasterController@index1')->name('adm.index1') ;



/****************************************************************** */
Route::get('/1', function () {
    return view('welcome');
});


Route::get('/masteur', function () {
    return view('admin.layout.master_ad');
});

    


Route::get('f-element', function () {
    return view('admin.pages.f-elements');
});

Route::get('f-validation', function () {
    return view('admin.pages.f-validation');
});
Route::get('general', function () {
    return view('admin.pages.general');
});

Route::get('buttons', function () {
    return view('admin.pages.buttons');
});
Route::get('grids', function () {
    return view('admin.pages.grids');
});

Route::get('widgets', function () {
    return view('admin.pages.widgets');
});

Route::get('chart-chartjs', function () {
    return view('admin.pages.chart-chartjs');
});

Route::get('basic_table', function () {
    return view('admin.pages.basic_table');
});

Route::get('profile', function () {
    return view('admin.pages.profile');
});


Route::get('login', function () {
    return view('admin.pages.login');
});

Route::get('contact', function () {
    return view('admin.pages.contact');
});

Route::get('blank', function () {
    return view('admin.pages.blank');
});


Route::get('404', function () {
    return view('admin.pages.404');
});