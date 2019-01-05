<?php

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
Route::group(['middleware'=>'Maintenance'],function (){

    Route::get('/', function () {
        return redirect('/home');
    });
    Route::get('/home', 'concept@home');
    Route::get('/services', function () {
        return view('style.services');
    });
    Route::get('/products','concept@products');
    Route::get('/products/webdesign','concept@web_design_products');
    Route::get('/products/ecommerce','concept@ecommerce');
    Route::get('/products/desktop','concept@desktop');
    Route::get('/products/android','concept@android');
    Route::get('/ourteam/designers','concept@designer');
    Route::get('/ourteam/developers','concept@developer');


    Route::post('/send/message/contact','ContactController@send_message');

    Route::get('/about', function () {
        return view('style.about');
    });
    Route::get('/blog', function () {
        return view('style.blog');
    });
    Route::get('/contact', function () {
        return view('style.contact');
    });

    Route::get('/terms', function () {
        return view('style.terms');
    });

    Route::get('/help', function () {
        return view('style.help');
    });

    Route::get('/privacy', function () {
        return view('style.privacy');
    });


});
Route::get('maintenance',function (){
    if (setting()->status == 'open') {
        return redirect('/');
    }
    return view('style.maintenance');
});

