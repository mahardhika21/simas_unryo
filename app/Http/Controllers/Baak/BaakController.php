<?php

namespace App\Http\Controllers\Baak;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\UrlGenerator;


class BaakController extends Controller
{

	private $url;

	function __construct(UrlGenerator $url)
	{
		$this->url = $url;
	}

	public function index(Request $request)
	{

		$data = array
				(
					"url" => $this->url->to('/'),
					"part" => array
							(
								"header"  => view('base/header-admin'),
								"sidebar" => view('base/side-menu-admin', $this->baseUrl()),
								"footer"  => view('base/footer')
							),
				);

		return view('baak/home',$data);

	}

	public function profile(Request $request)
	{

		$data = array
				(
					"url" => $this->url->to('/'),
					"part" => array
							(
								"header"  => view('base/header-admin'),
								"sidebar" => view('base/side-menu-admin', $this->baseUrl()),
								"footer"  => view('base/footer')
							),
				);

		return view('baak/profile',$data);
	}


	
	
}