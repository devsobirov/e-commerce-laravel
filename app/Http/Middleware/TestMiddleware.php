<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestMiddleware
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
        dd($request, $_SERVER);

        $from = $request->referral;

        if ($from) {
            $ref = DB::table('referrals')->where('name', $from)->first();
            if ($ref) {
                $ref->update([
                    'amount' => $ref->amount + 1
                ]);
            }
        }
        return $next($request);
    }
}
