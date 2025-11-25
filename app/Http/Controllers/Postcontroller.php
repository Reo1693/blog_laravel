<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function home() {
        $title = "ReoBlogs";
        $posts=json_decode(json_encode([
            ['id'=> 1, 'title' => 'Post 1','content' => 'Content of Post 1'],
            ['id'=> 2, 'title' => 'Post 2','content' => 'Content of Post 2']
        ]));
        return view('templates.index' , compact('title','posts'));
    }

    public function detail($id) {
        // return "<h1>Detailed blog page with parameter : ".$id." </h1>";
        return view('templates.detail');
    }

    public function oldUrl() {
        return redirect()->route('new-url');
    }

    public function newUrl() {
        return "<h1>New Url Page</h1>";
    }
}
