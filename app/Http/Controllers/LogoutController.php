<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logoutFun()
    {

        session_destroy();
        session_unset();    

        return redirect('/');
    }
}
