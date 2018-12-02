<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Threads;
use App\Category;

class ThreadController extends Controller
{
    public function create()
    {
    	$categories = Category::get();
        return view('forum-add',compact('categories'));
    }

    public function store(Request $request)
    {
        return $request;
    }
}
