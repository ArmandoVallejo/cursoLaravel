<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::find(2);
        $category = Category::find(1);
        dd($category->posts);
        //$post->delete();

        // $post->update([
        //     'title' => 'Updated title',
        //     'slug' => 'updated-slug',
        //     'content' => 'Updated content',
        //     'description' => 'Updated description',
        //     'posted' => 'yes',
        //     'image' => 'updated-image.jpg'
        // ]);
        // Post::create(
        //     [
        //         'title' => 'Test title',
        //         'slug' => 'test-slug',
        //         'content' => 'Test content',
        //         'category_id' => 1,
        //         'description' => 'Test description',
        //         'posted' => 'no',
        //         'image' => 'test-image.jpg'
        //     ]
        // );
        return 'Index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
