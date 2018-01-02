<?php

namespace PlayerCheck\Http\Controllers\Admin\Businesses;

use Illuminate\Http\Request;
use PC\Business\Business;
use PlayerCheck\Http\Controllers\Controller;

class MembersController extends Controller
{
    public function index($id)
    {
        $business = Business::find($id);

        return view('admin.businesses.members.index', compact('business'));
    }

    public function store(Request $request, $id)
    {
        $business = Business::find($id);

        $business->members()->attach($request->input('user_id'), ['added_by_id' => auth()->user()->id]);

        return redirect()->back()->with('success', '');
    }
}
