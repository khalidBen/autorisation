<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\PostStoreRequest;
use Illuminate\Auth\Access\AuthorizationException;

class PostController extends Controller
{
    public function create()
    {
        // Gate::authorize('create-post', Post::class);
        // return view('post.new');

        //dd(Auth::user()->cannot('create',Post::class));

        $this->authorize('create', Post::class);
        return "ok";
    }

    public function store(PostStoreRequest $request)
    {
        Post::create($request->all());
        return redirect('/post');
    }
    public function index()
    {
        $posts = Post::all();
        return view('post.posts', ["posts" => $posts]);
    }
}
