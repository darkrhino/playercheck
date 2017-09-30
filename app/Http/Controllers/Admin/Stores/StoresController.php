<?php

namespace PlayerCheck\Http\Controllers\Admin\Stores;

use Illuminate\Http\Request;
use PC\Stores\Store;
use PlayerCheck\Http\Controllers\Controller;

class StoresController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return view('admin.stores.index', compact('stores'));
    }
}
