<?php 
namespace App\Http\Controllers\Mahasiswa;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\FacadesDB;
use Illuminate\Routing\UrlGenerator;


class MahasiswaCOntroller extends Controller
{
	private $url;

	function __construct(UrlGenerator $url)
	{
		$this->url = $url;
	}


	public function home(Request $request)
	{
		$data = array 
				(
					"message" => "",
					"url"     => $this->url->to('/'),
					"part"    => array
								(
									"footer"   => view('base/footer'),
									"header"   => view('base/header-mahasiswa'),
									"sidebar"  => view('base/side-menu-mahasiswa'),
								),
				);
		return view('mahasiswa/home', $data);
	}
}