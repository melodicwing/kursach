<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Http\Request;

class Locale
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// var_dump(explode('/', $request->path()));
		$parts = explode('/', $request->path());
		// if ( $parts[0] == 'en' ) {
		// 	\App::setLocale('en');
		// }
		if ($parts[0]) {
			\App::setLocale($parts[0]);
		}
		return $next($request);
	}
}
