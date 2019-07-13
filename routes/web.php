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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');





// Route::get('/about', function(){
//     return view('pages.about'); 
// });


// Route::get('/users/{id}', function($id){
//     return 'This is user '.$id; 
// });

Route::get('/reboot', function(){
	Artisan::call('cache:clear');
	Artisan::call('route:clear');
	Artisan::call('view:clear');
	Artisan::call('key:generate');
	Artisan::call('config:cache');

	return '<center><h1>System Rebooted!</h1></center>';
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
