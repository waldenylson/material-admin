<?php

namespace MaterialAdmin\app\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Validator;

class UserController extends Controller
{

    /**
     * Logout user and redirect.
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
