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
}