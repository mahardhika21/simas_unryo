<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\UrlGenerator;


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
}