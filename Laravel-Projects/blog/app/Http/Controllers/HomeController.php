<?php

namespace App\Http\Controllers;
class HomeController extends Controller
{
    public function index(){
        $page = 'Home';
        return view('home')
        ->with('page',$page);

    }

}
    