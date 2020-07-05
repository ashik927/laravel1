<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Post;

class WebsiteController extends Controller
{
    public function index(){
        $posts= Post::all();
        return view("pages.home",compact("posts"));
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
    public function about(){
        return view("pages.about");
    }
    public function admin(){
        $posts=Post::all();

        return view("pages.admin",compact("posts"));
    }
}
