<?php

namespace MaterialAdmin\app\Http\Controllers;

class AdminController extends Controller
{
    protected $data = []; // the information we send to the view
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('web');
    }
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('material::index', $this->data);
    }
}
