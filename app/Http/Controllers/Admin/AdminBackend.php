<?php
namespace App\Http\COntrollers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storages;
use App\Model\Users;
use App\Model\Kamar;
use APp\Model\Mahasiswa;


class AdminBackend extends Controller
{



	public function updateProfile(Request $request)
	{
		$profile = $request->input('data');


//		echo '<pre>'.print_r($profile, true) .'</pre>';

		// return response()->json($profile);
		// die();
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



	public function insert_data_mahasiswa(Request $request)
	{
		$nim = $request->input('nim');

		if(count(Mahasiswa::where('username',$nim)) > 0 or count(Users::where('username', $nim)->get()) > 0)
		{
				$flash= array("type" => "error","message" => "nim/username already exits");
				$request->session()->flash('msg',$flash);
				redirect('admin/mahasiswa');
		}
		
		$arr_data = array
					(
						"nim"   		=> $nim,
						"nama"  		=> $request->input('nama'),
						"fakultas"		=> $request->input('fakultas'),
						"prodi"     	=> $request->input('prodi'),
						"tahun_masuk"	=> $request->input('tahun_masuk'),
						"time_insert"   => date('Y-m-d H:i:s'),
					);

		$user_arr = array
					(
						"username"     => $nim,
						"email"        => $request->input('email'),
						"password"     => md5($nim),
						"level"        => "mahasiswa",
					);
		DB::beginTransaction();

		try
		{
			if(Users::insert($user_arr) and Mahasiswa::insert($arr_data))
			{
				DB::commit();
				$flash= array("type" => "success","message" => "success registed data mahasiswa");
				$request->session()->flash('msg',$flash);
				redirect('admin/mahasiswa');		
			}else
			{
				$flash= array("type" => "error","message" => "error registed data mahasiswa");
				$request->session()->flash('msg',$flash);
				redirect('admin/mahasiswa');
			}
		}catch(Exception $e)
		{
			$flash= array("type" => "error","message" => $e->getMessage());
			$request->session()->flash('msg',$flash);
			redirect('admin/mahasiswa');
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