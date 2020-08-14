<?php

namespace App\Http\Controllers;

use App\Post;
use App\Property;
use Illuminate\Http\Request;
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
        return view('post.index', [
            'properties' => Property::latest()->take(3)->get(),
            'posts' => Post::latest()->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumnail' => 'required|file',
            'author' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category' => 'required',
            'tag' => 'required',
        ]);

        $name = $request->thumnail->getClientOriginalName();
        $request->thumnail->storeAs('thumnails', $name, 'public');

        Post::create([
            'thumnail' => $name,
            'author' => $request->author,
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'category' => $request->category,
            'tag' => $request->tag,
        ]);

        return redirect('thankyou');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post,
            'properties' => Property::latest()->take(3)->get(),
            'posts' => Post::latest()->take(5)->get(),
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'thumnail' => 'required|file',
            'author' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category' => 'required',
            'tag' => 'required',
        ]);

        if (DB::table('posts')->where('thumnail', $post->thumnail)->exists()) {
            Storage::delete('public/thumnails/'.$post->thumnail);
        }
        $name = $request->thumnail->getClientOriginalName();
        $request->thumnail->storeAs('thumnails', $name, 'public');

        $post->update([
            'thumnail' => $name,
            'author' => $request->author,
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'category' => $request->category,
            'tag' => $request->tag,
        ]);

        return redirect('thankyou');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete('/public/thumnails/'.$post->thumnail);

        $post->delete();

        return redirect('thankyou');
    }
}
