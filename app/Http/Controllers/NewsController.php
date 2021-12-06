<?php

namespace App\Http\Controllers;

use App\Models\CategoryJob;
use App\Models\CategoryPost;
use App\Models\Job;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category')->paginate(5);
        return view('admin.news.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryPost::all();
        return  view('admin.news.add', compact('categories'));
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
            'title' => 'required|min:10',
            'image' => 'required',
            'content' => 'required'
        ]);

        $model = new Post();
        $model->fill($request->all());
        if ($request->hasFile('image')){
            $fileName = rand(0,99).$request->image->getClientOriginalName();
            $path = $request->image->storeAs('public/images/posts', $fileName);
            $model->image = str_replace('public/', '', $path);
        }
        $model->save();
        return redirect(route('news'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategoryPost::all();
        $post = Post::find($id);
        return view('admin.news.edit', compact('category', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Post::find($id);
        $model->fill($request->all());
        if ($request->hasFile('image')){
            $fileName = rand(0,99).$request->image->getClientOriginalName();
            $path = $request->image->storeAs('public/images/posts', $fileName);
            $model->image = str_replace('public/', '', $path);
        } else{
            unset($request->image);
        }
        $model->save();
        return redirect(route('news'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect(route('news'));
    }
    public function listPost()
    {
        $posts = Post::with('category')->paginate(6);
        return  view('client.new.index', compact('posts'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('client.new.detail', compact('post'));

    }
}
