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
//use App\Http\middleware\Authenticate;
Route::get('/', function () {
   return view('welcome');
	//echo "dasdasda";
});

//Route::

Route::group(['middleware' => 'AuthSimas'], function(){
	Route::get('/coba', function(){
		return "coba";
	});

	// route admin \\
	Route::group(['middleware'=> 'CekRole:admin'], function(){

		Route::get('/admin', [
			"uses"  => 'Admin\AdminController@index',
			"as"    => 'web.admin',
		]);

	});

	// route mahasiswa \\
	Route::group(['middleware' => 'CekRole:mahasiswa'], function(){

		Route::get('/mahasiswa',[
			"uses" => 'Mahasiswa\MahasiswaController@home',
			"as"   => 'mahasiswa.get.home'
		]);

	});

	// route admisi \\
	Route::group(['middleware' => 'CekRole:admisi'], function(){

	});
});


Route::get('/home',[
	"middleware" => "CekRole:guest",
	"uses"  	 => "UserController@login",
	"as"         => "web.login"
]);


Route::get('/view',[
	"middleware" => "CekRole:guest",
	"uses"  	 => "UserController@view",
	"as"         => "web.view"
]);

Route::get('/set_session',[
	"uses"  	 => "UserController@set_session",
	"as"         => "web.view"
]);

Route::get('/see_session',[
	"uses"  	 => "UserController@see_session",
	"as"         => "web.view"
]);