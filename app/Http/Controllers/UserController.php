<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\UrlGenerator;
use App\Model\Users;


class UserController extends Controller
{
	private $url;

	function __construct(UrlGenerator $url)
	{
			$this->url = $url;
	}


	public function login(Request $request)
	{
		$data = array
			(
				"url"  => $this->url->to('/'),
			);

		return view('login', $data);
	}


	public function set_login(Request $request)
	{
		$username  = $request->input('username');
		$password  = md5($request->input('password'));


		//echo $username .' '. $password;

		try
		{
			$data = User::where('username',$username)
						->where('password',$password)
						->get();
			

			// echo count($data);
			// die();
			if(count($data)> 0)
			{
				$arr_ses = array
							(
								"username" => $username,
								"level"    => $data[0]->level,
							);
				$request->session()->put('roleAuth',$arr_ses);

				return redirect($data[0]->level);
			}else{
				$message = array('status' => "danger", 'message' => 'login gagal');
				return redirect('home')->with($message);
			}
		}catch(Exception $e){
			echo "".$e->message;
		}
	}


	public function log_out(Request $request)
	{
		$request->session()->forget('roleAuth');
		$message = array('status' => "success", 'message' => 'anda telah keluar dari sistem');
		return redirect('home')->with($message);
	}

	public function view(Request $request)
	{
		$data = array
			(
				"url"  => $this->url->to('/'),
				"sub"  => view('mahasiswa/sub'),
			);

		return view('mahasiswa/index', $data);
	}


	public function set_session(Request $request)
	{
		$arr_ses = array
							(
								"username" => "1234567",
								"level"    => "admin",
							);
				$request->session()->put('roleAuth',$arr_ses);
				echo "oke";	
	}

	public function see_session(Request $request)
	{
		$data = $request->session()->get('roleAuth');
				echo '<pre>'.print_r($data, true).'</pre>';
	}
}