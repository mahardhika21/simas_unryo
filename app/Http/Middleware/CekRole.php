<?php
namespace App\Http\Middleware;

use Closure; 

class CekRole
{

	function handle($request, Closure $next, $role)
	{
			$sesion = $request->session()->get('roleAuth');
			if(!empty($session))
			{

			}

			if($role != "guest" or !empty($session))
			{
				if($session['level'] != $role)
				{
					return redirect($role);
				}
			}

			

			return $next($request);

	}
} 