<?php

namespace App\Http\Middleware;

use App\Models\Contact;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class ActiveMiddleware
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
        if($this->isActive($request)){

        return $next($request);
        }

        abort(403);
    }

    protected function isActive(Request $request){
        return true;
//        return false;

//        $user = User::find(1);
////        echo $user->active;
////dump($user->active);
//        return $user->active;
    }
}
