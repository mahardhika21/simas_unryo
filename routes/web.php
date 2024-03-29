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

		Route::get('/admin/about', [
			"uses"  => 'Admin\AdminController@about',
			"as"	=> 'web.admin.about'
		]);

		Route::get('/admin/list_room', [
			"uses" 	=> 'Admin\AdminController@list_room',
			"as" 	=> 'web.admin.kamar',
		]);


		// admin list view

		Route::get('/admin/list_mahasiswa', [
			"uses"  => 'Admin\AdminController@list_mahasiswa',
			"as"	=> 'web.admin.list_mahasiswa'
		]);

		Route::get('/admin/list_baak',[
			"uses" => "Admin\AdminController@list_baak",
			"as"   => "web.admin.list_baak"
		]);

		Route::get('admin/list_admin', [
			"uses" => "Admin\AdminController@list_admin",
			"as"   => 'web.admin.list_admin',
		]);

		Route::get('admin/slide', [
			"uses" => 'Admin\AdminController@slide',
			"as"   => "web.admin.slide",
		]);

		Route::get('admin/news/', [
			"uses"  => 'Admin\AdminController@news',
			"as"    => 'web.admin.news'
		]);

		// list datatables \\

		Route::get('/admin/data/list_mahasiswa',[
			"uses"	=> "Admin\AdminBackend@list_mahasiswa_json",
			"as"	=> "web.admin.json_list_mahasiswa",
		]);

		Route::get('/admin/data/list_baak',[
			"uses" => "Admin\AdminBackend@list_baak_json",
			"as"   => "web.admin.json_list_baak",
		]);

		Route::get('/admin/data/list_admin',[
			"uses" => "Admin\AdminBackend@list_admin_json",
			"as"   => "web.admin.json_list_admin",
		]);

		Route::get('/admin/data/list_slide', [
			"uses"	=> "Admin\AdminBackend@list_slide_json",
			"as"	=> "web.admin.json_list_admin",
		]);

		Route::get('/admin/data/list_news', [
			"uses"  => "Admin\AdminBackend@list_news_json",
			"as"    => "web.admin.json_slide_admin",
		]);

		Route::get('/admin/data/list_room/{type}', [
			"uses"  => "Admin\AdminBackend@list_room_json",
			"as"	=> "web.admin.json_list_room"
		]);






		



		// detail \\
		// Route::get('admin/detail_mahasiswa/{nim?}',[
		// 	"uses" => "Admin\AdminController@detail_mahasiswa",
		// 	"as"   => "web.admin.detail_mahasiswa",
		// ]);

		// Route admin get detail

		Route::post('admin/get_data_detail/{type}', [
			"uses"  => "Admin\AdminBackend@get_data_detail",
			"as"	=> "web.admin.get_data_detail"
		]);



		//Route admin delete data

		Route::post('admin/delete_mahasiswa', [
			"uses"  => "Admin\AdminBackend@delete_data_mahasiswa",
			"as"   	=> "web.admin.delete_mahasiswa",
		]);

		Route::post('admin/delete_data_user', [
			"uses"  => "Admin\AdminBackend@delete_data_user",
			"as"   	=> "web.admin.delete_mahasiswa",
		]);

		Route::post('admin/delete/slide/{type}', [
			'uses' => 'Admin\AdminBackend@upload_slide',
			'as'   => 'web.delete.slide'
		]);

		// Route::get('admin/test_delete/', [
		// 	"uses"  => "Admin\AdminBackend@test_delete",
		// 	"as"	=> "web.admin.get_data_detail"
		// ]);

		// Route::post('admin/delete_data_user', [
		// 	"user"  => "Admin\AdminBackend@delete_data_mahasiswa",
		// 	"as"	=> "web.admin.delete_user_data",
		// ]);


		// Proses  post data \\

		Route::post('admin/update_profile', [
			"uses"	=> 'Admin\AdminBackend@updateProfile',
			"as"	=>  'web.update_profile_admin',
		]);

		Route::post('admin/insert_data/mahasiswa',[
			"uses"  => 'Admin\AdminBackend@insert_data_mahasiswa',
			"as"	=> 'web.insert_data'
		]);

		Route::post('admin/insert_data/user', [
			"uses"	=> 'Admin\AdminBackend@insert_data_user',
			"as"	=> 'web.insert_data.user',
		]);

		Route::post('admin/upload_slide/{type}', [
			'uses' => 'Admin\AdminBackend@upload_slide',
			'as'	=> 'web.upload.slied',
		]);

		Route::post('admin/about_crud/{type}',[
			'uses'  => 'Admin\AdminBackend@about_crud',
			'as'    => 'web.crud.about',
		]);

		Route::post('admin/news_crud/{type}', [
			'uses'  => 'Admin\AdminBackend@news',
			'as'    => 'web.crud.news',
		]);

		Route::post('admin/room_crud/{type}', [
			'uses'  => 'Admin\AdminBackend@room_crud',
			'as'    => 'web.crud.room',
		]);

	
		// data openLib
		Route::post('admin/data/lib/city',[
			"uses"  => 'Admin\AdminBackend@city_openLib',
			"as"    => 'web.data.openLib.city',
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

