<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::orderByDesc('id')->paginate(20);

    return response()->json([
      'data' => $posts
    ], 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);;
  }

  public function store(Request $request)
  {
    $posts = Post::create($request->all());

    return response()->json([
      'data' => $posts
    ], 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);;
  }

  public function update(Request $request, $id)
  {
    $posts = Post::find($id)->update($request->all());

    return response()->json([
      'data' => $posts
    ], 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);;
  }

  public function destroy(Request $request, $id)
  {
    $post = Post::find($id);
    $post->delete();

    return response()->json([
      'data' => true
    ], 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);;
  }
}
