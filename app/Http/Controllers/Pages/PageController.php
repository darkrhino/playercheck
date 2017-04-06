<?php

namespace PlayerCheck\Http\Controllers\Pages;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PlayerCheck\Http\Controllers\Controller;

class PageController extends Controller
{
    public function __construct()
    {
        if(Auth::check()){
            return Redirect::route('dashboard.index');
        }
    }

    public function index()
    {
        return view('pages.index');
    }

    public function features()
    {
        return view('pages.features');
    }
}
