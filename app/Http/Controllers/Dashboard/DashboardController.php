<?php

namespace PlayerCheck\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PC\User\Role;
use PlayerCheck\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Role::where('name', 'staff')->first();
        //$user = Auth::user();
        //$user->attachRole($role);
        //dd($role->users);
        return view('dashboard.index');
    }
}
