<?php

namespace App\Http\Controllers;

use App\Models\WhoWeAre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class WhoWeAreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'next' => [
                'name' => 'What we do',
                'url'  => URL::to('what-we-do')
            ]
        ];

        return view('who-we-are.index')->with('data', $data);
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
     * @param  \App\Models\WhoWeAre  $whoWeAre
     * @return \Illuminate\Http\Response
     */
    public function show(WhoWeAre $whoWeAre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WhoWeAre  $whoWeAre
     * @return \Illuminate\Http\Response
     */
    public function edit(WhoWeAre $whoWeAre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WhoWeAre  $whoWeAre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WhoWeAre $whoWeAre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WhoWeAre  $whoWeAre
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhoWeAre $whoWeAre)
    {
        //
    }
}
