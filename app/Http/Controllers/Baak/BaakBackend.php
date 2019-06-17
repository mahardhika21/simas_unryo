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


	function update_profile(Request $request)
	{
		$arr_data = array
					(
						"nama"	=> $request->input('nama'),
						"email" => $request->input('email'),
						"phone" => $request->input('phone'),
					);

		try
		{
			if(Admisi::where('username',$sessi['username'])->update($arr_data));
			{
				$sessi = $request->session()->get('roleAuth');

				$flash = array("type" => "success","messsage" => $e->getMessage());
			    $request->session()->flash('msg',$flash);

			redirect('Baak/profile');
			}else{
				
				$flash = array("type" => "error","messsage" => "update data gagal");
				$request->session()->flash('msg',$flash);

				redirect('Baak/profile');
			}
		}catch(Illuminate\Support\Database\QueryExection $e)
		{
			$flash = array("type" => "error","messsage" => $e->getMessage());
			$request->session()->flash('msg',$flash);

			redirect('Baak/profile');
		}
	}
}