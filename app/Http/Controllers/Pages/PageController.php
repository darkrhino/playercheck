<?php

namespace PlayerCheck\Http\Controllers\Pages;

use Illuminate\Http\Request;
use PlayerCheck\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
}
