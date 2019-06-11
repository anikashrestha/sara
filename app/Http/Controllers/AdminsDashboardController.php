<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //$request->user()->authorizeRoles(['Admin','user']);
        return view('admin/dashboard');
    }
}
