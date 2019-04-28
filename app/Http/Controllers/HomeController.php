<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_article = Blog::latest('id')->get(); 
        return view('home', compact('all_article'));
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('home_detail',compact('blog'));
    }
}
