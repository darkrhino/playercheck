<?php

namespace PlayerCheck\Http\Controllers\Admin\Dashboard;

use Illuminate\Http\Request;
use PC\User\User;
use PlayerCheck\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.dashboard.index', compact('users'));
    }
}
