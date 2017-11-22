<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\template;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prop = template::where('activo', 1)->first();
        return view('fronted.index',compact('prop'));
    }
}
