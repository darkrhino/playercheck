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

    public function update(Request $request, $id)
    {
        $business = Business::find($id);
        $business->name = $request->input('name');
        $business->address_1 = $request->input('address_1');
        $business->address_2 = $request->input('address_2');
        $business->address_3 = $request->input('address_3');
        $business->city = $request->input('city');
        $business->county = $request->input('county');
        $business->postcode = $request->input('postcode');
        $business->latitude = $request->input('latitude');
        $business->longitude = $request->input('longitude');
        $business->company_number = $request->input('company_number');
        $business->primary_phone_contact = $request->input('primary_phone_contact');
        $business->save();

        return Redirect::back()->with('updated', '');
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
