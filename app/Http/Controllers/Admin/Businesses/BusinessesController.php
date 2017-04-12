<?php

namespace PlayerCheck\Http\Controllers\Admin\Businesses;

use Illuminate\Http\Request;
use PC\Business\Business;
use PlayerCheck\Http\Controllers\Controller;

class BusinessesController extends Controller
{
    public function index()
    {
        $businesses = Business::all();
        return view('admin.businesses.index', compact('businesses'));
    }

    public function show($id)
    {
        $business = Business::find($id);

        return view('admin.businesses.show', compact('business'));
    }

    public function edit($id)
    {
        $business = Business::find($id);

        return view('admin.businesses.edit', compact('business'));
    }
}
