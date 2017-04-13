<?php

namespace PlayerCheck\Http\Controllers\Admin\Businesses;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

    public function approve($id)
    {
        $business = Business::find($id);
        $business->approved_by_id = Auth::user()->id;
        $business->approved_at = Carbon::now();
        $business->save();

        return Redirect::back()->with('success', '');
    }

    public function suspend($id)
    {
        $business = Business::find($id);

        return Redirect::back()->with('success', '');
    }

    public function enable($id)
    {
        $business = Business::find($id);

        return Redirect::back()->with('success', '');
    }
}
