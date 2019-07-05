<?php
namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storages;
use App\Model\Users;
use App\Model\Kamar;
use App\Model\Mahasiswa;
use DataTables;
use App\Http\Repository\CurlOpenRepo;


class AdminBackend extends Controller
{

 

	public function updateProfile(Request $request)
	{
		$profile = $request->input('data');
		$arr_data = array
					(
						"nama"   		=> $profile['nama'],
						"email"  		=> $profile['email'],
						"phone"  		=> $profile['phone'],
						"updated_at"	=> date('Y-m-d H:i:s'),
					);
		try
		{
				$sessi = $request->session()->get('roleAuth');
				Users::where('username',$sessi['username'])->update($arr_data);
				
			    $resp['success'] = 'true';
				$resp['message'] = 'success update profile'; 

			
		}catch(\Illuminate\Database\QueryException $e)
		{
				$resp['success'] = 'false';
				$resp['message'] = $e->getMessage();
				$resp['detail']  = $e;
		}	


		return response()->json($resp);
	}


	public function list_mahasiswa_json()
	{
		return Datatables::of(Mahasiswa::all())->make('true');
	}

	public function list_baak_json()
	{
		return Datatables::of(Users::where('level','baak')->get())->make('true');
	}

	public function list_admin_json()
	{
		return Datatables::of(Users::where('level','admin')->get())->make('true');
	}

	public function delete_data_mahasiswa(Request $request)
	{
		$nim = $request->input('id');

		DB::beginTransaction();

		try
		{
			Users::where('username',$nim)->delete();
			Mahasiswa::where('nim',$nim)->delete();

			DB::commit();

			$resp['success'] = "true";
			$resp['message'] = "success delete data mahasiswa dengan nim dan username ".$nim;
		}
		catch(\Illuminate\Database\QueryException $e)
		{
			
			$resp['success'] = "false";
			$resp['message'] = "Proses Delete Data Mahasiswa dengan Nim/Username "+$nim+" Gagal message( "+$e->getMessage();+" )";
		}

		return response()->json($resp, 200);
	}

		public function delete_user(Request $request)
		{
			$sessi 		= $request->session()->get('roleAuth');
			$username 	= $request->input('username');
			
			if($sessi['acess'] === 'root')
			{
				DB::beginTransaction();
				try
				{
					Users::where('username', $username)->delete();

					DB::commit();

					$resp['success'] = 'true';
					$resp['message'] = "success delete ". $username;
				}
				catch(\Illuminate\Database\QueryException $e)
				{
					$resp['success'] = 'false';
					$resp['message'] = $e->getMessage();
				}
			}
			else
			{
				$resp['success'] = 'false';
				$resp['message'] = 'failed delete user, your access level not root admin';
			}

			return response()->json($resp, true);
		}


	public function get_data_detail(Request $request, $type='')
	{

		if(!empty($type))
		{
			$nim = $request->input('nim');

			try
			{
				if($type === "mahasiswa")
				{
					$data = DB::table('mahasiswa')
						->join('users','mahasiswa.nim','=','users.username')
						->select('mahasiswa.*','users.email','users.phone')
						->where('mahasiswa.nim',$nim)
						->get();
				}
				else
				{
					$username = $request->input('username');
					$whereData = array('username' => $username,'level'=> $type);
					$data = Users::where($whereData)->get();
				}
				
				$resp['success'] = 'true';
				$resp['message'] = 'success data get data';
				$resp['data']	 = $data;
				
			}catch(\Illuminate\Database\QueryException $e)
			{
				$resp['success'] = 'false';
				$resp['message'] = 'failed get data';
				$resp['data']	 = NULL;
			}
		}
		else
		{
		   $resp['success'] = "false";
		   $resp['message'] = "type data cannot empty";
		   $resp['data']	= NULL;
		}

		return response()->json($resp, 200);
	}



	public function city_openLib(Request $request)
	{
		$id 	 = $request->input('id');
		$openLib = new CurlOpenRepo();
		return response()->json($openLib->get_city($id), 200);
	}


