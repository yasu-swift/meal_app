<?php

namespace App\Http\Controllers;

use App\Models\like;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post, Like $like, Request $request)
    {
        $like = new Like();
        $like->post_id = $post->id;
        $like->ip = $request->ip();
        if (Auth::check()) {
            $like->user_id = Auth::user()->id;
        }

        $like->save();
        // 二重送信対策
        $request->session()->regenerateToken();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, Like $like, Request $request)
    {
        $user = $request->ip();
        $like = Like::where('post_id', $post->id)->where('ip', $user)->first();
        $like->delete();
        // 二重送信対策
        $request->session()->regenerateToken();
        return back();
    }
}
