<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $acceptHeader = $request->header('Accept');

        if ($acceptHeader === 'application/json') {

            $posts = Post::OrderBy("id", "DESC")->paginate(10);

            $outPut = [
                "message" => "posts",
                "result" => $posts
            ];

            return response()->json($posts, 200);
        } else {
            return response('Not Acceptable!', 406);
        }
    }

    public function store(Request $request)
    {
        $acceptHeader = $request->header('Accept');

        if ($acceptHeader === 'application/json') {
            $contentTypeHeader = $request->header('Content-Type');

            if ($contentTypeHeader === 'application/json') {
                $post = Post::create($request->all());
                return response()->json($post, 200);
            } else {
                return response('Unsupported Media Type', 415);
            }
        } else {
            return response('Not Acceptable!', 406);
        }
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        if (!$post) {
            abort(404);
        }
        return response()->json($post, 200);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $post = Post::find($id);

        if (!$post) {
            abort(404);
        }

        $post->fill($input);
        $post->save();

        return response()->json($post, 200);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if (!$post) {
            abort(404);
        }

        $post->delete();
        $message = [
            "message" => "Deleted SUccessfully",
            'post_id' => $id
        ];

        return response()->json($message, 200);
    }
}