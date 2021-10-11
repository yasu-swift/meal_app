<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        $categories = Category::all();
        return view('posts.create', compact('post', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post($request->all());
        $post->category_id = $request->category;
        $post->user_id = $request->user()->id;

        // $file = $request->file('image');
        // $post->image = date('YmdHis') . '_' . $file->getClientOriginalName();

        // // トランザクション開始
        // DB::beginTransaction();
        // try {
        //     // 登録
        //     $post->save();

        //     // 画像アップロード
        //     if (!Storage::putFileAs('images/posts', $file, $post->image)) {
        //         // 例外を投げてロールバックさせる
        //         throw new \Exception('画像ファイルの保存に失敗しました。');
        //     }

        //     // トランザクション終了(成功)
        //     DB::commit();
        // } catch (\Exception $e) {
        //     // トランザクション終了(失敗)
        //     DB::rollback();
        //     return back()->withInput()->withErrors($e->getMessage());
        // }

        // return redirect()
        //     ->route('posts.show', $post);

        $file = $request->file('image');
        $post->image = self::createFileName($file);

        // トランザクション開始
        DB::beginTransaction();
        try {
            // 登録
            $post->save();
            // 画像アップロード
            if (!Storage::putFileAs('images/posts', $file, $post->image)) {
                // 例外を投げてロールバックさせる
                throw new \Exception('画像ファイルの保存に失敗しました。');
            }
            // トランザクション終了(成功)
            DB::commit();
        } catch (\Exception $e) {
            // トランザクション終了(失敗)
            DB::rollback();
            return back()->withInput()->withErrors($e->getMessage());
        }
        return redirect()
            ->route('posts.show', $post)
            ->with('notice', '記事の投稿に成功しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $categories = Category::all();

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function createFileName($file)
    {
        return date('YmdHis') . '_' . $file->getClientOriginalName();
    }
}
