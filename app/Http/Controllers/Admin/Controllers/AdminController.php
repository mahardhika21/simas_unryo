<?php
namespace App\Http\Controllers\Admin;

use App\User;
use App\Htttp\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\UrlGenerator;


class AdminController extends Controllers
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
				);

		echo "hai";
	}
	
}