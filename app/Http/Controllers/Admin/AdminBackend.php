<?php
namespace App\Http\COntrollers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB:
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

			redirect('admin/kamar');

		}catch(Exception $e)
		{

		}


	

	}


	public function update_data_kamar(Request $request)
	{
		
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
}