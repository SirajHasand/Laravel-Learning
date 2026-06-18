<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $page = 'Home';
        return view('home')->with('page',$page);
    }
}
