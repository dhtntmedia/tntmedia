<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $request = new Request();
//        if ($request->routeIs('admin.*')) {
//
//        }
    }

    public function notfound()
    {
        $data = [
            'title' => '404 page',
            'description' => 'Page not found. Served 404 page.'
        ];
        return view('error.404')->with('data', $data);
    }
}
