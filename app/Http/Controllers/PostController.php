<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PostController extends Controller
{
    public function createPost(Request $request){
        $incomingfields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]) ;
        $incomingfields['title'] = strip_tags($incomingfields['title']);
        $incomingfields['body'] = strip_tags($incomingfields['body']);
        $incomingfields['user_id'] = auth()->id();
        Post::create($incomingfields);
        return redirect('/');


    }
}
