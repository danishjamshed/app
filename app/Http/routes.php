<p>&nbsp;</p>
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');
Route::get('about','PagesController@about');
Route::get('contact','ContactController@contact');
Route::get('blog','BlogController@index');
Route::get('wpblog','WpblogController@index');
Route::get('wpblog/create','WpblogController@create');
Route::get('wpblog/{id}','WpblogController@show');
Route::post('wpblog','WpblogController@store');
