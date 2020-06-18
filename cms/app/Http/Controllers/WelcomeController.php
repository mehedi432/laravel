<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function blog()
    {
        $latest = DB::table('posts')->latest('created_at', 'desc')->first();
        $latestTitle = $latest->title;
        $splittedTitle = explode(' ', $latestTitle);
        $category = DB::table('categories')->find($latest->category_id);

        return view('front.welcome')
            ->with('posts', Post::paginate(12))
            ->with('post', $latest)
            ->with('splitTitle', $splittedTitle)
            ->with('category', $category);
    }

    public function business()
    {
        return view('front.business.index')
            ->with('posts', Post::all());
    }

    public function show($id)
    {
        $post = Post::findorfail($id);
        $category = DB::table('categories')->find($post->category->id);

        return view('front.single')->with('post', $post)->with('category', $category);
    }
}
