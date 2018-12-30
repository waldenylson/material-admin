<?php

namespace MaterialAdmin\app\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * The information we send to the view.
     */
    protected $data = [];

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->data['user'] = Auth::user();
    }
    /**
     * Show the admin dashboard.
     *
     * @return view
     */
    public function index()
    {
        return view('material::index', $this->data);
    }
}
