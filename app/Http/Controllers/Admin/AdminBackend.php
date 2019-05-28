<?php
namespace App\Http\COntrollers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB:
use Illuminate\Support\Facades\Storages;
use App\Model\User;
use App\Model\Kamar;


class AdminBackend extends Controller
{
	function __construct()
	{

	}


	public function updateProfile(Request $request)
	{
		$arr_data = array
					(
						"nama"   => $request->input('nama'),
						"email"  => $request->input('email'),
						"phone"  => $request->input('phone'),
					);
		try
		{
				$sessi = $request->session()->get('roleAuth');
				Users::where('username',$sessi['username'])->update($arr_data);
				redirect('admin/profile');
		}catch(Exection $e)
		{

		}
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
		try {
			$room = Kamar::where('id_kamar')->get();
			
			
		} catch (Exception $e) {
			
		}
	}
}