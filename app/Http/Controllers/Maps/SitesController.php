<?php

namespace PlayerCheck\Http\Controllers\Maps;

use Illuminate\Http\Request;
use PlayerCheck\Http\Controllers\Controller;

class SitesController extends Controller
{
    public function map()
    {
        return view('maps.sites');
    }
}
