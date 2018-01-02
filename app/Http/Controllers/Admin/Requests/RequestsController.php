<?php

namespace PlayerCheck\Http\Controllers\Admin\Requests;

use Illuminate\Http\Request;
use PlayerCheck\Http\Controllers\Controller;

class RequestsController extends Controller
{
    public function index()
    {
        $requests = \PC\Request\Request::all();
        return view('admin.requests.index', compact('requests'));
    }
}
