<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\Category;

class ThreadController extends Controller
{
    public function create()
    {
    	$categories = Category::get();
        return view('thread-add',compact('categories'));
    }

    public function store(Request $request)
    {
        $thread = new Thread;
        $thread->name = $request->name;
        $thread->category_id = $request->category;
        $thread->description = $request->description;
        $thread->status = 1;
        $thread->save();

        return redirect('/');;
    }
}
