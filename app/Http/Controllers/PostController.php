<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $posts = DB::table('posts')
            // ->select('id', 'title', 'content', 'created_at')
            ->get();

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
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $content = $request->content;

        DB::table('posts')->insert([
            'title' => $title,
            'content' => $content,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = DB::table('posts')
            // ->select('id', 'title', 'content', 'created_at')
            ->where('id', '=', $id)
            ->first();

        $view_data = [
            'post' => $posts,
        ];
        return view('posts.show', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = DB::table('posts')
            ->where('id', '=', $id)
            ->first();

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
        $title = $request->title;
        $content = $request->content;

        DB::table('posts')
            ->where('id', $id)
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
        //
    }
}
