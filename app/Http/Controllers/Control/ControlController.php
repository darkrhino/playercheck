<?php

namespace PlayerCheck\Http\Controllers\Control;

use Illuminate\Http\Request;
use PlayerCheck\Http\Controllers\Controller;

class ControlController extends Controller
{
    public function index()
    {
        return view('control.dashboard.index');
    }
}
