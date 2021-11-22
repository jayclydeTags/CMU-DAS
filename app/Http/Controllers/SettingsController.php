<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
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

    public function personal()
    {
        return view('settings.personal');
    }

    public function account()
    {
        return view('settings.account');
    }

    public function password()
    {
        return view('settings.password');
    }

}
