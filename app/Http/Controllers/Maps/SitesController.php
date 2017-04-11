<?php

namespace PlayerCheck\Http\Controllers\Maps;

use Illuminate\Http\Request;
use PC\GEO\Counties;
use PlayerCheck\Http\Controllers\Controller;
use WC\Sites\Site;

class SitesController extends Controller
{
    public function map()
    {
        $sites = Site::all();
        $counties = Counties::all();
        return view('maps.sites', compact('sites', 'counties'));
    }
}
