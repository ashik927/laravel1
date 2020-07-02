<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view("pages.home");
    }
    public function course(){
        return view("pages.courses");
    }
    public function page(){
        return("hello");
    }
    public function news(){
        return view("pages.news");
    }
    public function contact(){
        return view("pages.contact");
    }
}
