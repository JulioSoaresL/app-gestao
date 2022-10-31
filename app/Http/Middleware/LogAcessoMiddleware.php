<?php

namespace App\Http\Middleware;

use App\Models\LogAcesso;
use Closure;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->server->get('REMOTE_ADDR');
        $route = $request->getRequestUri();
        LogAcesso::create(['log' => "O IP $ip requisitou a rota acesso a rota $route"]);
       
        // return $next($request);

        $resposta = $next($request);
        $resposta->setStatusCode(201,'bla');
        return $resposta;
        // dd($resposta);
    }
}