	public function insert_data_mahasiswa(Request $request)
	{
		 $datum = json_decode($request->input('datum'), true);
		//$datum = $request->input('datum');
		// echo '<pre>'.print_r($datum, true) .'</pre>';
		 //echo "asdada";
		$nim = $datum['nim']; 
		//echo $nim;
		// die();

		if(count(Mahasiswa::where('nim',$nim)->get()) > 0 or count(Users::where('username', $nim)->get()) > 0)
		{
				// $flash= array("type" => "error","message" => "nim/username already exits");
				// $request->session()->flash('msg',$flash);
				// redirect('admin/mahasiswa');
				$resp['success'] = 'false';
				$resp['message'] = 'userrname or nim already exits';

		}
		else
		{
			$arr_data = array
					(
						"nim"   		=> $nim,
						"nama"  		=> $datum['nama'],
						"fakultas"		=> $datum['fakultas'],
						"prodi"     	=> $datum['prodi'],
						"tahun_masuk"	=> $datum['tahun_masuk'],
						"provinsi"		=> $datum['provinsi'],
						"kabupaten"		=> $datum['kabupaten'],
						"alamat"        => $datum['alamat'],			
						"time_insert"   => date('Y-m-d H:i:s'),
					);

			$user_arr = array
					(
						"username"     => $datum['nim'],
						"email"        => $datum['email'],
						"phone"		   => $datum['phone'],
						"password"     => md5($nim),
						"level"        => "mahasiswa",
					);

			//echo '<pre>'.print_r($user_arr, true) .'</pre>';die();

			DB::beginTransaction();

			try
			{
				Users::insert($user_arr);
				Mahasiswa::insert($arr_data);
				

				DB::commit();

				$resp['success'] = 'success';
				$resp['message'] = 'success insert data';
			}catch(Exception $e)
			{
				$resp['success'] = 'false';
				$resp['message'] = $e->getMessage();
			}

		}

		return response()->json($resp, 200);
		
	}


	public function insert_data_user(Request $request)
	{
		$data = json_decode($request->input('datum'), true);

		$username = $data['username'];

		if(count(Users::where('username', $username)->get()) > 0)
		{
				
				$resp['success'] = 'false';
				$resp['message'] = 'userrname already exits';

		}
		else
		{
			

			$user_arr = array
					(
						"username"     => $datum['username'],
						"nama"		   => $datum['nama'],
						"email"        => $datum['email'],
						"phone"		   => $datum['phone'],
						"password"     => md5($datum['username']),
						"level"        => $datum['level'],
						"access_lev"   => $datum['access_lev']
					);

			//echo '<pre>'.print_r($user_arr, true) .'</pre>';die();

			DB::beginTransaction();

			try
			{
				Users::insert($user_arr);

				DB::commit();

				$resp['success'] = 'success';
				$resp['message'] = 'success insert data user';
			}catch(Exception $e)
			{
				$resp['success'] = 'false';
				$resp['message'] = $e->getMessage();
			}

		}

		return response()->json($resp, 200);

	}

	public function insert_data_kamar(Request $request)
	{
		

		$sesi = $request->session()->get('roleAuth');

		$file = $request->file('image');

		$name_img = $file->getClientOriginalName();
		$extn     = $file->getClientOriginalExtension();
		$path     = "img/room";

		DB::beginTransaction();
		try
		{
			$file_name = $this->cek_exits_file($path,$name_img,$pat);
			$arr_data = array
						(
							"nomor_kamar"      => $request->input('lantai_kamar'),
							"id_admin"         => $sessi['username'],
							"lantai_kamar"     => $request->input('lantai_kamar'),
							"foto_kamar"       => $file_name,
							"harga_perbulan"   => $request->input('harga_perbulan'),
							"status_kamar"     => 'N',
						);
			Kamar::insert($arr_data);
			$file->move($path,$file_name);

			$flash= array("type" => "success","message" => "success insert data kamar");
			$request->session()->flash('msg',$flash);
			

			redirect('admin/kamar');

		}catch(Exception $e)
		{
			$flash= array("type" => "error","message" => $e->getMessage());
			$request->session()->flash('msg',$flash);
			redirect('admin/kamar');
		}

	}



