<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Hexin\Gqy\Test;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //略
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       Test::error('你好啊','标题');
        return view('home');
    }
}