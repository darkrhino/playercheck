<?php

namespace PlayerCheck\Http\Controllers\Admin\Stores;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PC\Stores\Store;
use PlayerCheck\Http\Controllers\Controller;
use PlayerCheck\Mail\Stores\Approved;

class StoresController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return view('admin.stores.index', compact('stores'));
    }

    public function show($id)
    {
        $store = Store::find($id);
        return view('admin.stores.show', compact('store'));
    }

    public function approve($id)
    {
        $store = Store::find($id);
        $store->approved_by_id = auth()->user()->id;
        $store->approved_at = Carbon::now();
        $store->save();

        Mail::to($store->business->members->first())->send(new Approved($store));

        return redirect()->route('admin.stores.show', $store->id)->with('success');
    }

    public function reject($id)
    {
        $store = Store::find($id);

        return redirect()->route('admin.stores.show', $store->id)->with('success');
    }
}
