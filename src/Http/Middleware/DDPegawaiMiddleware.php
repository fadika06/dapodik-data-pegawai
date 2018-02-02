<?php namespace Bantenprov\DDPegawai\Http\Middleware;

use Closure;

/**
 * The DDPegawaiMiddleware class.
 *
 * @package Bantenprov\DDPegawai
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DDPegawaiMiddleware
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
        return $next($request);
    }
}
