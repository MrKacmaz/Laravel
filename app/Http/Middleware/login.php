<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

// SESSION 
session_start();
ob_start();

class login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {

        $allUsers = User::all();




        // return redirect('/home');

        foreach ($allUsers as $user) {
            if ($user->email == $request->input('userSignUpEmail') and $user->password == $request->input('userSignUpPassword')) {

                // Create SESSION
                // session($currentUser, $user);

                $_SESSION['user'] = $user;

                return redirect('/home');
                // return $next($request);
            }
        }
    }
}
