<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chairman;

class CekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('login')->with('error', 'gagal check auth');
        }

        $user = Auth::user();

        $isChairman = Chairman::where('c_nim', $user->nim)->get();

        if (count($isChairman)) {
            return $next($request);
        }
        
        return redirect('login')->with('error', 'kamu tidak memiliki akses!');
    }
}
