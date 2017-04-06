<?php

namespace PlayerCheck\Http\Controllers\Pages;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PlayerCheck\Http\Controllers\Controller;

class PageController extends Controller
{

    public function index()
    {
        if(Auth::check()){
            return Redirect::route('dashboard.index');
        }
        return view('pages.index');
    }

    public function features()
    {
        if(Auth::check()){
            return Redirect::route('dashboard.index');
        }
        return view('pages.features');
    }

    public function business()
    {
        if(Auth::check()){
            return Redirect::route('dashboard.index');
        }
        return view('pages.business');
    }

    public function pricing()
    {
        if(Auth::check()){
            return Redirect::route('dashboard.index');
        }
        return view('pages.pricing');
    }
}
