<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\AdminSubDomainAuthCheck;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class AdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // if (Auth::guard('admin')->check())  {
            $admincheck = AdminSubDomainAuthCheck::where('admin_id',Auth::guard('admin')->id())->first();
            if ($admincheck->token == session()->get('AdminSubDomainAuthCheck')) {
                return $next($request);
            } else{
              Auth::guard('admin')->logout();
              return redirect()->route('admin.login');
            }
        //   }

        }
}
