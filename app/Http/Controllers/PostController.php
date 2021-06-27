<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use App\Models\{Post, Category, Tag};
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([
            'index', 'show'
        ]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->Paginate(6),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create', [
            'post' => new Post(),
            'categories' => Category::get(),
            'tags' => Tag::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {   
        // Validasi gambar
        $request->validate([
            'thumbnail' => 'image|mimes:jpeg, jpg, png, svg|max:2048',
        ]);

        $attr = $request->all();
        
        $slug = Str::slug(request('title'));
        $attr['slug'] = $slug;
        
        // Jika thumbnail tidak ada otomatis null
        $thumbnail = request()->file('thumbnail') ? request()->file('thumbnail')->store("images/posts") : null;
        
        // Mengambil category id dan thumbnail
        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnail;
        $attr['location'] = $request->location;

        // Create new post
        $post = auth()->user()->posts()->create($attr);

        // Menyimpan tags.
        $post->tags()->attach(request('tags'));

        session()->flash('success', 'The post was created');
        
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $posts = Post::where('category_id', $post->category_id)->latest()->limit(4)->get();

        return view('posts.show', compact('post', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post,
            'categories' => Category::get(),
            'tags' => Tag::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        // Policy
        $this->authorize('update', $post);

        // Validasi gambar
        $request->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        // Hapus thumbnail lama jika diupdate
        if (request()->file('thumbnail')) {
            Storage::delete($post->thumbnail);
            $thumbnail = request()->file('thumbnail')->store("images/posts");
        } else {
            $thumbnail = $post->thumbnail;
        }

        $attr = $request->all();
        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnail;

        $post->update($attr);
        $post->tags()->sync(request('tags'));
        
        session()->flash('success', 'The post was updated');
        
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post); 

        Storage::delete($post->thumbnail);
        $post->tags()->detach();
        $post->delete();
        session()->flash('error', 'The post was destroyed');
    
        return redirect('posts');
    }
}
