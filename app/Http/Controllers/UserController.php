<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Mail;
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


	public function update_password(Request $request)
	{
		$password_old   = $request->input('password_old');
		$password_new   = $request->input('password_new');
		$password_renew = $request->input('password_renew');


		$cek = User::where('password',md5($password_old));

		if(count($cek) > 0)
		{
			if($password_new === $password_renew)
			{
				$username = $request->session('roleAuth');
				$proses = User::whre('password',md5($password_new))->where('username',$username['username']);

				if($proses === true)
				{
					$message = array
						(
							"code"    => "1",
							"message" => "upadate Passsword Sukses",
						);
				return response()->json($message);
				}
			}else
			{
				$message = array
						(
							"code"    => "00",
							"message" => "Passsword Baru tidak sama",
						);
				return response()->json($message);
			}
		}else{
				$message = array
						(
							"code"    => "00",
							"message" => "Passsword Lama yang dimasukkan salah",
						);
				return response()->json($message);
		}
	}


	public function test_response(Request $request)
	{
		$arr = array('nama' => "naruto", "alamat" => "Desa Konoha Gakure");

		return response()->json($arr);
	}


	public function sendMail(Request $request)
	{
		try
		{
			 Mail::send('emails.email_reset_pass', ['nama' => "mahar", 'pesan' => "sss"], function ($message) use ($request)
        {
            $message->subject($request->judul);
            $message->from('donotreply@kiddy.com', 'Kiddy');
            $message->to("mahardhika894@gmail.com");
        });
		}catch(Exception $e)
		{
			return response()->json(['status'=>false,'message'=>$e->getMessage()]);
		}
	}
}

