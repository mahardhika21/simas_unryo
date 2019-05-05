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


	
}