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
Route::get('/', function (){

	return Redirect::to('home');

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

		Route::get('/admin/profile',[
			"uses"  => 'Admin\AdminController@profile',
			"as"    => 'web.admin.profile'

		]);

		Route::get('/admin/room', [
			"uses" 	=> 'Admin\AdminController@room',
			"as" 	=> 'web.admin.kamar',
		]);

		//Route::get('/admin/')


		// proses  post data \\

		Route::post('admin/update_profile', [
			"uses"	=> 'Admin\AdminBackend@updateProfile',
			"as"	=>  'web.update_profile_admin',
		]);



	});

	// route mahasiswa \\
	Route::group(['middleware' => 'CekRole:mahasiswa'], function(){

		Route::get('/mahasiswa',[
			"uses" => 'Mahasiswa\MahasiswaController@home',
			"as"   => 'mahasiswa.get.home'
		]);

		Route::get('/mahasiswa/profile', [
			"uses" => 'Mahasiswa\MahasiswaController@profile',
			"as"   => 'mahasiswa.get.profile'
		]);

		Route::get('/mahasiswa/room', [
			"uses" => 'Mahasiswa\MahasiswaController@room',
			"as"   => 'mahasiswa.get.profile'
		]);

		Route::get('/mahasiswa/myroom', [
			"uses" => 'Mahasiswa\MahasiswaController@my_room',
			"as"   => 'mahasiswa.get.profile'
		]);

		Route::get('/mahasiswa/payment', [
			"uses" => 'Mahasiswa\MahasiswaController@profile',
			"as"   => 'mahasiswa.get.profile'
		]);

		Route::get('/mahasiswa/confirmPayment', [
			"uses" => 'Mahasiswa\MahasiswaController@confirm_payment',
			"as"   => 'mahasiswa.get.profile'
		]);

	});

	// route admisi \\
	Route::group(['middleware' => 'CekRole:baak'], function(){

		
	});
});


Route::get('/home',[
	"middleware" => "CekRole:guest",
	"uses"  	 => "UserController@login",
	"as"         => "web.login"
]);


Route::post('/userLogin', [
	"uses" => 'UserController@set_login',
	"as"   => "web.login",
]);

Route::get('/logOut',[
	"uses"  => 'UserController@log_out',
	"as"    => "web.log_out"
]);


Route::get('/send_mail',[
	"uses"   => "UserController@sendMail",
	"as"     => "web.send_email"
]);


Route::get('/send_key',[
	"uses"  => "UserController@sendEmailResetPassword",
	"as"   => "web.send_key.password"
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




// Route::group(['middleware' => 'AuthSimas'], function(){
// 	Route::post('/update_password', [

// 	]);
// });


Route::post('/update_password',[
	"middleware" => 'AuthSimas',
	"uses" 		 => 'UserController@update_password',
	"as" 		 => 'web.update_password'
]);

Route::get('/cek_response',[
	"uses"  	 => "UserController@test_response",
	"as"         => "web.test_response"
]);

Route::get('/send_email',[
	"uses"  	 => "UserController@sendMail",
	"as"         => "web.sendMail"
]);