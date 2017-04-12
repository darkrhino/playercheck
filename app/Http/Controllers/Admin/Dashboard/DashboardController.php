<?php

namespace PlayerCheck\Http\Controllers\Admin\Dashboard;

use Illuminate\Http\Request;
use PC\Business\Business;
use PC\User\User;
use PlayerCheck\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $businesses = Business::all();
        return view('admin.dashboard.index', compact('users', 'businesses'));
    }
}
