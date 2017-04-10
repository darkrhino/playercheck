<?php

namespace PlayerCheck\Http\Controllers\Maps;

use Illuminate\Http\Request;
use PlayerCheck\Http\Controllers\Controller;

class StoresController extends Controller
{
    public function map()
    {
        return view('maps.stores');
    }
}
