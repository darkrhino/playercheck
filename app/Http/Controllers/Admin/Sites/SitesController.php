<?php

namespace PlayerCheck\Http\Controllers\Admin\Sites;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PC\Business\Business;
use PC\Sites\Site;
use PlayerCheck\Http\Controllers\Controller;

class SitesController extends Controller
{
    public function index()
    {
        $sites = Site::all();
        return view('admin.sites.index', compact('sites'));
    }

    public function create()
    {
        $sites = Site::all();
        return view('admin.sites.create', compact('sites'));
    }

    public function show($id)
    {
        $site = Site::find($id);
        return view('admin.sites.show', compact('site'));
    }

    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'company_number' => 'required',
            //'address' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        $business = Business::find($id);

        $site = Site::create([
            'name' => $request->input('name'),
            'company_number' => $request->input('company_number'),
            'address' => 'Not Null',
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'website_url' => $request->input('website_url'),
            'facebook_url' => $request->input('facebook_url'),
            'twitter_url' => $request->input('twitter_url'),
            'instagram_url' => $request->input('instagram_url'),
            'linkedin_url' => $request->input('linkedin_url'),
            'business_id' => $business->id
        ]);

        return Redirect::route('admin.sites.index', $business->id)->with('success');
    }
}
