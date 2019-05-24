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
			$file       = $request->file('image');
			$sessi      = $request->session()->get('roleAuth');
			$file_name  = $file->getClientOriginalName() .'.'.$file->getClientOriginalExtension();
			$arr_data = array
						(
							"nomor_kamar"      => $request->input('lantai_kamar'),
							"id_admin"         => $sessi['username'],
							"lantai_kamar"     => $request->input('lantai_kamar'),
							"foto_kamar"       => $file_name,
							"harga_perbulan"   => $request->input('harga_perbulan'),
							"status_kamar"     => 'N',
						);


			try
			{

				 $destinationPath = 'uploads';
      			 if($file->move($destinationPath,$file->getClientOriginalName()))
      			 {
      			 	Kamar::insert($arr_data);
      			 	redirect('admin/kamar');
      			 }
			}catch(Exception $e)
			{
				die("File did not upload: ". $e->getMessage());
			}
	}
}