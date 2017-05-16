<?php

namespace PlayerCheck\Http\Controllers\Admin\Defences;

use Illuminate\Http\Request;
use PlayerCheck\Http\Controllers\Controller;

class DefencesController extends Controller
{
    public function index()
    {
        return view('admin.defences.index');
    }
}