	private function cek_exits_file($path,$name,$extn)
	{
		  $stat = false;

		  while ($stat == false) 
		  {
		  	 if(!file_exists(public_path($path.'/'.$name)))
		  	 {
		  	 	$result = $name;

		  	 	$stat = true;
		  	 }else
		  	 {
		  	 	$str = rand();
		  	 	$name = md5($str);

		  	 	$stat = false;
		  	 }
		  }

		  return $result;
	}


	private function delete_file($path,$name)
	{
		  if(file_exists((public_path($path.'/'.$name))))
		  {
		  	  unlink(file_exists(public_path($path.'/'.$name)));

		  	  return true;
		  }else
		  {
		  	  return false;
		  }
	}



	// update data kamar \\

	public function update_data_kamar(Request $request,$id_kamar)
	{
		$sessi = $request->session()->get('roleAuth');

		try
		{
			DB::beginTransaction();

				$arr_data = array
						(
							"nomor_kamar"      => $request->input('lantai_kamar'),
							"id_admin"         => $sessi['username'],
							"lantai_kamar"     => $request->input('lantai_kamar'),
							"foto_kamar"       => $file_name,
							"harga_perbulan"   => $request->input('harga_perbulan'),
							"status_kamar"     => $request->input('status_kamar'),
						);

						Kamar::where('id_kamar')->update($arr_data);
						DB::commit();
						redirect('admin/kamar');

		}catch(Exception $e)
		{
				 
			$flash= array("type" => "error","message" => $e->getMessage());
			$request->session()->flash('msg',$flash);
			redirect('admin/kamar');
		}
	}



	public function update_foto_kamar(Request $request, $id_kamar)
	{
		$room = Kamar::where('id_kamar',$id_kamar)->get();

		if(! count($kamar) > 0 )
		{
			$flash = array
					(
						"type"    => "error",
						"message" => "data room not fount",
					);
			$request->session()->flash('msg',$flash);
			redirect('admin/kamar');
		}


		$name_img = $file->getClientOriginalName();
		$extn     = $file->getClientOriginalExtension();
		$path     = "img/room";

		$file = $request->file('img_up');
		$file_name = $this->cek_exits_file($path,$name_img,$pat);

		DB::beginTransaction();
		
		try 
		{
			
			$arr_data = array
						(
							"foto_kamar"       => $file_name,
						);
			Kamar::where('id_kamar',$id_kamar)->update($arr_data);
			$file->move($path,$file_name);
			$flash = array("type" => "success","message" => "success update img");
			
			$request->session()->flash('msg',$flash);
			redirect('admin/kamar');	
			
		} catch (Exception $e) 
		{
			$flash= array("type" => "error","message" => $e->getMessage());
			$request->session()->flash('msg',$flash);
			redirect('admin/kamar');
		}
	}



	


	public function registed_user(Request $request)
	{
		// $username = $request->input('mahasiswa');

		// if(count(User::where('username',$username)->get()) > 0)
		// {
		// 	    $flash= array("type" => "error","message" => "user already exits");
		// 		$request->session()->flash('msg',$flash);
		// 		redirect('admin/mahasiswa');
		// }

		// $arr_data = array
		// 			(
		// 				"username"  	=> $username,
		// 				"email"     	=> $request->input('email'),
		// 				"password"  	=> md5($username),
		// 				"level"			=> $request->input('level'),
		// 				"access_lev"	=> $request->input('level'),,
		// 				"insert_time"   => date('Y-m-d H:i:s'),
		// 			);
		// DB::beginTransaction();

		// try
		// {
		// 	if(Users::insert($arr_data))
		// 	{
		// 		DB::commit();
		// 		$flash= array("type" => "success","message" => "success registed data user " . $request->input('level'));
		// 		$request->session()->flash('msg',$flash);
		// 		redirect('admin/mahasiswa');		
		// 	}else{

		// 		$flash= array("type" => "error","message" => "failed registed data user ".$request->input('level'));
		// 		$request->session()->flash('msg',$flash);
		// 		redirect('admin/mahasiswa');		
		// 	}

		// }catch(Exception $e)
		// {
		// 	$flash = array("type" => "error", "message" => $e->getMessage());

		// 	$request->session()->flash('msg', $flash);
		// 	redirect('admin/user');
		// }
	}
}