<?php

namespace App\Http\Controllers;

use App\Models\like;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(like $like, Post $post)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\like  $like
     * @return \Illuminate\Http\Response
     */
    public function edit(like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(like $like)
    {
        //
    }

    public function like(Post $post, Request $request)
    {
        $like = new Like();
        $like->post_id = $post->id;
        $like->ip = $request->ip();

        if (Auth::check()) {
            $like->user_id = Auth::user()->id;
        }

        $like->save();
        return back();
    }

    public function unlike(Post $post, Request $request)
    {
        $user = $request->ip();
        $like = Like::where('post_id', $post->id)->where('ip', $user)->first();
        $like->delete();
        return back();
    }
}
