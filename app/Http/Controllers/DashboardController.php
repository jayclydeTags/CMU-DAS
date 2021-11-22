<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // if (Auth::user()->User::role('User')) {
        //     return view('dashboard.userdash');
        // } elseif (Auth::user()->hasRole('Staff')) {
        //     return view('dashboard.staffdash');
        // } elseif (Auth::user()->hasRole('Admin')) {
        //     return view('dashboard.home');
        // }
        return view('dashboard.home');
    }
}
