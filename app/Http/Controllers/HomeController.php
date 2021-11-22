<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        if (Auth::user()->hasRole('User')) {
            return view('dashboard.userdash');
        } elseif (Auth::user()->hasRole('Staff')) {
            return view('dashboard.staffdash');
        } elseif (Auth::user()->hasRole('Admin')) {
            return view('dashboard.home');
        }
        //return view('dashboard.home');
    }
}
