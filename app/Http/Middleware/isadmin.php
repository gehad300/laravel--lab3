<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isadmin
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
        if(true){
              return $next($request);

            }
            else{
               //flase when we cannot go thr ough the gate
            }

    }
}
//class all it got is just one function based on your logic if through middleware then pass it to the next midddleware