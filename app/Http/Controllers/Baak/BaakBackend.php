<?php 
namespace App\Http\Controllers\Baak;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\UrlGenerator;
use App\Model\Admisi;

class BaakBackend extends Controller
{
	var $url;
	function __construct(UrlGenerator $url)
	{	
		$this->url = $url;
	}


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
}