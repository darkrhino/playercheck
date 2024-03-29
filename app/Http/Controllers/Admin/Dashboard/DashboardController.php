<?php

namespace PlayerCheck\Http\Controllers\Admin\Dashboard;

use PC\Business\Business;
use PC\Request\Request;
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
        $requests = Request::all();

        return view('admin.dashboard.index', compact('users', 'businesses', 'sites', 'stores', 'requests'));
    }
}
