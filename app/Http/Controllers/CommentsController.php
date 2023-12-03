<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function comments($id)
    {
        $comments = Comment::where('post_id', $id)->get();
        return response()->json($comments);
    }

    public function commentStore(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $comment = new Comment([
            'post_id' => $id,
            'body' => $request->input('body'),
        ]);

        $comment->save();

        return response()->json(['message' => 'Comment created successfully']);
    }

    public function commentDestroy($id, $commentId)
    {
        $comment = Comment::find($commentId);

        if (!$comment) {
            return response()->json(['message' => 'Comment not found'], 404);
        }

        $comment->delete();

        return response()->json(['message' => 'Comment deleted successfully']);
    }
}
