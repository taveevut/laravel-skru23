<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    $data['posts'] = Post::all();

    return view('post.index', $data);
  }

  public function create()
  {
    return view('post.create');
  }

  public function store(Request $request)
  {
    Post::create($request->all());

    return redirect()->route('post.index');
  }

  public function destroy(Request $request, $id)
  {
    $post = Post::find($id);
    $post->delete();

    return redirect()->route('post.index');
  }
}
