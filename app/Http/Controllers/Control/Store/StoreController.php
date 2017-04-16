<?php

namespace PlayerCheck\Http\Controllers\Control\Store;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use PC\Business\Business;
use PC\Sites\Site;
use PC\Stores\Store;
use PlayerCheck\Http\Controllers\Controller;
use PlayerCheck\Mail\Store\Received;

class StoreController extends Controller
{
    public function index()
    {
        //
    }

    public function create($id)
    {
        $business = Business::find($id);

        return view('control.store.create', compact('business'));
    }

    public function show($id, $slug)
    {
        $store = Store::findBySlugOrFail($slug);

        return view('control.store.show', compact('store'));
    }

    public function store(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'company_number' => 'required',
            'logo' => 'required|file',
            'address' => 'required',
            'email' => 'required',
            'phone_number' => 'required'
        ]);

        $store = Store::create([
            'name' => $request->input('name'),
            'company_number' => $request->input('company_number'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'business_id' => $id,
            'phone_number' => $request->input('phone_number'),
            'website_url' => $request->input('website_url'),
            'facebook_url' => $request->input('facebook_url'),
            'twitter_url' => $request->input('twitter_url'),
            'instgram_url' => $request->input('instgram_url'),
            'youtube_url' => $request->input('youtube_url'),
            'linkedin_url' => $request->input('linkedin_url')
        ]);

        $store = Store::findBySlugOrFail($store['slug']);

        $fileContents = $request->file('logo');
        $logo = Storage::disk('s3')->put('store/'.$store->slug.'/images', $fileContents);

        $store->logo_url = $logo;
        $store->save();

        Mail::to(Auth::user())->send(new Received($store));

        return Redirect::route('control.store.show', $store->slug)->with('success');
    }
}
