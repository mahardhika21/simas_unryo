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
use App\Model\Extra;


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


	public function list_slide_json()
	{
			return Datatables::of(Extra::where('type','slide')->get())->make('true');
	}

	public function delete_data_mahasiswa(Request $request)
	{
		$sessi 		= $request->session()->get('roleAuth');

		// echo '<pre>'.print_r($sessi, true) .'</pre>';
		// die();

		if($sessi['acess'] === 'root'){
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
	   }
	   else
	   {
	   		$resp['success'] = 'false';
	   		$resp['message'] = 'failed delete user, your access level not root admin';
	   }

		return response()->json($resp, 200);
	}

		public function delete_data_user(Request $request)
		{
			$sessi 		= $request->session()->get('roleAuth');
			$username 	= $request->input('username');

			// echo '<pre>'.print_r($sessi, true).'</pre>';die();

			if($sessi['username'] === $username)
			{
				$resp['success'] = 'false';
				$resp['message'] = 'failed, admin caanot delete user self';
			}else
			{
				if($sessi['acess'] === 'root')
				{
					DB::beginTransaction();
					try
					{
						Users::where('username',$username)->delete();

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
			}
			
			

			return response()->json($resp, 200);
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
		 $nim = $datum['nim']; 
		
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

				$resp['success'] = 'true';
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
		//$datum = json_decode($request->input('datum'), true);

		$datum   = $request->input('datum');

		if(count(Users::where('username', $datum['username'])->get()) > 0)
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

			// echo '<pre>'.print_r($user_arr, true) .'</pre>';die();

			DB::beginTransaction();

			try
			{
				Users::insert($user_arr);

				DB::commit();

				$resp['success'] = 'true';
				$resp['message'] = 'success insert data user';
			}
			catch(Exception $e)
			{
				$resp['success'] = 'false';
				$resp['message'] = $e->getMessage();
			}

		} 

		return response()->json($resp, 200);

	}

	public function upload_slide(Request $request, $type)
	{
		$file = $request->file('slide');

		 if($type === 'insert')
		 {
		 		 if(!empty($file))
				 {
				 	$fXtension = strtolower($file->getClientOriginalExtension());
				 	$fileSize     = (int)$file->getSize()/1024;
				 	if($fXtension === 'png' or $fXtension == 'jpg' or $fXtension == 'jpeg')
				 	{
				 		if($fileSize < 2500)
				 		{
				 				$fname = strtotime(date('Y-m-d H:i:s')).'.'.$file->getClientOriginalExtension();
				 				$fpath = 'assets/upload/slide';

				 				if($file->move($fpath, $fname))
				 				{ 
				 					DB::beginTransaction();
				 					try
				 					{
				 						$arr_data = array
				 									(
				 										"nama"  	  => $fname,
				 										"type"  	  => 'slide',
				 										"url"   	  => $fpath,
				 										"insert_time" => date('Y-m-d H:i:s'),
				 									);

				 						echo '<pre>'.print_r($arr_data, true) .'</pre>';
				 						//die();
				 						DB::table('extra')->insert($arr_data);
				 						DB::commit();

				 						$resp['status']   = 'true';
				 						$resp['message']  = 'success insert data slide';

				 						//die();
				 					}catch(\Illuminate\Database\QueryException $e)
				 					{
				 						$resp['status']   = 'false';
				 						$resp['message']  = $e->getMessage();
				 					}

				 				}
				 				else
				 				{
				 					$resp['status']  = 'false';
				 					$resp['message'] = 'file is galat upload';

				 				}
				 		}else
				 		{
				 			$resp['status']  = 'false';
				 			$resp['message'] = 'file is large';

				 		}
				 	}else
				 	{
				 		$resp['status']  = 'false';
				 		$resp['message'] = 'file extension must png,jpg or jpeg';
				 	}
				 }
				 else
				 {
				 	$resp['status']  = 'false';
				 	$resp['message'] = 'file canot by null';
				 }
		 }
		 elseif($type === 'delete')
		 {
		 		$data = DB::table('extra')->where('id_xtra',$request->input('id'))->get();

		 		DB::beginTransaction();
		 		try
		 		{
		 			DB::table('extra')->where('id_xtra', $request->input('id'))->delete();
						
					//Storage::disk('public')->delete($data->url.'/'.$data->file);
		 			Storage::delete($data->url.'/'.$data->nama);

		 			$resp['status']  = 'true';
		 			$resp['message'] = 'image delete success';

		 			DB::commit();

		 		}catch(\Illuminate\Database\QueryException $e)
		 		{
		 			  $resp['status']  = 'false';
		 			  $resp['message'] = $e->getMessage();
		 		}
		 }
		 elseif($type === "update")
		 {
		 	 
		 	  $id_xtra = $request->input('id');
		 	  $data = DB::table('extra')->where('id_xtra', $id_xtra)->get();
		 	  if(!empty($file) and empty($id) and count($data) > 0)
				 {
				 	$fXtension = strtolower($file->getClientOriginalExtension());
				 	$fileSize     = (int)$file->getSize()/1024;
				 	if($fXtension === 'png' or $fXtension == 'jpg' or $fXtension == 'jpeg')
				 	{
				 		if($fileSize < 2500)
				 		{
				 				$fname = strtotime(date('Y-m-d H:i:s')).'.'.$file->getClientOriginalExtension();
				 				$fpath = 'assets/upload/slide';

				 				if($file->move($fpath, $fname))
				 				{ 
				 					DB::beginTransaction();
				 					try
				 					{
				 						$arr_data = array
				 									(
				 										"nama"  	  => $fname,
				 										"type"  	  => 'slide',
				 										"url"   	  => $fpath,
				 										"insert_time" => date('Y-m-d H:i:s'),
				 									);
				 						DB::table('extra')->where('id_xtra', $id_xtra)->update($arr_data);
				 						DB::commit();

				 						Storage::delete($data->url.'/'.$data->nama);
				 					}catch(\Illuminate\Database\QueryException $e)
				 					{
				 						$resp['status']   = 'false';
				 						$resp['message']  = $e->getMessage();
				 					}

				 				}
				 				else
				 				{
				 					$resp['status']  = 'false';
				 					$resp['message'] = 'file is galat upload';

				 				}
				 		}else
				 		{
				 			$resp['status']  = 'false';
				 			$resp['message'] = 'file is large';

				 		}
				 	}else
				 	{
				 		$resp['status']  = 'false';
				 		$resp['message'] = 'file extension must png,jpg or jpeg';
				 	}
				 }
				 else
				 {
				 	$resp['status']  = 'false';
				 	$resp['message'] = 'file canot by null';
				 }
		 }


		 $request->session()->flash('msg',$resp);
		 return redirect('admin/slide')->with(['msg'=> $resp]);

	}


	public function insert_data_kamar(Request $request)
	{
		

		// $sesi = $request->session()->get('roleAuth');

		// $file = $request->file('image');

		// $name_img = $file->getClientOriginalName();
		// $extn     = $file->getClientOriginalExtension();
		// $path     = "img/room";

		// DB::beginTransaction();
		// try
		// {
		// 	$file_name = $this->cek_exits_file($path,$name_img,$pat);
		// 	$arr_data = array
		// 				(
		// 					"nomor_kamar"      => $request->input('lantai_kamar'),
		// 					"id_admin"         => $sessi['username'],
		// 					"lantai_kamar"     => $request->input('lantai_kamar'),
		// 					"foto_kamar"       => $file_name,
		// 					"harga_perbulan"   => $request->input('harga_perbulan'),
		// 					"status_kamar"     => 'N',
		// 				);
		// 	Kamar::insert($arr_data);
		// 	$file->move($path,$file_name);

		// 	$flash= array("type" => "success","message" => "success insert data kamar");
		// 	$request->session()->flash('msg',$flash);
			

		// 	redirect('admin/kamar');

		// }catch(Exception $e)
		// {
		// 	$flash= array("type" => "error","message" => $e->getMessage());
		// 	$request->session()->flash('msg',$flash);
		// 	redirect('admin/kamar');
		// }

		$file = $request->input('image');
		if(empty($file))
		{
			$resp['status']  ='failed';
			$resp['message'] = 'image room canot by null';
			$request->session()->flash('msg', $resp);
			redirect('admin/room');
		}

		$fXtension = strtolower($file->getClientOriginalExtension());
		$fsize     = (int)$file->getSize()/1024; 

		if($fsize > 2500)
		{
			$resp['status']  ='failed';
			$resp['message'] = 'image room is large, cannot  gratest than 2,5 MB';
			$request->session()->flash('msg', $resp);
			redirect('admin/room');
		}

		if($fXtension !=  "png" or $fXtension != "jpg" or $fXtension != "jpeg")
		{
			$resp['status']  ='failed';
			$resp['message'] = 'image room file type must png, jpg or jpeg';
			$request->session()->flash('msg', $resp);
			redirect('admin/room');
		}

		//if($)


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