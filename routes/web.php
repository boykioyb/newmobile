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

Route::get('/', function () {
	return view('welcome');
});
Route::get('/login',['as' => 'login', function ()
{
	if(!Auth::check()){
		return view('admin.auth.login');
	}
	else{
		return view('admin.index');
	}
}] );
Route::post('/login',['as' =>  'post.login','uses' => 'Auth\LoginController@postlogin']);
Route::get('/dashboard',['as' => 'dashboard','middleware'=>'auth',function (){
	return view('admin.index');
}]);
Route::get('logout', function(){
	\Auth::logout();
	return redirect(route('login'));
})->name('logout');