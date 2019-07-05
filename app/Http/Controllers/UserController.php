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
		
		try
		{
			$data = Users::where('username',$username)
						->where('password',$password)
						->get();
			

		
			if(count($data)> 0)
			{
				$arr_ses = array
							(
								"username" => $username,
								"level"    => $data[0]->level,
								"acess"    => $data[0]->access_lev,
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
		$sessi 			= $request->session()->get('roleAuth');
		$whereDta = array("username" => $sessi['username'],"password" => md5("123456"));

		$cek = Users::where($whereDta)->get();

		echo '<pre>'.print_r($cek, true).'</pre>';
	}


	public function update_password(Request $request)
	{
		$password       = $request->input('data');

		$password_old   = $password['password_old'];
		$password_new   = $password['password_new'];
		$password_renew = $password['password_renew'];
		$sessi 			= $request->session()->get('roleAuth');

		$whereData 		= array("username" => $sessi['username'],"password" => md5($password_old));

		$cek = Users::where($whereData)->get();
		// echo 
		// response()->json($cek); die();

		if(count($cek)>0)
		{
			if(strlen($password_new) < 6)
			{
					$message = array
									  (
									  	  "success"     => "true",
									  	  "message"		=> "panjang karakter password harus lebih dari 5 karakter",
									  	  "detail"		=> "" 
									  );
									  
						return response()->json($message);			
			}
			elseif($password_new === $password_renew)
			{
						try
						{
							$up_data = array('password' => md5($password_new),'updated_at'=> date('Y-m-d H:i:s'));
							$proses = Users::where($whereData)->update($up_data);

							$message = array
									  (
									  	  "success"     => "true",
									  	  "message"		=> "success update password",
									  	  "detail"		=> "" 
									  );

						}catch(\Illuminate\Database\QueryException $e)
						{
							$message = array
									  (
									  	  "success"     => "false",
									  	  "message"		=> $e->getMessage(),
									  	  "detail"		=> $e 
									  );
						}

						return response()->json($message);
				
			}else
			{
				$message = array
						(
							"success" => "false",
							"message" => "Passsword Baru tidak sama",
							"resp"	  => $cek,
						);
				return response()->json($message);
			}
		}else{
				$message = array
						(
							"success" => "false",
							"message" => "Passsword Lama yang dimasukkan salah",
							"data"	  => $cek,
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
			$data = array("nama" => "narto");
			 Mail::send('emails.email_reset_pass', $data, function ($message) use ($request)
        {
            $message->subject("sdada");
            $message->from('donotreply@kiddy.com', 'Kiddy');
            $message->to("mahardhika894@gmail.com");
        });
		}catch(Exception $e)
		{
			return response()->json(['status'=>false,'message'=>$e->getMessage()]);
		}
	}
}

