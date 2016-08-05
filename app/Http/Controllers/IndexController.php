<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Nav;

class IndexController extends Controller
{
    public function index()
    {
        $navs = Nav::all();
        //dd($nav);
        return view('welcome', ['navs' => $navs]);
    }
}
