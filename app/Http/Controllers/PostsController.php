<?php

namespace App\Http\Controllers;

use App\Models\Post;
use function Symfony\Component\String\u;

class PostsController extends Controller
{
    public function index()
    {
        $posts=Post::orderBy('created_at','DESC')->get();
        $data = ['posts'=>$posts];
        return view('admin.posts.index',$data);
    }

    public function show($id)
    {
        $data = ['id' => $id];

        return view('posts.show', $data);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $data = ['post' => $post];
        return view('admin.posts.edit', $data);
    }
}
