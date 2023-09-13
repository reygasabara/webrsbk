<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();

    foreach ($posts as $post) {
        $carbon = Carbon::parse($post->updated_at);
        $carbon->setTimezone('Asia/Shanghai');

        $date = $carbon->translatedFormat('j F Y');
        $time = $carbon->translatedFormat('H:i');

        $post->formatted_date = $date . ', pukul ' . $time;
    }
        return view('dashboard.post.indexpost', [
            'berita' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'berita' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_foto' => 'nullable',
        ]);

        $path = null;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/img');
        }

        $validatedData['id_user'] = auth()->user()->id;
        $validatedData['foto'] = $path;
        // dd($validatedData);

        Post::create($validatedData);        
        return redirect('/dashboard/post')->with('success', 'Berita telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
    $carbon = Carbon::parse($post->updated_at);
    $carbon->setTimezone('Asia/Shanghai');

    $date = $carbon->translatedFormat('j F Y');
    $time = $carbon->translatedFormat('H:i');

    $post->formatted_date = $date . ', pukul ' . $time;

        return view('dashboard.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.post.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'judul' => 'required|max:255',
            'berita' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_foto' => 'nullable',
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules); 

        $path = null;

        if($post->foto) {
            $path = $post->foto;
        }

        if ($request->hasFile('foto')) {
            if ($path != null) {
                Storage::delete($path);
            }

            $path = $request->file('foto')->store('public/img');
        }
        $validatedData['id_user'] = auth()->user()->id;
        $validatedData['foto'] = $path;

        Post::where('id', $post->id)->update($validatedData);        
        return redirect('/dashboard/post')->with('success', 'Berita telah diedit');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->foto != null) {
            Storage::delete($post->foto);
        }

        Post::destroy($post->id);        
        return redirect('/dashboard/post')->with('success', 'Berita telah dihapus');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Post::class, 'slug', $request['title']);
        return response()->json(['slug' => $slug]);
    }
}
