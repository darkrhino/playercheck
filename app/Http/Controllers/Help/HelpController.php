<?php

namespace PlayerCheck\Http\Controllers\Help;

use Illuminate\Http\Request;
use PlayerCheck\Http\Controllers\Controller;

class HelpController extends Controller
{
    public function index()
    {
        return view('help.index');
    }
}
