<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function home() {
        return "<h1>Welcome to my blog home page</h1>";
    }

    public function detail($id) {
        return "<h1>Detailed blog page with parameter : ".$id." </h1>";
    }

    public function oldUrl() {
        return redirect('/new-url');
    }

    public function newUrl() {
        return "<h1>New Url Page</h1>";
    }
}
