<?php

namespace PlayerCheck\Http\Controllers\Business;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PC\Business\Business;
use PlayerCheck\Http\Controllers\Controller;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('business.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address_1' => 'required',
            'postcode' => 'required',
            'company_number' => 'required',
            'primary_phone_contact' => 'required'
        ]);

        $user = Auth::user();

        $business = Business::create([
            'name' => $request->input('name'),
            'address_1' => $request->input('address_1'),
            'postcode' => $request->input('postcode'),
            'company_number' => $request->input('company_number'),
            'primary_phone_contact' => $request->input('primary_phone_contact')
        ]);

        $business->members()->attach($user->id, ['added_by_id' => $user->id]);


        return Redirect::route('business.create')->with('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
