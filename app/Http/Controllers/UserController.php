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

		try
		{
			$data = User::where('username',$username)
						->where('password',$password)
						->get();
			if(!empty($data))
			{
				$arr_ses = array
							(
								"username" => $username,
								"level"    => $data->level,
							);
				$request->session()->put($arr_ses);

				return redirect($level);
			}else{
				$message = array('status' => "danger", 'message' => 'login gagal');
				return redirect('login')->with($message);
			}
		}catch(Exception $e){
			echo "".$e->message;
		}
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
}