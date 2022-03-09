<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index () {
        return redirect()->route("comics.index");
    }
    
    public function article () {
        return view("article");
    }

    public function shop () {
        return view("shop");
    }

    public function support () {
        return view("support");
    }

    public function who () {
        return view("who");
    }
}
