<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\MySqlConnection;

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

Route::post('paypal', 'PaymentController@payWithPayPal');
Route::get('status', 'PaymentController@getPaymentStatus');
/*Route::get('page/{URI}', function($URI) {
    $pageContent = DB::table('pages')->where('URI',$URI)->first();
    return view('page.dynamic', ['pageContent' => $pageContent]); 
});*/
Route::get('/page/{URI}', 'PageController@show');
Route::get('/page/{URI}/edit', 'PageController@edit');
Route::get('/p', 'PageController@index');
Route::get('/createPage', 'PageController@create');
Route::post('/storePage', 'PageController@store');
Route::post('/patchPage', 'PageController@store');
Route::patch('/page/{URI}', 'PageController@update');
Route::delete('/page/{URI}', 'PageController@destroy');
Route::get('/createProduct', 'ProductController@create');
Route::post('/storeProduct', 'ProductController@store');
Route::get('/pr', 'ProductController@index');
Route::get('productManagement/fetch_image/{productImage}', 'ProductController@fetch_image');