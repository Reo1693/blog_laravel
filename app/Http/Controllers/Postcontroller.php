<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function home() {
        $title = "ReoBlogs";
        return view('templates.index' , compact('title'));
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
