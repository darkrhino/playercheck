<?php

namespace PlayerCheck\Http\Controllers\Requests;

use Illuminate\Http\Request;
use PlayerCheck\Http\Controllers\Controller;

class RequestController extends Controller
{
    public function index()
    {
        return view('requests.index');
    }
}
