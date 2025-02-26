<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function welcome() {
        $news = DB::table('posts')->get();
        return view('welcome')->with('news', $news);
    }
}
