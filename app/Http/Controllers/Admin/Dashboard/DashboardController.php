<?php

namespace PlayerCheck\Http\Controllers\Admin\Dashboard;

use Illuminate\Http\Request;
use PC\Business\Business;
use PC\Sites\Site;
use PC\Stores\Store;
use PC\User\User;
use PlayerCheck\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $businesses = Business::all();
        $sites = Site::all();
        $stores = Store::all();
        return view('admin.dashboard.index', compact('users', 'businesses', 'sites', 'stores'));
    }
}
