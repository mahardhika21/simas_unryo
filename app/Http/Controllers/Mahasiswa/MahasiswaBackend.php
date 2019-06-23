<?php 
namespace App\Http\Controllers\Mahasiswa;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Fascades\DB;
use App\Model\Mahasiswa;
use App\Models\Users;

class MahasiswaBackend extends Controller
{
		function __construct()
		{

		}


		public function updateProfile(Request $request)
		{
			$nim 	   = $request->session()->get('roleAuth')['username'];
			$user_data = Users::where('username',$nim)->get();

			$arr_data = array
						(
							"nama"  		=> $request->input('nama'),
							"fakultas"		=> $request->input('fakultas'),
							"prodi"			=> $request->input('prodi'),
							"tahun_masuk"	=> $request->input('tahun_masuk'),
						);
			$arr_user  = array
						(
							"email"	=> $request->input('email'),
							"phone"	=> $request->input('phone'),
						);
			DB::beginTransaction();
			try
			{
				Users::where('username', $nim)->update($arr_user);

				Mahasiswa::where('nim',$nim)->update($arr_data);

				DB::commit();

				$resp['succes'] 	= 'succes';
				$resp['message']	= 'succes update data mahasiswa';
				$resp['data']		= 'succes';


			}catch(\Illuminate\Database\QueryException $e)
			{
				$resp['succes'] 	= 'false';
				$resp['message']	= $e->getMessage();
				$resp['data']		= NULL;
			}

			return response()->json($resp, 200);
		}
}