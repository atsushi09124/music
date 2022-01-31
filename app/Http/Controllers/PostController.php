<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','DESC')->paginate(9);
        return view('posts.index')->with(['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post;

        $post->user_id = Auth::user()->id;
        $post->name = Auth::user()->name;
        $post->main_key = $request->main_key;
        $post->main_scale = $request->main_scale;
        $post->progress_chord = $request->progress_chord;
        $post->body = $request->body;
        $post -> save();

        return redirect()
        ->route('posts.index')
        ->with('flash_message','投稿されました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::where('id',$id)->first();
        $users = User::where('id',$posts->user_id)->first();
        $authUser = Auth::user();
        return view('posts.show',compact('posts','users','authUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        return view('posts.edit',compact('posts'));
        // $contents = Content::findOrFail($id);
        // return view('users.contents.edit',compact('contents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->main_key = $request->main_key;
        $post->main_scale = $request->main_scale;
        $post->progress_chord = $request->progress_chord;
        $post->body = $request->body;
        $post->save();

        return redirect('/posts')->with('flash_message','投稿が更新されました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/posts')->with('flash_message','投稿が削除されました。');
    }
}
