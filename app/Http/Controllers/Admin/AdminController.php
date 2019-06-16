<?php
namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\UrlGenerator;
use App\Model\Users;


class AdminController extends Controller
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

		return view('admin/home',$data);

	}


	public function profile(Request $request)
	{
		$sessi = $request->session()->get('roleAuth');
		//echo $sessi['username'];
		$data = array
				(
					"url"   => $this->url->to('/'),
					"data"  => Users::where('username',$sessi['username'])->firstOrFail(),
					"title" => "Admin | Profile",
					"part"  => array
								(
									"header"   => view('base/header-admin'),
									"sidebar"  => view('base/side-menu-admin', $this->baseUrl()),
									"footer"   => view('base/footer')
								),
				);
		return view('admin/profile',$data);
	}

	public function room_list(Request $request)
	{
		$data = array
				(
					"url"   => $this->url->to('/'),
					"part"  => array
								(
									"header"   => view('base/header-admin'),
									"sidebar"  => view('base/side-menu-admin', $this->baseUrl()),
									"footer"   => view('base/footer')
								),
				);
		return view('admin/room_list',$data);
	}

	public function add_room(Request $request,$type)
	{
		$data = array
				(
					"url"   => $this->url->to('/'),
					"part"  => array
								(
									"header"   => view('base/header-admin'),
									"sidebar"  => view('base/side-menu-admin', $this->baseUrl()),
									"footer"   => view('base/footer')
								),
				);
		return view('admin/add_roomview_'.$type,$data);
	}


	public function list_rent_room(Request $request)
	{
		$data = array
				(
					"url"   => $this->url->to('/'),
					"part"  => array
								(
									"header"   => view('base/header-admin'),
									"sidebar"  => view('base/side-menu-admin', $this->baseUrl()),
									"footer"   => view('base/footer')
								),
				);
		return view('admin/add_userView_'.$type,$data);
	}


	public function list_stat_paid(Request $request,$type)
	{
		$data = array
				(
					"url"   => $this->url->to('/'),
					"part"  => array
								(
									"header"   => view('base/header-admin'),
									"sidebar"  => view('base/side-menu-admin', $this->baseUrl()),
									"footer"   => view('base/footer')
								),
				);
		return view('admin/stat_paid'.$type,$data);
	}



	public function user_list(Request $request, $type)
	{
		$data = array
				(
					"url"   => $this->url->to('/'),
					"part"  => array
								(
									"header"   => view('base/header-admin'),
									"sidebar"  => view('base/side-menu-admin', $this->baseUrl()),
									"footer"   => view('base/footer')
								),
				);
		return view('admin/user_list',$data);
	}


	public function add_user(Request $request, $type)
	{
		$data = array
				(
					"url"   => $this->url->to('/'),
					"part"  => array
								(
									"header"   => view('base/header-admin'),
									"sidebar"  => view('base/side-menu-admin', $this->baseUrl()),
									"footer"   => view('base/footer')
								),
				);
		return view('admin/add_userView_'.$type,$data);
	}


	public function price(Request $request)
	{
		$data = array
				(
					"url"   => $this->url->to('/'),
					"part"  => array
								(
									"header"   => view('base/header-admin'),
									"sidebar"  => view('base/side-menu-admin', $this->baseUrl()),
									"footer"   => view('base/footer')
								),
				);
		return view('admin/add_userView_'.$type,$data);
	}

	public function report(Request $request,$type)
	{
		$data = array
				(
					"url"   => $this->url->to('/'),
					"part"  => array
								(
									"header"   => view('base/header-admin'),
									"sidebar"  => view('base/side-menu-admin', $this->baseUrl()),
									"footer"   => view('base/footer')
								),
				);
		return view('admin/report_'.$type,$data);
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