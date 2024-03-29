<?php

namespace PlayerCheck\Http\Controllers\Admin\Members;

use Illuminate\Http\Request;
use PC\User\User;
use PlayerCheck\Http\Controllers\Controller;

class MembersController extends Controller
{
    public function index()
    {
        $members = User::all();
        return view('admin.members.index', compact('members'));
    }

    public function show($id)
    {
        $member = User::find($id);
        return view('admin.members.show', compact('member'));
    }

    public function edit($id)
    {
        $member = User::find($id);
        return view('admin.members.edit', compact('member'));
    }
}
