<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function Laravel\Prompts\select;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check()) {
            # code...
            return redirect('login');
        }

        $posts = Post::active()->get(); //jika kita ingin menampilkan soft deletes pake scope 'withTrashed()'

        $view_data = [
            'posts' => $posts
        ];


        return view('posts.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            # code...
            return redirect('login');
        }

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            # code...
            return redirect('login');
        }

        $title = $request->title;
        $content = $request->content;

        Post::create([
            'title' => $title,
            'content' => $content,
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ]);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!Auth::check()) {
            # code...
            return redirect('login');
        }

        $posts = Post::with('comments')
            // ->select('id', 'title', 'content', 'created_at')
            ->where('id', $id) //where('id', '=', $id)
            ->first();
        $comments = $posts->comments()->limit(2)->get();

        $view_data = [
            'post' => $posts,
            'comments' => $comments
        ];
        return view('posts.show', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Auth::check()) {
            # code...
            return redirect('login');
        }

        $posts = Post::where('id', $id)->first();

        $view_data = [
            'post' => $posts,
        ];

        return view('posts.edit', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Auth::check()) {
            # code...
            return redirect('login');
        }

        $title = $request->title;
        $content = $request->content;

        Post::where('id', $id)
            ->update([
                'title' => $title,
                'content' => $content,
                'updated_at' => now()
            ]);

        return redirect("posts/{$id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::check()) {
            # code...
            return redirect('login');
        }

        Post::where('id', $id)
            ->delete();

        return redirect("posts");
    }
}
