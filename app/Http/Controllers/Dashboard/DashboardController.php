<?php

namespace PlayerCheck\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use PlayerCheck\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
}
