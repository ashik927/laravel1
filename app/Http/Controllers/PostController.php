<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function store(Request $r){
        $article= new Post;

        $title=$r->title;
        $description=$r->description;

        $article->title=$title;
        $article->description=$description;

        $article->save();

        return back()->with('success','post addes success');
    }
    public function single($id){
        $post=Post::find($id);
        return view("pages.single",compact("post"));
    }
    public function delete(Request $r){
        $id=$r->id;
        $post=Post::find($id);
        $post->delete();
        return back()->with('success','post delete success');
    }
}