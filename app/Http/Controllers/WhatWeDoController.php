<?php

namespace App\Http\Controllers;

use App\Models\WhatWeDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class WhatWeDoController extends Controller
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
                'name' => 'Join us',
                'url'  => URL::to('join-us')
            ]
        ];

        return view('what-we-do.index')->with('data', $data);
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
     * @param  \App\Models\WhatWeDo  $whatWeDo
     * @return \Illuminate\Http\Response
     */
    public function show(WhatWeDo $whatWeDo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WhatWeDo  $whatWeDo
     * @return \Illuminate\Http\Response
     */
    public function edit(WhatWeDo $whatWeDo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WhatWeDo  $whatWeDo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WhatWeDo $whatWeDo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WhatWeDo  $whatWeDo
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhatWeDo $whatWeDo)
    {
        //
    }
}
