<?php
namespace App\Http\Middleware;

use Closure;

class AuthSimas
{
	 public function handle($request, Closure $next)
    {
    	echo "midelware AuthSimas guys <br>";
    	$sesion = $request->session()->get('roleAuth');
    	if(empty($session))
    	{
    		return redirect('/home');
    	}
       return $next($request);
    }
}