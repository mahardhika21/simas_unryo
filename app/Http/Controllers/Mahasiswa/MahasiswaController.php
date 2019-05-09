<?php 
namespace App\Http\Controllers\Mahasiswa;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\FacadesDB;
use Illuminate\Routing\UrlGenerator;
use App\Helpers\Curency_helper;

class MahasiswaCOntroller extends Controller
{
	private $url;
	private $curency;

	function __construct(UrlGenerator $url)
	{
		$this->curency = new Curency_helper;
		$this->url = $url;
	}


	/***
	 * Menampilkan halaman utama (index) website
	 *     Use	  : base_url().'/mahasiswa';
     *     param  : no need
	 * Status : draft
	 * */ 


	public function home(Request $request)
	{
		$data = array 
				(
					"message" => "",
					"url"     => $this->url->to('/'),
					"curency"  => $this->curency,
					"part"    => array
								(
									"footer"   => view('base/footer'),
									"header"   => view('base/header-mahasiswa'),
									"sidebar"  => view('base/side-menu-mahasiswa',$this->baseUrl()),
								),
				);
		return view('mahasiswa/home', $data);
	}



	/***
	 * Menampilkan halaman profile
	 *     Use	  : base_url().'/mahasiswa/profile';
     *     param  : no need
	 * Status : draft
	 * */ 


	public function profile(Request $request)
	{
		
		$data = array
				(
					"message"  => "",
					"url"      => $this->url->to('/'),
					"curency"  => $this->curency,
					"part"     => array
								  (
								  	 "header"  => view('base/header-mahasiswa'),
								  	 "sidebar" => view('base/side-menu-mahasiswa',$this->baseUrl()),
								  	 "footer"  => view('base/footer')
								  ),
				);

		return view('mahasiswa/profile', $data);
	}


	public function payment(Request $request)
	{
		  $data = array
		  		(
		  			"message"  => "",
		  			"url"      => $this->url->to('/'),
		  			"curency"  => $this->curency,
		  			"part"     => array
		  							(
		  								"header"  =>  view('base/header-mahasiswa'),
		  								"sidebar" =>  view('base/side-menu-mahasiswa', $this->baseUrl()),
		  								"footer"  =>  view('base/footer'),
		  							)
		  		);

		  return view('mahasiswa/payment', $data);
	}


	public function confirm_payment(Request $request)
	{
		  $data = array
		  		(
		  			"message"  => "",
		  			"url"      => $this->url->to('/'),
		  			"curency"  => $this->curency,
		  			"part"     => array
		  							(
		  								"header"  =>  view('base/header'),
		  								"sidebar" =>  view('base/side-menu-mahasiswa', $this->baseUrl()),
		  								"footer"  =>  view('base/footer'),
		  							)
		  		);

		  return view('mahasiswa/confirm-payment', $data);
	}


	public function room(Request $request)
	{
		  $data = array
		  		(
		  			"message"  => "",
		  			"url"      => $this->url->to('/'),
		  			"curency"  => $this->curency,
		  			"part"     => array
		  							(
		  								"header"  =>  view('base/header-mahasiswa'),
		  								"sidebar" =>  view('base/side-menu-mahasiswa', $this->baseUrl()),
		  								"footer"  =>  view('base/footer'),
		  							)
		  		);

		  return view('mahasiswa/room', $data);
	}


	public function my_room(Request $request)
	{
		  $data = array
		  		(
		  			"message"  => "",
		  			"url"      => $this->url->to('/'),
		  			"curency"  => $this->curency,
		  			"part"     => array
		  							(
		  								"header"  =>  view('base/header-mahasiswa'),
		  								"sidebar" =>  view('base/side-menu-mahasiswa', $this->baseUrl()),
		  								"footer"  =>  view('base/footer'),
		  							)
		  		);

		  return view('mahasiswa/myroom', $data);
	}


	public function inbox(Request $request)
	{
		  $data = array
		  		(
		  			"message"  => "",
		  			"url"      => $this->url->to('/'),
		  			"curency"  => $this->curency,
		  			"part"     => array
		  							(
		  								"header"  =>  view('base/header'),
		  								"sidebar" =>  view('base/side-menu-mahasiswa', $this->baseUrl()),
		  								"footer"  =>  view('base/footer'),
		  							)
		  		);

		  return view('mahasiswa/list-message', $data);
	}


	public function send_message(Request $request)
	{
		  $data = array
		  		(
		  			"message"  => "",
		  			"url"      => $this->url->to('/'),
		  			"curency"  => $this->curency,
		  			"part"     => array
		  							(
		  								"header"  =>  view('base/header'),
		  								"sidebar" =>  view('base/side-menu-mahasiswa', $this->baseUrl()),
		  								"footer"  =>  view('base/footer'),
		  							)
		  		);

		  return view('mahasiswa/send_message', $data);
	}

    
     


	private function baseUrl()
	{
		$url = array
			  (
			  	"url" => $this->url->to('/'),
			  );
		return $url;
	}
}