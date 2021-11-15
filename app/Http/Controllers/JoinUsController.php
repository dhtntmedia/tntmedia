<?php

namespace App\Http\Controllers;

use App\Models\JoinUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class JoinUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('join-us.index');
    }

    /**
     * Show the talent application
     *
     * @return \Illuminate\Http\Response
     */
    public function showTalentApplication()
    {
        return view('join-us.talent-application');
    }

    /**
     * Show the talent application
     *
     * @return \Illuminate\Http\Response
     */
    public function showTalentApplicationRole($role)
    {
        return view('join-us.talent-application-role');
    }

    /**
     * Show the talent application - thank you page
     *
     * @return \Illuminate\Http\Response
     */
    public function showThankYou()
    {
        return view('join-us.thank-you');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JoinUs  $joinUs
     * @return \Illuminate\Http\Response
     */
    public function show($role)
    {
        return view('join-us.role');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JoinUs  $joinUs
     * @return \Illuminate\Http\Response
     */
    public function edit(JoinUs $joinUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JoinUs  $joinUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JoinUs $joinUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JoinUs  $joinUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(JoinUs $joinUs)
    {
        //
    }
}
